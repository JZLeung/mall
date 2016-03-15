<?php
namespace Home\Controller;
use Think\Controller;
class TestController extends Controller {
    public function index(){
		$Model =  M("user");

		$a = $Model->select();
		//print_r($a);
		foreach ($a as $key => $value) {
			foreach ($a[$key] as $k => $v) {
				echo $k." : ".$v."<br>";
			}
		}
    }

    public function test(){
    	$u = M('user');
    	$id = findLastId('user', $u);
    	$user['name'] = 'test-user-'.$id;
    	$user['pass'] = '123';
    	$user['uid'] = $id;
    	$res = $u->add($user);
    	var_dump($res);
    	//echo $id;
    }
    public function cookie($c='user'){
    	var_dump(cookie($c));
    }
}