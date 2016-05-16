<?php
namespace Home\Controller;
use Think\Controller;
class CommentController extends Controller {
	public function add(){
		$id = I('post.id');
		$comment = I('post.comment');
		$items = M('items');
		$update['comment'] = array('addToSet', $comment);
		$res = $items->where(array('_id' => $id))->save($update);
		$msg['code'] = 'ok';
		$msg['msg'] = $res;
		$this->ajaxReturn($msg);
	}
	
}