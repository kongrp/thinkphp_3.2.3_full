<?php
namespace User\Logic;
use User\Model\UserModel;
class UserLogic extends UserModel{
	public function getlistByName($name){

		$map['name'] = $name;
		$data = $this->where($map)->find();
		return $data;

	}
	public function getAllLists(){
		$datas = $this->select();
		return $datas;

	 function add($List){
			$data = $this->create($List);
			$data = $this->add();
			return $data;
		}
	}
}