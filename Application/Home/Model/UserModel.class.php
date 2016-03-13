<?php
namespace Home\Model;
use Think\Model\MongoModel;
/**
* 
*/
class UserModel extends MongoModel{
	
	public function regist($data){
		$u = D('User');
		$user = findUserByName($data['username']);
		if ($user) {
			$msg['code'] = -1;
			$msg['msg'] = '用户名已存在';
		}else{
			$u->creat($data);
			$res = $u->add();
			if ($res) {
				$msg['code'] = 1;
				$msg['msg'] = '注册成功';
			}
		}
		return $msg;
	}

	public function login($data){
		$u = D('User');
		$user = findUserByName($data['username']);
		if ($user) {
			if ($user['password'] == $data['password']) {
				$msg['code'] = 1;
				$msg['msg'] = '登录成功';
			}else{
				$msg['code'] = 0;
				$msg['msg'] = '登录失败';
			}
		}else{
			$msg['code'] = -1;
			$msg['msg'] = '用户名不存在';
			
		}
		return $msg;
	}

	public function findUserByName($username){
		$u = D('User');
		return $u->select(array('username' => $username));
	}
}