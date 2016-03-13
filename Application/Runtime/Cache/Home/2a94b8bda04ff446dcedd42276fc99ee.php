<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>YOHO Buy</title>
	<link rel="shortcut icon" href="http://www.yohobuy.com/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="/tp/Public/css/common.css">
	<link rel="stylesheet" href="/tp/Public/css/header.css">
	<link rel="stylesheet" href="/tp/Public/css/index.css">
</head>
<body>
	<header class="header2016 light-gray clear ">
	<!-- 顶部 用户导航条 -->
	<div class="header-top m-width">
		<div class="left left-nav">
			<span class="nav-icon middle"></span>
			YOHO有货
		</div>
		<div class="right right-nav ">
			<ul class="horizon-list">
				<li>
					<?php if($user): ?>HI~你好，
						<a href="javascript:void(0)"><?php echo ($user); ?></a>
						<?php else: ?>
						HI~
						[<a href="login">请登录</a>]
						[<a href="regist">免费注册</a>]<?php endif; ?>
				</li>
				<li>
					<span class="diliver-left"></span>
					<a href="javascript:void(0)">MY有货</a>
				</li>
				<li>
					<span class="diliver-left"></span>
					<a href="javascript:void(0)">我的订单</a>
				</li>
				<li>
					<span class="diliver-left"></span>
					<a href="javascript:void(0)">我的收藏</a>
				</li>
				<li>
					<span class="diliver-left"></span>
					<a href="javascript:void(0)">消息</a>
				</li>
			</ul>
		</div>
	</div>
</header>
	<div class="header2016 clear">
	<div class="header-nav m-width">
		<!-- 主-导航条 -->
		<ul class="head-nav horizon-list">
			<!-- 分-导航条 -->
			<li class="active boys">
				<div class="main-item">
					<h3>男生</h3>
					<h3>BOYS</h3>
				</div>
				<div class="sub-nav">
					<!-- 次级-导航条 -->
					<ul class="sub-list horizon-list clear">
						<li class="sub-item">
							<a href="javascript:void(0)">新品速递</a>
						</li>
						<li class="sub-item">
							<a href="javascript:void(0)">品牌一览</a>
						</li>
						<li class="sub-item">
							<a href="javascript:void(0)">服饰</a>
							<!-- 细分-导航 -->
							<div class="detail-nav">
								<div class="catalogs-wrapper clear">
									<ul class="detail-list detail-list1">
										<li class="detail-title"><a href="">上装</a></li>
										<li class="detail-item"><a href="">夹克</a></li>
										<li class="detail-item"><a href="">大衣风衣</a></li>
										<li class="detail-item"><a href="">防风外套</a></li>
										<li class="detail-item"><a href="">卫衣</a></li>
										<li class="detail-item"><a href="">衬衫</a></li>
										<li class="detail-item"><a href="">毛衣针织</a></li>
										<li class="detail-title"><a href="">下装</a></li>
										<li class="detail-item"><a href="">休闲裤</a></li>
									</ul>
									<ul class="detail-list detail-list2">
										<li class="detail-item"><a href="">牛仔裤</a></li>
										<li class="detail-item"><a href="">运动裤</a></li>
										<li class="detail-item"><a href="">打底裤/紧身裤</a></li>
										<li class="detail-title"><a href="">经典款型</a></li>
										<li class="detail-item"><a href="">棒球夹克</a></li>
										<li class="detail-item"><a href="">羊毛大衣</a></li>
										<li class="detail-item"><a href="">街头防风外套</a></li>
										<li class="detail-item"><a href="">哈伦裤</a></li>
										<li class="detail-title"><a href="">热门品牌</a></li>
									</ul>
									<ul class="detail-list detail-list3">
										<li class="detail-item"><a href="">EVD</a></li>
										<li class="detail-item"><a href="">F.L.Y.D</a></li>
										<li class="detail-item"><a href="">ABLE JEANS</a></li>
										<li class="detail-item"><a href="">Life·After Life</a></li>
										<li class="detail-item"><a href="">into the rainbow</a></li>
										<li class="detail-item"><a href="">Improper</a></li>
										<li class="detail-item"><a href="">Eight Guys</a></li>
										<li class="detail-item"><a href="">SYS.tag</a></li>
										<li class="detail-item"><a href="">Preppy Elite</a></li>
									</ul>
									<div class="others right">
										<img src="/tp/Public/images/detail/fushi.jpg" alt="">
										<p class="center"><a href="">IN季新品全面开售</a></p>
									</div>
								</div>
							</div>
						</li>
						<li class="sub-item">
							<a href="javascript:void(0)">鞋履</a>
							<div class="detail-nav">
								<div class="catalogs-wrapper clear">
									<ul class="detail-list detail-list1">
										<li class="detail-title"><a href="">鞋履</a></li>
										<li class="detail-item"><a href="">休闲/运动鞋</a></li>
										<li class="detail-item"><a href="">靴子</a></li>
										<li class="detail-item"><a href="">时装鞋</a></li>
										<li class="detail-title"><a href="">热门款型</a></li>
										<li class="detail-item"><a href="">复古跑鞋</a></li>
										<li class="detail-item"><a href="">户外鞋</a></li>
										<li class="detail-item"><a href="">帆布鞋</a></li>
										<li class="detail-item"><a href="">人字拖</a></li>
									</ul>
									<ul class="detail-list detail-list2">
										<li class="detail-item"><a href="">雕花皮鞋</a></li>
										<li class="detail-title"><a href="">热门品牌</a></li>
										<li class="detail-item"><a href="">VANS</a></li>
										<li class="detail-title"><a href="">adidas Originals</a></li>
										<li class="detail-item"><a href="">Arubafootwear</a></li>
										<li class="detail-item"><a href="">New Balance</a></li>
										<li class="detail-item"><a href="">COLE HAAN</a></li>
										<li class="detail-item"><a href="">puma</a></li>
										<li class="detail-item"><a href="">wolverine</a></li>
									</ul>
									<ul class="detail-list detail-list3">
										<li class="detail-item"><a href="">Nike</a></li>
										<li class="detail-item"><a href="">converse</a></li>
										<li class="detail-item"><a href="">reebok</a></li>
										<li class="detail-item"><a href="">Master Plan</a></li>
										<li class="detail-item"><a href="">Ivyboi</a></li>
										<li class="detail-item"><a href="">GAWS FOOT</a></li>
										<li class="detail-item"><a href="">Eight Guys</a></li>
									</ul>
									<div class="others right">
										<img src="/tp/Public/images/detail/shoe.jpg" alt="">
										<p class="center"><a href="">人气鞋型</a></p>
									</div>
								</div>
							</div>
						</li>
						<li class="sub-item">
							<a href="javascript:void(0)">包袋</a>
							<div class="detail-nav">
								<div class="catalogs-wrapper clear">
									<ul class="detail-list detail-list1">
										<li class="detail-title"><a href="">包</a></li>
										<li class="detail-item"><a href="">双肩包</a></li>
										<li class="detail-item"><a href="">手拎包/单肩包</a></li>
										<li class="detail-item"><a href="">电脑包</a></li>
										<li class="detail-item"><a href="">钱包/卡包/手拿包</a></li>
										<li class="detail-item"><a href="">腰包</a></li>
										<li class="detail-title"><a href="">热门款型</a></li>
										<li class="detail-item"><a href="">帆布背包</a></li>
										<li class="detail-item"><a href="">拼色背包</a></li>
									</ul>
									<ul class="detail-list detail-list2">
										<li class="detail-item"><a href="">街头款单肩包</a></li>
										<li class="detail-item"><a href="">多口袋双肩包</a></li>
										<li class="detail-title"><a href="">热门品牌</a></li>
										<li class="detail-item"><a href="">立正LETDREAM</a></li>
										<li class="detail-item"><a href="">fostyle</a></li>
										<li class="detail-item"><a href="">G.ride</a></li>
										<li class="detail-item"><a href="">F5S</a></li>
										<li class="detail-item"><a href="">MACROPUS</a></li>
										<li class="detail-title"><a href="">Coole&Ciel</a></li>
									</ul>
									<ul class="detail-list detail-list3">
										<li class="detail-item"><a href="">Storm Stamps</a></li>
										<li class="detail-item"><a href="">FJALL RAVEN 北极狐</a></li>
										<li class="detail-item"><a href="">Herschel Supply</a></li>
										<li class="detail-item"><a href="">InterFool</a></li>
										<li class="detail-item"><a href="">Draconite</a></li>
										<li class="detail-item"><a href="">Jansport</a></li>
										<li class="detail-item"><a href="">LINE ARTISANAL匠线</a></li>
									</ul>
									<div class="others right">
										<img src="/tp/Public/images/detail/bag.jpg" alt="">
										<p class="center"><a href="">出街必备包袋集合</a></p>
									</div>
								</div>
							</div>
						</li>
						<li class="sub-item">
							<a href="javascript:void(0)">配饰·其他</a>
							<div class="detail-nav">
								<div class="catalogs-wrapper clear">
									<ul class="detail-list detail-list1">
										<li class="detail-title"><a href="">服饰</a></li>
										<li class="detail-item"><a href="">太阳镜/眼镜</a></li>
										<li class="detail-item"><a href="">帽子</a></li>
										<li class="detail-item"><a href="">袜子</a></li>
										<li class="detail-item"><a href="">手表</a></li>
										<li class="detail-title"><a href="">首饰</a></li>
										<li class="detail-item"><a href="">戒指</a></li>
										<li class="detail-item"><a href="">耳钉</a></li>
										<li class="detail-item"><a href="">手链</a></li>
									</ul>
									<ul class="detail-list detail-list2">
										<li class="detail-item"><a href="">项链</a></li>
										<li class="detail-title"><a href="">配饰</a></li>
										<li class="detail-item"><a href="">皮带/腰带</a></li>
										<li class="detail-item"><a href="">胸针/胸章</a></li>
										<li class="detail-item"><a href="">手机链/钥匙扣</a></li>
										<li class="detail-title"><a href="">热门品牌</a></li>
										<li class="detail-item"><a href="">RASEN family</a></li>
										<li class="detail-item"><a href="">VVQI我趣</a></li>
										<li class="detail-title"><a href="">热门品牌</a></li>
									</ul>
									<ul class="detail-list detail-list3">
										<li class="detail-item"><a href="">惊鸿阁</a></li>
										<li class="detail-item"><a href="">New Era</a></li>
										<li class="detail-item"><a href="">ABLE JEANS</a></li>
										<li class="detail-item"><a href="">Life·After Life</a></li>
										<li class="detail-item"><a href="">into the rainbow</a></li>
										<li class="detail-item"><a href="">Improper</a></li>
										<li class="detail-item"><a href="">Eight Guys</a></li>
										<li class="detail-item"><a href="">SYS.tag</a></li>
										<li class="detail-item"><a href="">Preppy Elite</a></li>
									</ul>
									<div class="others right">
										<img src="/tp/Public/images/detail/other.jpg" alt="">
										<p class="center"><a href="">热门小物优选</a></p>
									</div>
								</div>
							</div>
						</li>
						<li class="sub-item">
							<a href="javascript:void(0)">逛</a>
						</li>
						<li class="sub-item">
							<a href="javascript:void(0)">SALE</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="girls">
				<div class="main-item">
					<h3>女生</h3>
					<h3>GIRLS</h3>
				</div>
				<div class="sub-nav">
					<!-- 次级-导航条 -->
					<ul class="sub-list horizon-list clear">
						<li class="sub-item">
							<a href="javascript:void(0)">新品速递</a>
						</li>
						<li class="sub-item">
							<a href="javascript:void(0)">品牌一览</a>
						</li>
						<li class="sub-item">
							<a href="javascript:void(0)">服饰</a>
							<!-- 细分-导航 -->
							<div class="detail-nav">
								<div class="catalogs-wrapper clear">
									<ul class="detail-list detail-list1">
										<li class="detail-title"><a href="">上装</a></li>
										<li class="detail-item"><a href="">夹克</a></li>
										<li class="detail-item"><a href="">大衣风衣</a></li>
										<li class="detail-item"><a href="">防风外套</a></li>
										<li class="detail-item"><a href="">卫衣</a></li>
										<li class="detail-item"><a href="">衬衫</a></li>
										<li class="detail-item"><a href="">毛衣针织</a></li>
										<li class="detail-title"><a href="">下装</a></li>
										<li class="detail-item"><a href="">休闲裤</a></li>
									</ul>
									<ul class="detail-list detail-list2">
										<li class="detail-item"><a href="">牛仔裤</a></li>
										<li class="detail-item"><a href="">运动裤</a></li>
										<li class="detail-item"><a href="">打底裤/紧身裤</a></li>
										<li class="detail-title"><a href="">经典款型</a></li>
										<li class="detail-item"><a href="">棒球夹克</a></li>
										<li class="detail-item"><a href="">羊毛大衣</a></li>
										<li class="detail-item"><a href="">街头防风外套</a></li>
										<li class="detail-item"><a href="">哈伦裤</a></li>
										<li class="detail-title"><a href="">热门品牌</a></li>
									</ul>
									<ul class="detail-list detail-list3">
										<li class="detail-item"><a href="">EVD</a></li>
										<li class="detail-item"><a href="">F.L.Y.D</a></li>
										<li class="detail-item"><a href="">ABLE JEANS</a></li>
										<li class="detail-item"><a href="">Life·After Life</a></li>
										<li class="detail-item"><a href="">into the rainbow</a></li>
										<li class="detail-item"><a href="">Improper</a></li>
										<li class="detail-item"><a href="">Eight Guys</a></li>
										<li class="detail-item"><a href="">SYS.tag</a></li>
										<li class="detail-item"><a href="">Preppy Elite</a></li>
									</ul>
									<div class="others right">
										<img src="/tp/Public/images/detail/fushi.jpg" alt="">
										<p class="center"><a href="">IN季新品全面开售</a></p>
									</div>
								</div>
							</div>
						</li>
						<li class="sub-item">
							<a href="javascript:void(0)">鞋履</a>
							<div class="detail-nav">
								<div class="catalogs-wrapper clear">
									<ul class="detail-list detail-list1">
										<li class="detail-title"><a href="">鞋履</a></li>
										<li class="detail-item"><a href="">休闲/运动鞋</a></li>
										<li class="detail-item"><a href="">靴子</a></li>
										<li class="detail-item"><a href="">时装鞋</a></li>
										<li class="detail-title"><a href="">热门款型</a></li>
										<li class="detail-item"><a href="">复古跑鞋</a></li>
										<li class="detail-item"><a href="">户外鞋</a></li>
										<li class="detail-item"><a href="">帆布鞋</a></li>
										<li class="detail-item"><a href="">人字拖</a></li>
									</ul>
									<ul class="detail-list detail-list2">
										<li class="detail-item"><a href="">牛仔裤</a></li>
										<li class="detail-item"><a href="">运动裤</a></li>
										<li class="detail-item"><a href="">打底裤/紧身裤</a></li>
										<li class="detail-title"><a href="">经典款型</a></li>
										<li class="detail-item"><a href="">棒球夹克</a></li>
										<li class="detail-item"><a href="">羊毛大衣</a></li>
										<li class="detail-item"><a href="">街头防风外套</a></li>
										<li class="detail-item"><a href="">哈伦裤</a></li>
										<li class="detail-title"><a href="">热门品牌</a></li>
									</ul>
									<ul class="detail-list detail-list3">
										<li class="detail-item"><a href="">EVD</a></li>
										<li class="detail-item"><a href="">F.L.Y.D</a></li>
										<li class="detail-item"><a href="">ABLE JEANS</a></li>
										<li class="detail-item"><a href="">Life·After Life</a></li>
										<li class="detail-item"><a href="">into the rainbow</a></li>
										<li class="detail-item"><a href="">Improper</a></li>
										<li class="detail-item"><a href="">Eight Guys</a></li>
										<li class="detail-item"><a href="">SYS.tag</a></li>
										<li class="detail-item"><a href="">Preppy Elite</a></li>
									</ul>
									<div class="others right">
										<img src="/tp/Public/images/detail/shoe.jpg" alt="">
										<p class="center"><a href="">人气鞋型</a></p>
									</div>
								</div>
							</div>
						</li>
						<li class="sub-item">
							<a href="javascript:void(0)">包袋</a>
							<div class="detail-nav">
								<div class="catalogs-wrapper clear">
									<ul class="detail-list detail-list1">
										<li class="detail-title"><a href="">鞋履</a></li>
										<li class="detail-item"><a href="">休闲/运动鞋</a></li>
										<li class="detail-item"><a href="">靴子</a></li>
										<li class="detail-item"><a href="">时装鞋</a></li>
										<li class="detail-title"><a href="">热门款型</a></li>
										<li class="detail-item"><a href="">复古跑鞋</a></li>
										<li class="detail-item"><a href="">户外鞋</a></li>
										<li class="detail-item"><a href="">帆布鞋</a></li>
										<li class="detail-item"><a href="">人字拖</a></li>
									</ul>
									<ul class="detail-list detail-list2">
										<li class="detail-item"><a href="">牛仔裤</a></li>
										<li class="detail-item"><a href="">运动裤</a></li>
										<li class="detail-item"><a href="">打底裤/紧身裤</a></li>
										<li class="detail-title"><a href="">经典款型</a></li>
										<li class="detail-item"><a href="">棒球夹克</a></li>
										<li class="detail-item"><a href="">羊毛大衣</a></li>
										<li class="detail-item"><a href="">街头防风外套</a></li>
										<li class="detail-item"><a href="">哈伦裤</a></li>
										<li class="detail-title"><a href="">热门品牌</a></li>
									</ul>
									<ul class="detail-list detail-list3">
										<li class="detail-item"><a href="">EVD</a></li>
										<li class="detail-item"><a href="">F.L.Y.D</a></li>
										<li class="detail-item"><a href="">ABLE JEANS</a></li>
										<li class="detail-item"><a href="">Life·After Life</a></li>
										<li class="detail-item"><a href="">into the rainbow</a></li>
										<li class="detail-item"><a href="">Improper</a></li>
										<li class="detail-item"><a href="">Eight Guys</a></li>
										<li class="detail-item"><a href="">SYS.tag</a></li>
										<li class="detail-item"><a href="">Preppy Elite</a></li>
									</ul>
									<div class="others right">
										<img src="/tp/Public/images/detail/bag.jpg" alt="">
										<p class="center"><a href="">出街必备包袋集合</a></p>
									</div>
								</div>
							</div>
						</li>
						<li class="sub-item">
							<a href="javascript:void(0)">配饰·其他</a>
							<div class="detail-nav">
								<div class="catalogs-wrapper clear">
									<ul class="detail-list detail-list1">
										<li class="detail-title"><a href="">鞋履</a></li>
										<li class="detail-item"><a href="">休闲/运动鞋</a></li>
										<li class="detail-item"><a href="">靴子</a></li>
										<li class="detail-item"><a href="">时装鞋</a></li>
										<li class="detail-title"><a href="">热门款型</a></li>
										<li class="detail-item"><a href="">复古跑鞋</a></li>
										<li class="detail-item"><a href="">户外鞋</a></li>
										<li class="detail-item"><a href="">帆布鞋</a></li>
										<li class="detail-item"><a href="">人字拖</a></li>
									</ul>
									<ul class="detail-list detail-list2">
										<li class="detail-item"><a href="">牛仔裤</a></li>
										<li class="detail-item"><a href="">运动裤</a></li>
										<li class="detail-item"><a href="">打底裤/紧身裤</a></li>
										<li class="detail-title"><a href="">经典款型</a></li>
										<li class="detail-item"><a href="">棒球夹克</a></li>
										<li class="detail-item"><a href="">羊毛大衣</a></li>
										<li class="detail-item"><a href="">街头防风外套</a></li>
										<li class="detail-item"><a href="">哈伦裤</a></li>
										<li class="detail-title"><a href="">热门品牌</a></li>
									</ul>
									<ul class="detail-list detail-list3">
										<li class="detail-item"><a href="">EVD</a></li>
										<li class="detail-item"><a href="">F.L.Y.D</a></li>
										<li class="detail-item"><a href="">ABLE JEANS</a></li>
										<li class="detail-item"><a href="">Life·After Life</a></li>
										<li class="detail-item"><a href="">into the rainbow</a></li>
										<li class="detail-item"><a href="">Improper</a></li>
										<li class="detail-item"><a href="">Eight Guys</a></li>
										<li class="detail-item"><a href="">SYS.tag</a></li>
										<li class="detail-item"><a href="">Preppy Elite</a></li>
									</ul>
									<div class="others right">
										<img src="/tp/Public/images/detail/other.jpg" alt="">
										<p class="center"><a href="">热门小物优选</a></p>
									</div>
								</div>
							</div>
						</li>
						<li class="sub-item">
							<a href="javascript:void(0)">逛</a>
						</li>
						<li class="sub-item">
							<a href="javascript:void(0)">SALE</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="kids">
				<div class="main-item">
					<h3>潮童</h3>
					<h3>KIDS</h3>
				</div>
				<div class="sub-nav">
					<!-- 次级-导航条 -->
					<ul class="sub-list horizon-list clear">
						<li class="sub-item">
							<a href="javascript:void(0)">新品速递</a>
						</li>
						<li class="sub-item">
							<a href="javascript:void(0)">品牌一览</a>
						</li>
						<li class="sub-item">
							<a href="javascript:void(0)">服饰</a>
							<!-- 细分-导航 -->
							<div class="detail-nav">
								<div class="catalogs-wrapper clear">
									<ul class="detail-list detail-list1">
										<li class="detail-title"><a href="">上装</a></li>
										<li class="detail-item"><a href="">夹克</a></li>
										<li class="detail-item"><a href="">大衣风衣</a></li>
										<li class="detail-item"><a href="">防风外套</a></li>
										<li class="detail-item"><a href="">卫衣</a></li>
										<li class="detail-item"><a href="">衬衫</a></li>
										<li class="detail-item"><a href="">毛衣针织</a></li>
										<li class="detail-title"><a href="">下装</a></li>
										<li class="detail-item"><a href="">休闲裤</a></li>
									</ul>
									<ul class="detail-list detail-list2">
										<li class="detail-item"><a href="">牛仔裤</a></li>
										<li class="detail-item"><a href="">运动裤</a></li>
										<li class="detail-item"><a href="">打底裤/紧身裤</a></li>
										<li class="detail-title"><a href="">经典款型</a></li>
										<li class="detail-item"><a href="">棒球夹克</a></li>
										<li class="detail-item"><a href="">羊毛大衣</a></li>
										<li class="detail-item"><a href="">街头防风外套</a></li>
										<li class="detail-item"><a href="">哈伦裤</a></li>
										<li class="detail-title"><a href="">热门品牌</a></li>
									</ul>
									<ul class="detail-list detail-list3">
										<li class="detail-item"><a href="">EVD</a></li>
										<li class="detail-item"><a href="">F.L.Y.D</a></li>
										<li class="detail-item"><a href="">ABLE JEANS</a></li>
										<li class="detail-item"><a href="">Life·After Life</a></li>
										<li class="detail-item"><a href="">into the rainbow</a></li>
										<li class="detail-item"><a href="">Improper</a></li>
										<li class="detail-item"><a href="">Eight Guys</a></li>
										<li class="detail-item"><a href="">SYS.tag</a></li>
										<li class="detail-item"><a href="">Preppy Elite</a></li>
									</ul>
									<div class="others right">
										<img src="/tp/Public/images/detail/fushi.jpg" alt="">
										<p class="center"><a href="">IN季新品全面开售</a></p>
									</div>
								</div>
							</div>
						</li>
						<li class="sub-item">
							<a href="javascript:void(0)">鞋履</a>
							<div class="detail-nav">
								<div class="catalogs-wrapper clear">
									<ul class="detail-list detail-list1">
										<li class="detail-title"><a href="">鞋履</a></li>
										<li class="detail-item"><a href="">休闲/运动鞋</a></li>
										<li class="detail-item"><a href="">靴子</a></li>
										<li class="detail-item"><a href="">时装鞋</a></li>
										<li class="detail-title"><a href="">热门款型</a></li>
										<li class="detail-item"><a href="">复古跑鞋</a></li>
										<li class="detail-item"><a href="">户外鞋</a></li>
										<li class="detail-item"><a href="">帆布鞋</a></li>
										<li class="detail-item"><a href="">人字拖</a></li>
									</ul>
									<ul class="detail-list detail-list2">
										<li class="detail-item"><a href="">牛仔裤</a></li>
										<li class="detail-item"><a href="">运动裤</a></li>
										<li class="detail-item"><a href="">打底裤/紧身裤</a></li>
										<li class="detail-title"><a href="">经典款型</a></li>
										<li class="detail-item"><a href="">棒球夹克</a></li>
										<li class="detail-item"><a href="">羊毛大衣</a></li>
										<li class="detail-item"><a href="">街头防风外套</a></li>
										<li class="detail-item"><a href="">哈伦裤</a></li>
										<li class="detail-title"><a href="">热门品牌</a></li>
									</ul>
									<ul class="detail-list detail-list3">
										<li class="detail-item"><a href="">EVD</a></li>
										<li class="detail-item"><a href="">F.L.Y.D</a></li>
										<li class="detail-item"><a href="">ABLE JEANS</a></li>
										<li class="detail-item"><a href="">Life·After Life</a></li>
										<li class="detail-item"><a href="">into the rainbow</a></li>
										<li class="detail-item"><a href="">Improper</a></li>
										<li class="detail-item"><a href="">Eight Guys</a></li>
										<li class="detail-item"><a href="">SYS.tag</a></li>
										<li class="detail-item"><a href="">Preppy Elite</a></li>
									</ul>
									<div class="others right">
										<img src="/tp/Public/images/detail/shoe.jpg" alt="">
										<p class="center"><a href="">人气鞋型</a></p>
									</div>
								</div>
							</div>
						</li>
						<li class="sub-item">
							<a href="javascript:void(0)">包袋</a>
							<div class="detail-nav">
								<div class="catalogs-wrapper clear">
									<ul class="detail-list detail-list1">
										<li class="detail-title"><a href="">鞋履</a></li>
										<li class="detail-item"><a href="">休闲/运动鞋</a></li>
										<li class="detail-item"><a href="">靴子</a></li>
										<li class="detail-item"><a href="">时装鞋</a></li>
										<li class="detail-title"><a href="">热门款型</a></li>
										<li class="detail-item"><a href="">复古跑鞋</a></li>
										<li class="detail-item"><a href="">户外鞋</a></li>
										<li class="detail-item"><a href="">帆布鞋</a></li>
										<li class="detail-item"><a href="">人字拖</a></li>
									</ul>
									<ul class="detail-list detail-list2">
										<li class="detail-item"><a href="">牛仔裤</a></li>
										<li class="detail-item"><a href="">运动裤</a></li>
										<li class="detail-item"><a href="">打底裤/紧身裤</a></li>
										<li class="detail-title"><a href="">经典款型</a></li>
										<li class="detail-item"><a href="">棒球夹克</a></li>
										<li class="detail-item"><a href="">羊毛大衣</a></li>
										<li class="detail-item"><a href="">街头防风外套</a></li>
										<li class="detail-item"><a href="">哈伦裤</a></li>
										<li class="detail-title"><a href="">热门品牌</a></li>
									</ul>
									<ul class="detail-list detail-list3">
										<li class="detail-item"><a href="">EVD</a></li>
										<li class="detail-item"><a href="">F.L.Y.D</a></li>
										<li class="detail-item"><a href="">ABLE JEANS</a></li>
										<li class="detail-item"><a href="">Life·After Life</a></li>
										<li class="detail-item"><a href="">into the rainbow</a></li>
										<li class="detail-item"><a href="">Improper</a></li>
										<li class="detail-item"><a href="">Eight Guys</a></li>
										<li class="detail-item"><a href="">SYS.tag</a></li>
										<li class="detail-item"><a href="">Preppy Elite</a></li>
									</ul>
									<div class="others right">
										<img src="/tp/Public/images/detail/bag.jpg" alt="">
										<p class="center"><a href="">出街必备包袋集合</a></p>
									</div>
								</div>
							</div>
						</li>
						<li class="sub-item">
							<a href="javascript:void(0)">配饰·其他</a>
							<div class="detail-nav">
								<div class="catalogs-wrapper clear">
									<ul class="detail-list detail-list1">
										<li class="detail-title"><a href="">鞋履</a></li>
										<li class="detail-item"><a href="">休闲/运动鞋</a></li>
										<li class="detail-item"><a href="">靴子</a></li>
										<li class="detail-item"><a href="">时装鞋</a></li>
										<li class="detail-title"><a href="">热门款型</a></li>
										<li class="detail-item"><a href="">复古跑鞋</a></li>
										<li class="detail-item"><a href="">户外鞋</a></li>
										<li class="detail-item"><a href="">帆布鞋</a></li>
										<li class="detail-item"><a href="">人字拖</a></li>
									</ul>
									<ul class="detail-list detail-list2">
										<li class="detail-item"><a href="">牛仔裤</a></li>
										<li class="detail-item"><a href="">运动裤</a></li>
										<li class="detail-item"><a href="">打底裤/紧身裤</a></li>
										<li class="detail-title"><a href="">经典款型</a></li>
										<li class="detail-item"><a href="">棒球夹克</a></li>
										<li class="detail-item"><a href="">羊毛大衣</a></li>
										<li class="detail-item"><a href="">街头防风外套</a></li>
										<li class="detail-item"><a href="">哈伦裤</a></li>
										<li class="detail-title"><a href="">热门品牌</a></li>
									</ul>
									<ul class="detail-list detail-list3">
										<li class="detail-item"><a href="">EVD</a></li>
										<li class="detail-item"><a href="">F.L.Y.D</a></li>
										<li class="detail-item"><a href="">ABLE JEANS</a></li>
										<li class="detail-item"><a href="">Life·After Life</a></li>
										<li class="detail-item"><a href="">into the rainbow</a></li>
										<li class="detail-item"><a href="">Improper</a></li>
										<li class="detail-item"><a href="">Eight Guys</a></li>
										<li class="detail-item"><a href="">SYS.tag</a></li>
										<li class="detail-item"><a href="">Preppy Elite</a></li>
									</ul>
									<div class="others right">
										<img src="/tp/Public/images/detail/other.jpg" alt="">
										<p class="center"><a href="">热门小物优选</a></p>
									</div>
								</div>
							</div>
						</li>
						<li class="sub-item">
							<a href="javascript:void(0)">逛</a>
						</li>
						<li class="sub-item">
							<a href="javascript:void(0)">SALE</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="lifestyle">
				<div class="main-item">
					<h3>创意生活</h3>
					<h3>LIFE STYLE</h3>
				</div>
				<div class="sub-nav">
					<!-- 次级-导航条 -->
					<ul class="sub-list horizon-list clear">
						<li class="sub-item">
							<a href="javascript:void(0)">新品速递</a>
						</li>
						<li class="sub-item">
							<a href="javascript:void(0)">品牌一览</a>
						</li>
						<li class="sub-item">
							<a href="javascript:void(0)">服饰</a>
							<!-- 细分-导航 -->
							<div class="detail-nav">
								<div class="catalogs-wrapper clear">
									<ul class="detail-list detail-list1">
										<li class="detail-title"><a href="">上装</a></li>
										<li class="detail-item"><a href="">夹克</a></li>
										<li class="detail-item"><a href="">大衣风衣</a></li>
										<li class="detail-item"><a href="">防风外套</a></li>
										<li class="detail-item"><a href="">卫衣</a></li>
										<li class="detail-item"><a href="">衬衫</a></li>
										<li class="detail-item"><a href="">毛衣针织</a></li>
										<li class="detail-title"><a href="">下装</a></li>
										<li class="detail-item"><a href="">休闲裤</a></li>
									</ul>
									<ul class="detail-list detail-list2">
										<li class="detail-item"><a href="">牛仔裤</a></li>
										<li class="detail-item"><a href="">运动裤</a></li>
										<li class="detail-item"><a href="">打底裤/紧身裤</a></li>
										<li class="detail-title"><a href="">经典款型</a></li>
										<li class="detail-item"><a href="">棒球夹克</a></li>
										<li class="detail-item"><a href="">羊毛大衣</a></li>
										<li class="detail-item"><a href="">街头防风外套</a></li>
										<li class="detail-item"><a href="">哈伦裤</a></li>
										<li class="detail-title"><a href="">热门品牌</a></li>
									</ul>
									<ul class="detail-list detail-list3">
										<li class="detail-item"><a href="">EVD</a></li>
										<li class="detail-item"><a href="">F.L.Y.D</a></li>
										<li class="detail-item"><a href="">ABLE JEANS</a></li>
										<li class="detail-item"><a href="">Life·After Life</a></li>
										<li class="detail-item"><a href="">into the rainbow</a></li>
										<li class="detail-item"><a href="">Improper</a></li>
										<li class="detail-item"><a href="">Eight Guys</a></li>
										<li class="detail-item"><a href="">SYS.tag</a></li>
										<li class="detail-item"><a href="">Preppy Elite</a></li>
									</ul>
									<div class="others right">
										<img src="/tp/Public/images/detail/fushi.jpg" alt="">
										<p class="center"><a href="">IN季新品全面开售</a></p>
									</div>
								</div>
							</div>
						</li>
						<li class="sub-item">
							<a href="javascript:void(0)">鞋履</a>
							<div class="detail-nav">
								<div class="catalogs-wrapper clear">
									<ul class="detail-list detail-list1">
										<li class="detail-title"><a href="">鞋履</a></li>
										<li class="detail-item"><a href="">休闲/运动鞋</a></li>
										<li class="detail-item"><a href="">靴子</a></li>
										<li class="detail-item"><a href="">时装鞋</a></li>
										<li class="detail-title"><a href="">热门款型</a></li>
										<li class="detail-item"><a href="">复古跑鞋</a></li>
										<li class="detail-item"><a href="">户外鞋</a></li>
										<li class="detail-item"><a href="">帆布鞋</a></li>
										<li class="detail-item"><a href="">人字拖</a></li>
									</ul>
									<ul class="detail-list detail-list2">
										<li class="detail-item"><a href="">牛仔裤</a></li>
										<li class="detail-item"><a href="">运动裤</a></li>
										<li class="detail-item"><a href="">打底裤/紧身裤</a></li>
										<li class="detail-title"><a href="">经典款型</a></li>
										<li class="detail-item"><a href="">棒球夹克</a></li>
										<li class="detail-item"><a href="">羊毛大衣</a></li>
										<li class="detail-item"><a href="">街头防风外套</a></li>
										<li class="detail-item"><a href="">哈伦裤</a></li>
										<li class="detail-title"><a href="">热门品牌</a></li>
									</ul>
									<ul class="detail-list detail-list3">
										<li class="detail-item"><a href="">EVD</a></li>
										<li class="detail-item"><a href="">F.L.Y.D</a></li>
										<li class="detail-item"><a href="">ABLE JEANS</a></li>
										<li class="detail-item"><a href="">Life·After Life</a></li>
										<li class="detail-item"><a href="">into the rainbow</a></li>
										<li class="detail-item"><a href="">Improper</a></li>
										<li class="detail-item"><a href="">Eight Guys</a></li>
										<li class="detail-item"><a href="">SYS.tag</a></li>
										<li class="detail-item"><a href="">Preppy Elite</a></li>
									</ul>
									<div class="others right">
										<img src="/tp/Public/images/detail/shoe.jpg" alt="">
										<p class="center"><a href="">人气鞋型</a></p>
									</div>
								</div>
							</div>
						</li>
						<li class="sub-item">
							<a href="javascript:void(0)">包袋</a>
							<div class="detail-nav">
								<div class="catalogs-wrapper clear">
									<ul class="detail-list detail-list1">
										<li class="detail-title"><a href="">鞋履</a></li>
										<li class="detail-item"><a href="">休闲/运动鞋</a></li>
										<li class="detail-item"><a href="">靴子</a></li>
										<li class="detail-item"><a href="">时装鞋</a></li>
										<li class="detail-title"><a href="">热门款型</a></li>
										<li class="detail-item"><a href="">复古跑鞋</a></li>
										<li class="detail-item"><a href="">户外鞋</a></li>
										<li class="detail-item"><a href="">帆布鞋</a></li>
										<li class="detail-item"><a href="">人字拖</a></li>
									</ul>
									<ul class="detail-list detail-list2">
										<li class="detail-item"><a href="">牛仔裤</a></li>
										<li class="detail-item"><a href="">运动裤</a></li>
										<li class="detail-item"><a href="">打底裤/紧身裤</a></li>
										<li class="detail-title"><a href="">经典款型</a></li>
										<li class="detail-item"><a href="">棒球夹克</a></li>
										<li class="detail-item"><a href="">羊毛大衣</a></li>
										<li class="detail-item"><a href="">街头防风外套</a></li>
										<li class="detail-item"><a href="">哈伦裤</a></li>
										<li class="detail-title"><a href="">热门品牌</a></li>
									</ul>
									<ul class="detail-list detail-list3">
										<li class="detail-item"><a href="">EVD</a></li>
										<li class="detail-item"><a href="">F.L.Y.D</a></li>
										<li class="detail-item"><a href="">ABLE JEANS</a></li>
										<li class="detail-item"><a href="">Life·After Life</a></li>
										<li class="detail-item"><a href="">into the rainbow</a></li>
										<li class="detail-item"><a href="">Improper</a></li>
										<li class="detail-item"><a href="">Eight Guys</a></li>
										<li class="detail-item"><a href="">SYS.tag</a></li>
										<li class="detail-item"><a href="">Preppy Elite</a></li>
									</ul>
									<div class="others right">
										<img src="/tp/Public/images/detail/bag.jpg" alt="">
										<p class="center"><a href="">出街必备包袋集合</a></p>
									</div>
								</div>
							</div>
						</li>
						<li class="sub-item">
							<a href="javascript:void(0)">配饰·其他</a>
							<div class="detail-nav">
								<div class="catalogs-wrapper clear">
									<ul class="detail-list detail-list1">
										<li class="detail-title"><a href="">鞋履</a></li>
										<li class="detail-item"><a href="">休闲/运动鞋</a></li>
										<li class="detail-item"><a href="">靴子</a></li>
										<li class="detail-item"><a href="">时装鞋</a></li>
										<li class="detail-title"><a href="">热门款型</a></li>
										<li class="detail-item"><a href="">复古跑鞋</a></li>
										<li class="detail-item"><a href="">户外鞋</a></li>
										<li class="detail-item"><a href="">帆布鞋</a></li>
										<li class="detail-item"><a href="">人字拖</a></li>
									</ul>
									<ul class="detail-list detail-list2">
										<li class="detail-item"><a href="">牛仔裤</a></li>
										<li class="detail-item"><a href="">运动裤</a></li>
										<li class="detail-item"><a href="">打底裤/紧身裤</a></li>
										<li class="detail-title"><a href="">经典款型</a></li>
										<li class="detail-item"><a href="">棒球夹克</a></li>
										<li class="detail-item"><a href="">羊毛大衣</a></li>
										<li class="detail-item"><a href="">街头防风外套</a></li>
										<li class="detail-item"><a href="">哈伦裤</a></li>
										<li class="detail-title"><a href="">热门品牌</a></li>
									</ul>
									<ul class="detail-list detail-list3">
										<li class="detail-item"><a href="">EVD</a></li>
										<li class="detail-item"><a href="">F.L.Y.D</a></li>
										<li class="detail-item"><a href="">ABLE JEANS</a></li>
										<li class="detail-item"><a href="">Life·After Life</a></li>
										<li class="detail-item"><a href="">into the rainbow</a></li>
										<li class="detail-item"><a href="">Improper</a></li>
										<li class="detail-item"><a href="">Eight Guys</a></li>
										<li class="detail-item"><a href="">SYS.tag</a></li>
										<li class="detail-item"><a href="">Preppy Elite</a></li>
									</ul>
									<div class="others right">
										<img src="/tp/Public/images/detail/other.jpg" alt="">
										<p class="center"><a href="">热门小物优选</a></p>
									</div>
								</div>
							</div>
						</li>
						<li class="sub-item">
							<a href="javascript:void(0)">逛</a>
						</li>
						<li class="sub-item">
							<a href="javascript:void(0)">SALE</a>
						</li>
					</ul>
				</div>
			</li>
		</ul>
		<a href="javascript:void(0)" class="head-logo">
			<img src="http://static.yohobuy.com/newheader/img/logo_e.png" alt="">
		</a>
		<div class="search-box right" style="border: 1px solid #555;">
			<form action="">
				<input type="text" style="width:15em;padding: 5px 10px">
				<input type="submit" value="search" class="btn search-btn" style="background-color: #555;color: #fff;">
			</form>
		</div>
	</div>
</div>
	<div class="header2016 head-banner m-width">
		<span class="prev-btn"></span>
		<span class="next-btn"></span>
		<ul class="banner-list horizon-list clear">
			<li>
				<a href="javascript:void(0)">
					<img src="/tp/Public/images/banner/1.jpg" alt="">
				</a>
			</li>
			<li><a href="javascript:void(0)">
					<img src="/tp/Public/images/banner/2.png" alt="">
				</a>
			</li>
			<li><a href="javascript:void(0)">
					<img src="/tp/Public/images/banner/3.jpg" alt="">
				</a>
			</li>
			<li><a href="javascript:void(0)">
					<img src="/tp/Public/images/banner/4.png" alt="">
				</a>
			</li>
			<li><a href="javascript:void(0)">
					<img src="/tp/Public/images/banner/5.jpg" alt="">
				</a>
			</li>
			<li><a href="javascript:void(0)">
					<img src="/tp/Public/images/banner/6.jpg" alt="">
				</a>
			</li>
		</ul>
		<ul class="banner-small-list horizon-list clear">
			<li><a href="javascript:void(0)"><img src="/tp/Public/images/banner/1-s.png" alt=""></a></li>
			<li><a href="javascript:void(0)"><img src="/tp/Public/images/banner/2-s.png" alt=""></a></li>
			<li><a href="javascript:void(0)"><img src="/tp/Public/images/banner/3-s.png" alt=""></a></li>
			<li><a href="javascript:void(0)"><img src="/tp/Public/images/banner/4-s.png" alt=""></a></li>
			<li><a href="javascript:void(0)"><img src="/tp/Public/images/banner/5-s.jpg" alt=""></a></li>
			<li><a href="javascript:void(0)"><img src="/tp/Public/images/banner/6-s.jpg" alt=""></a></li>
		</ul>
	</div>
	<div class="container m-width">
		<div class="index-list clear">
			<div class="head">
				<h2>优选品牌</h2>
				<div class="right right-list">
					<a href="">品牌1</a>
					<span>|</span>
					<a href="">品牌2</a>
					<span>|</span>
					<a href="">品牌3</a>
					<span>|</span>
					<a href="">品牌4</a>
				</div>
			</div>
			<div class="detail">
				<ul class="detail-list detail-list1 horizon-list">
					<li><a href="javascript:void(0)"><img src="/tp/Public/images/index1/1.png" alt=""></a></li>
					<li><a href="javascript:void(0)"><img src="/tp/Public/images/index1/2.jpg" alt=""></a></li>
					<li><a href="javascript:void(0)"><img src="/tp/Public/images/index1/3.jpg" alt=""></a></li>
					<li><a href="javascript:void(0)"><img src="/tp/Public/images/index1/4.jpg" alt=""></a></li>
					<li><a href="javascript:void(0)"><img src="/tp/Public/images/index1/5.jpg" alt=""></a></li>
					<li><a href="javascript:void(0)"><img src="/tp/Public/images/index1/6.jpg" alt=""></a></li>
					<li><a href="javascript:void(0)"><img src="/tp/Public/images/index1/7.jpg" alt=""></a></li>
					<li><a href="javascript:void(0)"><img src="/tp/Public/images/index1/8.jpg" alt=""></a></li>

					<li><a href="javascript:void(0)"><img src="/tp/Public/images/index1/2.jpg" alt=""></a></li>
					<li><a href="javascript:void(0)"><img src="/tp/Public/images/index1/3.jpg" alt=""></a></li>
					<li><a href="javascript:void(0)"><img src="/tp/Public/images/index1/4.jpg" alt=""></a></li>
					<li><a href="javascript:void(0)"><img src="/tp/Public/images/index1/5.jpg" alt=""></a></li>
					<li><a href="javascript:void(0)"><img src="/tp/Public/images/index1/6.jpg" alt=""></a></li>
					<li><a href="javascript:void(0)"><img src="/tp/Public/images/index1/7.jpg" alt=""></a></li>
					<li><a href="javascript:void(0)"><img src="/tp/Public/images/index1/8.jpg" alt=""></a></li>
				</ul>
			</div>
		</div>
		<div class="index-list clear">
			<div class="index-list-s left">
				<div class="head">
					<h2>人气单品</h2>
					<div class="right right-list">
						<a href="">暖春单选</a>
						<span>|</span>
						<a href="">裤类精选</a>
						<span>|</span>
						<a href="">潮鞋必备</a>
					</div>
				</div>
				<div class="detail">
					<ul class="detail-list detail-list2 horizon-list">
						<li><a href=""><img src="/tp/Public/images/index2/1.jpg" alt=""></a></li>
						<li><a href=""><img src="/tp/Public/images/index2/2.jpg" alt=""></a></li>
						<li><a href=""><img src="/tp/Public/images/index2/3.jpg" alt=""></a></li>
						<li><a href=""><img src="/tp/Public/images/index2/4.jpg" alt=""></a></li>
						<li><a href=""><img src="/tp/Public/images/index2/5.jpg" alt=""></a></li>
						<li><a href=""><img src="/tp/Public/images/index2/6.jpg" alt=""></a></li>
						<li><a href=""><img src="/tp/Public/images/index2/7.jpg" alt=""></a></li>
						<li><a href=""><img src="/tp/Public/images/index2/8.jpg" alt=""></a></li>
					</ul>
				</div>
			</div>
			<div class="right-detail right">
				<a href="" class="right"><img src="/tp/Public/images/index2/r1.jpg" alt=""></a>
				<a href="" class="right"><img src="/tp/Public/images/index2/r2.gif" alt=""></a>
			</div>
		</div>
		<div class="index-list clear">
			<div class="head">
				<h2>潮流上装</h2>
				<div class="right right-list">
					<a href="">夹克上新</a>
					<span>|</span>
					<a href="">精选卫衣</a>
					<span>|</span>
					<a href="">优选大衣</a>
					<span>|</span>
					<a href="">MORE></a>
				</div>
			</div>
			<div class="left left-detail">
				<a href="" class="left"><img src="/tp/Public/images/index3/l1.jpg" alt=""></a>
				<ul class="catalog-list horizon-list detail-list1 clear">
					<li><a href="">休闲鞋</a></li>
					<li><a href="">复古跑鞋</a></li>
					<li><a href="">时装鞋</a></li>
					<li><a href="">帆布鞋</a></li>
					<li><a href="">靴子</a></li>
					<li><a href="">板鞋</a></li>
				</ul>
				<ul class="catalog-list">
					<li><a href="">DVS</a></li>
					<li><a href="">DC</a></li>
					<li><a href="">Outdo Zenith</a></li>
					<li><a href="">wolverine</a></li>
					<li><a href="">Nike</a></li>
					<li><a href="">KKtP</a></li>
					<li><a href="">MORE...</a></li>
				</ul>
			</div>
			<div class="right index-list-s">
				<ul class="detail-list horizon-list">
					<li><a href=""><img src="/tp/Public/images/index3/1.png" alt=""></a></li>
					<li><a href=""><img src="/tp/Public/images/index3/2.jpg" alt=""></a></li>
					<li><a href=""><img src="/tp/Public/images/index3/3.jpg" alt=""></a></li>
					<li><a href=""><img src="/tp/Public/images/index3/4.jpg" alt=""></a></li>
					<li><a href=""><img src="/tp/Public/images/index3/2.png" alt=""></a></li>
					<li><a href=""><img src="/tp/Public/images/index3/5.jpg" alt=""></a></li>
					<li><a href=""><img src="/tp/Public/images/index3/7.jpg" alt=""></a></li>
					<li><a href=""><img src="/tp/Public/images/index3/8.jpg" alt=""></a></li>
				</ul>
			</div>
		</div>
		<div class="index-list clear">
			<div class="head">
				<h2>经典裤装</h2>
				<div class="right right-list">
					<a href="">夹克上新</a>
					<span>|</span>
					<a href="">精选卫衣</a>
					<span>|</span>
					<a href="">优选大衣</a>
					<span>|</span>
					<a href="">MORE></a>
				</div>
			</div>
			<div class="left left-detail">
				<a href="" class="left"><img src="/tp/Public/images/index3/l1.jpg" alt=""></a>
				<ul class="catalog-list horizon-list detail-list1 clear">
					<li><a href="">休闲鞋</a></li>
					<li><a href="">复古跑鞋</a></li>
					<li><a href="">时装鞋</a></li>
					<li><a href="">帆布鞋</a></li>
					<li><a href="">靴子</a></li>
					<li><a href="">板鞋</a></li>
				</ul>
				<ul class="catalog-list">
					<li><a href="">DVS</a></li>
					<li><a href="">DC</a></li>
					<li><a href="">Outdo Zenith</a></li>
					<li><a href="">wolverine</a></li>
					<li><a href="">Nike</a></li>
					<li><a href="">KKtP</a></li>
					<li><a href="">MORE...</a></li>
				</ul>
			</div>
			<div class="right index-list-s">
				<ul class="detail-list horizon-list">
					<li><a href=""><img src="/tp/Public/images/index3/1.png" alt=""></a></li>
					<li><a href=""><img src="/tp/Public/images/index3/2.jpg" alt=""></a></li>
					<li><a href=""><img src="/tp/Public/images/index3/3.jpg" alt=""></a></li>
					<li><a href=""><img src="/tp/Public/images/index3/4.jpg" alt=""></a></li>
					<li><a href=""><img src="/tp/Public/images/index3/2.png" alt=""></a></li>
					<li><a href=""><img src="/tp/Public/images/index3/5.jpg" alt=""></a></li>
					<li><a href=""><img src="/tp/Public/images/index3/7.jpg" alt=""></a></li>
					<li><a href=""><img src="/tp/Public/images/index3/8.jpg" alt=""></a></li>
				</ul>
			</div>
		</div>
		<div class="index-list clear">
			<div class="head">
				<h2>时尚鞋履</h2>
				<div class="right right-list">
					<a href="">夹克上新</a>
					<span>|</span>
					<a href="">精选卫衣</a>
					<span>|</span>
					<a href="">优选大衣</a>
					<span>|</span>
					<a href="">MORE></a>
				</div>
			</div>
			<div class="left left-detail">
				<a href="" class="left"><img src="/tp/Public/images/index3/l1.jpg" alt=""></a>
				<ul class="catalog-list horizon-list detail-list1 clear">
					<li><a href="">休闲鞋</a></li>
					<li><a href="">复古跑鞋</a></li>
					<li><a href="">时装鞋</a></li>
					<li><a href="">帆布鞋</a></li>
					<li><a href="">靴子</a></li>
					<li><a href="">板鞋</a></li>
				</ul>
				<ul class="catalog-list">
					<li><a href="">DVS</a></li>
					<li><a href="">DC</a></li>
					<li><a href="">Outdo Zenith</a></li>
					<li><a href="">wolverine</a></li>
					<li><a href="">Nike</a></li>
					<li><a href="">KKtP</a></li>
					<li><a href="">MORE...</a></li>
				</ul>
			</div>
			<div class="right index-list-s">
				<ul class="detail-list horizon-list">
					<li><a href=""><img src="/tp/Public/images/index3/1.png" alt=""></a></li>
					<li><a href=""><img src="/tp/Public/images/index3/2.jpg" alt=""></a></li>
					<li><a href=""><img src="/tp/Public/images/index3/3.jpg" alt=""></a></li>
					<li><a href=""><img src="/tp/Public/images/index3/4.jpg" alt=""></a></li>
					<li><a href=""><img src="/tp/Public/images/index3/2.png" alt=""></a></li>
					<li><a href=""><img src="/tp/Public/images/index3/5.jpg" alt=""></a></li>
					<li><a href=""><img src="/tp/Public/images/index3/7.jpg" alt=""></a></li>
					<li><a href=""><img src="/tp/Public/images/index3/8.jpg" alt=""></a></li>
				</ul>
			</div>
		</div>
		<div class="index-list clear">
			<div class="head">
				<h2>潮人配饰</h2>
				<div class="right right-list">
					<a href="">夹克上新</a>
					<span>|</span>
					<a href="">精选卫衣</a>
					<span>|</span>
					<a href="">优选大衣</a>
					<span>|</span>
					<a href="">MORE></a>
				</div>
			</div>
			<div class="left left-detail">
				<a href="" class="left"><img src="/tp/Public/images/index3/l1.jpg" alt=""></a>
				<ul class="catalog-list horizon-list detail-list1 clear">
					<li><a href="">休闲鞋</a></li>
					<li><a href="">复古跑鞋</a></li>
					<li><a href="">时装鞋</a></li>
					<li><a href="">帆布鞋</a></li>
					<li><a href="">靴子</a></li>
					<li><a href="">板鞋</a></li>
				</ul>
				<ul class="catalog-list">
					<li><a href="">DVS</a></li>
					<li><a href="">DC</a></li>
					<li><a href="">Outdo Zenith</a></li>
					<li><a href="">wolverine</a></li>
					<li><a href="">Nike</a></li>
					<li><a href="">KKtP</a></li>
					<li><a href="">MORE...</a></li>
				</ul>
			</div>
			<div class="right index-list-s">
				<ul class="detail-list horizon-list">
					<li><a href=""><img src="/tp/Public/images/index3/1.png" alt=""></a></li>
					<li><a href=""><img src="/tp/Public/images/index3/2.jpg" alt=""></a></li>
					<li><a href=""><img src="/tp/Public/images/index3/3.jpg" alt=""></a></li>
					<li><a href=""><img src="/tp/Public/images/index3/4.jpg" alt=""></a></li>
					<li><a href=""><img src="/tp/Public/images/index3/2.png" alt=""></a></li>
					<li><a href=""><img src="/tp/Public/images/index3/5.jpg" alt=""></a></li>
					<li><a href=""><img src="/tp/Public/images/index3/7.jpg" alt=""></a></li>
					<li><a href=""><img src="/tp/Public/images/index3/8.jpg" alt=""></a></li>
				</ul>
			</div>
		</div>
	</div>
	<script src="http://libs.baidu.com/jquery/1.9.1/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
			/*$('.head-nav > li').hover(function() {
				$(this).addClass('active');
			}, function() {
				$(this).removeClass('active');
			});*/
		});
	</script>
</body>
</html>