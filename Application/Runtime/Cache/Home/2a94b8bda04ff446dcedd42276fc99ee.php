<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>首页</title>
	<link rel="shortcut icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="/mall/Public/Common/css/reset.css">
	
	<link rel="stylesheet" href="/mall/Public/Common/css/header.css">
	<link rel="stylesheet" href="/mall/Public/Common/css/index.css">
</head>
<body>
	
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
			<?php if($username): ?><a href="javascript:void(0)"><?php echo ($username); ?></a>
				<span class="dev">|</span>
				<a href="javascript:void(0)">退出</a>
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
			<a href="javascipt:;">
				<img src="/mall/Public/Common/images/mi-logo.jpg" alt="" class="logo">
			</a>
		</div>
		<div class="nav-bar left">
			<ul class="horizon-list clear">
				<li class="list-item">
					<a href="javascipt:;">分类1</a>
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
				</li>
			</ul>
		</div>
		<div class="nav-search right">
				<input type="text" class="search left">
				<input type="submit" class="submit">
		</div>
	</div>
</div>

	<div class="top-list">
		<div class="content-w clear">
			<div class="cursor-w">
				<ul class="horizon-list list">
					<li class="list-item"><img src="/mall/Public/Common/images/1.jpg" alt=""></li>
					<li class="list-item"><img src="/mall/Public/Common/images/1.jpg" alt=""></li>
					<li class="list-item"><img src="/mall/Public/Common/images/1.jpg" alt=""></li>
					<li class="list-item"><img src="/mall/Public/Common/images/1.jpg" alt=""></li>
					<li class="list-item"><img src="/mall/Public/Common/images/1.jpg" alt=""></li>
				</ul>
				<span class="nextbtn"></span>
				<span class="prevbtn"></span>
			</div>
		</div>
	</div>
	<div class="sale-list clear">
		<div class="content-w">
			<ul class="horizon-list list">
				<li class="list-item"><a href="item/3"><img src="/mall/Public/Common/images/2.jpg" alt=""></a></li>
				<li class="list-item"><a href="item/3"><img src="/mall/Public/Common/images/2.jpg" alt=""></a></li>
				<li class="list-item"><a href="item/3"><img src="/mall/Public/Common/images/2.jpg" alt=""></a></li>
				<li class="list-item"><a href="item/3"><img src="/mall/Public/Common/images/2.jpg" alt=""></a></li>
			</ul>
		</div>
	</div>
	<div class="star-list clear">
		<div class="content-w">
			<h1 class="header-2">明星产品</h1>
			<div class="left item">
				<img src="/mall/Public/Common/images/4c.jpg" alt="" class="image">
				<h4 class="title">小米4c</h4>
				<p class="desc">高通骁龙808，发烧专用</p>
				<p class="price">998元</p>
			</div>
			<div class="left item">
				<img src="/mall/Public/Common/images/4c.jpg" alt="" class="image">
				<h4 class="title">小米4c</h4>
				<p class="desc">高通骁龙808，发烧专用</p>
				<p class="price">998元</p>
			</div>
			<div class="left item">
				<img src="/mall/Public/Common/images/4c.jpg" alt="" class="image">
				<h4 class="title">小米4c</h4>
				<p class="desc">高通骁龙808，发烧专用</p>
				<p class="price">998元</p>
			</div>
			<div class="left item">
				<img src="/mall/Public/Common/images/4c.jpg" alt="" class="image">
				<h4 class="title">小米4c</h4>
				<p class="desc">高通骁龙808，发烧专用</p>
				<p class="price">998元</p>
			</div>
			<div class="left item">
				<img src="/mall/Public/Common/images/4c.jpg" alt="" class="image">
				<h4 class="title">小米4c</h4>
				<p class="desc">高通骁龙808，发烧专用</p>
				<p class="price">998元</p>
			</div>
		</div>
	</div>
	
</body>
</html>