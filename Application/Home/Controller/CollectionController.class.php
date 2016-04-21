<?php
namespace Home\Controller;
use Think\Controller;
class CollectionController extends Controller {

	public function reset(){
		$user = session('user');
		if ($user) {
			$id = $user['_id'];
			$db = M('user');
			$res = $db->where(array('_id'=>$id))->save(array('collect'=>array()));
			//$add = $res['nModified'];
			//$msg = array('code' => 'ok', 'msg' => $add);
			$msg = $res;
		}else{
			$msg = array('code' => 'error', 'msg' => '请先登录后再收藏');
		}
		$this->ajaxReturn($msg);
	}

	public function add(){
		$user = session('user');
		if ($user) {
			$itemID = I('post.id');
			$id = $user['_id'];
			$db = M('user');
			$res = $db->where(array('_id'=>$id))->save(array('collect'=>array('addToSet',$itemID)));
			$add = $res['nModified'];
			$msg = array('code' => 'ok', 'msg' => $add);
		}else{
			$msg = array('code' => 'error', 'msg' => '请先登录后再收藏');
		}
		$this->ajaxReturn($msg);
	}
}