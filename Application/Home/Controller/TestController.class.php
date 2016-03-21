<?php
namespace Home\Controller;
use Think\Controller;
class TestController extends Controller {
    public function index(){
		$this->display();
    }

    public function upload1(){
        $this->display();
    }
    public function upload(){
        $config = array(
            'maxSize' => 3145728,
            'rootPath' => './Uploads/',
            'savePath' => 'img',
            'saveName' => array('uniqid',''),
            'exts' => array('jpg', 'gif', 'png', 'jpeg'),
            'autoSub' => true,
            'subName' => array('date','Ymd'),
        );
        $upload = new \Think\Upload($config);// 实例化上传类
        // 上传文件
        $info = $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功
            $this->success('上传成功！');
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

    public function add2(){
        $u = M('user');
        for ($i=0; $i < 1000; $i++) { 
            $data['username'] = 'user'.$i;
            $data['password'] = '12345';
            $u->add($data);
            print_r($u->save());
            echo "<br>";
        }
    }

    public function add(){
        $data['title'] = '亮彩高光后盖';
        $data['subcribe'] = '官方模具 优质触感\r\n适用于小米2a';
        $data['pictures'][0]['src'] = 'Common/images/items/test/1.jpg';
        $data['pictures'][0]['title'] = '背面';
        $data['pictures'][1]['src'] = 'Common/images/items/test/2.jpg';
        $data['pictures'][1]['title'] = '侧面';
        $data['pictures'][2]['src'] = 'Common/images/items/test/3.jpg';
        $data['pictures'][2]['title'] = '倾斜';
        $data['price'] = '19';
/*        for ($i=0; $i < 1; $i++) { 
            $data['combos'][$i]['name'] = '颜色';
            for ($j=0; $j < 3; $j++) { 
                $data['combos'][$i]['combo'][$j]['name'] = '颜色1';
                $data['combos'][$i]['combo'][$j]['price'] = '20';
                $data['combos'][$i]['combo'][$j]['pic'] = 'Common/images/items/test/3.jpg';

            }
        }*/

        $data['attr'][] = array(
                'name' => '颜色',
                'value'=> ['White','Gold','Black','Pink',]
                    /*array(
                        'name'=>'White',
                        'url'=>''
                    ),
                    array(
                        'name'=>'Gold',
                        'url'=>''
                    ),
                    array(
                        'name'=>'Black',
                        'url'=>''
                    ),
                    array(
                        'name'=>'Pink',
                        'url'=>''
                    )*/
            );
        $data['attr'][] = array(
                'name'=>'容量',
                'value'=> ['16G','64G','128G']
                    /*array(
                        'name'=>'16G',
                        'url'=>''
                    ),
                    array(
                        'name'=>'64G',
                        'url'=>''
                    ),
                    array(
                        'name'=>'128G',
                        'url'=>''
                    )*/
            );
        $data['prices'] = array(
        );

        $data['detail'] = '<img src="/mall/Public/Common/images/items/test/d1.jpg" alt=""><img src="/mall/Public/Common/images/items/test/d2.jpg" alt=""><img src="/mall/Public/Common/images/items/test/d3.jpg" alt=""><img src="/mall/Public/Common/images/items/test/d4.jpg" alt=""><img src="/mall/Public/Common/images/items/test/d5.jpg" alt="">';
        $data['params'][0]['name'] = '工艺';
        $data['params'][0]['value'] = '喷漆';
        $data['params'][1]['name'] = '尺寸';
        $data['params'][1]['value'] = 'L/135mm*H/68mm*T/10mm';
        $data['params'][2]['name'] = '颜色';
        $data['params'][2]['value'] = '橙色';
        echo "<pre>";
        print_r($data);
        $items = M('items');
        $items->add($data);
        print_r($items->save());
        // $this->assign('data', $data);
        // $this->display();
    }

    public function find(){
        $items = M('items');
        $data['_id'] = '56ee81745bf767e01c000029';
        echo "<pre>";
        print_r($items->where($data)->select());
    }
}