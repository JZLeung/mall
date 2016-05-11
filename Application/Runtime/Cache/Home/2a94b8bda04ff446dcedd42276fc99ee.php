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
	<link href="/mall/Public/Admin/ad.css" rel="stylesheet" type="text/css"></head>
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

	<div class="top-list list">
		<div class="content-w clear">
		<div class="carousel" id="carousel">
            <div class="carousel-container" id="carousel-body">
            <?php if(is_array($advertise["carousel"])): foreach($advertise["carousel"] as $key=>$ad): ?><div class="carousel-item">
					<img src="/mall/<?php echo ($ad["picurl"]); ?>" alt="">
					<div class="carousel-panel">
						<h3 class="carousel-title"><?php echo ($ad["title"]); ?></h3>
						<div class="carousel-content"><?php echo ($ad["content"]); ?></div>
					</div>
				</div><?php endforeach; endif; ?>
        	</div>
			<div class="carousel-btns" id="carousel-btns">
				<div class="prevbtn clickbtn"><span></span></div>
				<div class="nextbtn clickbtn"><span></span></div>
            </div>
    	</div>
		</div>
	</div>
	<div class="star-list list clear">
		<div class="content-w" style="overflow-x: hidden;">
			<h1 class="header-2">明星产品</h1>
			<div class="star-content" id="star-content">
				<?php if(is_array($stars)): foreach($stars as $key=>$one): ?><div class="item item<?php echo ($key%5+1); ?>">
					<a href="/mall/item/<?php echo ($one['_id']); ?>"><img src="<?php echo ($one["pictures"]["0"]["src"]); ?>" alt=""></a>
					<p class="title"><?php echo ($one["title"]); ?></p>
					<p class="price"><?php echo ($one["price"]); ?> 元</p>
				</div><?php endforeach; endif; ?>
			</div>
		</div>
	</div>
	<div class="all-list clear">
		<div class="content-w">
			<h1 class="header-2">所有产品</h1>
			<?php if(is_array($data)): foreach($data as $key=>$item): ?><a class="left item" <?php echo ($key%5==0?'style="margin-left:0"':''); ?> href="item/<?php echo ($item['_id']); ?>">
					<img src="<?php echo ($item['pictures'][0]['src']); ?>" alt="<?php echo ($item['pictures'][0]['title']); ?>" class="image">
					<h4 class="title"><?php echo ($item["name"]); ?></h4>
					<p class="desc"><?php echo ($data["subscribe"]); ?></p>
					<p class="price"><?php echo ($item["price"]); ?>元</p>
				</a><?php endforeach; endif; ?>
		</div>
	</div>
	<script>
	(function(){
		var carousel = document.getElementById('carousel'),
			carouselBody = document.getElementById('carousel-body'),
			carouselBtn = document.getElementById('carousel-btns');
		var carouselItems,//carouselBody.querySelectorAll('.carousel-item'),
			count,
			step,
			index = 0;
		function init(){
			carouselItems = $('.carousel-item');
			count = carouselItems.length;
			carouselBody.style.width = count*100+'%';
			step = 1/count *100;
			for (var i = carouselItems.length - 1; i >= 0; i--) {
				carouselItems[i].style.width = step + '%';
			}
		}
		init();


		/*轮播*/
		var isHover = false,
			carouselTimer;
		carouselBtn.addEventListener('click', function(e){
			e = e || window.event;
			var target = e.target || e.srcElement,
				parent = target.tagName.toLowerCase() == 'div' ? target : target.parentElement;
			if (parent.classList.contains('prevbtn')) {
				index = index - 1 < 0 ? count -1 : index -1;
			}else{
				index = index + 1 == count ? 0 : index +1;
			}
			carouselBody.style.transform = 'translate(-'+ (index*step) +'%)';
		});
		$(carousel).hover(function() {
			isHover = true;
			carouselTimer = null;
			console.log('hover')
		}, function() {
			isHover = false;
			console.log('hover out')
			carouselTimer = setTimeout(carouselStart, 2500);
		});
    	function carouselStart(){
    		if (!isHover) {
    			index = index + 1 == count ? 0 : index +1;
    			carouselBody.style.transform = 'translate(-'+ (index*step) +'%)';
    			carouselTimer = setTimeout(carouselStart, 2500);
    		}else{
    			carouselTimer = null;
    		}
    	}
		carouselTimer = setTimeout(carouselStart, 2500);

		/*明星轮播*/
		var starTimer,
			starHover = false,
			starContent = document.getElementById('star-content');
		function toggleClass(ele, className){
			if (ele.classList.contains(className)) {
				ele.classList.remove(className);
			}else{
				ele.classList.add(className);
			}
		}
		function starCarousel(){
			if (!starHover) {
				toggleClass(starContent, 'move');
				starTimer = setTimeout(starCarousel, 2500);
			}else{
				starTimer = null;
			}
		}
		starTimer = setTimeout(starCarousel, 2500);
		$(starContent).hover(function() {
			console.log('star hover')
			starHover = !starHover;
			starTimer = null;
		}, function() {
			console.log('star hover out')
			starHover = !starHover;
			starTimer = setTimeout(starCarousel, 2500);
		});
	})();
	</script>
</body>
</html>