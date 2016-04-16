<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
	protected $user;
	function _initialize(){
        $catalogs = A('Catalog')->getAllCatalog();
        $this->assign('catalogs', $catalogs);

        $user = cookie('user');
    	if (!$user) {
    		$user = session('?user') ? session('user') : null;
    	}else{
    		session('user', $user);
    	}
    	$this->user = $user;
    	$this->assign('username', $user['username']);
    }

    //用户中心
	public function index(){
		
		$user = session('user');
		$this->assign('user', $user);
		$this->display();
	}

	//个人信息
	public function user_info(){

		//print_r($this->user);
		$this->assign('user', $this->user);
		$this->display();
	}
}
