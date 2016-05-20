<?php
namespace Home\Controller;
use Think\Controller;
class OrderController extends CommonController {

	//生成订单
	public function generateOrder(){
		$userBD = M('user');
		$orderBD = M('order');
		$where = array('_id' => $this->user['_id']);

		$itemIndexs = I('post.indexs');
		$user = $userBD->where($where)->find();

		$itemBuy = array();
		$itemCart = array();

		$cart = $user['cart'];
		for ($i=0, $count = count($cart), $index = 0; $i < $count; $i++) { 
			if ($i == $itemIndexs[$index]) {
				$itemBuy[] = $cart[$i];
				$index++;
			}else{
				$itemCart[] = $cart[$i];
			}
		}
		/*$msg['buy'] = $itemBuy;
		$msg['still'] = $itemCart;
		$this->ajaxReturn($msg);*/
		try {
			$order['uid'] = $user['_id'];
			$order['items'] = $itemBuy;
			$order['starttime'] = time();
			$order['statu'] = 0;
			$resOrder = $orderBD->data($order)->add();
			//if ($resOrder) {
				$newUser['cart'] = $itemCart;
				$resUser = $userBD->where($where)->save($newUser);
				$msg['code'] = 'ok';
				$msg['msg'] = '创建订单成功';
				$msg['order'] = $resOrder;
		} catch (Exception $e) {
			$msg['code'] = 'error';
			$msg['msg'] = '创建订单失败，请重试';
		}
		$this->ajaxReturn($msg);
	}

	public function checkout(){
		$userBD = M('user');
		$addBD = A('address');
		$where = array('_id' => $this->user['_id']);
		$oid = I('get.o');
		$addresses = $addBD->getAllAddress($this->user['_id']);
		$this->assign('addresses', $addresses);

		$order = M('order')->where(array('_id'=>$oid))->find();
		$items = A('items')->getItemsByCart($order['items']);
		$this->assign('items', $items);
		//print_r($order);

		$this->display();
	}

	public function getOrdersByUid($uid){
		$orders = M('order')->where(array('uid' => $uid,'statu'=>array('neq',0)))->select();
		$statuText = array('等待付款','已付款','等待收货','已完成','已取消');
		$statuText['-1'] = '已提交取消订单申请，请等待回复';
		$statuText['-2'] = '订单已取消';
		for ($i=0, $count1 = count($orders); $i < $count1; $i++) { 
			$tmp = $orders[$i]['items'];
			$orders[$i]['items'] = A('items')->getItemsByCart($tmp);
			$orders[$i]['statuText'] = $statuText[$orders[$i]['statu']];
		}
		return $orders;
	}

	public function success(){
		$oid = I('get.o');
		$orderData = I('post.');
		$orderData['statu'] = 1;
		$order = M('order');
		$res = $order->where(array('_id'=>$oid))->save($orderData);
		$this->display();
	}

	public function getOrderDetail($oid){
		//$oid = I('get.o');
		$order = M('order');
		$statuText = array('等待付款','已付款','等待收货','已完成','已取消');
		$statuText['-1'] = '已提交取消订单申请，请等待回复';
		$statuText['-2'] = '订单已取消';
		$res = $order->where(array('_id'=>$oid))->find();
		$res['items'] = A('items')->getItemsByCart($res['items']);
		$res['statuText'] = $statuText[$res['statu']];
		return $res;
		//$this->assign('order', $res);
		//$this->display();
	}

	public function updateStatu(){
		$id = I('post.id');
		$opt = I('post.opt');
		$update['statu'] = $opt;//待确认取消
		$res = M('order')->where(array('_id' => $id))->save($update);
		$this->ajaxReturn($res);
	}
}