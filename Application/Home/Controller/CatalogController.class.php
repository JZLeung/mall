<?php
namespace Home\Controller;
use Think\Controller;
class CatalogController extends Controller {
    public function index(){
        //echo "<pre>";
        //print_r($this->getAllCatalog());
    }

    public function getItemCatalog($lm1, $lm2){
        $catalog = $this->getCatalog($lm1);
        $data[0]['name'] = $catalog['name'];
        $data[0]['id'] = $catalog['id'];
        if ($lm2 != -1) {
            $data[1]['name'] = $catalog['children'][$lm2];
            $data[1]['id'] = $lm2;
        }
        return $data;
    }

    public function getAllCatalog(){
        $catalogs = M('catalog');
        return $catalogs->select();
    }

    public function getCatalog($id){
        $catalogs = M('catalog');
        return $catalogs->where(array('id' => (int)$id))->find();
    }

    public function test(){
        $catalogs = M('catalog');
        $all = $catalogs->select();
        for ($i=0; $i < count($all); $i++) {
            if (is_array($all[$i]['id'])) {
                $update['id'] = (int)$all[$i]['id']['$numberLong'];

            }else {
                $update['id'] = (int)$all[$i]['id'];
            }
            $res[] = $catalogs->where(array('_id' => $all[$i]['_id']))->save($update);
        }
        echo "<pre>";
        print_r($res);
    }
}
