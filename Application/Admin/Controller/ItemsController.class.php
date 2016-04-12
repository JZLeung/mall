<?php
namespace Admin\Controller;
use Think\Controller;
class ItemsController extends Controller {

    public function add(){
        $postData = I('post.data');
        $items = M('items');
        $id = findLastId('items', $items);
        $postData['id'] = (int)$id;
        $res = $items->data($postData)->add();
        $this->ajaxReturn($res);
    }
    public function edit(){
        $postData = I('post.data');
        $items = M('items');
        $id = I('post.id');
        $postData['id'] = (int)$postData['id'];
        $res = $items->where(array('_id' => $id))->save($postData);
        $this->ajaxReturn($res);
    }

    public function delItem(){
        $id = I('post.id');
        $item = M('items');
        $res = $item->where(array('_id' =>$id))->delete();
        $this->ajaxReturn($res);
    }

    public function getItem($id){
        $items = M('items');
        $data = $items->where(array('_id'=>$id))->find();
        $data['detail'] = str_replace('data-lazyload', 'src', $data['detail']);
        //$this->assign('data',  $data);
        return $data;
    }

    public function getItems($lm1, $lm2){
        if ($lm1 == -1) {
            return self::getAllItem();
        }else{
            $items = M('items');
            if ($lm2 == -1) {
                $where = array('lm1' => $lm1);
            }else{
                $where = array('lm1' => $lm1, 'lm2' => $lm2);
            }
            return $items->where($where)->select();
        }
    }

    public function getAllItem(){
        $items = M('items');
        return $items->select();
    }
}
