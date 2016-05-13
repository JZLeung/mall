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
				/*if ($resOrder['ok'] == 1) {
					$msg['code'] = 'ok';
					$msg['msg'] = '创建订单成功';
					$msg['order'] = $resOrder;
				}else{
					$msg['code'] = 'error';
					$msg['msg'] = '创建订单失败，请重试';
				}
			}else{
				$msg['code'] = 'error';
				$msg['msg'] = '创建订单失败，请重试';
			}*/
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
		return M('order')->where(array('uid' => $uid))->select();
	}
}