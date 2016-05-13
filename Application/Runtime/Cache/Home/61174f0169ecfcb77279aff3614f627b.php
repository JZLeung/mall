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
	<link rel="stylesheet" href="/mall/Public/Common/css/modal.css">
	<style>
		select{padding: 5px 10px;margin-right: 10px}
		label.radio {
		    display: inline-block;
		    padding: 5px 25px;
		    margin-right: 10px;
		    border: 1px solid #e2e2e2;
		}

		label.radio.checked {
		    border-color:#F57923;
		}
		.mustfill:before{
			display: inline-block;
			content: '*';
			color: red;
			vertical-align: middle;
		}
		span.name{width: 6em;text-align: right;display: inline-block;}
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
			<a href="javascript:;">收货地址</a>
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
		<div class="user-center" style="padding-left: 40px;">
			<h3>收货地址</h3>
			<div class="addresses clear" id="addresses">
				<div class="address" id="addNew">
					<p  style="margin-top: 60px;margin-left: 60px;">添加新地址</p>
				</div>
				<?php if(is_array($addresses)): foreach($addresses as $key=>$address): ?><div class="address">
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
					<div class="action">
						<a href="#" class="del" data-aid="<?php echo ($address['_id']); ?>">删除</a>
						<a href="#" class="edit" data-aid="<?php echo ($address['_id']); ?>" >编辑</a>
					</div>
				</div><?php endforeach; endif; ?>
			</div>
		</div>
		<div class="modal" id="modal">
			<div class="modal-content">
				<form action="" id="form">
				<div class="modal-head">编辑基础资料</div>
				<div class="modal-body">
					<p class="info-line">
						<span class="name mustfill">联系人</span>
						<span class="value"><input type="text" name="name" /></span>
					</p>
					<p class="info-line">
						<span class="name mustfill">联系方式</span>
						<span class="value"><input type="text" name="phone" data-validate="required:必须的;tel:请输入正确的手机号码" /></span>
					</p>
					<p class="info-line">
						<span class="name mustfill">收货地址</span>
						<span class="value">
							<select name="province" id="s1" style="width: 129px"></select>
						</span>
						<span class="value">
							<select name="city" id="s2" style="width: 129px;margin-right: 0;"></select>
						</span>
						<span class="value">
							<select name="area" id="s3" style="margin-left: 88px;margin-top: 5px;width: 273px;"></select>
						</span>
					</p>
					<p class="info-line">
						<span class="name mustfill">具体地址</span>
						<span class="value"><input type="text" name="detail" /></span>
					</p>
				</div>
				<div class="modal-foot">
					<a href="javascript:;" class="btn btn-sm btn-submit">提交</a>
					<a href="javascript:;" class="btn btn-sm btn-cancel">取消</a>
				</div>
				</form>
			</div>
		</div>
		<div class="mask" id="mask"></div>
	</div>
	<script src="/mall/Public/Common/js/city.js"></script>
	<script>
		$(document).ready(function() {
			$('#action-list').find('a').eq(2).addClass('active');
			//初始化城市下拉框
			setup();
			var form = $('#form'),
				modal = $('#modal'),
				uid = '<?php echo ($user["_id"]); ?>';

			//打开模态框
			$('#addNew').click(function(event) {
				modal.data({'action': 'add','aid': 0}).toggleClass('modal-show');
			});

			//关闭模态框
			$('#mask').click(function(event) {
				modal.toggleClass('modal-show');
				getCityInfo()
			});
			
			//过去城市地址
			var selectors = [$('#s1'),$('#s2'),$('#s3')];
			function getCityInfo(){
				var data = []
				for (var i = 0; i < 3; i++) {
					data.push(selectors[i].val());
				}
				console.log(data.join(','))
			}
			function changeCityInfo(citys){
				for (var i = 0; i < citys.length; i++) {
					var s = selectors[i];
					s.val(citys[i]).change();
				}
			}

			//编辑
			$('#addresses').on('click', '.edit', function(event) {
				event.preventDefault();
				modal.data({'action': 'edit','aid': $(this).data('aid')}).toggleClass('modal-show');
				var parent = $(this).parent().parent(),
				 	tmpData = {};
				parent.find('span').each(function(index, el) {
					tmpData[$(this).data('name')] = $(this).text();
				});
				console.log(tmpData);
				for(var i in tmpData){
					modal.find('input[name="'+i+'"]').val(tmpData[i]);
				}
				changeCityInfo([tmpData['province'],tmpData['city'],tmpData['area']])
			})//删除地址
			.on('click', '.del', function(event) {
				event.preventDefault();
				if (confirm('确认要删除该地址吗？')) {
					var _this = $(this),
					aid = _this.data('aid')
					$.post('/mall/Home/Address/delAddress', {aid: aid}, function(data, textStatus, xhr) {
						console.log(data);
						if (data.ok == 1) {
							alert('删除地址成功');
							_this.parent().parent().remove();
						}
					});
				}
			});

			var mustFill = {
				'name' : '姓名不能为空',
				'phone' : '联系方式不能为空',
				'province' : '请选择所在省',
				'city' : '请选择所在市',
				'area' : '请选择所在地区',
				'detail' : '具体地址不能为空',
			}
			//提交
			modal.on('click', '.btn-submit', function(event) {
				event.preventDefault();
				var data = {};
				var tmpData = $('#form').serializeArray(),
					action = modal.data('action');
				for (var i = 0; i < tmpData.length; i++) {
					data[tmpData[i]['name']] = tmpData[i]['value'];
				}
				for(var i in data){
					if (mustFill[i] != undefined) {
						console.log(`${i} : ${data[i]}`)
						if (i == 'province' || i == 'city' || i == 'area') {
							if (data[i] == '请选择') {alert(mustFill[i]);return;}
						}else{
							if (data[i] == '') {alert(mustFill[i]);return;}
						}
					}
				}
				if (action == 'add') {
					$.post('/mall/Home/Address/addAddress', {address: data,id:uid}, function(data, textStatus, xhr) {
						console.log(data);
						if (data['$id'] != undefined || data['$id'] != '') {
							alert('增加地址成功');
							location.reload();
						}
					});
				}else{
					var aid = modal.data('aid');
					$.post('/mall/Home/Address/editAddress', {address: data,aid: aid}, function(data, textStatus, xhr) {
						console.log(data);
						if (data.ok == 1) {
							alert('更新地址成功');
							location.reload();
						}
					});
				}
			})//取消。关闭模态框
			.on('click', '.btn-cancel', function(event) {
				event.preventDefault();
				modal.toggleClass('modal-show');
			});
		});
	</script>
</body>