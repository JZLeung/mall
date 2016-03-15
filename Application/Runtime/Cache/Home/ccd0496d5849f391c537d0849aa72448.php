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
			<form action="" id="form" onsubmit="return false;">
			<ul>
				<li>
					<h2 class="head">会员注册</h2>
				</li>
				<li>
					<input type="text" name="username" placeholder="用户名" data-validate="required:必填;username:请输入用户名;length#>=5:用户名长度需要5位以上">
					<ul class="error" id="nperror"></ul>
				</li>
				<li>
					<input type="text" name="email" placeholder="邮箱" data-validate="required:必填;email:请输入邮箱;">
					<ul class="error" id="uerror"></ul>
				</li>
				<li>
					<input type="password" name="password" placeholder="密码" data-validate="required:必填;length#>=8:密码长度需要8位以上">
					<ul class="error" id="perror"></ul>
				</li>
				<li>
					<input type="password" placeholder="重复密码" data-validate="required:必填;repeat#password:两次密码输入不一致">
					<ul class="error" id="nperror"></ul>
				</li>
				<li>
					<input type="submit" value="登录" class="btn btn-submit" id="submit">
				</li>
			</ul>
			</form>
		</div>
	</div>
	<script src="http://libs.baidu.com/jquery/1.9.1/jquery.min.js"></script>
	<script src="/shop/Public/Common/js/jquery-1.12.0.js"></script>
	<script src="/shop/Public/Common/js/jquery.validate.js"></script>
	<script src="/shop/Public/Common/js/base.js"></script>
	<script>
		$(document).ready(function() {
			function getObjectArray(source){
				var data = {};
				source = source.split('&');
				for (var i = 0; i < source.length; i++) {
					var tmp = source[i].split('=');
					data[tmp[0]] = tmp[1];
				}
				return data;
			}
			$('#login-box').find('#submit').click(function(event) {
				event.preventDefault();
				var sData = $('#form').serialize();
				/*if (!$('#form').checkForm()) {
					//alert('验证失败')
					return false;
				}*/
				//return false;
				$.ajax({
					url: 'Home/User/regist',
					type: 'post',
					dataType: 'json',
					data: $('#form').serialize(),
					success:function(data){
						console.log(data);
						if (data.code == 1) {
							alert('注册成功，将跳转到首页');
							location.href = "/shop";
						}else{
							alert(data.msg);
						}
					}
				});
				return false;
			});
		});
	</script>
</body>