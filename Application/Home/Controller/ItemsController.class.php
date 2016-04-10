<?php
namespace Home\Controller;
use Think\Controller;
class ItemsController extends Controller {
    public function index($id){
        $items = M('items');
        if (strlen($id) == 24) {
            try {
                $data = $items->where(array('_id' => $id))->find();
                if ($data['prices'] == null) {
                    $prices = $this->getPrices((int)$id);
                }else {
                    $prices = $data['prices'];
                }
            } catch (Exception $e) {
                $data = null;
            }
        }else{
            try {
                $data = $items->where(array('id' => (int)$id))->find();
                if ($data['prices'] == null) {
                    $prices = $this->getPrices((int)$id);
                }else {
                    $prices = $data['prices'];
                }

            } catch (Exception $e) {
                $data = null;
            }
        }

        if ($data) {
            $data['detail'] = htmlspecialchars_decode($data['detail']);
        }

        $catalog = A('Catalog')->getItemCatalog($data['lm1'],$data['lm2']);

        $this->assign('data', $data);
        $this->assign('prices', $prices);
        $this->assign('catalog', $catalog);
        $this->assign('id', $id);
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
