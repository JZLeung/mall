<?php
namespace Admin\Controller;
use Think\Controller;
class CatalogController extends Controller {

	public function index(){
		
	}

	private function sortByPosition($a, $b){
		return $a['position'] - $b['position'];
	}

	//获取所有的目录
	public function getAllCatalogs(){
		$catalogs = M('catalog');
		$data = $catalogs->select();
		//uasort($data, array($this,'sortByPosition'));
		//print_r($data);
        return $data;
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
		$catalogs = M('catalog');
		$res = $catalogs->where(array('id' => (int)$id))->save($data);
		$this->ajaxReturn($res);
	}

	//获取所有目录（前台接口）
	public function getAllCatalogsFront(){
		$catalogs = $this->getAllCatalogs();
		$data = array();
		$i = 0;
		foreach ($catalogs as $key => $value) {
			$all[] = $value['name'];
			$children = $value['children'];
			$child = array();
			for ($j=0; $j < count($children); $j++) { 
				$child[] = $children[$j];
			}
			$data['0_'.$i] = $child;
			$i++;
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
				$update = array('position'=>(int)$sortable[$i]['position']);
				$res = $catalogs->where(array('_id'=>$sortable[$i]['_id']))->save($update);
				$result[] = $res['ok'];
			}
			$this->ajaxReturn($result);
		} catch (Exception $e) {
			$this->ajaxReturn($e);
		}
	}

	//添加新目录
	public function add(){
		$data = I('post.data');
		$catalogs = M('catalog');
		$id = findLastId('catalog', $catalogs);
		$data['id'] = (int)$id;
		$res = $catalogs->data($data)->add();
		$this->ajaxReturn($res);
	}

	//删除父目录
	public function delete(){
		$id = I('post.id');
		$catalogs = M('catalog');
		$res = $catalogs->where(array('_id'=>$id))->delete();
		$this->ajaxReturn($res);
	}
}
