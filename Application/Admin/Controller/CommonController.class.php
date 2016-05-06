<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {
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
}