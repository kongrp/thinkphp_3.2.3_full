<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller{
		public function indexAction(){
			echo "welcome!";

		$this->assign("userId",session("userId"));
		$this->display();

		}
		public function logoutAction(){
		session('userId',null);
		$this->success("注销成功",U('Login/Index/index'));
	}
}