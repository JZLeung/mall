<?php
namespace Home\Controller;
use Think\Controller;
class PassportController extends Controller {
    public function index(){

    }
    public function toLogin(){
    	$this->display('login-page');
    }
    public function toRegist(){
        $this->display('regist-page');
    }
}