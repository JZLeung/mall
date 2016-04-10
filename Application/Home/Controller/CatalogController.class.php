<?php
namespace Home\Controller;
use Think\Controller;
class CatalogController extends Controller {
    public function index(){
    }

    public function getItemCatalog($lm1, $lm2){
        $catalog = $this->getCatalog($lm1);
        $data[] = $catalog['name'];
        if ($lm2 != -1) {
            $data[] = $catalog['children'][$lm2];
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

    
}
