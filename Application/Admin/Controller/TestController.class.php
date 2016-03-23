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

    public function add(){
        $data['title'] = '小米手机5<br>十余项黑科技，很轻狠快';
        $data['subscribe'] = '骁龙820处理器 / 最大可选4GB内存、128GB闪存/4轴防抖相机 / 3D陶瓷机身 / 3D玻璃机身';
        $data['pictures'][0]['src'] = 'Common/images/items/mi5/b.jpg';
        $data['pictures'][0]['title'] = '黑色';
        $data['pictures'][1]['src'] = 'Common/images/items/mi5/w.jpg';
        $data['pictures'][1]['title'] = '白色';
        $data['price'] = '1999';
        /*for ($i=0; $i < 1; $i++) { 
            $data['combos'][$i]['name'] = '颜色';
            for ($j=0; $j < 3; $j++) { 
                $data['combos'][$i]['combo'][$j]['name'] = '颜色1';
                $data['combos'][$i]['combo'][$j]['price'] = '20';
                $data['combos'][$i]['combo'][$j]['pic'] = 'Common/images/items/test/3.jpg';

            }
        }*/
        $data['attr'][] = array(
                'name'=>'版本',
                'value'=> array(
                    '32'=>'3GB + 32G ROM',
                    '64'=>'3GB + 64G ROM'
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
        $data['attr'][] = array(
                'name' => '颜色',
                'value'=> array(
                    'w' => '白色',
                    'b' => '黑色'
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
        
        

        $data['detail'] = '<img src="/mall/Public/Common/images/items/mi5/001.png" alt=""><img src="/mall/Public/Common/images/items/mi5/002.png" alt=""><img src="/mall/Public/Common/images/items/mi5/003.png" alt=""><img src="/mall/Public/Common/images/items/mi5/004.png" alt=""><img src="/mall/Public/Common/images/items/mi5/005.png" alt=""><img src="/mall/Public/Common/images/items/mi5/006.png" alt=""><img src="/mall/Public/Common/images/items/mi5/007.png" alt=""><img src="/mall/Public/Common/images/items/mi5/008.png" alt="">';
        $data['params'][0]['name'] = '品牌';
        $data['params'][0]['value'] = '小米';
        $data['params'][1]['name'] = '型号';
        $data['params'][1]['value'] = 'MI 5';
        $data['params'][2]['name'] = '屏幕尺寸';
        $data['params'][2]['value'] = '5.15英寸';

        $data['params'][3]['name'] = '分辨率';
        $data['params'][3]['value'] = '1920 x 1080';
        $data['params'][4]['name'] = '后置摄像头';
        $data['params'][4]['value'] = '1600万像素';
        $data['params'][5]['name'] = '前置摄像头';
        $data['params'][5]['value'] = '400万像素';

        $data['params'][6]['name'] = '（标准版）CPU';
        $data['params'][6]['value'] = '骁龙820 最高主频 1.8GHz';
        $data['params'][7]['name'] = 'GPU';
        $data['params'][7]['value'] = 'Adreno 530 图形处理器 510MHz';
        $data['params'][8]['name'] = '内存';
        $data['params'][8]['value'] = '3GB LPDDR4 1333MHz 双通道';

        $data['params'][9]['name'] = '（高配版）CPU';
        $data['params'][9]['value'] = '骁龙820 最高主频 2.15GHz';
        $data['params'][10]['name'] = 'GPU';
        $data['params'][10]['value'] = 'Adreno 530 图形处理器 624MHz';
        $data['params'][11]['name'] = '内存';
        $data['params'][11]['value'] = '3GB LPDDR4 1866MHz 双通道';
        $items = M('items');
        $data['id'] = findLastId('items', $items);
        echo "<pre>";
        print_r($data);
        
        /*$items->add($data);
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
        /*$items = M('items');
        //$data['id'] = '3';
        //更新配置存储方式
        $data['pictures'][0]['src'] = 'Common/images/items/mi5/b.png';
        $data['pictures'][0]['title'] = '黑色';
        $data['pictures'][1]['src'] = 'Common/images/items/mi5/w.png';
        $data['pictures'][1]['title'] = '白色';
        $items->where(array('id' => 3))->save($data);*/
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
            '32,w' => 1999,
            '64,w' => 2699,
            '32,b' => 1999,
            '64,b' => 2699
        );
        $stock = [10,5,11,3];
        //--0321--使用sku表，单独存放规格
        //更新价格
        $sku = M('sku');
        $id = 3;
        $i = 0;
        foreach ($price as $key => $value) {
            $datas = array(
                'id' => $id,
                'name' => $key,
                'price' => $value,
                'stock' => $stock[$i++] 
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