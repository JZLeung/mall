<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        //$system = new sysinfo();
        $admin = cookie('admin');
        if (!$admin) {

            $admin = session('?admin') ? session('admin') : null;
            $this->display('Passport/login-page');
        }else{
            //$systeminfo = getSystemInfo();
            //$this->assign('info', $systeminfo);
            $this->assign('admin', $admin);
            session('admin', $admin);
            cookie('admin', $admin, 600);
            $this->show();
        }
    }
    public function _empty($name){
        $this->display($name);
    }
    public function item_edit($id = 0){
        $items = M('items');
        $data = $items->where(array('_id'=>$id))->find();
        $this->assign('data',  $data);
        $this->display();
    }
    public function item_list(){
        $items = M('items');
        $data = $items->select();
        $this->assign('data',  $data);
        $this->display();
    }
}
