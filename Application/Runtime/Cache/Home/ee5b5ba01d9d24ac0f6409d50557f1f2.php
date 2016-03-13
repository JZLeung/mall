<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>YOHO Buy</title>
	<link rel="shortcut icon" href="http://www.yohobuy.com/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="/tp/Public/css/common.css">
	<link rel="stylesheet" href="/tp/Public/css/header.css">
	<link rel="stylesheet" href="/tp/Public/css/login.css">
</head>
<body>
	<div class="login-top">
	<div class="container m-width clear">
		<div class="left">
			<img src="/tp/Public/images/login/logo_e.png" alt="">
		</div>
		<div class="right right-nav ">
			<ul class="horizon-list top-list">
				<li>
					HI~
					[<a href="/tp/login">请登录</a>]
					[<a href="/tp/regist">免费注册</a>]
				</li>
				<li>
					<a href="javascript:void(0)">MY有货</a>
				</li>
				<li>
					<a href="javascript:void(0)">订单中心</a>
				</li>
				<li>
					<a href="javascript:void(0)">帮助中心</a>
				</li>
				<li>
					<a href="javascript:void(0)">400-899-9646</a>
				</li>
			</ul>
		</div>
	</div>
</div>
	<div class="container m-width login-container">
		<div class="left-container left">
			<div class="logo">
				<img src="/tp/Public/images/login/login-logo.jpg" alt="">
			</div>
		</div>
		<div class="right-container left">
			<div class="login-box" id="login-box">
				<form action="" id="form">
				<ul>
					<li>
						<h2 class="head">会员注册</h2>
					</li>
					<li>
						<input type="text" name="username" placeholder="用户名">
						<span class="error" id="nperror"></span>
					</li>
					<li>
						<input type="text" name="email" placeholder="邮箱">
						<span class="error" id="uerror"></span>
					</li>
					<li>
						<input type="password" name="password" placeholder="密码">
						<span class="error" id="perror"></span>
					</li>
					<li>
						<input type="password" name="password" placeholder="重复密码">
						<span class="error" id="nperror"></span>
					</li>
					<li>
						<input type="submit" value="登录" class="btn btn-submit" id="submit">
					</li>
				</ul>
				</form>
			</div>
		</div>
	</div>
	<script src="http://libs.baidu.com/jquery/1.9.1/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#login-box').find('#submit').click(function(event) {
				event.preventDefault();
				$.ajax({
					url: 'regist',
					type: 'post',
					dataType: 'json',
					data: $('#form').serialize(),
					success:function(data){
						console.log(data);
						if (data.code == 1) {
							alert('登陆成功，跳转到首页');
							location.href = "/tp";
						}else{
							$('.error').text('');
							if (data.code == 0) {
								$('span.perror').text(data.msg);
							}else{
								$('span.uerror').text(data.msg);
							}
						}
					}
				})
				.done(function() {
					console.log("success");
				})
				.fail(function() {
					console.log("error");
				})
				.always(function() {
					console.log("complete");
				});
				
			});
		});
	</script>
</body>