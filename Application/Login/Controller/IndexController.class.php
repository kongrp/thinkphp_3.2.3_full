<?php
namespace Login\Controller;
use Think\Controller;
use User\Logic\UserLogic;

class IndexController extends Controller{
	public function indexAction(){
		$this->display();
	}

	public function loginAction(){
		//获取系统输入的用户名和密码
		$userName = I('post.name');
		$userPassword = I('post.password');

		//抓取用户名
		$UserL = new UserLogic();
		$user = $UserL->getListByName($userName); 
		dump($user);

		//判断是否存在该用户
		if($user == null){
			echo "The user is not exit.";
			exit();
		}

		//判断密码正确性
		if($userPassword != $user['password']){
			echo "The password is wrong!";
			exit();
		}

		//session userId
		session('userId',$user['id']);
		
		//跳转至首页
		$this->success("操作成功",U('Home/Index/index'));
	
	}
}