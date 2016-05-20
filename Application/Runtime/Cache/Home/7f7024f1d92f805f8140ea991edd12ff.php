<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>订单详情页</title>
	<link rel="shortcut icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="/mall/Public/Common/css/reset.css">
	<link rel="stylesheet" href="/mall/Public/Common/css/common.css">
	<link rel="stylesheet" href="/mall/Public/Common/css/header.css">
	<link rel="stylesheet" href="/mall/Public/Common/css/user.css">
	<link rel="stylesheet" href="/mall/Public/Common/css/modal.css">
	<style>
		.hidden{display: none;}
		.user-center p{padding: 0;}
		.line-border{
			border-bottom: 1px solid #e0e0e0;
		}
		.line{
			padding: 10px 0;
			margin-bottom: 10px;
			font-size: 1.2em;
			color: #949494;
		}
		.line h4{
			font-size: 1.25em;
			line-height: 1.5em;
			color: #000;
		}
		.line h5{
			line-height: 1.5em;
			color: #000;
		}
		.line-items .image {
		    display: inline-block;
		    width: 60px;
		}
		.line-items .item {
			padding: 10px;
			box-sizing: border-box;

		}
		.line-items .item > div {
		    display: inline-block;
		    vertical-align: middle;
		}
		.line-info table{
			margin: 0; 
			border-spacing: 5px;
    		border-collapse: separate;
		}
		/* .line-items .info {
		    margin-left: 15px;
			max-width: 600px;
			overflow: hidden;
			white-space: nowrap;
			text-overflow: ellipsis;
		} */
		.line-items .info > *{
			display: inline-block;
			margin-left: 25px;
		}
		.line-items .info > *:nth-child(1){
			width: 555px;
			margin-left: 15px;
			overflow: hidden;
			white-space: nowrap;
			text-overflow: ellipsis;
		}
		.line .form {
			text-align: right;
		}
		.line .right{
			margin-right: 20px;
		}
		.line .form li{
			width: 250px;
			padding: 10px 0;
		}
		.line .form .title{
			width: 100px;
			display: inline-block;
		}
		.line .form .content{
			width: 120px;
			display: inline-block;
			color: #ff6700;
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
			<a href="javascript:;">订单详情页</a>
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
		<div class="user-center" style="padding: 40px;margin-bottom: 40px">
			<h3>订单详情页</h3>
			<div class="line line-id line-border"><h4>订单号：<?php echo ($order["_id"]); ?></h4></div>
			<div class="line line-statu">
				<h4><span class="statu"><?php echo ($order["statuText"]); ?></span></h4>
				<!-- <div class="progress"></div> -->
			</div>
			<div class="line line-items" id="items">
				<?php if(is_array($order["items"])): foreach($order["items"] as $key=>$item): ?><div class="item line-border">
						<div class="image"><img src="<?php echo ($item["item"]["pictures"]["0"]["src"]); ?>" alt=""></div>
						<div class="info">
							<span><a href="/mall/item/<?php echo ($item["item"]["_id"]); ?>" target="_blank"><?php echo ($item["item"]["title"]); ?> <?php echo ($item["optname"]); ?></a></span>
							<p><span class="price"><?php echo ($item["price"]); ?></span>元 x <span class="num"><?php echo ($item["num"]); ?></span></p>
						</div>
					</div><?php endforeach; endif; ?>
			</div>
			<div class="line line-info line-border">
				<h4>收货信息</h4>
				<table>
					<tr>
						<td>姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：</td>
						<td><?php echo ($address["name"]); ?></td>
					</tr>
					<tr>
						<td>联系电话：</td>
						<td><?php echo ($address["phone"]); ?></td>
					</tr>
					<tr>
						<td>收货地址：</td>
						<td><?php echo ($address["province"]); ?> <?php echo ($address["city"]); ?> <?php echo ($address["area"]); ?>,<?php echo ($address["detail"]); ?></td>
					</tr>
				</table>
			</div>
			<div class="line line-form clear">
			<div class="form right" id="confirm">
				<ul>
					<li>
						<div class="title">商品件数：</div>
						<div class="content"><span id="num"></span>件</div>
					</li>
					<li>
						<div class="title">金额总计：</div>
						<div class="content"><span id="amount"><?php echo ($order['amount']-$order['ship']); ?></span>元</div>
					</li>
					<li>
						<div class="title">运费：</div>
						<div class="content"><span id="ship"><?php echo ($order["ship"]); ?></span>元</div>
					</li>
					<li>
						<div class="title">实付总额：</div>
						<div class="content"><span id="all-amount" style="font-size: 32px;"><?php echo ($order["amount"]); ?></span>元</div>
					</li>
				</ul>
			</div>
		</div>
		</div>
	</div>
	<script>
		$(document).ready(function() {
			//$('#action-list').find('a').eq(3).addClass('active');
			var $items = $('#items')

			var count = 0,
				num = 0
			$items.find('.num').each(function(index, el) {
				var _this = $(this);
				num += _this.text() * 1;
				//count += _this.text()*1 * (_this.prev().text() *1);
				//console.log(count);
			});
			$('#num').text(num)
			//$('#amount').text(count)
			//var ship = count > 99 ? 0 : 10;
			//$('#ship').text(ship);
			//$('#all-amount').text(count + ship)
		});
	</script>
</body>