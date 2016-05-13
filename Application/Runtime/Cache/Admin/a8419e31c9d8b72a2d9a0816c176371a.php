<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>商城后台管理</title>

  <link href="/mall/Public/Admin/sb/css/bootstrap.min.css" rel="stylesheet">
  <link href="/mall/Public/Admin/sb/css/sb-admin-2.css" rel="stylesheet">
  <link href="/mall/Public/Admin/sb/css/font-awesome.css" rel="stylesheet" type="text/css"></head>
  <link href="/mall/Public/Admin/ad.css" rel="stylesheet" type="text/css"></head>
  <style id="mask-items">
    .items-box .item{
      width: 240px;
      display: inline-block;
      padding: 10px;
      border: 1px solid #eee; 
      margin: 5px;
      cursor: pointer;
    }
    .items-box .item.active1{
      border-color: #337ab7;
    }
    .items-box .item > div{
      float: left;
      font-size: 12px;
    }
    .items-box .item .image{
      width: 50px;
    }
    .items-box .item .content{
      width: 160px;
    }
    .items-box .item img{
      width: 100%;
    }
    .items-box .item .title{
      height: 2.3em;
      line-height: 1.2em;
      overflow: hidden;
    }
    .item-mask{
      margin: 20px;
      padding: 20px;
      padding-bottom: 30px;
      box-shadow: 0px 0px 20px rgba(0,0,0,0.5);
      overflow-y: scroll;
      opacity: 0;
    }
    .item-mask.show,.item-mask.show ~ .mask-foot{
      opacity: 1;
      visibility: visible;
      -webkit-transform: scale(1);
      -ms-transform: scale(1);
      -o-transform: scale(1);
      transform: scale(1);
    }
    .mask-foot{
      visibility: hidden;
      opacity: 0;
      z-index: 11111;
      position: fixed;
      bottom: 0;
      left: 0;
      right: 0;
      background-color: #fff;
      margin: 20px;
      text-align: right;
      padding: 10px 20px;
      -webkit-transform: scale(0.5);
      -ms-transform: scale(0.5);
      -o-transform: scale(0.5);
      transform: scale(0.5);
      -webkit-transition: all 0.5s;
      -o-transition: all 0.5s;
      transition: all 0.5s;
    }
    .hidden{display: none;}
  </style>
  <style id="star-items">
    .star-items{
      width: 100%;
      overflow-x: hidden;
    }
    .star-content{
      width: 200%;
      -webkit-transition: all 0.3s;
      -o-transition: all 0.3s;
      transition: all 0.3s;
    }
    .star-content.move{
      -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
      -o-transform: translateX(-50%);
      transform: translateX(-50%);
    }
    .star-content .item{
      width: 8%;
      margin: 10px 1%;
      padding: 5px 0.5%;
      text-align: center;
      display: inline-block;
    }
    .star-content .item img{
      display: block;
      width: 100%;
      margin-bottom: 10px;
    }
    .star-content .item .title{
      font-size: 14px;
      font-weight: bold;
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
    }
    .star-content .item .price{
      font-size: 13px;
      color: red;
    }
  </style>
  <style id="btn-group">
    .btn-group > div{
      display: inline-block;
      padding: 5px 20px;
      background-color: #eee;
      cursor: pointer;
    }
    .btn-group span{
      border: 1px solid;
      border-bottom: 0;
      border-right: 0;
      display: inline-block;
      width: 10px;
      height: 10px;
    }
    .btn-group .prev span{
      -webkit-transform: rotate(-45deg);
      -ms-transform: rotate(-45deg);
      -o-transform: rotate(-45deg);
      transform: rotate(-45deg);
    }
    .btn-group .next span{
      -webkit-transform: rotate(135deg);
      -ms-transform: rotate(135deg);
      -o-transform: rotate(135deg);
      transform: rotate(135deg);
    }
  </style>
<body>
  <div id="wrapper">
    <?php if(empty($admin)): ?><script>location.href = '/mall/Admin/login';</script><?php endif; ?>

<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="javascript:;">商城后台管理</a>
  </div>
  <div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
      <ul class="nav" id="side-menu">
        <li class="sidebar-search">
          <div class="input-group custom-search-form">
            <input type="text" class="form-control" placeholder="搜索...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button"> <i class="fa fa-search"></i>
              </button>
            </span>
          </div>
          <!-- /input-group --> </li>
        <li>
          <a href="/mall/Admin/Index"> <i class="fa fa-home"></i>
            首页
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-bar-chart-o fa-fw"></i>
            商品管理
            <span class="fa arrow"></span>
          </a>
          <ul class="nav nav-second-level">
            <li>
              <a href="/mall/Admin/Index/item_list">
                <i class="fa fa-th-large"></i>
                商品列表
              </a>
            </li>
            <li>
              <a href="/mall/Admin/Index/item_add">
                <i class="fa fa-plus"></i>
                添加商品
              </a>
            </li>
            <!-- <li>
              <a href="/mall/Admin/Index/item_edit">
                <i class="fa fa-plus"></i>
                编辑商品
              </a>
            </li> -->
          </ul>
        </li>
          <li>
            <a href="#">
              <i class="fa fa-list-alt"></i>
              广告设置
              <span class="fa arrow"></span>
            </a>
            <ul class="nav nav-third-level">
              <li>
                <a href="/mall/Admin/Index/ad_carousel">
                  <i class="fa fa-th-list"></i>
                  轮播广告
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-th-list"></i>
                  精选广告
                </a>
              </li>
              <li>
                <a href="/mall/Admin/Index/ad_star">
                  <i class="fa fa-th-list"></i>
                  明星产品
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-th-list"></i>
                  推广产品
                </a>
              </li>
            </ul>
          </li>

        <li>
          <a href="#">
            <i class="fa fa-users"></i>
            会员管理
            <span class="fa arrow"></span>
          </a>
          <ul class="nav nav-second-level">
            <li>
              <a href="/mall/Admin/Index/user_list">
                <i class="fa fa-list-alt"></i>
                用户列表
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-plus"></i>
                新增会员
              </a>
            </li>
          </ul>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-tasks"></i>
            类目管理
            <span class="fa arrow"></span>
          </a>
          <ul class="nav nav-second-level">
            <li>
              <a href="/mall/Admin/Index/catalog_list">
                <i class="fa fa-th-list"></i>
                类目列表
              </a>
            </li>
            <li>
              <a href="/mall/Admin/Index/catalog_add">
                <i class="fa fa-plus"></i>
                新增类目
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<script src="/mall/Public/Admin/sb/js/jquery.min.js"></script>
<script src="/mall/Public/Admin/sb/js/bootstrap.min.js"></script>
<script src="/mall/Public/Admin/sb/js/metisMenu.min.js"></script>
<script src="/mall/Public/Admin/sb/js/sb-admin-2.js"></script>
    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">明星产品设置</h1>
        </div>
        <div class="col-lg-12">
          <div class="star-items">
            <div class="star-content" id="star-content">
              <?php if(is_array($advertise)): foreach($advertise as $key=>$one): ?><div class="item">
                <img src="<?php echo ($one["pictures"]["0"]["src"]); ?>" alt="">
                <p class="title"><?php echo ($one["title"]); ?></p>
                <p class="price">￥<?php echo ($one["price"]); ?></p>
              </div><?php endforeach; endif; ?>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="btn-group">
            <div class="prev"><span></span></div>
            <div class="next"><span></span></div>
          </div>
        </div>
        <div class="col-lg-12" style="margin-top: 20px;">
          <button class="btn btn-primary" id="edit">编辑该广告</button>
        </div>
      </div>
    </div>
  </div>
  <div class="item-mask" id="mask">
    <div class="items-box">
    <?php if(is_array($items)): foreach($items as $key=>$all): ?><div class="inner-box">
        <h3><?php echo ($all["name"]); ?></h3>
        <?php if(is_array($all["item"])): foreach($all["item"] as $key=>$one): ?><div class="item clear active<?php echo in_array($one['_id'],$advertiseID);?>" data-id="<?php echo ($one['_id']); ?>">
          <div class="image"><img src="<?php echo ($one["pictures"]["0"]["src"]); ?>" alt=""></div>
          <div class="content">
            <p class="title"><?php echo ($one["title"]); ?></p>
            <small><?php echo ($one["desc"]); ?></small>
          </div>
        </div><?php endforeach; endif; ?>
        <hr>
      </div><?php endforeach; endif; ?>
    </div>
  </div>
  <div class="mask-foot">
    <button class="btn btn-info" id="save">保存</button>
  </div>
  <script>
    stars = <?php echo (json_encode($advertiseID)); ?>;
    (function(){
      var count = stars.length, all = 10;
      var $mask = $('#mask'),
          $edit = $('#edit'),
          $save = $('#save');

      $mask.on('click', '.item', function(event) {
        event.preventDefault();
        var _this = $(this),
            id = _this.data('id');
        _this.toggleClass('active1');
        if (!_this.hasClass('active1')) {
          count --;
          var pos = $.inArray(id, stars);
          stars.splice(pos, 1);
        }else{
          count ++;
          if (count > all) {
            alert('最多只能选'+all+'个明星产品');
            count--;
            _this.removeClass('active1');
          }else{
            stars.push(id);
          }
        }
      });

      $edit.on('click', function(event) {
        event.preventDefault();
        $mask.toggleClass('show');
      });

      $save.click(function(event) {
        console.log(stars.length)
        $.post('../Advertise/set', {data: stars,type: 'star'}, function(data, textStatus, xhr) {
          console.log(data)
          if (data.msg.ok == 1) {
            alert('设置成功')
            location.reload();
          }
        });
      });

      var body = $('#star-content');
      $('.btn-group').on('click', 'div', function(event) {
        event.preventDefault();
        body.toggleClass('move');
      });

      //$('#star-content').width('200%');

    })();
  </script>
</body>