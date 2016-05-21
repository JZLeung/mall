<?php
namespace Admin\Controller;
use Think\Controller;
class ItemsController extends Controller {

    //添加新商品
    public function add(){
        $postData = I('post.data');
        $items = M('items');
        $id = findLastId('items', $items);
        $postData['id'] = (int)$id;
        $res = $items->data($postData)->add();
        $this->ajaxReturn($res);
    }
    //编辑商品
    public function edit(){
        $postData = I('post.data');
        $items = M('items');
        $id = I('post.id');
        $postData['id'] = (int)$postData['id'];
        $res = $items->where(array('_id' => $id))->save($postData);
        $this->ajaxReturn($res);
    }
    //删除商品
    public function delItem(){
        $id = I('post.id');
        $item = M('items');
        $res = $item->where(array('_id' =>$id))->delete();
        $this->ajaxReturn($res);
    }
    //获取商品信息
    public function getItem($id){
        $items = M('items');
        $data = $items->where(array('_id'=>$id))->find();
        $data['detail'] = str_replace('data-lazyload', 'src', $data['detail']);
        //$this->assign('data',  $data);
        return $data;
    }
    //根据一组ID获取商品
    public function getItemsByIdGroup($ids){
        $items = M('items');
        for ($i=0, $count = count($ids); $i < $count; $i++) { 
            $data[] = $items->where(array('_id'=>$ids[$i]))->find();
            
        }
        return $data;
    }
    //根据目录获取商品
    public function getItems($lm1, $lm2){
        if ($lm1 == -1) {
            return self::getAllItem();
        }else{
            $items = M('items');
            if ($lm2 == -1) {
                $where = array('lm1' => $lm1);
            }else{
                $where = array('lm1' => $lm1, 'lm2' => $lm2);
            }
            return $items->where($where)->select();
        }
    }
    //获取所有商品
    public function getAllItem(){
        $items = M('items');
        return $items->select();
    }

    public function getItemsFront(){
        $lm1 = I('post.lm1');
        $lm2 = I('post.lm2');
        $all = self::getItems($lm1, $lm2);
        $this->ajaxReturn($all);
    }
    
    public function getItemsByCart($cart){
        $item = M('items');
        for ($i=0, $length = count($cart); $i < $length; $i++) { 
            $temp = $item->where(array('_id' => $cart[$i]['id']))->find();
            $opts = split(',', $cart[$i]['opt']);
            $opt = array();
            foreach ($opts as $key => $value) {
                $opt[] = $temp['attr'][$key]['value'][$value];
            }
            $cart[$i]['optname'] = join($opt, ',');
            $cart[$i]['item'] = $temp;
            $cart[$i]['price'] = $temp['prices'][$cart[$i]['opt']]['price'];
        }
        return $cart;
    }
}
