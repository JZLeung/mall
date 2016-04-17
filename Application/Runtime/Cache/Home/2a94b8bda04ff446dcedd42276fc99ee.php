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
			<?php if($username): ?><a href="/mall/UserCenter"><?php echo ($username); ?></a>
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
	<!-- <div class="sale-list ">
		<div class="content-w flex">
			<div class="sale-item"><a  href="item/2" ><img src="/mall/Public/Common/images/2.jpg" alt=""></a></div>
			<div class="sale-item"><a  href="item/2" ><img src="/mall/Public/Common/images/2.jpg" alt=""></a></div>
			<div class="sale-item"><a  href="item/2" ><img src="/mall/Public/Common/images/2.jpg" alt=""></a></div>
			<div class="sale-item"><a  href="item/2" ><img src="/mall/Public/Common/images/2.jpg" alt=""></a></div>
		</div>
	</div> -->
	<div class="star-list clear">
		<div class="content-w">
			<h1 class="header-2">明星产品</h1>
			<?php if(is_array($data)): foreach($data as $key=>$item): ?><a class="left item" <?php echo ($key%5==0?'style="margin-left:0"':''); ?> href="item/<?php echo ($item['_id']); ?>">
					<img src="<?php echo ($item['pictures'][0]['src']); ?>" alt="<?php echo ($item['pictures'][0]['title']); ?>" class="image">
					<h4 class="title"><?php echo ($item["name"]); ?></h4>
					<p class="desc"><?php echo ($data["subscribe"]); ?></p>
					<p class="price"><?php echo ($item["price"]); ?>元</p>
				</a><?php endforeach; endif; ?>
			<!-- <div class="left item">
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
			</div> -->
		</div>
	</div>
	
</body>
</html>