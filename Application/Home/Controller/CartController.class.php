<?php
namespace Home\Controller;
use Think\Controller;
class CartController extends Controller {
    public function index(){
    }

    public function add(){
    	$user = session('?user') ? session('user') : null ;
    	if ($user) {
            $uid = $user['_id'];
    		$user = M('user')->where(array('_id' => $uid))->find();
            $cartData = I('post.data');
            $userCart = $user['cart'];

            $isExite = self::checkIsInCart($cartData, $userCart);
            if ($isExite) {
                $msg['code'] = 'ok';
                $msg['msg'] = '增加一件相同的';
                $isExite['num'] += 1; 
                $cart['cart'] = array('addToSet', $isExite);
                $res = M('user')->where(array('_id' => $uid))->save($cart);
            }else{
                $cart['cart'] = array('addToSet', $cartData);
                $res = M('user')->where(array('_id' => $uid))->save($cart);
                $msg['code'] = 'ok';
                $msg['msg'] = $res;
            }
    		
    	}else{
    		$msg['code'] = 'error';
    		$msg['msg'] = '请登录再操作';
    	}
        $this->ajaxReturn($msg);
    }
    //检查购物车中是否存在，存在则商品数量加一
    private function checkIsInCart($postCart, $userCart){
        $id = $postCart['id'];
        $opt = $postCart['opt'];
        $length = count($userCart);
        for ($i=0; $i < $length; $i++) { 
            $value = $userCart[$i];
            if ($value['id'] == $id && $value['opt'] == $opt) {
                return $value;
            }
        }
        return null;
    }
    
}
