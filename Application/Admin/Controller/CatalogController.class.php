<?php
namespace Admin\Controller;
use Think\Controller;
class CatalogController extends Controller {

	public function index(){
		
	}


	public function getAllCatalogs(){
		$catalogs = M('catalog');
        return $catalogs->select();
	}

	public function getCatalog($id){
		$catalogs = M('catalog');
		return $catalogs->where(array('id' => (int)$id))->find();
	}

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

	public function getAllCatalogsFront(){
		$catalogs = $this->getAllCatalogs();
		$this->ajaxReturn($catalogs);
	}
}
