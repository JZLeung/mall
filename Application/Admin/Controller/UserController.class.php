<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {

	public function index(){
		
	}


	public function getAllUsers(){
		$user = M('user');
        return $user->select();
	}
}
