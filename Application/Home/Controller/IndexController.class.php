<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    function _initialize(){
        $catalogs = A('Catalog')->getAllCatalog();
        $this->assign('catalogs', $catalogs);
    }

    public function index(){
    	$user = cookie('user');
    	if (!$user) {
    		$user = session('?user') ? session('user') : null;
    	}else{
    		session('user', $user);
    	}
    	$this->assign('username', $user['username']);

        $items = A('Items');
        
        $this->assign('data', $items->getAllItems());

        $adv = A('Advertise');
        $advertise = $adv->getAllAdvertise();
        $ads = array();
        for ($i=0 , $count = count($advertise); $i < $count; $i++) { 
            $ads[$advertise[$i]['name']] = $advertise[$i]['advertise'];
        }
        $this->assign('advertise', $ads);

        $stars = $items->getItemsByIdGroup($ads['star']);
        $this->assign('stars', $stars);

    	$this->display();

    }
}
