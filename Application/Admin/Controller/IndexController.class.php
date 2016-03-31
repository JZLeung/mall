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

    public function item_add(){
        $this->display('item_edit');
    }
    public function item_edit($id = 0){
        $items = M('items');
        $data = $items->where(array('id'=>(int)$id))->find();
        $this->assign('data',  $data);
        $this->display();
    }
}
