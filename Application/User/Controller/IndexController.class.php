<?php
namespace User\Controller;
use User\Logic\UserLogic;
use Think\Controller;


class IndexController extends Controller{
	public function indexAction(){
		//取值getAllLists()
		$UserL = New UserLogic();
		$users = $UserL->getAllLists();

		//传值assign()
		$this->assign('users',$users);
		//显示display()
		$this->display();
	}

	public function addAction(){
		$this->display();
	}

	public function saveAction(){
		//获取用户输入的信息
		$user = I('post.');
		dump($user);
		//添加add()方法
		$UserL = New UserLogic();
		$status = $UserL->add($user);
		//echo $this->getLastSql();
		//判断状态
		if($status==0){
			$this->success("添加成功",U('User/Index/index'));
		}
		else{
			$this->error("操作失败",U('User/Index/index'));
		}

	}
}