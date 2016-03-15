<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>xx账号 - 登录</title>
	<link rel="shortcut icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="/shop/Public/Common/css/common.css">
	<link rel="stylesheet" href="/shop/Public/Common/css/header.css">
	<link rel="stylesheet" href="/shop/Public/Common/css/login.css">
</head>
<body>
	
	<div class="container login2016">
		<a href="/shop" style="color: #ef5b00;position: absolute;left: 15px;top: 15px;">< 返回首页</a>
		<div class="login-box" id="login-box">
			<form action="" id="form">
			<ul>
				<li>
					<p class="head">会员登录</p>
				</li>
				<li>
					<input type="text" name="username" placeholder="邮箱/手机号码">
					<ul class="uerror error"></ul>
				</li>
				<li>
					<input type="password" name="password" placeholder="密码">
					<ul class="perror error"></ul>
				</li>
				<li>
					<input type="submit" value="登录" class="btn btn-submit" id="submit">
				</li>
				<li style="display: none;">
					<div class="sup-text login-w">
						<p>其他</p>
					</div>
				</li>
				<li>
					<a href="/shop/regist">没有账号？立即注册</a>
					<span class="hr"></span>
					<a href="javascript:void(0);">忘记密码？</a>
				</li>
			</ul>
			</form>
		</div>
		
	</div>
	<script src="http://libs.baidu.com/jquery/1.9.1/jquery.min.js"></script>
	<script src="/shop/Public/js/jquery-1.12.0.js"></script>
	<script src="/shop/Public/js/base.js"></script>
	<script>
		$(document).ready(function() {

			$('#login-box').find('#submit').click(function(event) {
				event.preventDefault();
				$.ajax({
					url: 'Home/User/login',
					type: 'post',
					dataType: 'json',
					data: $('#form').serialize(),
					success:function(data){
						console.log(data);
						if (data.code == 1) {
							alert('登陆成功，跳转到首页');
							location.href = "/shop";
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