<?php
namespace Admin\Controller;
use Think\Controller;
class CatalogController extends Controller {

	public function index(){
		
	}

	//获取所有的目录
	public function getAllCatalogs(){
		$catalogs = M('catalog');
        return $catalogs->select();
	}

	//根据id获取目录
	public function getCatalog($id){
		$catalogs = M('catalog');
		return $catalogs->where(array('id' => (int)$id))->find();
	}

	//编辑目录
	public function edit(){
		$data = I('post.data');
		$id = I('post.id');
		/*echo "<pre>";
		echo (int)$id;
		print_r($data);*/
		$catalogs = M('catalog');
		$res = $catalogs->where(array('id' => (int)$id))->save($data);
		$this->ajaxReturn($res);
	}

	//获取所有目录（前台接口）
	public function getAllCatalogsFront(){
		$catalogs = $this->getAllCatalogs();
		$data = array();
		for ($i=0; $i < count($catalogs); $i++) { 
			$all[] = $catalogs[$i]['name'];
			$children = $catalogs[$i]['children'];
			$child = array();
			for ($j=0; $j < count($children); $j++) { 
				$child[] = $children[$j];
			}
			$data['0_'.$i] = $child;
		}
		$data['0'] = $all;
		$this->ajaxReturn($data);
	}

	//目录的排序
	public function sort(){
		$sortable = I('post.data');
		//echo "<pre>";
		//print_r($sortable);
		try {
			$catalogs = M('catalog');
			//$opt = array('upsert'=> true);
			for ($i=0; $i < count($sortable); $i++) { 
				$update = array('id'=>(int)$sortable[$i]['id']);
				$res = $catalogs->where(array('_id'=>$sortable[$i]['_id']))->save($update);
				$result[] = $res['ok'];
			}
			$this->ajaxReturn($result);
		} catch (Exception $e) {
			$this->ajaxReturn($e);
		}
	}
}
