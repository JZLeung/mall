<?php
namespace Admin\Controller;
use Think\Controller;
class UploadController extends Controller {
	public $config ;

	function __construct(){
		$rootPath = './Uploads/Images/';
		$this->config = array(
			'maxSize' => 40960000,
            'rootPath' => $rootPath,
            'saveName' => array('uniqid',''),
            'exts' => array('jpg', 'gif', 'png', 'jpeg'),
            'autoSub' => true,
            'subName' => array('date','Ymd'),
		);
	}

	public function upload(){
		$upload = new \Think\Upload($this->config);// 实例化上传类
		$info = $upload->upload();
		$isEditor = I('post.editor', false);
		if(!$info) {// 上传错误提示错误信息
			$data['msg'] = $upload->getError();
			$data['success'] = false;
			$this->ajaxReturn($data);
		}else{// 上传成功
			//$root = '/Uploads/Images/';
			$root = substr($this->config['rootPath'], 1);
			if ($isEditor == true) {
				$root = '/mall'.$root;
			}
			$data['msg'] = 'upload success';
			$data['success'] = true;
			$data['editor'] = $isEditor;
			foreach ($info as $key => $value) {
				$data['file_path'] = $root.$value['savepath'].$value['savename'];
			}
			$this->ajaxReturn($data);
		}
	}

	public function uploadAD(){
		$this->config['rootPath'] = './Uploads/Advertise/';
		$this->upload();
	}
}
