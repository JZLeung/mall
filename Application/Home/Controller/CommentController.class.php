<?php
namespace Home\Controller;
use Think\Controller;
class CommentController extends CommonController {
	public function add(){
		$id = I('post.id');
		$oid = I('post.oid');
		$index = I('post.index');
		//$comment = ;
		$items = M('items');
		$order = M('order');

		//修改订单中的商品为已评论
		$updateOrder["items.".$index.".comment"] = true;
		$res = $order->where(array('_id'=>$oid))->save($updateOrder);
		//添加评论至商品中
		$content['content'] = I('post.comment');
		//$content['stars'] = I('post.stars');
		$content['username'] = $this->user['username'];
		$content['time'] = time();
		$update['comment'] = array('addToSet', $content);
		$res = $items->where(array('_id' => $id))->save($update);
		$msg['code'] = 'ok';
		$msg['msg'] = $res;
		$this->ajaxReturn($msg);
	}
	
}