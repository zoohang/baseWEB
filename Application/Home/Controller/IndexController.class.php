<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index()
    {
      $this->display();
    }

    public function login()
    {
        $this->display();
    }

    public function doLogin()
    {

    }

    public function register()
    {
        $this->display();
    }

    public function doRegister()
    {

    }

    public function home()
    {
    	$this->display();
    }

    public function about()
    {
    	$this->display();
    }

    public function contact()
    {
    	$this->display();
    }

    public function privacy()
    {
    	$this->display();
    }
}