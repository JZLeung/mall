<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>添加商品 - 商城后台管理</title>

    <link href="/mall/Public/Admin/sb/css/bootstrap.min.css" rel="stylesheet">
    <link href="/mall/Public/Admin/sb/css/sb-admin-2.css" rel="stylesheet">
    <link href="/mall/Public/Admin/sb/css/font-awesome.css" rel="stylesheet" type="text/css">
    <style>
        .list-group-item{margin-bottom: 5px;}
    </style>
</head>

<body>
<div id="wrapper">


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
                  <button class="btn btn-default" type="button">
                      <i class="fa fa-search"></i>
                  </button>
                </span>
              </div>
              <!-- /input-group -->
            </li>
            <li>
              <a href="#"><i class="fa fa-home"></i> 首页</a>
            </li>
            <li>
              <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 商品管理<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level">
                <li>
                  <a href="#"><i class="fa fa-th-large"></i> 商品列表</a>
                </li>
                <li>
                  <a href="Admin/Index/item_add"><i class="fa fa-plus"></i> 添加商品</a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-list-alt"></i> 广告设置<span class="fa arrow"></span></a>
                  <ul class="nav nav-third-level">
                    <li><a href="#"><i class="fa fa-th-list"></i> 轮播广告</a></li>
                    <li><a href="#"><i class="fa fa-th-list"></i> 精选广告</a></li>
                    <li><a href="#"><i class="fa fa-th-list"></i> 明星产品</a></li>
                    <li><a href="#"><i class="fa fa-th-list"></i> 推广产品</a></li>
                  </ul>
                </li>
              </ul>
            </li>

            <li>
              <a href="#"><i class="fa fa-users"></i> 会员管理<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level">
                <li>
                  <a href="#"><i class="fa fa-list-alt"></i> 用户列表</a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-plus"></i> 新增会员</a>
                </li>
              </ul>
            </li>

            <li>
              <a href="#"><i class="fa fa-tasks"></i> 类目管理<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level">
                <li><a href="#"><i class="fa fa-th-list"></i> 类目列表</a></li>
                <li><a href="#"><i class="fa fa-wrench "></i> 类目设置</a></li>
                <li><a href="#"><i class="fa fa-plus"></i> 新增类目</a></li>
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
                <h1 class="page-header">添加商品</h1>
            </div>
        <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-lg-12">
            <form role="form" action="../Items/index" id="form" method="post" onsubmit="return false;">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        基本信息
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="col-lg-3">
                                    <div class="list-group" id="piclist">
                                        <img src="http://img10.360buyimg.com/n1/jfs/t2503/30/882326252/32149/16a84c13/5631d227N94dd67f8.jpg" alt="" class="img-thumbnail list-group-item" data-pid="1">
                                        <img src="//img11.360buyimg.com/n1/jfs/t1972/28/898142046/38869/26ab43bd/5631d229N6d2d3180.jpg" alt="" class="img-thumbnail list-group-item" data-pid="2">
                                    </div>
                                </div>
                                <div class="col-lg-8 col-lg-offset-1" id="picshow">

                                    <img src="http://img10.360buyimg.com/n1/jfs/t2503/30/882326252/32149/16a84c13/5631d227N94dd67f8.jpg" alt="" class="img-thumbnail">
                                    <div class="form-group">
                                        <label>描述</label>
                                        <input class="form-control" placeholder="Enter text" name="pic.title" data-pid="1">
                                        <p class="help-block">图片描述</p>
                                    </div>
                                    <input type="file" id="fileupload" name="pic.name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>标题</label>
                                    <input class="form-control" placeholder="Enter text" name="phone.title">
                                    <p class="help-block">商品标题</p>
                                </div>
                                <div class="form-group">
                                    <label>简介</label>
                                    <textarea class="form-control" rows="3" name="desc" id="desc"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>价格</label>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">$</span>
                                        <input type="text" class="form-control" name="price">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>类目选择</label>
                                    <div class="row">
                                    <div class="col-lg-4">
                                    	<p class="help-block">类目1</p>
                                    	<select class="form-control" name="lm1">
	                                        <option value="1">1</option>
	                                        <option value="2">2</option>
	                                        <option value="3">3</option>
	                                        <option value="4">4</option>
	                                        <option value="5">5</option>
	                                    </select></div><div class="col-lg-4">
	                                    <p class="help-block">类目2</p>
	                                    <select class="form-control col-lg-4" name="lm2">
	                                        <option value="1-1">1-1</option>
	                                        <option value="2-1">2-1</option>
	                                        <option value="3-1">3-1</option>
	                                        <option value="4-1">4-1</option>
	                                        <option value="5-1">5-1</option>
	                                    </select></div><div class="col-lg-4">
	                                    <p class="help-block">类目3</p>
	                                    <select class="form-control col-lg-4" name="lm3">
	                                        <option value="1-2">1-2</option>
	                                        <option value="2-2">2-2</option>
	                                        <option value="3-2">3-2</option>
	                                        <option value="4-2">4-2</option>
	                                        <option value="5-2">5-2</option>
	                                    </select></div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            
                        </div>
                        <div class="row">
                        	<button type="submit" id="submit" class="btn btn-default">Submit Button</button>
                            <button type="reset" class="btn btn-default">Reset Button</button>
                        </div>
                    </div>
                </div>
                <!-- /.panel -->
            </form>
            </div>
            <!-- /.col-lg-12 -->
        </div>
	</div>
    <script src="/mall/Public/Common/js/ajaxfileupload.js"></script>
    <script>
        var itemData = {};

        $(document).ready(function() {
            var btn = $('#submit'),
                picshow = $('#picshow'),
                piclist = $('#piclist');
            btn.on('click', function(event) {
                event.preventDefault();
                $.post('../Items/index', itemData, function(data, textStatus, xhr) {
                    console.log(data);
                });
                return false;
            });
            $('#form').on('change', 'input,textarea', function(event) {
                event.preventDefault();
                var name = this.name,
                    value = this.value;
                if (name == "pic.title") {
                    var id = $(this).data('pid');
                    itemData['pic'] || (itemData['pic'] = {});
                    itemData['pic'][id] || (itemData['pic'][id] = {});
                    itemData['pic'][id]['title'] = value;
                    piclist.find('img[data-pid="'+id+'"]').attr('alt', value);
                }else
                    itemData[name] = value;
            });

            piclist.on('click', 'img', function(event) {
                event.preventDefault();
                picshow.find('img').attr('src', this.src);
                picshow.find('input').data('pid', $(this).data('pid')).val(this.alt);

            });

            $('#fileupload').change(function(event) {
                $.ajaxFileUpload({
                    type:'post',
                    secureuri:false,
                    url:'../Upload/upload',
                    fileElementId : 'fileupload',
                    success:function(data){
                        console.log(data);
                        //$('#upload').replaceWith('<input type="file" name="myFile" id="upload">'); 
                    }
                });
            });
        });
    </script>
</div>
</body>
</html>