<?php
namespace Home\Model;
use Think\Model;
class PublishModel {
	public function addMsg($data){
		$user = M("vuser");
		$vuser_model = D('Vuser');
		$res = $user->where(array('vtype'=>$data['vtype']))->select();
		if(empty($res)){
			$data['vtype'] = 0;
		}
		$data['vuser'] = $vuser_model->getVuser($data['vtype']);
		$addmsg = M("publish");
		$res = $addmsg -> add($data);
		return $res;
		
	}
	public function getMsg(){
		$user = M("publish");
		$res =  $user->select();
		return $res;
	
	}
	
	public function getMsgbyId($id){
		$user = M("publish");
		$res =  $user->where(array('id'=>$id))->find();
		return $res;
	
	}
	public function delectMsg($id){
		$user = M("publish");
		$res =  $user->where(array('id'=>$id))->delect();
		return $res;
	
	}
	
}