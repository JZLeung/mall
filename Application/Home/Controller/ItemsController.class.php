<?php
namespace Home\Controller;
use Think\Controller;
class ItemsController extends Controller {

    //商品详情页
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
    //测试用
    public function test(){
    	$items = M('items');
    	$datas = $items->select();
    	foreach($datas as $k => $v){
    		$data = $datas[$k];
    	}
    	$this->assign('data', $data);
    	$this->show();
    }
    //获取商品价格
    public function getPrices($id){
        $sku = M('sku');
        $d = $sku->where(array('id'=>$id))->select();
        for ($i=0; $i < count($d); $i++) {
            $p[$d[$i]['name']]['price'] = $d[$i]['price'];
            $p[$d[$i]['name']]['stock'] = $d[$i]['stock'];
        }
        return $p;
    }

    //根据目录查找商品(默认为第一个目录，子目录为-1时则为查询该父目录下所有商品)
    public function getItemsByCatalog($lm1 = 0 , $lm2 = -1){
        //$lm1 = $lm[0] == -1 ? 0 : $lm[0];
        //$lm2 = $lm[1];
        if ($lm2 != -1) {
            $where = array('lm1' => $lm1, 'lm2' => $lm2);
        }else{
            $where = array('lm1' => $lm1);
        }
        //print_r($where);
        
        $items = M('items');
        
        //获取目录导航
        $catalog = A('Catalog')->getItemCatalog($lm1, $lm2);
        $this->assign('catalog', $catalog);
        //获取分页
        $Page = new \Think\Page($items->where($where)->count(),15);// 实例化分页类 传入总记录数和每页显示的记录数
        $show = $Page->show();// 分页显示输出
        $this->assign('page',$show);// 赋值分页输出

        //获取数据
        $data = $items->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('data', $data);

        $this->display('catalog');
        //print_r(count($data));
    }
}
