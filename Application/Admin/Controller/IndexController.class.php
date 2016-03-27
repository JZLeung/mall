<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        //$system = new sysinfo();
        $systeminfo = getSystemInfo();
        $admin = cookie('admin');
        if (!$admin) {
            
            $admin = session('?admin') ? session('admin') : null;
            $this->display('Passport/login-page');
        }else{
            $this->assign('info', $systeminfo);
            $this->assign('admin', $admin);
            session('admin', $admin);
            cookie('admin', $admin, 600);
            $this->show();
        }
    }

    public function item_add(){
        $this->display();
    }
}