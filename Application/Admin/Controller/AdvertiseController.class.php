<?php
namespace Admin\Controller;
use Think\Controller;
class AdvertiseController extends CommonController {
	public function index(){}

	public function getAllAdvertises($type){
		$ad = M('advertise');
		return $ad->where(array('name'=>$type))->find();
	}

	//跳转至编辑页面
	public function toEdit(){
		$name = I('get.type');
		$index = I('get.index');

		$adv = self::getAllAdvertises($name);
		$advertise = $adv['advertise'][$index];
		$this->assign('ad', $advertise);
		$this->display($name.'_edit');
	}
	//跳转至添加页面
	public function toAdd(){
		$name = I('get.type');
		$this->display($name.'_add');
	}
	//编辑
	public function edit(){
		$data = I('post.data');
		$type = I('post.type');
		$index = I('post.index');
		$ad = M('advertise');
		$where = array('name'=> $type);
		$editData['advertise.'.$index] = $data;
		$res = $ad->where($where)->save($editData);
		$msg['code'] = 'ok';
		$msg['msg'] = $res;
		$this->ajaxReturn($msg);
	}
	//添加
	public function add(){
		$data = I('post.data');
		$type = I('post.type');
		$ad = M('advertise');
		$where = array('name'=> $type);
		$editData['advertise'] = array('addToSet', $data);
		$res = $ad->where($where)->save($editData);
		$msg['code'] = 'ok';
		$msg['msg'] = $res;
		$this->ajaxReturn($msg);
	}
	//删除
	public function delete(){
		$postData = I('post.data');
		$type = I('post.type');
		$ad = M('advertise');
		$where = array('name'=> $type);
		$editData['advertise'] = array('pull', $postData);
		$res = $ad->where($where)->save($editData);
		$msg['code'] = 'ok';
		$msg['msg'] = $res;
		$this->ajaxReturn($msg);
	}
	//设置
	public function set(){
		$data = I('post.data');
		$type = I('post.type');
		$ad = M('advertise');
		$where = array('name'=> $type);
		$editData['advertise'] = $data;
		$res = $ad->where($where)->save($editData);
		$msg['code'] = 'ok';
		$msg['msg'] = $res;
		$this->ajaxReturn($msg);
	}
}