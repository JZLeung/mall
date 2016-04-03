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
        //$count = $items->count();// 查询满足要求的总记录数
        //$Page = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(10)
        //$show = $Page->show();// 分页显示输出
        $data = $items->select();
        //$data = $items->select();
       // $this->assign('page',  $show);
        $this->assign('data',  $data);
        $this->display();
    }
}
