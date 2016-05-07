<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
    /*public function _initialize(){
        $admin = cookie('admin');
        if (!$admin) {
            $admin = session('?admin') ? session('admin') : null;
            session('admin', $admin);
        }else{
            session('admin', $admin);
        }
        $this->assign('admin', $admin);
    }*/
    public function index(){
        $this->show();
    }
    public function _empty($name){
        $this->display($name);
    }

    /*商品类*/
    //编辑商品
    public function item_edit($id = 0){
        $items = A('Items');
        $this->assign('data',  $items->getItem($id));
        $this->display('Items/item_edit');
    }
    //查看所有商品
    public function item_list($lm1=-1, $lm2=-1){
        $items = A('Items');
        $data = $items->getItems($lm1, $lm2);
        $this->assign('data', $data);
        $this->display('Items/item_list');
    }


    /*目录类*/
    //查看所有目录
    public function catalog_list(){
        $catalogs = A('Catalog');
        $this->assign('catalogs',  $catalogs->getAllCatalogs());
        $this->display('Catalog/catalog_list');
    }
    //编辑目录
    public function catalog_edit(){
        $id = I('get.id');
        $catalog = A('catalog');
        $this->assign('catalog',  $catalog->getCatalog($id));
        $this->display('Catalog/catalog_edit');
    }

    /*用户类*/
    public function user_list(){
        $users = A('user');
        $this->assign('users',  $users->getAllUsers());
        $this->display('User/user_list');
    }

    /*广告类*/
    public function ad_carousel(){
        $adv = A('advertise')->getAllAdvertises('carousel');
        $this->assign('advertise', $adv['advertise']);
        $this->display('Advertise/carousel');
    }
    public function ad_star(){
        $adv = A('advertise')->getAllAdvertises('star');
        $this->assign('advertise', $adv['advertise']);

        $allCatalog = A('catalog')->getAllCatalogs();
        
        $items = A('items')->getAllItem();
        $item = array();
        for ($i=0, $count1 = count($allCatalog); $i < $count1; $i++) { 
            $name1 = $allCatalog[$i]['name'];
            $children = $allCatalog[$i]['children'];
            for ($j=0, $count2 = count($children); $j < $count2; $j++) { 
                $item[$i.','.$j]['name'] = $name1.' / '.$children[$j];
            }
        }
        for ($i=0, $count = count($items); $i < $count; $i++) { 
            $tmp = $items[$i];
            $item[$tmp['lm1'].','.$tmp['lm2']]['item'][] = $tmp;
        }
        $this->assign('items', $item);
        $this->display('Advertise/star');
    }
}
