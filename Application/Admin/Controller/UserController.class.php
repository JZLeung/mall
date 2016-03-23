<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    //private $u;
    public function index(){
    	$this->show();
    }
    
    /*public function regist(){
    	$datas = $this->getPostData();
      $u = M('User');
      $user = $this->findUserByName($datas['username']);
      if ($user) {
        $msg['code'] = -1;
        $msg['msg'] = '用户名已存在';
      }else{
        $datas['uid'] = findLastId('user', $u);
        //$u->creat($data);
        $res = $u->add($datas);

        if ($res) {
          $user = $this->findUserByName($datas['username']);
          $msg['code'] = 1;
          $msg['msg'] = '注册成功';
        }
      }

      session('user' , $user);
      cookie('user', $user, 360);
      echo json_encode($msg);
    }

    public function login(){
    	$u = M('user');
    	$datas = $this->getPostData();
      $user = $this->findUserByName($datas['username']);
      if ($user) {
        if ($user['password'] == $datas['password']) {
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
      session('user' , $user);
      cookie('user', $user, 360);
      echo json_encode($msg);
    }

    private function findUserByName($username){
      $u = D('User');
      //var_dump($this->$u);
      $map['username'] = $username;
      return $u->where($map)->find();
    }
    private function getPostData(){
      $data = I('post.');
      $data['password'] = md5($data['password']);
      return $data;
    }*/
}
