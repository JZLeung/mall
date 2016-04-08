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
    public function item_edit($id = 0){
        $items = M('items');
        $data = $items->where(array('_id'=>$id))->find();
        $data['detail'] = str_replace('data-lazyload', 'src', $data['detail']);
        $this->assign('data',  $data);
        //echo "<pre>";
        //print_r($data);
        $this->display();
    }
    public function item_list(){
        $items = M('items');
        $data = $items->select();
        $this->assign('data',  $data);
        $this->display();
    }

    public function catalog_list(){

    }

    public function user_list(){
        $users = M('user');
        $userList = $users->select();
        $this->assign('users',  $userList);
        $this->display();
    }
}
