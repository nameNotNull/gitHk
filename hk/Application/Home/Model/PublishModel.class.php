<?php
namespace Home\Model;
use Think\Model;
class PublishModel {
	public function addMsg($data){
		$publish_model  = new PublishModel();
		$user = M("vuser");
		$vuser_model = D('Vuser');
		$res = $user->where(array('vtype'=>$data['vtype']))->select();
		if(empty($res)){
			$data['vtype'] = 0;
		}
		$data['vuser'] = $vuser_model->getVuser($data['vtype']);
		var_dump($data);die;
		$res = $user -> add($data);
		return $res;
		
	}
	
}