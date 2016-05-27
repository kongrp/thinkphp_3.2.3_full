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
		dump($status);
		//echo $this->getLastSql();
		//判断状态
		if($status==true){
			$this->success("添加成功",U('User/Index/index'));
		}
		else{
			$this->error("操作失败",U('User/Index/index'));
		}

	}

	public function deleteAction(){
		//取ID
		$userId = I('get.id');
		dump($userId);
		//删除deleteinfo($Id)
		$UserL = New UserLogic();
		$status = $UserL->deleteInfo($userId);
		dump($status);
		//判断是否删除成功
		if($status==true){
			$this->success("删除成功",U('User/Index/index'));
		}
		else{
			$this->error("删除失败",U('User/Index/index'));
		}
	}

	public function editAction(){
		//获取用户id
		$userId = I('get.id');
		//获取用户信息getListById()
		$UserL = New UserLogic();
		$user = $UserL->getListById($userId);
		//传给前台
		$this->assign('user',$user);
		//显示display('add')
		$this->display('add');
	}
}