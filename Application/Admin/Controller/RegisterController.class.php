<?php
namespace Admin\Controller;
use Think\Controller;
class RegisterController extends Controller {
  public function index()
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
      $this->error('该邮箱已被注册,请直接用此邮箱登陆!');
    }

    $affect_id = $user->add($data);
    $code = md5($data['username'].$data['password'].$data['email']);

    $coding = '?code='.$code.'&time='.time().'&email='.$data['email'];
    $url = C('DOMAIN_NAME').'/admin/register/email_validata'.$coding;
    echo $url;
    $content = '<div>您好！<br><br>感谢您在zoohang（<a href="http://www.zoohang.com/" target="_blank">http://www.zoohang.com</a>）注册帐户！<br><br>帐户需要激活才能使用，赶紧激活成为zoohang正式的一员吧:)<br><br>点击下面的链接立即激活帐户(或将网址复制到浏览器中打开)：<br><a href="'.$url.'" target="_blank">'.$url.'</a></div>';
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
        $this->success('邮件发送成功!',U('Login'));
    }else{
        $this->error('发送失败,请重试!');
    }

  }

  public function email_validata()
  {
    $data['email'] = I('get.email');
    $data['code'] = I('get.code');
    $time = I('get.time');
    $email = M('email_validata');
    $res = $email->where($data)->find();
    if($res){
        
        $this->success('验证成功!');
    }else{
        $this->error('无效链接!');
    }
  }

}