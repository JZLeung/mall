<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function _initialize(){
        $admin = cookie('admin');
        if (!$admin) {
            $admin = session('?admin') ? session('admin') : null;
            session('admin', $admin);
        }else{
            session('admin', $admin);
        }
        $this->assign('admin', $admin);
    }
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
        $this->display();
    }
    //查看所有商品
    public function item_list(){
        $items = A('Items');
        $this->assign('data', $items->getAllItem());
        $this->display();
    }


    /*目录类*/
    //查看所有目录
    public function catalog_list(){
        $catalogs = A('Catalog');
        $this->assign('catalogs',  $catalogs->getAllCatalogs());
        $this->display();
    }
    //编辑目录
    public function catalog_edit(){
        $id = I('get.id');
        $catalog = A('catalog');
        $this->assign('catalog',  $catalog->getCatalog($id));
        $this->display();
    }

    /*用户类*/
    public function user_list(){
        $users = A('user');
        $this->assign('users',  $users->getAllUsers());
        $this->display();
    }
}
