<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>商品页</title>
	<link rel="shortcut icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="/shop/Public/Common/css/reset.css">
	<link rel="stylesheet" href="/shop/Public/Common/css/common.css">
	<link rel="stylesheet" href="/shop/Public/Common/css/header.css">
	<link rel="stylesheet" href="/shop/Public/Common/css/items.css">
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
				<a href="/shop/login">登陆</a>
				<span class="dev">|</span>
				<a href="/shop/regist">注册</a><?php endif; ?>
		</div>
	</div>
</div>
<div class="nav2016">
	<div class="content-w clear">
		<div class="nav-logo">
			<a href="javascipt:;">
				<img src="/shop/Public/Common/images/mi-logo.jpg" alt="" class="logo">
			</a>
		</div>
		<div class="nav-bar left">
			<ul class="horizon-list clear">
				<li class="list-item"><a href="javascipt:;">分类1</a></li>
				<li class="list-item"><a href="javascipt:;">分类2</a></li>
				<li class="list-item"><a href="javascipt:;">分类3</a></li>
				<li class="list-item"><a href="javascipt:;">分类4</a></li>
				<li class="list-item"><a href="javascipt:;">分类5</a></li>
			</ul>
		</div>
		<div class="nav-search right">
				<input type="text" class="search left">
				<input type="submit" class="submit">
		</div>
	</div>
</div>

	<!-- 目录导航 -->
	<div class="head-nav">
		<div class="content-w">
			<a href="javascript:;">首页</a>
			<span class="nav-sub">/</span>
			<a href="javascript:;">配件</a>
			<span class="nav-sub">/</span>
			<a href="javascript:;">后盖</a>
			<span class="nav-sub">/</span>
			<a href="javascript:;">亮彩高光后盖</a>
		</div>
	</div>
	<div class="item-profile">
		<div class="content-w clear">
			<div class="left-pics clear left">
				<div class="pic-list left">
					<ul>
						<li class="active"><img src="/shop/Public/Common/images/items/test/1.jpg" alt=""></li>
						<li><img src="/shop/Public/Common/images/items/test/2.jpg" alt=""></li>
						<li><img src="/shop/Public/Common/images/items/test/3.jpg" alt=""></li>
					</ul>
				</div>
				<div class="pic-big left">
					<img src="/shop/Public/Common/images/items/test/1.jpg" alt="">
				</div>
			</div>
			<div class="right-docs left">
				<h2 class="item-title">亮彩高光后盖</h2>
				<div class="item-desc">
					<p>官方模具 优质触感</p>
					<p>适用于小米2a</p>
				</div>
				<div class="item-price">
					<strong>19</strong>元
				</div>
				<div class="item-other">
					<div class="item-other-1 clear">
						<p>颜色：橙色</p>
						<a href="javascript:;" class="other-item active"><img src="/shop/Public/Common/images/items/test/1.jpg" alt=""></a>
						<a href="javascript:;" class="other-item"><img src="/shop/Public/Common/images/items/test/1.jpg" alt=""></a>
						<a href="javascript:;" class="other-item"><img src="/shop/Public/Common/images/items/test/1.jpg" alt=""></a>
					</div>
				</div>
				<div class="item-other">
					<div class="item-other-1 clear">
						<p>颜色：橙色</p>
						<a href="javascript:;" class="other-item active"><img src="/shop/Public/Common/images/items/test/1.jpg" alt=""></a>
						<a href="javascript:;" class="other-item"><img src="/shop/Public/Common/images/items/test/1.jpg" alt=""></a>
						<a href="javascript:;" class="other-item"><img src="/shop/Public/Common/images/items/test/1.jpg" alt=""></a>
					</div>
				</div>
				<div class="item-buttons">
					<button class="btn btn-buy btn-confirm">加入购物车</button>
					<button class="btn btn-like btn-cancel">喜欢</button>
				</div>
				<div class="item-options flex">
					<a href="javascript:;">评论(888)</a>
					<span class="dev">|</span>
					<a href="javascript:;">提问(152)</a>
					<span class="dev">|</span>
					<a href="javascript:;">满意度(93.3%)</a>
				</div>
			</div>
		</div>
	</div>
	<div class="item-detail">
		<div class="content-w">
			<div class="classify flex">
				<a href="hrefjavascript:;">aaaaa</a>
				<span class="dev">|</span>
				<a href="hrefjavascript:;">aaaaa</a>
				<span class="dev">|</span>
				<a href="hrefjavascript:;">aaaaa</a>
				<span class="dev">|</span>
				<a href="hrefjavascript:;">aaaaa</a>
			</div>
		</div>
	</div>
</body>
</html>