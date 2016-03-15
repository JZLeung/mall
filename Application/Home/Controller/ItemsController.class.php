<?php
namespace Home\Controller;
use Think\Controller;
class ItemsController extends Controller {
    public function index($id = 0){
    	$this->show();
    }
}