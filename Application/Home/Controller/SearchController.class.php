<?php
namespace Home\Controller;
use Think\Controller;
class SearchController extends Controller {
    public function index(){
      $getData = I('get.');
      $map['name'] = array('like' , $getData['search']);
      $map['title'] = array('like' , $getData['search']);

      $item = M('items');
      $data = $item->where($map)->select();

      //echo "<pre>";
      //print_r($data);
      $this->assign('data', $data);
      $this->display();
    }
}
