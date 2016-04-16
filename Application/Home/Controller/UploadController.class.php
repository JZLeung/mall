<?php
namespace Admin\Controller;
use Think\Controller;
class UploadController extends Controller {
	public $config ;

	function __construct(){
		$rootPath = './Uploads/portraits/';
		$this->config = array(
			'maxSize' => 4096,
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

		$info = $upload->upload();
		if(!$info) {// 上传错误提示错误信息
			$data['msg'] = $upload->getError();
			$data['success'] = false;
			$this->ajaxReturn($data);
		}else{// 上传成功
			$root = '/Uploads/portraits/';
			$data['msg'] = 'upload success';
			$data['success'] = true;
			foreach ($info as $key => $value) {
				$data['file_path'] = $root.$value['savepath'].$value['savename'];
			}
			$this->ajaxReturn($data);
		}
	}

}
