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
	<style>
		.main{
			background-color: #fff;
			min-height: 100px;
			margin-top: 30px;
			padding: 30px 40px;
			box-sizing: border-box;
		}
		.line{
			padding: 20px 0;
			border-bottom: 1px solid #e0e0e0;
			font-size: 14px;
		}
		.line.line-address{
			border-bottom: 0;
		}
		.line h3{
			font-size: 18px;
			display: inline-block;
			width: 150px;
			line-height: 27px;
		}
		.line .active{
			color: #ff6700 !important;
			border-color: #ff6700 !important;
		}
		.line .line-body{
			display: inline-block;
			width: 850px;
		}
		.line a.timing{
			display: inline-block;
			padding: 10px 20px;
			border: 1px solid #e0e0e0;
			margin-right: 20px;
		}
		.address{
			width: 180px;
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
				<a href="/mall/UserCenter"><?php echo ($username); ?></a>
				<span class="sub">|</span>
				<a href="">我的订单</a>
			</div>
			<h3>我的购物车</h3>
		</div>
	</div>
	<div class="content-w main">
		<div class="line line-address">
			<h3>选择收货地址</h3>	
			<div>
				<div class="addresses clear" id="addresses">
					<div class="address" id="addNew">
						<p  style="margin-top: 60px;margin-left: 60px;">添加新地址</p>
					</div>
					<?php if(is_array($addresses)): foreach($addresses as $key=>$address): ?><div class="address">
						<input type="radio" hidden name="address" value="<?php echo ($address['_id']); ?>">
						<p class="name"><span data-name="name"><?php echo ($address["name"]); ?></span></p>
						<div class="more">
							<p class="phone"><span data-name="phone"><?php echo ($address["phone"]); ?></span></p>
							<p class="detail">
								<span data-name="province"><?php echo ($address["province"]); ?></span> 
								<span data-name="city"><?php echo ($address["city"]); ?></span> 
								<span data-name="area"><?php echo ($address["area"]); ?></span>,<br>
								<span data-name="detail"><?php echo ($address["detail"]); ?></span>
							</p>
						</div>
						<!-- <div class="action">
							<a href="#" class="del" data-aid="<?php echo ($address['_id']); ?>">删除</a>
							<a href="#" class="edit" data-aid="<?php echo ($address['_id']); ?>" >编辑</a>
						</div> -->
					</div><?php endforeach; endif; ?>
				</div>
			</div>
		</div>
		<div class="line line-pay">
			<h3>支付方式</h3>
			<div class="line-body option active">
				在线支付 （支持支付宝、银联、财付通、小米支付等）
			</div>
		</div>
		<div class="line line-express">
			<h3>配送方式</h3>
			<div class="line-body option active">
				快递配送（运费 10 元）
			</div>
		</div>
		<div class="line line-time">
			<h3>配送时间</h3>
			<div class="line-body option" id="timing-option">
				<a href="javascript:;" class="timing active">不限送货时间：周一至周日</a>
				<a href="javascript:;" class="timing">工作日送货：周一至周五</a>
				<a href="javascript:;" class="timing">双休日、假日送货：周六至周日</a>
			</div>
		</div>
		<div class="line line-">
			<h3>购买商品</h3>
		</div>
	</div>
	<script src="/mall/Public/Common/js/jquery-1.12.0.js"></script>
	<script>
		$(document).ready(function() {
			var $addresses = $('#addresses'),
				$timeOpt = $('#timing-option')
			$addresses.on('click', '.address', function(event) {
				event.preventDefault();
				$(this).addClass('active').siblings().removeClass('active');
				$(this).find('input[type=radio]').prop('checked', 'checked');
			});
			$timeOpt.on('click', '.timing', function(event) {
				event.preventDefault();
				$(this).addClass('active').siblings().removeClass('active');
			});
		});
	</script>
</body>