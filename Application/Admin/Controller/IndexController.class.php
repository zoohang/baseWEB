<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    
    public function __construct()
    {
    	parent::__construct();
    	//echo U('Admin/Login/index');
    	//print_r(I('session.'));
    	if(empty(session('username'))){
    		$this->redirect('Login/index');
    	}
    }

    public function logout()
    {
    	session(null);
    	$this->redirect('Login/index');
    }

    public function update_pwd()
    {
        if(session('is_login'))
        {
            $old_pass = I('post.password','','md5');
            $new_pass = I('post.newpass','','md5');
            $repass = I('post.repass','','md5');
            if($newpass != $repass)
            {
                $this->error('两次输入的密码不一致');
            }
            $where['id'] = session('uid');
            $where['password'] = $old_pass;
            $where['active'] = 1;
            $user = M('user');
            $user_info = $user->where($where)->find();
            if($user_info)
            {
                $affect = $user->where('id='.$user_info['id'])->save(array(
                    'password' => $repass,
                    'login_time' => date('Y-m-d H:i:s', time())
                    ));
                if($affect){
                    $this->success('修改成功,请使用新密码重新登录', U('Admin/Login'));
                }else{
                    $this->error('修改失败,请重试');
                }
            }
        }else{
            $this->error('请先登录在执行操作');
        }
    }

    public function index()
    {
        $user = M('user');
        //$data = $user->where('id=1 AND active=1')->select();
        //print_r($data);
        $this->display();
    }

    public function profile()
    {
    	$this->display();
    }

    public function help()
    {
    	$this->display();
    }

    public function gallery()
    {
    	$this->display();
    }

    public function log()
    {
    	$this->display();
    }

    public function error()
    {
    	$this->display();
    }

    public function table()
    {
    	$this->display();
    }

    public function form()
    {
    	$this->display();
    }


}