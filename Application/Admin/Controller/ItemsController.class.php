<?php
namespace Admin\Controller;
use Think\Controller;
class ItemsController extends Controller {
    public function index($id = 0){
        $json = I('post.data');

        echo "<pre>";
        //$data = json_decode('['.$json.']');
        //echo $json;
        //$data['desc'] = implode(split("\r\n", $data['desc']), '<br />');
        print_r(($json));

    }

}