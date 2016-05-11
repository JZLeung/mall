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
    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">轮播广告设置</h1>
        </div>
        <div class="col-lg-12">
          <div class="carousel-item" id="carousel">
            <img src="/mall/<?php echo ($ad["picurl"]); ?>" alt="">
            <div class="carousel-panel">
              <h3 class="carousel-title"><?php echo ($ad["title"]); ?></h3>
              <div class="carousel-content"><?php echo ($ad["content"]); ?></div>
            </div>
          </div>
        </div>
        <form class="col-lg-12" style="margin-top: 20px;" id="form">
          <div class="form-group">
            <label>广告标题</label>
            <input class="form-control" id="title" name="title" data-ad='title' value="<?php echo ($ad["title"]); ?>">
          </div>
          <div class="form-group">
            <label>广告描述</label>
            <textarea class="form-control" rows="3" cols="10" name="content" id="content" data-ad="content"><?php echo ($ad["content"]); ?></textarea>
          </div>
          <div class="row" style="margin-top: 20px;">
            <div class="col-lg-3">
              <div class="form-group">
                <label>广告图片</label>
                <p><button type="button" class="btn btn-primary" id="file">点击上传图片</button></p>
                <input type="hidden" name="picurl" id="picurl" value="<?php echo ($ad["picurl"]); ?>">
              </div>
            </div>
            <div class="col-lg-9">
              <div class="form-group">
                <label class="col-lg-12 col-md-12 col-sm-12">广告商品</label>
                <div class="col-lg-3 col-md-6 col-sm-6">
                  <select class="form-control" id="lm1" data-ad="lm1" class="form-control"></select>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                  <select class="form-control" id="lm2" data-ad="lm2" class="form-control"></select>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                  <select class="form-control" id="itemname" data-ad="itemname" class="form-control"></select>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>广告链接</label>
            <input class="form-control" id="url" name="url" data-ad='url' disabled="disabled">
          </div>
          <div class="form-group">
            <button class="btn btn-primary" id="save">保存</button>
            <button class="btn btn-danger" id="delete">删除</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="/mall/Public/Common/js/upload/jquery.upload.min.js"></script>
  <script src="/mall/Public/Common/js/selector.js"></script>
  <script>
    $(function(){
      var $carousel = $('#carousel'),
          $form = $('#form');
      $form.on('change', '.form-control', function(event) {
        event.preventDefault();
        if (this.tagName.toLowerCase() != 'select') {
          var act = $(this).data('ad'),
              value = this.value;
          $carousel.find('.carousel-'+act).text(value);
        }
      });
      
      var selectors,
          allDatas = {};
      //获取商品的目录
      $.get('../Catalog/getAllCatalogsFront', function(data) {
          catalogData = data;
          selectors = new selector({
              selecotor:['lm1', 'lm2'],
              data:data
          })
          selectors.setValue([0 , 0])
          $s2.change();
      });

      //选择展示商品
      var s1 = document.getElementById('lm1'),
          s2 = document.getElementById('lm2'),
          s3 = document.getElementById('itemname'),
          $s1 = $(s1),
          $s2 = $(s2),
          $s3 = $(s3),
          url = $('#url');
      function getItems(){
        var lm1 = s1.selectedIndex,//s1.options[s1.selectedIndex].value,
            lm2 = s2.selectedIndex;//s2.options[s2.selectedIndex].value;
        if (allDatas[lm1+','+lm2] == undefined) {
          $.post('../Items/getItemsFront', {lm1: lm1,lm2: lm2}, function(data, textStatus, xhr) {
            allDatas[lm1+','+lm2] = data;
            //if (data) {setItems(data)}
            setItems(data)
          });
        }else{
          setItems(allDatas[lm1+','+lm2]);
        }
        
      }
      function setItems(items){
        s3.options.length = 0;
        if (items) {
          for (var i = items.length - 1; i >= 0; i--) {
            s3.options[i] = new Option(items[i]['title'],items[i]['_id']);
          }
        }
        
      }

      $('#lm2').on('change',getItems);
      $('#lm1').change(function(){
        $('#lm2').change();
      });

      $('#itemname').change(function(){
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
        $('#picurl').val(file_path);
      });
      function arrayToObject(array){
        var obj = {};
        for (var i = 0; i < array.length; i++) {
          obj[array[i]['name']] = array[i]['value']
        }
        return obj;
      }

      $('#save').click(function(event) {
        event.preventDefault();
        var dataTmp = $form.serializeArray(),
            type = 'carousel';
        var data = arrayToObject(dataTmp)
        $.post('./edit', {data: data, type: type, index:<?php echo ($_GET['index']); ?>}, function(data, textStatus, xhr) {
          console.log(data);
        });
      });


    });
  </script>
</body>