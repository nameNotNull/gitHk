<?php
namespace Home\Model;
use Think\Model;

class CommentModel {
	public function getComment($pid){
		$comment = M("comment");
		$res =  $comment->where(array('pid'=>$pid))->select();
		return $res;
	}
	public function delectComment($id){
		$comment = M("comment");
		$res =  $comment->where(array('id'=>$id))->delect();
		return $res;
	}
	public function addComment($data){
		if($data['vuser'] == null){
			
		}
		$comment = M("comment");
		$res =  $comment->where(array('id'=>$id))->delect();
		return $res;
	}
}