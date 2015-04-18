<?php
namespace Home\Model;
use Think\Model;

class LikeModel {
	public function getNum($pid){
		$like = M("like");
		$res =  $like->where(array('pid'=>$pid))->order("ctime desc")->select();
		return $res;
	}
	public function delectComment($data){
		$like = M("like");
		
		$res =  $like->where($data)->delect();
		return $res;
	}
	
	
	public function addLike($data){
		$like = M('like');
		$publish_model = D('Publish');
		$comment_model = D('comment');
		if($data['pid']!=0){
			$res_msg = $publish_model->getMsgbyId($data['pid']);
		}
		if($data['cid']!=0){
			$res_msg = $comment_model->where(array('id'=>$data['id']))->find();
		}
		//$re = 
		$data['touser'] = $res_msg['user'];
		$data['tovuser'] = $res_msg['vuser'];
		$res =  $like->add($data);
		return $res;
	}
}