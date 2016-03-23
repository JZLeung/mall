<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $admin = cookie('admin');
        if (!$admin) {
            $admin = session('?admin') ? session('admin') : null;
            $this->display('Passport/login-page');
        }else{
            session('admin', $admin);
            $this->show();
        }
    	

    }
}