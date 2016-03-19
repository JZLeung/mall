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
    public function test(){
        /*$u = M('user');
        $id = findLastId('user', $u);
        $user['name'] = 'test-user-'.$id;
        $user['pass'] = '123';
        $user['uid'] = $id;
        $res = $u->add($user);
        var_dump($res);*/
        //echo $id;
    }
    public function add(){
        $data['title'] = '亮彩高光后盖';
        $data['subcribe'] = '官方模具 优质触感\r\n适用于小米2a';
        $data['pictures'][]['src'] = 'Common/images/items/test/1.jpg';
        $data['pictures'][]['title'] = '背面';
        $data['pictures'][]['src'] = 'Common/images/items/test/2.jpg';
        $data['pictures'][]['title'] = '侧面';
        $data['pictures'][]['src'] = 'Common/images/items/test/3.jpg';
        $data['pictures'][]['title'] = '倾斜';
        $data['price'] = '19';
        for ($i=0; $i < 1; $i++) { 
            $data['combos'][$i]['name'] = '颜色';
            for ($j=0; $j < 3; $j++) { 
                $data['combos'][$i]['combo']['name'] = '颜色1';
                $data['combos'][$i]['combo']['price'] = '20';
                $data['combos'][$i]['combo']['pic'] = 'Common/images/items/test/3.jpg';

            }
        }
        $data['detail'] = '<img src="/mall/Public/Common/images/items/test/d1.jpg" alt="">
                <img src="/mall/Public/Common/images/items/test/d2.jpg" alt="">
                <img src="/mall/Public/Common/images/items/test/d3.jpg" alt="">
                <img src="/mall/Public/Common/images/items/test/d4.jpg" alt="">
                <img src="/mall/Public/Common/images/items/test/d5.jpg" alt="">';
        $data['params'][0]['name'] = '工艺';
        $data['params'][0]['value'] = '喷漆';
        $data['params'][1]['name'] = '尺寸';
        $data['params'][1]['value'] = 'L/135mm*H/68mm*T/10mm';
        $data['params'][2]['name'] = '颜色';
        $data['params'][2]['value'] = '橙色';

        $this->assign('data', $data);
        $this->display();
    }
}