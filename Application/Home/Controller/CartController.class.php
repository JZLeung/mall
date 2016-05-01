<?php
namespace Home\Controller;
use Think\Controller;
class CartController extends Controller {
    public function index(){
    }

    public function add(){
        $user = session('?user') ? session('user') : null ;
        if ($user) {
            $index = I('post.index', -1);
            $msg = self::cartAction($user['_id'] ,$index);
        }else{
            $msg['code'] = 'error';
            $msg['msg'] = '请登录再操作';
        }
        $this->ajaxReturn($msg);
    }

    public function reduce(){
    	$user = session('?user') ? session('user') : null ;
    	if ($user) {
            $index = I('post.index', -1);
            $msg = self::cartAction($user['_id'] ,$index, -1);
    	}else{
    		$msg['code'] = 'error';
    		$msg['msg'] = '请登录再操作';
    	}
        $this->ajaxReturn($msg);
    }

    public function remove(){
        $user = session('?user') ? session('user') : null ;
        if ($user) {
            $where = array('_id' => $user['_id']);
            $user = M('user')->where($where)->find();
            $good = self::findCart(I('post.data'), $user['cart']);
            if ($good) {
                $cart['cart'] = array('pull', $good);
                $res = M('Cart')->where($where)->save($cart);
                if ($res['ok'] == 1) {
                    $msg['code'] = 'ok';
                    $msg['msg'] = '删除成功';
                }else{
                    $msg['code'] = 'error';
                    $msg['msg'] = '删除失败，请重试。';
                }
            }else{
                $msg['code'] = 'error';
                $msg['msg'] = '购物车没有该商品';
            }
        }else{
            $msg['code'] = 'error';
            $msg['msg'] = '请登录再操作';
        }
        $this->ajaxReturn($msg);
    }
    //检查购物车中是否存在，存在则商品数量加一
    private function findCartIndex($postCart, $userCart){
        $id = $postCart['id'];
        $opt = $postCart['opt'];
        $length = count($userCart);
        for ($i=0; $i < $length; $i++) { 
            $value = $userCart[$i];
            if ($value['id'] == $id && $value['opt'] == $opt) {
                return $i;
            }
        }
        return -1;
    }
    //查找出当前的购物车中的货物
    private function findCart($postCart, $userCart){
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
    
    private function cartAction($uid, $index = -1, $num = 1){
        $user = M('user')->where(array('_id' => $uid))->find();
        $cartData = I('post.data');
        $userCart = $user['cart'];
        $index = $index == -1 ? self::findCartIndex($cartData, $userCart) : $index;
        if ($index >= 0) {
            $cart['cart.'.$index.'.num'] = array('inc', $num);
            $res = M('user')->where(array('_id' => $uid))->save($cart);
            $msg['code'] = 'ok';
            $msg['msg'] = '该商品已存在购物车中，已再添加一件。';
        }else{
            $cartData['num'] = (int)$cartData['num'];
            $cart['cart'] = array('addToSet', $cartData);
            $res = M('user')->where(array('_id' => $uid))->save($cart);

            $msg['code'] = 'ok';
            $msg['msg'] = '已加入购物车';
        }
        $msg['index'] = $index;
        return $msg;
    }
}
