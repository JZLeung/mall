<?php
namespace Home\Controller;
use Think\Controller;
class AdvertiseController extends Controller {

	public function getAllAdvertise(){
		return M('Advertise')->select();
	}
}