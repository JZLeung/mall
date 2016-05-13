<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>首页</title>
	<link rel="shortcut icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="/mall/Public/Common/css/reset.css">
	<link rel="stylesheet" href="/mall/Public/Common/css/common.css">
	<link rel="stylesheet" href="/mall/Public/Common/css/header.css">
	<link rel="stylesheet" href="/mall/Public/Common/css/index.css">
	<link rel="stylesheet" href="/mall/Public/Common/css/user.css">
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
		</nav>
		<?php if(empty($user)): ?><script>location.href = '/mall/login';</script><?php endif; ?>
<div class="sidebar left">
	<ul class="action-list" id="action-list">
		<span href="/mall/UserCenter" class="action action-head">个人中心</span>
		<a href="/mall/UserCenter" class="action">个人中心</a>
		<a href="/mall/Home/User/user_info" class="action">个人信息</a>
		<a href="/mall/Home/User/user_address" class="action">收货地址</a>
		<a href="/mall/Home/User/user_collect" class="action">喜欢的商品</a>
		<a href="/mall/myCart" class="action">购物车</a>
	</ul>
</div>
		<div class="user-center ">
			<div class="portrait left"><img src="/mall/Public/Common/images/default.jpg" alt=""></div>
			<div class="main-info clear">
				<div class="userinfo panel left">
					<h3 class="username"><?php echo ($user["username"]); ?></h3>
					<p style="margin-bottom: 10px;">晚上好</p>
					<p><a href="" class="active">修改个人信息 ></a></p>
				</div>
				<div class="userinfo panel left">
					<p>绑定邮箱：<?php echo ($user["eamil"]); ?></p>
					<p>绑定手机：<?php echo ($user["phone"]); ?></p>
				</div>
			</div>
			<div class="other-info clear">
				<div class="panel left">
					<div class="img left"><img src="/mall/Public/Common/images/portal-icon-1.png" alt=""></div>
					<div class="desc">
						<h3>待支付的订单：</h3>
						<p>查看待支付的订单 ></p>
					</div>
				</div>
				<div class="panel left">
					<div class="img left"><img src="/mall/Public/Common/images/portal-icon-2.png" alt=""></div>
					<div class="desc">
						<h3>待支付的订单：</h3>
						<p>查看待支付的订单 ></p>
					</div>
				</div>
				<div class="panel left">
					<div class="img left"><img src="/mall/Public/Common/images/portal-icon-3.png" alt=""></div>
					<div class="desc">
						<h3>待支付的订单：</h3>
						<p>查看待支付的订单 ></p>
					</div>
				</div>
				<div class="panel left">
					<div class="img left"><img src="/mall/Public/Common/images/portal-icon-4.png" alt=""></div>
					<div class="desc">
						<h3>待支付的订单：</h3>
						<p>查看待支付的订单 ></p>
					</div>
				</div>
				
			</div>
		</div>
	</div>
		<script>
		$(document).ready(function() {
			$('#action-list').find('a').eq(0).addClass('active');
		});
	</script>
</body>
</html>