<?php
namespace Admin\Controller;
use Think\Controller;
class ItemsController extends Controller {
    public function add(){
        $postData = I('post.data');
        $postData['name'] = $postData['title'];
        //echo "<pre>";

        //print_r($postData);

        //$skus = $postData['prices'];
        $items = M('items');
        $id = findLastId('items', $items);
        //echo $id;
        $postData['id'] = (int)$id;
        $res = $items->data($postData)->add();
        $this->ajaxReturn($res);
    }
    public function index(){
        $postData = I('post.data');
        //$postData['name'] = $postData['title'];
        $items = M('items');
        $id = (int)$postData['id'];
        echo "<pre>";
        //echo $id;
        if ($id == 0) {
            $id = findLastId('items', $items);
            $postData['id'] = (int)$id;
            $res = $items->data($postData)->add();
            $this->ajaxReturn($res);
        }else{
        	$postData['id'] = $id;
            
            $res = $items->where(array('id' => $id))->save($postData);
            $this->ajaxReturn($res);
        }
    }
    public function index2(){
        $postData = I('post.data');
        //$postData['name'] = $postData['title'];
        $items = M('item_bak');
        $id = (int)$postData['id'];
        if ($id == 0) {
            $id = findLastId('items', $items);
            $postData['id'] = (int)$id;
            $res = $items->data($postData)->add();
            $this->ajaxReturn($res);
        }else{
        	$items->create();
        	$items->id = $id;

            $res = $items->where(array('id'=>$id))->save();
            $this->ajaxReturn($res);
        }
    }

    public function getItem($id = 2){
        header("Content-Type: text/html; charset=utf-8");
    	$item = M('items');
    	echo "<pre>";
    	$data = $item->where(array('id' => (int)$id))->find();
    	print_r($data);
    }

    public function resetItem(){
        $item = M('items');
        $data = $item->where(array('id'=>4))->save($data2);
        $ids = [2,3];
        echo "<pre>";
        for ($i=0; $i < 2; $i++) {
            $id = (int)$ids[$i];
            $data = $item->where(array('id'=>$id))->find();
            $pics = $data['pictures'];
        
            for ($j=0; $j  < count($data['pictures']); $j++) {
                $path = '/mall/Public/'.$pics[$j]['src'];
                $pics[$j]['src'] = $path;
            }
            print_r($pics);
            $data2['score'] = 'set';
            $data2['pictures'] = $pics;
            $res = $item->where(array('id'=>$id))->save($data2);
            print_r($res);
        }
        //$data = $item->where(array('id'=>5))->save($data2);
        /*$prices = $data['prices'];
        for ($i=0; $i < count($prices); $i++) {
            $p = $prices[$i];
            $tmp['price'] = $p;
            $tmp['stock'] = (int)rand()*15;
            $price[] = $tmp;
        }
        $data2['prices'] = $price;
        print_r($prices);
        $data2['score'] = 'set';
        $res = $item->where(array('id'=>5))->save($data2);
        print_r($res);*/
    }

    public function testUpdate(){

    }
}
