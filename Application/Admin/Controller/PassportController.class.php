<?php
namespace Admin\Controller;
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
    public function regist(){
    	$datas = $this->getPostData();
      $u = M('User');
      $admin = $this->findUserByName($datas['username']);
      if ($admin) {
        $msg['code'] = -1;
        $msg['msg'] = '用户名已存在';
      }else{
        $datas['uid'] = findLastId('user', $u);
        //$u->creat($data);
        $res = $u->add($datas);

        if ($res) {
          $admin = $this->findUserByName($datas['username']);
          $msg['code'] = 1;
          $msg['msg'] = '注册成功';
        }
      }

      session('admin' , $admin);
      cookie('admin', $admin, 360);
      echo json_encode($msg);
    }

    public function login(){
    	$u = M('user');
    	$datas = $this->getPostData();
      $admin = $this->findUserByName($datas['username']);
      if ($admin) {
        if ($admin['usertype'] == 5) {
          if ($admin['password'] == $datas['password']) {
            $msg['code'] = 1;
            $msg['msg'] = '登录成功';
          }else{
            $msg['code'] = 0;
            $msg['msg'] = '登录失败，请检查用户名和密码';
          }
        }else{
          $msg['code'] = 0;
          $msg['msg'] = '你不是管理员，登陆失败';
        }
        
      }else{
        $msg['code'] = -1;
        $msg['msg'] = '用户名不存在';
      }
      session('admin' , $admin);
      cookie('admin', $admin, 360);
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
    }

    public function setpower(){
      $uid = I('post.uid');
      $power = I('post.type');
      $user2['usertype'] = (int)$power;
      $msg['msg'] = M('user')->where(array('_id' => $uid))->save($user2);
      $msg['code'] = 'ok';
      $this->ajaxReturn($msg);
    }
}