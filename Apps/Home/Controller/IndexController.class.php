<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->show();
    }
    public function login(){
    	echo "form controller";
    }
    public function test(){
    	$t = A('Index','Event');
    	echo $t->login();;
    }
    public function getid($id=0){
    	echo "id=".$id;
    }
    public function geturl(){
    	$this->show(U('home/index/getid/123'));
    }
    public function getajax(){
    	$data['name']='json';
    	$data['data']='data';
    	$this->ajaxReturn($data);
    }
    public function redirect($uid=0){
    	if ($uid > 0) {
    		$this->success('跳转成功','index/index');
    	}else{
    		$this->error('跳转失败');
    	}
    }
    public function ajaxredirect(){
    	$this->show();
    }
    public function getalldata(){
    	if (IS_POST) {
    		$data = I('param.');
    		
    	}else{
    		$data['error'] = '请求非法';

    	}
    	$this->ajaxReturn($data);
    }
    public function db(){
    	$db = M();
    	$data = $db->query('select * from dospy');
    	$this->ajaxReturn($data);
    }
    public function showdb(){
    	$data['name']='tp';
    	$data['pass']='tp';
    	$this->assign('data',$data);
    	$this->display();
    }
}