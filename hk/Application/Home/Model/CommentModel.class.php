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
	/*
	 * 微博id或者被回复的评论id，session中的用户名
	 * 有微博id时认为是评论楼主的
	 */
	public function addComment($data){
		$publish_model = D('Publish');
		$res = $publish_model->getMsgbyId($data['pid']);
		if($res['user']==$data['user']){
			$data['vuser'] = $res['vuser'];
		}else{
			
		}
		$comment = M("comment");
		$res =  $comment->where(array('id'=>$id))->delect();
		return $res;
	}
}