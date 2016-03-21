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
        $data['title'] = 'Apple iPhone 6s (A1700) 16G 金色 移动联通电信4G手机';
        $data['subscribe'] = '选择下方【移动合约机】-【老用户优惠购机】购买方式，无需换号，可至多送3528元话费！<br>选择【移动合约机】购机入网送话费，不换号选套餐，返高额话费 选【电信合约机】+11元，享激活立即到账100元话费，月月增话费，套餐实际消费低至39元！ 选【联通合约机】每月有话费返还，大语音大流量，让您自由自在畅享4G！';
        $data['pictures'][0]['src'] = 'Common/images/items/phone/apple/w.jpg';
        $data['pictures'][0]['title'] = '黑色';
        $data['pictures'][1]['src'] = 'Common/images/items/phone/apple/g.jpg';
        $data['pictures'][1]['title'] = '金色';
        $data['pictures'][2]['src'] = 'Common/images/items/phone/apple/b.jpg';
        $data['pictures'][2]['title'] = '银白色';
        $data['pictures'][3]['src'] = 'Common/images/items/phone/apple/p.jpg';
        $data['pictures'][3]['title'] = '玫瑰金';
        $data['price'] = '19';
        /*for ($i=0; $i < 1; $i++) { 
            $data['combos'][$i]['name'] = '颜色';
            for ($j=0; $j < 3; $j++) { 
                $data['combos'][$i]['combo'][$j]['name'] = '颜色1';
                $data['combos'][$i]['combo'][$j]['price'] = '20';
                $data['combos'][$i]['combo'][$j]['pic'] = 'Common/images/items/test/3.jpg';

            }
        }*/

        $data['attr'][] = array(
                'name' => '颜色',
                'value'=> array(
                    'w' => '银白色',
                    'g'=>'土豪金',
                    'b'=>'太空灰色',
                    'p'=>'玫瑰金'
                    )
                    /*array(
                        'name'=>'w',
                        'value'=>'银白色'
                    ),
                    array(
                        'name'=>'g',
                        'value'=>'土豪金'
                    ),
                    array(
                        'name'=>'b',
                        'value'=>'太空灰色'
                    ),
                    array(
                        'name'=>'p',
                        'value'=>'玫瑰金'
                    )*/
            );
        $data['attr'][] = array(
                'name'=>'容量',
                'value'=> array(
                    '16'=>'16G',
                    '64'=>'64G',
                    '128'=>'128G'
                    )
                    /*array(
                        'name'=>'16',
                        'value'=>'16G'
                    ),
                    array(
                        'name'=>'64',
                        'value'=>'64G'
                    ),
                    array(
                        'name'=>'128',
                        'value'=>'128G'
                    )*/
            );
        

        $data['detail'] = '<img src="/mall/Public/Common/images/items/phone/apple/11.jpg" alt=""><img src="/mall/Public/Common/images/items/phone/apple/12.jpg" alt=""><img src="/mall/Public/Common/images/items/phone/apple/13.jpg" alt="">';
        $data['params'][0]['name'] = '品牌';
        $data['params'][0]['value'] = 'Apple';
        $data['params'][1]['name'] = '型号';
        $data['params'][1]['value'] = 'iPhone 6S';
        $data['params'][2]['name'] = '屏幕尺寸';
        $data['params'][2]['value'] = '4.7英寸';

        $data['params'][3]['name'] = '分辨率';
        $data['params'][3]['value'] = '1334 x 750';
        $data['params'][4]['name'] = '后置摄像头';
        $data['params'][4]['value'] = '1200万像素';
        $data['params'][5]['name'] = '前置摄像头';
        $data['params'][5]['value'] = '500万像素';

        echo "<pre>";
        print_r($data);
        /*$items = M('items');
        $items->add($data);
        print_r($items->save());*/
        // $this->assign('data', $data);
        // $this->display();
    }

    public function find(){
        $items = M('items');
        $data['_id'] = '56ef872eba5a75442900002a';
        echo "<pre>";
        print_r($items->where($data)->select());
    }

    public function update(){
        //$items = M('items');
        //$data['id'] = '2';
        //更新配置存储方式
        /*$datas['attr'][] = array(
            'name' => '颜色',
            'value'=> array(
                'w' => '白色',
                'g' => '金色',
                'b' => '黑色',
                'p' => '粉色'
            )
        );
        $datas['attr'][] = array(
            'name'=>'容量',
            'value'=> array(
                '16'    => '16G',
                '64'    => '64G',
                '128'   => '128G'
            )
        );*/
        //添加价格
        $price = array(
            'w,16' => 2299,
            'w,64' => 2699,
            'w,128' => 3299,
            'b,16' => 2099,
            'b,64' => 2499,
            'b,128' => 3099,
            'p,16' => 2499,
            'p,64' => 2899,
            'p,128' => 3399,
            'g,16' => 2299,
            'g,64' => 2699,
            'g,128' => 3299
        );
        //--0321--使用sku表，单独存放规格
        //更新价格
        $sku = M('sku');
        $id = 2;
        foreach ($price as $key => $value) {
            $datas = array(
                'id' => $id,
                'name' => $key,
                'price' => $value,
                'stock' => 12
            );
            $res = $sku->add($datas);
            print_r($res);
            echo "<br>";
        }

        //$datas['prices']['w,16'] = 1999;
        echo "<pre>";
        print_r($datas);

        

    }

    public function setid(){
        $items = M('items');
        $id = findLastId('items',$items);
        $datas['_id'] = '56f00a2c5bf767541900002a';
        $data['id'] = $id;
        print_r($items->where($datas)->save($data));
    }

    public function updatePrice($name, $price, $stock = 0){
        //echo "$name : $value";
        $sku = M('sku');
        $id = 2;
        $data['id'] = $id;
        $data['name'] = $name;
        $datas['price'] = $price;
        $datas['stock'] = $stock;
        print_r($data);
        $sku->where($data)->save($datas);
    }
    public function updateImg(){
        $data['pictures'][0]['src'] = 'Common/images/items/phone/apple/w.jpg';
        $data['pictures'][0]['title'] = '黑色';
        $data['pictures'][1]['src'] = 'Common/images/items/phone/apple/g.jpg';
        $data['pictures'][1]['title'] = '金色';
        $data['pictures'][2]['src'] = 'Common/images/items/phone/apple/b.jpg';
        $data['pictures'][2]['title'] = '银白色';
        $data['pictures'][3]['src'] = 'Common/images/items/phone/apple/p.jpg';
        $data['pictures'][3]['title'] = '玫瑰金';
    }
}