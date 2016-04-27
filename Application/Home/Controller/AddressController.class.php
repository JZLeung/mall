<?php
namespace Home\Controller;
use Think\Controller;
class AddressController extends Controller {

	public function getAllAddress($uid){
		return M('address')->where(array('userid' => $uid))->select();
	}

	//新增地址
	public function addAddress(){
		$addressData = I('post.address');
		$userId = I('post.id');
		$addressData['userid'] = $userId;
		$address = M('address');
		$result = $address->add($addressData);
		$this->ajaxReturn($result);
	}

	//编辑地址
	public function editAddress(){
		$addressData = I('post.address');
		//$userId = I('post.id');
		$addressId = I('post.aid');

		//$addressData['userid'] = $userId;

		$address = M('address');
		$result = $address->where(array('_id' => $addressId))->save($addressData);
		$this->ajaxReturn($result);
	}

	//删除地址
	public function delAddress(){
		$addressId = I('post.aid');

		$address = M('address');
		$result = $address->where(array('_id' => $addressId))->delete();
		$this->ajaxReturn($result);
	}
}