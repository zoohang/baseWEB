<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller{
	public function index()
	{
		session(null);
		$this->display('login');
	}

	public function doLogin()
	{
		if(!IS_POST){
			$this->error('非法请求');
		}
		$where['username'] = I('post.username');
		$where['password'] = I('post.password', '', 'md5');
		$where['active'] = 1;
		$user = M('user');
		$user = $user->where($where)->find();

		if($user){
			session('uid', $user['id']);
			session('username', $where['username']);
			session('islogin', true);
			session('login_time', date('Y-m-d H:i:s', time()));
			$this->success('登陆成功！', U('Home/Index/index'));
		}else{
			$this->error('验证失败，请重新输入！');
		}
	}

	public function register()
  {
    $this->display();
  }

  public function reg_validate()
  {
    $data['username'] = I('post.username');
    $data['password'] = I('post.password','','md5');
    $data['repass'] = I('post.repass','','md5');
    $data['email'] = I('post.email');
    $data['login_time'] = get_date();
    $data['login_ip'] = get_client_ip();
    $data['create_time'] = get_date();
    $data['active'] = -1;
    if($data['password'] != $data['repass']){
        $this->error('两次输入的密码不一致!');
    }

    $user = M('user');
    $name_exists = $user->where(array('username'=> $data['username']))->find();
    if($name_exists){
      $this->error('用户名已存在');
    }

    $email_exists = $user->where(array('email'=> $data['email']))->find();
    if($email_exists){
    	p($data['email']);
    	p($email_exists);
      $this->error('该邮箱已被注册,请直接用此邮箱登陆!');
    }

    $affect_id = $user->add($data);
    $code = md5($data['username'].$data['password'].time());

    $coding = '?code='.$code.'&time='.time().'&email='.$data['email'].'&secret='.$affect_id;
    $url = C('DOMAIN_NAME').'/home/login/email_validata'.$coding;
    echo $url;
    $content = '<div>您好！<br><br>感谢您在zoohang（<a href="C(\'DOMAIN_NAME\')" target="_blank">C(\'DOMAIN_NAME\')</a>）注册帐户！<br><br>帐户需要激活才能使用，赶紧激活成为zoohang正式的一员吧:)<br><br>点击下面的链接立即激活帐户(或将网址复制到浏览器中打开)：<br><a href="'.$url.'" target="_blank">'.$url.'</a></div>';
    $affect = sendMail($data['email'], 'xxxx帐户激活邮件', $content);
    if($affect){
        $email = M('email_validata');
        $res = $email->add(array(
            'uid' => $affect_id,
            'code' => $code,
            'status' => 0,
            'create_time' => get_date(),
            'update_time' => get_date(),
            'active' => 1
        ));
        if(!$res){
            $this->error('数据插入失败!');
        }
        //$this->success('邮件发送成功!',U('index'));
        $mail_url = 'http://mail.'.explode('@', $data['email'])[1];
        $this->redirect($mail_url,'注册成功,正在跳转至您的验证邮箱!');
    }else{
        $this->error('发送失败,请重试!');
    }

  }

  public function email_validata()
  {
  	$data['uid'] = I('get.secret');
    $data['email'] = I('get.email');
    $data['code'] = I('get.code');
    $time = I('get.time');
    $email = M('email_validata');
    $res = $email->where($data)->find();
    if($res){
        M('user')->save(array('id'=>$data['uid'], 'active'=> 1));
        M('email_validata')->where($data)->save(array('status'=> 1, 'update_time'=> get_date()));
        $this->success('验证成功!', U('index'));
    }else{
        $this->error('无效链接!');
    }
  }
}