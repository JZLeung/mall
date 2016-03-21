<?php
namespace Home\Controller;
use Think\Controller;
class ItemsController extends Controller {
    public function index($id = 0){
        //echo $id;
        if (strlen($id) != 24) {
            $data = null;
        }else{
            $items = M('items');
            $data['_id'] = $id;
            try {
                $data = $items->where($data)->find();
                $data['prices'] = $this->getPrices($data['id']);
            } catch (Exception $e) {
                $data = $e;
            }
        }
        
        
        /*foreach($datas as $k => $v){
            $data = $datas[$k];
        }*/
        $this->assign('data', $data);
        $this->display('test');
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

    public function getPrices($id){
        $sku = M('sku');
        $d = $sku->where(array('id'=>$id))->select();
        for ($i=0; $i < count($d); $i++) { 
            $p[$d[$i]['name']]['price'] = $d[$i]['price'];
            $p[$d[$i]['name']]['stock'] = $d[$i]['stock'];
        }
        return $p;
    }
}