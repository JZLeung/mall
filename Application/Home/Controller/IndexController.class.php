<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	//$user = Session::is_set('user') ? Session::get('user') : null;
    	$user = cookie('user');
    	if (!$user) {
    		$user = session('?user') ? session('user') : null;
    	}else{
    		session('user', $user);
    	}
    	//var_dump($user);
    	$this->assign('username', $user['username']);
        $items = M('items');
        $data = $items->select();
        $this->assign('data', $data);
    	$this->display();
        
    }
}
