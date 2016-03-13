<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    //private $u;
    public function index(){
    	$this->show();
    }
    
    public function regist(){
    	$datas = $this->getPostData();
      $u = M('User');
      $user = $this->findUserByName($data['username']);
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
      echo json_encode($msg);

    	/*$u = M('User');
      $data = $datas = I('post.');
      $data['password'] = md5($datas['password']);
      //$u->create($data);
      //$res = $u->add();
      var_dump($data);*/
    }

    public function login(){
    	$u = M('user');
      //var_dump($u);
    	$datas = $this->getPostData();
      //var_dump($datas);
      //$msg  = $u->login($datas);
      //$u = D('User');
      $user = $this->findUserByName($data['username']);
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
      echo json_encode($msg);
    }

    private function findUserByName($username){
      $u = D('User');
      //var_dump($this->$u);
      $map['username'] = $username;
      return $u->where($map)->select();
    }
    private function getPostData(){
      $data = I('post.');
      $data['password'] = md5($datas['password']);
      return $data;
    }
}
