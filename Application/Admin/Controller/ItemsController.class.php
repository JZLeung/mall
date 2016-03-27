<?php
namespace Admin\Controller;
use Think\Controller;
class ItemsController extends Controller {
    public function index($id = 0){
        $data = I('post.');
        echo "<pre>";
        $data['desc'] = implode(split("\r\n", $data['desc']), '<br />');
        print_r($data);

    }

}