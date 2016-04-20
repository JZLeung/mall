<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
	protected $user;
	function _initialize(){
        $catalogs = A('Catalog')->getAllCatalog();
        $this->assign('catalogs', $catalogs);

        $user = cookie('user');
    	if (!$user) {
    		$user = session('?user') ? session('user') : null;
    	}else{
    		session('user', $user);
    	}
    	$this->user = $user;
    	$this->assign('username', $user['username']);
    }

    //用户中心
	public function index(){
		//$user = session('user');
		$this->assign('user', $this->$user);
		$this->display();
	}

	//个人信息
	public function user_info(){
		$this->assign('user', $this->user);
		$this->display();
	}

	//修改个人信息
	public function edit(){
		//print_r(I('post.'));
		$postData = I('post.data');
		$id = I('post.id');
		$user2 = M('user');

		$res = $user2->where(array('_id' => $id))->save($postData);
		$user =$user2->where(array('_id' => $id))->find();
		cookie('user', $user);
		session('user', $$user);
		$this->ajaxReturn($res);
	}

	//地址信息
	public function user_address(){
		$this->assign('user', $this->user);
		$address = M('address');
		$addresses = $address->where(array('userid' => $this->user['_id']))->select();
		$this->assign('addresses', $addresses);
		$this->display();
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
