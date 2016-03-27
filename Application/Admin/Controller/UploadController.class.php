<?php
namespace Admin\Controller;
use Think\Controller;
class UploadController extends Controller {
	public $config ;

	function __construct(){
		$rootPath = './Uploads/Images/';
		$this->config = array(
			'maxSize' => 4096000,
            'rootPath' => $rootPath,
            //'savePath' => 'Image',
            'saveName' => array('uniqid',''),
            'exts' => array('jpg', 'gif', 'png', 'jpeg'),
            'autoSub' => true,
            'subName' => array('date','Ymd'),
		);
	}

	public function upload(){
		$upload = new \Think\Upload($this->config);// 实例化上传类
		//echo "<pre>";
		//print_r($upload);

		$info = $upload->upload();
		$isEditor = I('post.editor', false);
		//echo $isEditor;
		if(!$info) {// 上传错误提示错误信息
			//$this->error($upload->getError());
			//echo $upload->getError();
			$data['msg'] = $upload->getError();
			$data['success'] = false;
			$this->ajaxReturn($data);
		}else{// 上传成功
			//print_r($info);
			//$i = 0;
			//$data['path'] = '/Uploads/Images/';
			$root = '/Uploads/Images/';
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

}