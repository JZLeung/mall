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
                  <a href="#">
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
    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">轮播广告设置</h1>
        </div>
        <div class="col-lg-12">
          <div class="carousel" id="carousel">
            <div class="carousel-container" id="carousel-body">
              <div class="carousel-item">
                <img src="/mall/Public/Common/images/1.jpg" alt="">
                <div class="carousel-panel">
                  <h3 class="carousel-title">广告标题</h3>
                  <div class="carousel-content">
                    广告的详细描述
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img src="/mall/Public/Common/images/1.jpg" alt="">
                <div class="carousel-panel">
                  <h3 class="carousel-title">广告标题</h3>
                  <div class="carousel-content">
                    广告的详细描述
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img src="/mall/Public/Common/images/1.jpg" alt="">
                <div class="carousel-panel">
                  <h3 class="carousel-title">广告标题</h3>
                  <div class="carousel-content">
                    广告的详细描述
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img src="/mall/Public/Common/images/1.jpg" alt="">
                <div class="carousel-panel">
                  <h3 class="carousel-title">广告标题</h3>
                  <div class="carousel-content">
                    广告的详细描述
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img src="/mall/Public/Common/images/1.jpg" alt="">
                <div class="carousel-panel">
                  <h3 class="carousel-title">广告标题</h3>
                  <div class="carousel-content">
                    广告的详细描述
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-btns" id="carousel-btns">
              <div class="prevbtn clickbtn"><span></span></div>
              <div class="nextbtn clickbtn"><span></span></div>
            </div>
          </div>
        </div>
        <div class="col-lg-12" style="margin-top: 20px;" id="form">
          <div class="form-group">
            <label>广告标题</label>
            <input class="form-control" id="title" name="title" data-ad='title'>
          </div>
          <div class="form-group">
            <label>广告描述</label>
            <textarea class="form-control" rows="3" cols="10" name="content" id="content" data-ad="content"></textarea>
          </div>
          <div class="row" style="margin-top: 20px;">
            <div class="col-lg-3">
              <div class="form-group">
                <label>广告图片</label>
                <p><button type="button" class="btn btn-primary" id="file">点击上传图片</button></p>
              </div>
            </div>
            <div class="col-lg-9">
              <div class="form-group">
                <label class="col-lg-12">广告商品</label>
                <div class="col-lg-3">
                  <select class="form-control" name="lm1" id="s1" data-ad="lm1" class="form-control"></select>
                </div>
                <div class="col-lg-3">
                  <select class="form-control" name="lm2" id="s2" data-ad="lm2" class="form-control"></select>
                </div>
                <div class="col-lg-4">
                  <select class="form-control" name="itemname" id="s3" data-ad="itemname" class="form-control"></select>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>广告链接</label>
            <input class="form-control" id="url" name="url" data-ad='url' disabled="disabled">
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="/mall/Public/Common/js/upload/jquery.upload.min.js"></script>
  <script src="/mall/Public/Common/js/selector.js"></script>
  <script>
    $(function(){
      var carousel = document.getElementById('carousel'),
          carouselBody = document.getElementById('carousel-body'),
          carouselBtn = document.getElementById('carousel-btns');
      var carouselItems = $('.carousel-item'),//carouselBody.querySelectorAll('.carousel-item'),
          count = carouselItems.length,
          step = 1/count *100;
      var adtitle = $('#title'),
          adcontent = $('#content'),
          form = $('#form');

      carouselBody.style.width = count*100+'%';
      for (var i = carouselItems.length - 1; i >= 0; i--) {
        carouselItems[i].style.width = step + '%';
      }
      var index = 0;
      //上下页动作
      $(carouselBtn).on('click', '.prevbtn', function(event) {
        event.preventDefault();
        index -= 1;
        if (index < 0) {index = count - 1;}
        carouselBody.style.transform = 'translateX(-'+(index*step)+'%)';
        //console.log(index);
        setEditText()
      }).on('click', '.nextbtn', function(event) {
        event.preventDefault();
        index += 1;
        if (index == count) {index = 0;}
        carouselBody.style.transform = 'translateX(-'+(index*step)+'%)';
        //console.log(index);
        setEditText()
      });

      //将广告的标题描述初始化至编辑框中
      function setEditText(){
        var item = $(carouselItems[index]);
        var datas = item.data(), flag = 0;
        console.log(datas);
        for (var i in datas) {
          form.find('#'+i).val(datas[i]);
          flag ++;
        }
        if (!flag){
          var title = item.find('.carousel-title').text(),
              content = item.find('.carousel-content').text();
          adtitle.val($.trim(title));
          adcontent.val($.trim(content));
        }
      }

      //编辑完同步
      $('#form').on('change', '.form-control' ,function(event) {
        event.preventDefault();
        var item = $(carouselItems[index]),
            act = $(this).data('ad');
        console.log(act,this.value)
        if (act) {
          item.data(act, this.value);
          item.find('.carousel-'+act).text(this.value);
        }
      });
      var selectors;
      //获取商品的目录
      $.get('../Catalog/getAllCatalogsFront', function(data) {
          catalogData = data;
          selectors = new selector({
              selecotor:['s1', 's2'],
              data:data
          })
          selectors.setValue([0 , 0])
          $(s2).change();
      });

      //选择展示商品
      var s1 = document.getElementById('s1'),
          s2 = document.getElementById('s2'),
          s3 = document.getElementById('s3'),
          url = $('#url');
      function getItems(){
        var lm1 = s1.options[s1.selectedIndex].value,
            lm2 = s2.options[s2.selectedIndex].value;
        $.post('../Items/getItemsFront', {lm1: lm1,lm2: lm2}, function(data, textStatus, xhr) {
          //console.log(data)
          setItems(data)
        });
      }
      function setItems(items){
        s3.options.length = 0;
        for (var i = items.length - 1; i >= 0; i--) {
          s3.options[i] = new Option(items[i]['title'],items[i]['_id']);
        }
      }

      $('#s2').change(getItems);
      $('#s3').change(function(){
        url.val('/item/'+this.value).change();
      });

      //初始化上传控件
      var uploader = new Uploader({
        trigger: '#file',
        action: '../Upload/uploadAD',
        data:{'ad':true},
      }).change(function(filename) {
        console.log(filename);
        this.submit();
      }).success(function(data) {
        console.log(data);
        var file_path = data.file_path,
            item = $(carouselItems[index]);
        item.find('img').attr('src', '/mall'+file_path);
      });
    });
  </script>
</body>