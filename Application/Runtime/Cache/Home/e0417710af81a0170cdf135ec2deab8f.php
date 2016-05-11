<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>填写订单信息</title>
	<link rel="shortcut icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="/mall/Public/Common/css/reset.css">
	<link rel="stylesheet" href="/mall/Public/Common/css/common.css">
	<link rel="stylesheet" href="/mall/Public/Common/css/cart.css">
	<style>
		.main{
			background-color: #fff;
			min-height: 100px;
			margin-top: 30px;
		}
	</style>
</head>
<body onselectstart="return false;" style="-moz-user-select:none;">
	<div class="header">
		<div class="content-w">
			<a href="/mall" class="left header-logo">
				<div class="">
					<span class="logo"></span>
					<span class="home"></span>
				</div>
			</a>
			<div class="right">
				<a href=""><?php echo ($user["username"]); ?></a>
				<span class="sub">|</span>
				<a href="">我的订单</a>
			</div>
			<h3>我的购物车</h3>
		</div>
	</div>
	<div class="content-w main">
		
	</div>
</body>