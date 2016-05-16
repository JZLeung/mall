<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>首页</title>
	<link rel="shortcut icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="/mall/Public/Common/css/reset.css">
	<link rel="stylesheet" href="/mall/Public/Common/css/common.css">
	<link rel="stylesheet" href="/mall/Public/Common/css/cart.css?v=sd">
	<style>
		.main{padding: 0;}
	</style>
</head>
<body onselectstart="return false;" style="-moz-user-select:none;">
	<div class="header">
		<div class="content-w">
			<a href="/mall" class="left header-logo">
				<div class="">
					<span class="logo"></span>
					<span class="home"></span>
				</div>
			</a>
			<div class="right">
				<a href=""><?php echo ($user["username"]); ?></a>
				<span class="sub">|</span>
				<a href="">我的订单</a>
			</div>
			<h3>我的购物车</h3>
		</div>
	</div>
	<div class="content-w main">
		<div class="cart">
			<div class="cart-head">
				<div class="cart-select"></div>
				<div class="cart-img"></div>
				<div class="cart-name">名称</div>
				<div class="cart-opt">配置</div>
				<div class="cart-num">数量</div>
				<div class="cart-price">单价</div>
				<div class="cart-amount">总价</div>
			</div>
			<div class="cart-body" id="cart">
				<?php if(is_array($mycart)): foreach($mycart as $key=>$cart): ?><div class="cart-item" data-index="<?php echo ++$index;?>">
					<div class="cart-select">
						<span class="checkbox"></span>
					</div>
					<div class="cart-img"><img src="<?php echo ($cart["item"]["pictures"]["0"]["src"]); ?>" alt=""></div>
					<div class="cart-name"><?php echo ($cart["item"]["name"]); ?></div>
					<div class="cart-opt"><?php echo ($cart['optname']); ?></div>
					<div class="cart-num">
						<div class="btn-group">
							<div class="left-btn btn reduce">-</div>
							<input type="text" value="<?php echo ($cart["num"]); ?>">
							<div class="right-btn btn add">+</div>
						</div>
					</div>
					<div class="cart-price"><?php echo ($cart["price"]); ?></div>
					<div class="cart-amount"><?php echo ($cart['price']*$cart['num']); ?></div>
					<div class="cart-action" >
						<a href="" class="remove">+</a>
					</div>
				</div><?php endforeach; endif; ?>
			</div>
			<div class="cart-foot clear cart-fixed">
				<p class="right">
					总价： <span class="sum" id="amount"></span>
					<a href="javascript:void;" class="submit-btn" id="buy">立即结算</a>
				</p>
			</div>
		</div>
	</div>
	<script src="/mall/Public/Common/js/jquery-1.12.0.js"></script>
	<script>
		var $amount = $('#cart .cart-amount'),
			amount = $('#amount');
		$(document).ready(function() {
			//计算价格
			function adjustPrice(obj){
				var price = obj.parentElement.parentElement.nextElementSibling,
					amount = price.nextElementSibling,
					num = obj.value *1;
				//console.log(price.innerText*1,amount.innerText*1,num);
				amount.innerText = (price.innerText *1 ) * num;
				adjustAmount()
			}
			//计算总价
			function adjustAmount(){
				var sum = 0;
				$amount.each(function(index, el) {
					if ($(this).siblings('.cart-select').find('.checked').length > 0) {
						sum += this.innerText*1;
					}
				});
				amount.text(sum+'元');
			}
			//发送请求并修改
			function adjustNum(curIndex, reduce){
				return new Promise(function(resolve, reject){
					var action = reduce || 'add';
					$.ajax({
						url: '/mall/Home/Cart/'+action,
						type: 'post',
						data: {index: curIndex},
						success: function(data){
							resolve(data);
						},
						error: function(err){
							reject(err);
						}
					})
				}).catch(function(err){console.log("Error:",err)});
			}
			$('#cart').on('click', '.reduce', function(event) {
				event.preventDefault();
				var value = this.nextElementSibling.value;
				if (value > 0) {
					var obj = this;
					adjustNum($(obj).parent().parent().parent().data('index')-1, 'reduce')
						.then(function(data){
							console.log(data);
							obj.nextElementSibling.value = value - 1;
							adjustPrice(obj.nextElementSibling)
						});
					console.log('reduce');
				}
			}).on('click', '.add', function(event) {
				event.preventDefault();
				var obj = this;
				adjustNum($(obj).parent().parent().parent().data('index')-1)
					.then(function(data){
						console.log(data);
						obj.previousElementSibling.value ++;
						adjustPrice(obj.previousElementSibling)
					});
				console.log('add');
			}).on('click', '.checkbox', function(event) {
				event.preventDefault();
				$(this).toggleClass('checked');
				adjustAmount()
			}).on('click', '.remove', function(event) {
				event.preventDefault();
				if (confirm('确认要将该商品移出购物车吗？')) {
					var parent = $(this).parent().parent();
					adjustNum(parent.data('index')-1, 'remove')
						.then(function(data){
							console.log(data);
							if (data.code == 'ok') {
								parent.remove();
							}
						})
				}
			})
			adjustAmount()
			$('#buy').on('click', function(event) {
				event.preventDefault();
				var indexs = [];
				$('.cart-item').each(function(index, el) {
					var self = $(this);
					if (self.find('.checked').length > 0) {
						indexs.push(self.data('index')-1);
					}
				});
				console.log(indexs)
				$.post('./Home/Order/generateOrder', {indexs: indexs}, function(data, textStatus, xhr) {
					console.log(data);
					var id = data['order']['$id'];
					location.href = '/mall/order/checkout?o='+id;
				});
			});
		});
	</script>
</body>