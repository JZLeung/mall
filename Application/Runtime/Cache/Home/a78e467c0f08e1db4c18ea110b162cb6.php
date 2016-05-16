<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>填写订单信息</title>
	<link rel="shortcut icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="/mall/Public/Common/css/reset.css">
	<link rel="stylesheet" href="/mall/Public/Common/css/common.css">
	<link rel="stylesheet" href="/mall/Public/Common/css/cart.css">
	<link rel="stylesheet" href="/mall/Public/Common/css/user.css">
	<link rel="stylesheet" href="/mall/Public/Common/css/order.css">
	<style>
		.main{
			min-height: 80%;
			margin-top: 0;
			position: relative;
		}
		.msg-box{
			position: absolute;
			top: 50%;
			left: 50%;
			-webkit-transform: translate(-50%, -50%);
			-ms-transform: translate(-50%, -50%);
			-o-transform: translate(-50%, -50%);
			transform: translate(-50%, -50%);
		}
		.image{
			width: 50px;
			display: inline-block;
			vertical-align: middle;
		}
		.msg-box h1{
			display: inline-block;
			vertical-align: middle;
			margin-top: 10px;
		}
		body{
			position: absolute;
			height: 100%;
			width: 100%;
			box-sizing: border-box;
			padding-top: 120px;
		}
	</style>
</head>
<body onselectstart="return false;" style="-moz-user-select:none;color: #757575;">
	<div class="header">
		<div class="content-w">
			<a href="/mall" class="left header-logo">
				<div class="">
					<span class="logo"></span>
					<span class="home"></span>
				</div>
			</a>
			<div class="right">
				<a href="/mall/UserCenter"><?php echo ($username); ?></a>
				<span class="sub">|</span>
				<a href="">我的订单</a>
			</div>
			<h3>支付确认</h3>
		</div>
	</div>
	<div class="content-w main">
		<div class="msg-box">
			<div>
				<div class="image"><img src="/mall/Public/Common/images/check.png" alt=""></div>
				<h1>恭喜你，支付成功。</h1>
			</div>
		</div>
	</div>
</body>
</html>