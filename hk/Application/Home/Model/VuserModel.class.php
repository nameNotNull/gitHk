<?php
namespace Home\Model;
use Think\Model;

class VuserModel {
	public function getVuser($type = 0 ,$pid){
		$vuser = array();
		if(!empty($pid)){
			$Comment_model = D('Comment');
		}
		$user = M("vuser");
		$res = $user->where(array('vtype'=>$type))->select();
		foreach ($res as $v){
			$vuser[] = $v['vuser'];
		}
		$num = array_rand($vuser);
		return $vuser[$num];
	}
}