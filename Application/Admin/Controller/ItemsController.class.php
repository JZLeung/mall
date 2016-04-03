<?php
namespace Admin\Controller;
use Think\Controller;
class ItemsController extends Controller {

    public function index(){
        $postData = I('post.data');
        //$postData['name'] = $postData['title'];
        $items = M('items');
        $id = (int)$postData['id'];
        //echo $id;
        if ($id == 0) {
            $id = findLastId('items', $items);
            $postData['id'] = (int)$id;
            $res = $items->data($postData)->add();
            //$res['id'] = $id;
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
        $items = M('items');
        $id = I('post.id');
        //echo $id;
        if ($id != 0) {
        	//echo "Edit";
            $postData['id'] = (int)$postData['id'];
            $res = $items->where(array('_id' => $id))->save($postData);
            $this->ajaxReturn($res);
        }else{
        	//echo "New";
        	$id = findLastId('items', $items);
            $postData['id'] = (int)$id;
            $res = $items->data($postData)->add();
            $this->ajaxReturn($res);

        }
    }

    public function getItem($id){
        header("Content-Type: text/html; charset=utf-8");
    	$item = M('items');
    	echo "<pre>";
    	$data = $item->where(array('_id' =>$id))->find();
    	print_r($data);
    }

    public function delItem(){
        $id = I('post.id');
        $item = M('items');
        $res = $item->where(array('_id' =>$id))->delete();
        $this->ajaxReturn($res);
    }
}
