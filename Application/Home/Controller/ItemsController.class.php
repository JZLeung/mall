<?php
namespace Home\Controller;
use Think\Controller;
class ItemsController extends Controller {
    public function index($id = 0){
    	$this->show();
    }
    public function test(){
    	$items = M('items');
    	$datas = $items->select();
    	foreach($datas as $k => $v){
    		$data = $datas[$k];
    	}
    	$this->assign('data', $data);
    	$this->show();
    }
}