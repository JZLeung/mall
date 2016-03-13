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
}