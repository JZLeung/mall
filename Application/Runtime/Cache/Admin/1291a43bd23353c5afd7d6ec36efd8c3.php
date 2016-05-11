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
    <!-- begin of the content -->
    <pre style="display: none;"><?php echo (json_decode($advertise)); ?></pre>
    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">轮播广告设置</h1>
        </div>
        <div class="col-lg-12">
          <div class="carousel" id="carousel">
            <div class="carousel-container" id="carousel-body">
            <?php if(is_array($advertise)): foreach($advertise as $key=>$ad): ?><div class="carousel-item">
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
        <div class="col-lg-12" style="margin-top: 20px;">
          <button class="btn btn-primary" id="edit">编辑该广告</button>
          <button class="btn btn-danger" id="delete">删除该广告</button>
          <a class="btn btn-success" href="../Advertise/toAdd?type=carousel">添加新广告</a>
        </div>
      </div>
    </div>
  </div>
  <div class="item-mask" id="mask">
    
  </div>
  <script src="/mall/Public/Common/js/upload/jquery.upload.min.js"></script>
  <script src="/mall/Public/Common/js/selector.js"></script>
  <script>
    $(function(){
      var carousel = document.getElementById('carousel'),
          carouselBody = document.getElementById('carousel-body'),
          carouselBtn = document.getElementById('carousel-btns');
      var carouselItems,//carouselBody.querySelectorAll('.carousel-item'),
          count,
          step;
      var adtitle = $('#title'),
          adcontent = $('#content'),
          form = $('#form');

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
      
      var index = 0;
      //上下页动作
      $(carouselBtn).on('click', '.prevbtn', function(event) {
        event.preventDefault();
        index -= 1;
        if (index < 0) {index = count - 1;}
        carouselBody.style.transform = 'translateX(-'+(index*step)+'%)';
      }).on('click', '.nextbtn', function(event) {
        event.preventDefault();
        index += 1;
        if (index == count) {index = 0;}
        carouselBody.style.transform = 'translateX(-'+(index*step)+'%)';
      });

      $('#edit').click(function(event) {
        location.href = '/mall/Admin/Advertise/toEdit?type=carousel&index='+index;
      });
      $('#delete').click(function(event) {
        event.preventDefault();
        if (confirm('确认要删除该广告吗？')) {
          var item = $(carouselItems[index]), data = {};
          data['title'] = $.trim(item.find('.carousel-title').text());
          data['content'] = $.trim(item.find('.carousel-content').text());

          $.post('../Advertise/delete', {data:data,type:'carousel'}, function(data) {
              console.log(data);
              if (data.msg.ok) {
                item.remove();
                index --;
                init();
                carouselBody.style.transform = 'translateX(-'+(index*step)+'%)';
              }
          });
        }
        //location.href = '/mall/Admin/Advertise/toEdit?type=carousel&index='+index;
      });
    });
  </script>
</body>