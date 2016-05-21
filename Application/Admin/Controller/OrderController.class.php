<?php
namespace Admin\Controller;
use Think\Controller;
class OrderController extends CommonController {
	public function getAllOrders($statu, $user){
		$where = array();
		if ($statu != 'null') {
			$where['statu'] = (int)$statu;
		}
		if ($user != '') {
			$where['uid'] = $user;
		}
		/*if ($statu == '') {
			return self::getOrdersDetail(M('order')->select());
		}else{
			return self::getOrdersDetail(M('order')->where(array('statu'=>(int)$statu))->select());
		}*/
		return self::getOrdersDetail(M('order')->where($where)->select());
	}


	public function getOrdersDetail($orders){
		$statuText = array('等待付款','已付款','等待收货','已完成','已取消');
		$statuText['-1'] = '已提交取消订单申请，请等待回复';
		$statuText['-2'] = '订单已取消';
		$items = A('items');
		$user = M('user');
		for ($i=0, $count1 = count($orders); $i < $count1; $i++) { 
			$tmp = $orders[$i]['items'];
			$orders[$i]['items'] = $items->getItemsByCart($tmp);
			$orders[$i]['statuText'] = $statuText[$orders[$i]['statu']];
			$orders[$i]['user'] = $user->where(array('_id'=>$orders[$i]['uid']))->find();
		}
		return $orders;
	}

	public function change(){
		$id = I('post.oid');
		$opt = I('post.statu');
		$update['statu'] = (int)$opt;//待确认取消
		$update['endtime'] = time();//待确认取消
		$msg['msg'] = M('order')->where(array('_id' => $id))->save($update);
		$this->ajaxReturn($msg);
	}

	public function getOrderFront(){
		$oid = I('post.oid');
		$order = self::getDetail($oid);
		/*$statuText = array('等待付款','已付款','等待收货','已完成','已取消');
		$statuText['-1'] = '已提交取消订单申请，请等待回复';
		$statuText['-2'] = '订单已取消';
		$items = A('items');
		$user = M('user');

		$order = M('order')->where(array('_id'=>$oid))->find();
		$order['items'] = $items->getItemsByCart($order['items']);
		$order['statuText'] = $statuText[$orders[$i]['statu']];
		$order['user'] = $user->where(array('_id'=>$orders[$i]['uid']))->find();*/

		$this->ajaxReturn($order);
	}

	public function getDetail($oid){
		$statuText = array('等待付款','已付款','等待收货','已完成','已取消');
		$statuText['-1'] = '已提交取消订单申请，请等待回复';
		$statuText['-2'] = '订单已取消';
		$items = A('items');
		$user = M('user');
		$order = M('order')->where(array('_id'=>$oid))->find();
		$order['items'] = $items->getItemsByCart($order['items']);
		$order['statuText'] = $statuText[$order['statu']];
		$order['user'] = $user->where(array('_id'=>$orders[$i]['uid']))->find();
		return $order;
	}

	public function detail(){
		$oid = I('get.o');
		$order = self::getDetail($oid);
		$address = M('address')->where(array('_id' => $order['address']))->find();
		$this->assign('order', $order);
		$this->assign('address', $address);
		$this->display();
	}
}