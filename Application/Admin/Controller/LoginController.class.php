<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller
{
	public function index()
	{
		session(null);
		$this->display();
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
			$this->success('登陆成功！', U('Admin/Index/index'));
		}else{
			$this->error('验证失败，请重新输入！');
		}
	}
}
