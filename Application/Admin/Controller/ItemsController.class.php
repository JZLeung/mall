<?php
namespace Admin\Controller;
use Think\Controller;
class ItemsController extends Controller {
    public function index($id = 0){
        $postData = I('post.data');
        $postData['name'] = $postData['title'];
        echo "<pre>";

        print_r($postData);

        //$skus = $postData['prices'];

    }

    public function getItem($id = 2){
    	$item = M('items');
    	echo "<pre>";
    	$data = $item->where(array('id' => (int)$id))->find();
    	print_r($data);
    }

}