<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>我的订单</title>
	<link rel="shortcut icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="/mall/Public/Common/css/reset.css">
	<link rel="stylesheet" href="/mall/Public/Common/css/common.css">
	<link rel="stylesheet" href="/mall/Public/Common/css/header.css">
	<link rel="stylesheet" href="/mall/Public/Common/css/user.css">
	<link rel="stylesheet" href="/mall/Public/Common/css/modal.css">
	<style>
		.hidden{display: none;}
		.user-center p{padding: 0;}
		.orders{
			margin-top: 30px;
			margin-right: 40px;
			font-size: 14px;
		}
		.order{
			box-sizing: border-box;
			border: 1px solid #ff6700;
			margin-bottom: 20px;
			background-color: #fffaf7;
		}
		.order-head{
			border-bottom: 1px solid #ff6700;
			padding: 20px;
			padding-top: 5px;
		}
		.order-body{
			padding: 20px;
			padding-bottom: 30px;
			position: relative;
			background-color: #fff;
		}
		.order-body .image {
		    display: inline-block;
		    width: 60px;
		}
		.order-body .item > div {
		    display: inline-block;
		    vertical-align: middle;
		}
		.order-body .info {
		    margin-left: 15px;
			max-width: 600px;
			overflow: hidden;
			white-space: nowrap;
			text-overflow: ellipsis;
		}
		.order-body .others{
			padding-top: 10px;
			color: #666;
		}
		.order-body .info p{
			margin-bottom: 5px;
		}
		.order-body .order-btn{
			position: absolute;
			right: 20px;
			top: 20px;
		}
		.order-body .order-btn .btn{
			padding: 5px 30px;
			font-size: 12px;
		}

		.order-head .detail li {
		    display: inline-block;
		    padding-left: 10px;
		    border-left: 1px solid #666;
		    margin-right: 10px;
		}
		.order-head .detail li:first-child{
			border-left: 0;
		}
		.order-head .statu{
			font-size: 18px;
			margin-left: 10px;
			color: #ff6700;
			line-height: 2.5em;
		}
		.order .amount{
			margin-top: 20px;
			margin-right: 20px;
		}
		.order .amount span{
			font-size: 1.5em;
			color: #ff6700;
			font-weight: bold;
		}
	</style>
</head>
<body style="background: #f5f5f5">
	
<div class="header2016">
	<div class="content-w clear">
		<div class="left">
			<a href="javascript:void(0)">菜单1</a>
			<span class="dev">|</span>
			<a href="javascript:void(0)">菜单2</a>
			<span class="dev">|</span>
			<a href="javascript:void(0)">菜单3</a>
			<span class="dev">|</span>
			<a href="javascript:void(0)">菜单4</a>
			<span class="dev">|</span>
			<a href="javascript:void(0)">菜单5</a>
			<span class="dev">|</span>
			<a href="javascript:void(0)">菜单6</a>
			<span class="dev">|</span>
		</div>
		<div class="right">
			<?php if($username): ?><a href="/mall/UserCenter"><?php echo ($username); ?></a>
				<span class="dev">|</span>
				<a href="/mall/myCart">我的购物车</a>
				<span class="dev">|</span>
				<a href="/mall/Home/User/user_collect">我的收藏</a>
				<span class="dev">|</span>
				<a href="javascript:void(0)" id="logout">退出</a>
			<?php else: ?>
				<a href="/mall/login">登陆</a>
				<span class="dev">|</span>
				<a href="/mall/regist">注册</a><?php endif; ?>
		</div>
	</div>
</div>
<div class="nav2016">
	<div class="content-w clear">
		<div class="nav-logo">
			<a href="/mall">
				<img src="/mall/Public/Common/images/mi-logo.jpg" alt="" class="logo">
			</a>
		</div>
		<div class="nav-bar left">
			<ul class="horizon-list clear">
				<?php if(is_array($catalogs)): foreach($catalogs as $key=>$catalog): ?><li class="list-item">
						<a href="/mall/catalogs/<?php echo ($catalog["id"]); ?>"><?php echo ($catalog["name"]); ?></a>
						<div class="sub-items">
							<?php define('index', '0'); ?>
							<?php if(is_array($catalog["children"])): foreach($catalog["children"] as $key=>$child): ?><a href="/mall/catalogs/<?php echo ($catalog["id"]); ?>/<?php echo ($key); ?>"><?php echo ($child); ?></a><?php endforeach; endif; ?>
						</div>
					</li><?php endforeach; endif; ?>
				<!-- <li class="list-item">
					<a href="javascipt:;">分类1</a>
					<div class="sub-items">

					</div>
				</li>
				<li class="list-item">
					<a href="javascipt:;">分类2</a>
				</li>
				<li class="list-item">
					<a href="javascipt:;">分类3</a>
				</li>
				<li class="list-item">
					<a href="javascipt:;">分类4</a>
				</li>
				<li class="list-item">
					<a href="javascipt:;">分类5</a>
				</li> -->
			</ul>
		</div>
		<form action="/mall/search" onsubmit="search.value = search.value.replace(/(^\s*)|(\s*$)/g, '')">
		<div class="nav-search right" id="searchBox">
				<input type="text" class="search left" name="search" value="<?php echo ($_GET['search']); ?>" id="search">
				<input type="submit" class="submit">
		</div>
		</form>
	</div>
</div>
<script src="/mall/Public/Common/js/jquery-1.12.0.js"></script>
<script>
	var search = document.getElementById('search'),
		box = document.getElementById('searchBox'),
		oName = box.className;
	if (search.value != '') {
		box.className = oName + ' active';
	}
	search.addEventListener('blur', function(e){
		if (this.value == '') {
			box.className = oName;
		}
	})
	$('#logout').click(function(e){
		e.preventDefault();
		if (confirm('确认要退出登录吗？')) {
			$.get('/mall/logout',function(data){
				console.log(data);
				if (data.code == 1) {
					alert(data.msg)
					location.reload();
				}
			})
		}
	})
</script>

	<div class="content-w clear">
		<nav class="nav">
			<a href="/mall">首页</a>
			<span class="gt"></span>
			<a href="/mall/UserCenter">用户中心</a>
			<span class="gt"></span>
			<a href="javascript:;">我的订单</a>
		</nav>
		<?php if(empty($user)): ?><script>location.href = '/mall/login';</script><?php endif; ?>
<div class="sidebar left">
	<ul class="action-list" id="action-list">
		<span href="/mall/UserCenter" class="action action-head">个人中心</span>
		<a href="/mall/UserCenter" class="action">个人中心</a>
		<a href="/mall/Home/User/user_info" class="action">个人信息</a>
		<a href="/mall/Home/User/user_address" class="action">收货地址</a>
		<a href="/mall/Home/User/user_collect" class="action">喜欢的商品</a>
		<a href="/mall/Home/User/user_order" class="action">我的订单</a>
		<a href="/mall/myCart" class="action">购物车</a>
	</ul>
</div>
		<div class="user-center" style="padding-left: 40px;">
			<h3>我的订单</h3>
			<div class="orders">
				<?php if(is_array($orders)): foreach($orders as $key=>$order): ?><div class="order">
					<p class="right amount">订单总额：<span><?php echo ($order["amount"]); ?></span>元</p>
					<div class="order-head">
						<p class="statu"><?php echo ($order["statuText"]); ?></p>
						<div class="detail">
							<ul>
								<li><?php echo (date("Y-m-d H:i",$order["starttime"])); ?></li>
								<li>订单号：<?php echo ($order["_id"]); ?></li>
							</ul>
						</div>
					</div>
					<div class="order-body">
						<div class="item">
							<div class="image"><img src="<?php echo ($order["items"]["0"]["item"]["pictures"]["0"]["src"]); ?>" alt=""></div>
							<div class="info">
								<p><a href="/mall/item/<?php echo ($order["items"]["0"]["item"]["_id"]); ?>" target="_blank"><?php echo ($order["items"]["0"]["item"]["title"]); ?> <?php echo ($order["items"]["0"]["optname"]); ?></a></p>
								<p><?php echo ($order["items"]["0"]["price"]); ?>元 x <?php echo ($order["items"]["0"]["num"]); ?></p>
							</div>
							<?php if(count($order['items']) > 1 ): ?><p class="others">还有<?php echo (count($order['items'])); ?>件商品</p><?php endif; ?>
						</div>
						<div class="order-btn right">
							<a class="btn" href="">订单详情</a>
						</div>
					</div>
					
				</div><?php endforeach; endif; ?>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function() {
			$('#action-list').find('a').eq(3).addClass('active');
		});
	</script>
</body>