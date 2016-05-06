<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    function _initialize(){
        $catalogs = A('Catalog')->getAllCatalog();
        $this->assign('catalogs', $catalogs);
    }

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

        $adv = M('advertise');
        $advertise = $adv->select();
        $ads = array();
        for ($i=0 , $count = count($advertise); $i < $count; $i++) { 
            $ads[$advertise[$i]['name']] = $advertise[$i]['advertise'];
        }
        $this->assign('advertise', $ads);

    	$this->display();

    }
}
