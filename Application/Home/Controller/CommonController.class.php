<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
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
}