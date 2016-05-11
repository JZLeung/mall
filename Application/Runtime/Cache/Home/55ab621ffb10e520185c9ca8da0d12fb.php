<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>商品页</title>
	<link rel="shortcut icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="/mall/Public/Common/css/reset.css">
	<link rel="stylesheet" href="/mall/Public/Common/css/common.css">
	<link rel="stylesheet" href="/mall/Public/Common/css/header.css">
	<link rel="stylesheet" href="/mall/Public/Common/css/items.css">
	<style>
		.fixed{
			position: fixed;
			top: 0;
			width: 100%;
			left: 0;
		}
	</style>
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

	<?php if(empty($data)): ?><div class="nodata content-w">
			<h1 class="title">商品编号：<?php echo ($id); ?> 不存在</h1>
			<p class="return"><a href="/mall">返回首页</a></p>
		</div>

	<?php else: ?>
	<!-- 目录导航 -->
	<div class="head-nav">
		<div class="content-w">
			<a href="javascript:;">首页</a>
			<span class="nav-sub">/</span>
			<a href="/mall/catalogs/<?php echo ($c[0]['id']); ?>"><?php echo ($c[0]['name']); ?></a>
			<span class="nav-sub">/</span>
			<a href="/mall/catalogs/<?php echo ($c[0]['id']); ?>/<?php echo ($c[1]['id']); ?>"><?php echo ($c[1]['name']); ?></a>
			<span class="nav-sub">/</span>
			<a href="javascript:;"><?php echo ($data["name"]); ?></a>
		</div>
	</div>
	<div class="item-profile">
		<div class="content-w clear">
			<div class="left-pics clear left">
				<div class="pic-list left" id="picList">
					<ul>

						<?php if(is_array($data["pictures"])): foreach($data["pictures"] as $key=>$pic): ?><li><img src="<?php echo ($pic["src"]); ?>" alt="<?php echo ($pic["title"]); ?>"></li><?php endforeach; endif; ?>
						<!-- <li class="active"><img src="/mall/Public/Common/images/items/test/1.jpg" alt=""></li>
						<li><img src="/mall/Public/Common/images/items/test/2.jpg" alt=""></li>
						<li><img src="/mall/Public/Common/images/items/test/3.jpg" alt=""></li> -->
					</ul>
				</div>
				<div class="pic-big left" id="picShow">
					<img src="<?php echo ($data['pictures'][0]['src']); ?>" alt="<?php echo ($data['pictures'][0]['title']); ?>">
				</div>
			</div>
			<div class="right-docs left">
				<h2 class="item-title"><?php echo ($data["title"]); ?></h2>
				<div class="item-desc">
					<?php echo ($data["subscribe"]); ?>
				</div>
				<div class="item-price">
					<strong id="price"></strong>元
				</div>
				<?php define('index1', '0'); ?>

				<div class="item-other">
					<?php if(is_array($data["attr"])): foreach($data["attr"] as $key=>$attribute): ?><div class="item-other-<?php echo ++ $index1;?> otherlist" id="other<?php echo ($index1); ?>">
						<p class="name"><?php echo ($attribute["name"]); ?></p>
						<div class="flex selection">
							<?php if(is_array($attribute["value"])): foreach($attribute["value"] as $k=>$vo): ?><a href="javascript:;" class="other-item" data-attr="<?php echo ($k); ?>"><?php echo ($vo); ?></a><?php endforeach; endif; ?>
						</div>
					</div><?php endforeach; endif; ?>
				</div>
				<p>剩余：<strong id="stock"></strong>件</p>

				<!-- <?php if(is_array($data["combos"])): foreach($data["combos"] as $key=>$combo1): ?><div class="item-other">
						<div class="item-other-1 clear">
							<p><?php echo ($combo1["name"]); ?></p>
							<?php if(is_array($combo1["combo"])): foreach($combo1["combo"] as $key=>$vo): ?><a href="javascript:;" class="other-item active"><img src="/mall/Public/<?php echo ($vo["pic"]); ?>" alt="<?php echo ($vo["name"]); ?>" data-price="<?php echo ($vo["price"]); ?>"></a><?php endforeach; endif; ?>
						</div>
					</div><?php endforeach; endif; ?> -->
				<!-- <div class="item-other">
					<div class="item-other-1 clear">
						<p>颜色：橙色</p>
						<a href="javascript:;" class="other-item active"><img src="/mall/Public/Common/images/items/test/1.jpg" alt=""></a>
						<a href="javascript:;" class="other-item"><img src="/mall/Public/Common/images/items/test/1.jpg" alt=""></a>
						<a href="javascript:;" class="other-item"><img src="/mall/Public/Common/images/items/test/1.jpg" alt=""></a>
					</div>
				</div>
				<div class="item-other">
					<div class="item-other-1 clear">
						<p>颜色：橙色</p>
						<a href="javascript:;" class="other-item active"><img src="/mall/Public/Common/images/items/test/1.jpg" alt=""></a>
						<a href="javascript:;" class="other-item"><img src="/mall/Public/Common/images/items/test/1.jpg" alt=""></a>
						<a href="javascript:;" class="other-item"><img src="/mall/Public/Common/images/items/test/1.jpg" alt=""></a>
					</div>
				</div> -->
				<div class="item-buttons">
					<button class="btn btn-buy btn-confirm" id="addCart">加入购物车</button>
					<?php if(!$isCollect ): ?><button class="btn btn-like btn-cancel" data-act="add" id="collection">喜欢</button>
					<?php else: ?>
						<button class="btn btn-like btn-cancel" data-act="remove" id="collection">取消收藏</button><?php endif; ?>
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
	<div class="classify-w" id="classify">
		<div class="content-w">
			<div class="classify flex">
				<a href="#item-detail" id="" class="active">详情描述</a>
				<span class="dev">|</span>
				<a href="#item-params">规格参数</a>
				<span class="dev">|</span>
				<a href="#item-comment" id="">评价晒单</a>
				<span class="dev">|</span>
				<a href="hrefjavascript:;">商品提问</a>
			</div>
		</div>
	</div>

	<div class="item-detail">

		<div class="item-content" id="item-detail">
			<div class="content content-<?php echo ($data["content"]); ?>">
				<?php echo ($data["detail"]); ?>
			</div>
		</div>
		<div class="item-params" id="item-params">
			<div class="sup-text">
				<p>规格参数</p>
			</div>
			<div class="content-w">
				<div class="params-detail clear">
					<div class="left-img left">
						<img src="<?php echo ($data['pictures'][0]['src']); ?>" alt="<?php echo ($data['pictures'][0]['title']); ?>">
					</div>
					<div class="right-params flex">
						<?php if(is_array($data["params"])): foreach($data["params"] as $key=>$p): ?><label for=""><?php echo ($p["name"]); ?>：<?php echo ($p["value"]); ?></label><?php endforeach; endif; ?>
						<!-- <label for="">工艺：喷漆</label>
						<label for="">尺寸：L/135mm*H/68mm*T/10mm</label>
						<label for="">颜色：橙色</label>
						<label for="">商品编号：1134700026</label> -->
					</div>
				</div>
			</div>
		</div>
		<div class="item-comment" id="item-comment">
			<div class="sup-text">
				<p>评价晒单</p>
			</div>
			<!-- 多说评论框 start -->
			<div class="content-w">
				<div class="ds-thread" data-thread-key="<?php echo ($data['_id']); ?>" data-title="<?php echo ($data["title"]); ?>" data-url="<?php echo ($_SERVER['REQUEST_SCHEME']); ?>://<?php echo ($_SERVER['SERVER_NAME']); echo ($_SERVER['REQUEST_URI']); ?>"></div>
				<div class="ds-share flat" data-thread-key="<?php echo ($data['_id']); ?>" data-title="<?php echo ($data["title"]); ?>" data-images="<?php echo ($data['pictures'][0]['src']); ?>" data-content="<?php echo ($data["desc"]); ?>" data-url="<?php echo ($_SERVER['REQUEST_SCHEME']); ?>://<?php echo ($_SERVER['SERVER_NAME']); echo ($_SERVER['REQUEST_URI']); ?>">
					<div class="ds-share-inline">
						<ul  class="ds-share-icons-16">
							<li data-toggle="ds-share-icons-more"><a class="ds-more" href="javascript:void(0);">分享到：</a></li>
							<li><a class="ds-weibo" href="javascript:void(0);" data-service="weibo">微博</a></li>
							<li><a class="ds-qzone" href="javascript:void(0);" data-service="qzone">QQ空间</a></li>
							<li><a class="ds-qqt" href="javascript:void(0);" data-service="qqt">腾讯微博</a></li>
							<li><a class="ds-wechat" href="javascript:void(0);" data-service="wechat">微信</a></li>
						</ul>
						<div class="ds-share-icons-more">
						</div>
					</div>
				</div>
			</div>

			<!-- 多说评论框 end -->
		</div>
		<div style="width: 100%;height: 1000px;"></div>
	</div><?php endif; ?>
	<script src="/mall/Public/Common/js/jquery-1.12.0.js"></script>
	<script src="/mall/Public/Common/js/jquery.lazyload.min.js"></script>
	<script>
	var prices = JSON.parse('<?php echo (json_encode($prices)); ?>');
		$(document).ready(function() {
			 $("img").lazyload({effect: "fadeIn"});
			var $pic = $('#picShow').find('img'),
				$classify = $('#classify'),
				$body = $('body'),
				$otherlist = $('.otherlist');

			var $comment = $('#item-comment'),
				$detail = $('#item-detail'),
				$params = $('#item-params'),
				aAll = $classify.find('a'),
				$price = $('#price'),
				$stock = $('#stock');

			var clHeight = $classify.offset().top,
				Height1 = $detail.offset().top  - 170,
				Height2 = $params.offset().top  - 170,
				Height3 = $comment.offset().top - 170;

			console.log(Height1+":"+Height2+":"+Height3);
			//预览图选择
			$('#picList').on('click', 'li', function(event) {
				event.preventDefault();
				$(this).addClass('active').siblings().removeClass('active');
				$pic.attr('src', $(this).find('img').attr('src'));
			}).find('li').eq(0).addClass('active');
			//滚动事件
			$(document).scroll(function(event) {
				event.preventDefault();
				var top = $(this).scrollTop();

				if (top >= clHeight - 70) {
					$classify.addClass('fixed');
					//top >= Height1 ? aAll.removeClass('active').eq(1).addClass('active') :
					top >= Height2 && top < Height3 ? aAll.removeClass('active').eq(1).addClass('active') :
					top >= Height3 ? aAll.removeClass('active').eq(2).addClass('active') :
					aAll.removeClass('active').eq(0).addClass('active');
				}else{
					$classify.removeClass('fixed');
				}
			});
			//分类显示
			$classify.on('click', 'a', function(event) {
				event.preventDefault();
				var target =  $($(this).attr('href'))
				$body.animate({scrollTop:target.offset().top - 100}, 600);
				//target.addClass('active').siblings('a').removeClass('active');
			});


			$otherlist.each(function(index, el) {
				$(this).find('a').eq(0).addClass('active');
			});
			//配置项
			function getNowOption(){
				var d=[];
				$otherlist.find('.active').each(function(i,v){
					d.push($(this).data('attr'));
				})
				return d.join(',');
			}

			function setNowOption(){
				var nowIndex = getNowOption();
				console.log(nowIndex);
				$price.text(prices[nowIndex]['price']);
				$stock.text(prices[nowIndex]['stock']);
			}

			setNowOption();

			$otherlist.on('click', 'a', function(event) {
				event.preventDefault();
				$(this).addClass('active').siblings().removeClass('active');
				setNowOption()
			});

			$('#collection').click(function(event) {
				event.preventDefault();
				if ($(this).data('act') == 'add') {
					$.post('/mall/Home/Collection/add', {id: '<?php echo ($data['_id']); ?>'}, function(data, textStatus, xhr) {
						console.log(data);
						if (data.code == 'ok') {
							if (data.msg.nModified == 1) {
								alert('收藏成功')
							}else{
								alert('你已经收藏过了')
							}
						}else{
							alert(data.msg);
						}
					});
				}else{
					$.post('/mall/Home/Collection/remove', {id: '<?php echo ($data['_id']); ?>'}, function(data, textStatus, xhr) {
						console.log(data);
						if (data.code == 'ok') {
							if (data.msg.nModified == 1) {
								alert('取消收藏成功')
							}else{
								alert('你没有收藏该商品')
							}
						}else{
							alert(data.msg);
						}
					});
					
				}
			});

			$('#addCart').click(function(event) {
				var data = {};
				data['id'] = "<?php echo ($data['_id']); ?>";
				data['opt'] = getNowOption();
				data['num'] = 1;
				$.post('/mall/Home/Cart/add', {data:data}, function(data, textStatus, xhr) {
					console.log(data);
					//if (data.code == 'ok') {
						alert(data.msg);
					//}
				});
			});
		});
	</script>
	<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
	<script type="text/javascript">
		var duoshuoQuery = {short_name:"buctmall"};
		(function() {
			var ds = document.createElement('script');
			ds.type = 'text/javascript';ds.async = true;
			ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
			ds.charset = 'UTF-8';
			(document.getElementsByTagName('head')[0] 
			 	|| document.getElementsByTagName('body')[0]).appendChild(ds);
		})();
	</script>
	<!-- 多说公共JS代码 end -->
</body>
</html>