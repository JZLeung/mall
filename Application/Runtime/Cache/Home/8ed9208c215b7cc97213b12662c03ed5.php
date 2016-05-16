<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>填写订单信息</title>
	<link rel="shortcut icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="/mall/Public/Common/css/reset.css">
	<link rel="stylesheet" href="/mall/Public/Common/css/common.css">
	<link rel="stylesheet" href="/mall/Public/Common/css/cart.css">
	<link rel="stylesheet" href="/mall/Public/Common/css/user.css">
	<link rel="stylesheet" href="/mall/Public/Common/css/order.css">
</head>
<body onselectstart="return false;" style="-moz-user-select:none;color: #757575;">
	<div class="header">
		<div class="content-w">
			<a href="/mall" class="left header-logo">
				<div class="">
					<span class="logo"></span>
					<span class="home"></span>
				</div>
			</a>
			<div class="right">
				<a href="/mall/UserCenter"><?php echo ($username); ?></a>
				<span class="sub">|</span>
				<a href="">我的订单</a>
			</div>
			<h3>我的购物车</h3>
		</div>
	</div>
	<div class="content-w main">
	<form action="./success?o=<?php echo ($_GET['o']); ?>" method="post" id="form1">
		
	
		<div class="line line-address">
			<h3>选择收货地址</h3>	
			<div>
				<div class="addresses clear" id="addresses">
					<div class="address" id="addNew">
						<p  style="margin-top: 60px;margin-left: 60px;">添加新地址</p>
					</div>
					<?php if(is_array($addresses)): foreach($addresses as $key=>$address): ?><div class="address">
						<input type="radio" hidden name="address" value="<?php echo ($address['_id']); ?>">
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
					</div><?php endforeach; endif; ?>
				</div>
			</div>
		</div>
		<div class="line line-pay">
			<h3>支付方式</h3>
			<div class="line-body option active">
				在线支付 （支持支付宝、银联、财付通、小米支付等）
			</div>
		</div>
		<div class="line line-express">
			<h3>配送方式</h3>
			<div class="line-body option active">
				快递配送（运费 10 元）
			</div>
		</div>
		<div class="line line-time">
			<h3>配送时间</h3>
			<div class="line-body option" id="timing-option">
				<a href="javascript:;" class="timing active">不限送货时间：周一至周日<input type="radio" hidden checked="checked" name="time" value="0"></a>
				<a href="javascript:;" class="timing">工作日送货：周一至周五<input type="radio" hidden name="time" value="1"></a>
				<a href="javascript:;" class="timing">双休日、假日送货：周六至周日<input type="radio" hidden name="time" value="2"></a>
			</div>
		</div>
		<div class="line line-items">
			<h3>购买商品</h3>
			<div class="line-body items" id="items">
				<?php if(is_array($items)): foreach($items as $key=>$one): ?><div class="item">
					<div class="image"><img src="<?php echo ($one["item"]["pictures"]["0"]["src"]); ?>" alt=""></div>
					<div class="title"><a href="/mall/item/<?php echo ($one["item"]["_id"]); ?>" target="_blank"><?php echo ($one["item"]["title"]); ?></a></div>
					<div class="price">
						<?php echo ($one["price"]); ?>元 × <span><?php echo ($one["num"]); ?></span>
					</div>
					<div class="amount active">
						<span><?php echo ($one['price']*$one['num']); ?></span>元
					</div>
				</div><?php endforeach; endif; ?>
			</div>
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
						<div class="content"><span id="amount"></span>元</div>
					</li>
					<li>
						<div class="title">运费：</div>
						<div class="content"><span id="ship">10</span>元</div>
					</li>
					<li>
						<div class="title">应付总额：</div>
						<div class="content"><span id="all-amount" style="font-size: 32px;"></span>元</div>
						<input type="hidden" value="" name="amount" id="all-amount2">
					</li>
				</ul>
			</div>
		</div>
		<div class="line line-confirm clear">
			<div class="myaddress left" id="myaddress">
				<p>
					<span class="name"></span>
					<span class="phone"></span>
				</p>
				<p>
					<span class="detail"></span>
					<a href="#addresses" style="color: #ff6700">修改</a>
				</p>
			</div>
			<!-- <a class="btn btn-confirm right" href="javascript:;">
				去结算
			</a> -->
			<input type="submit" value="去结算" class="btn btn-confirm right" id="submit">
		</div>
	</form>
	</div>
	<script src="/mall/Public/Common/js/jquery-1.12.0.js"></script>
	<script>
		$(document).ready(function() {
			var $addresses = $('#addresses'),
				$timeOpt = $('#timing-option'),
				$confirm = $('#confirm'),
				$myaddress = $('#myaddress');
			$addresses.on('click', '.address', function(event) {
				event.preventDefault();
				var _this = $(this);
				_this.addClass('active').siblings().removeClass('active');
				_this.find('input[type=radio]').prop('checked', 'checked');
				$myaddress.find('.name').text(_this.find('.name').text());
				$myaddress.find('.phone').text(_this.find('.phone').text());
				$myaddress.find('.detail').text(_this.find('.detail').text());
			});
			$timeOpt.on('click', '.timing', function(event) {
				event.preventDefault();
				var _this = $(this);
				_this.addClass('active').siblings().removeClass('active');
				_this.find('input').prop('checked', 'checked')
			});
			var num = 0, amount = 0;
			$('#items').find('.amount > span').each(function(index, el) {
				amount += $(this).text()*1;
			});
			$('#items').find('.price > span').each(function(index, el) {
				num += $(this).text()*1;
			});
			console.log(amount,num);
			$confirm.find('span#num').text(num);
			$confirm.find('span#amount').text(amount);
			$confirm.find('span#all-amount').text(amount+$confirm.find('#ship').text()*1);
			$confirm.find('#all-amount2').val(amount+$confirm.find('#ship').text()*1);

			$('#submit').click(function(event) {
				if ($('input[name=address]:checked').val()) {
					return true;
				}else{
					alert('请选择收货地址')
					event.preventDefault();
					return false;
				}
			});
		});
	</script>
</body>