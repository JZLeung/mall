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
    <link rel="stylesheet" type="text/css" href="/mall/Public/Common/css/simditor.css" />
    <link rel="stylesheet" href="/mall/Public/Common/css/jquery.fileupload.css">
    <style>
        .list-group-item{margin-bottom: 5px;}
        td,th{text-align: center;}
        .delcolbtn{margin-left: 10px}
        .config-items{margin-top: 15px;}
        .config-items a{margin-right: 5px;}

        .param{margin-right: 10px;text-align: center;}
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
                  <a href="/mall/Admin/Index/item_list"><i class="fa fa-th-large"></i> 商品列表</a>
                </li>
                <li>
                  <a href="/mall/Admin/Index/item_add"><i class="fa fa-plus"></i> 添加商品</a>
                </li>
                <li>
                  <a href="/mall/Admin/Index/item_edit?id=9"><i class="fa fa-plus"></i> 编辑商品</a>
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
                                <!-- 上传图片 -->
                                <div class="col-lg-3">
                                    <div class="list-group" id="piclist">
                                        <div class="fileinput-button img-thumbnail list-group-item text-center" id="addImg" style="display: block;">
                                            <i class="fa fa-plus"></i>
                                            <input id="fileupload" type="file" name="fileupload">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-lg-offset-1" id="picshow">

                                    <img src="" alt="" class="img-thumbnail">
                                    <div class="form-group">
                                        <label>描述</label>
                                        <div class="input-group">
                                            <input class="form-control" placeholder="Enter text" data-pid="" id="imgdesc">
                                            <div class="input-group-addon btn btn-danger" id="delImg">
                                                <i class="fa fa-trash-o"></i>
                                            </div>
                                        </div>
                                        <p class="help-block">图片描述</p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-6">
                                <!-- 基本信息 -->
                                <div class="form-group">
                                    <label>标题</label>
                                    <input class="form-control" placeholder="Enter text" name="title">
                                    <p class="help-block">商品标题</p>
                                </div>
                                <div class="form-group">
                                    <label>简介</label>
                                    <textarea class="form-control" rows="3" name="subscribe" id="desc"></textarea>
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
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">套餐/组合</div>
                    <div class="panel-body">
                        <div class="col-lg-8">
                            <div id="configures">
                                <div class="well config">
                                    <div class="form-inline">
                                        名字：<input type="text" class="form-control configname">
                                        增加新项：
                                        <div class="input-group">
                                            <input type="text" class="form-control">
                                            <div class="input-group-addon btn btn-success addCon"><i class="fa fa-plus"></i></div>
                                        </div>
                                        <a class="btn btn-danger delcons"><i class="fa fa-trash-o"></i></a>
                                    </div>
                                    <div class="config-items">
                                        <a class="btn btn-danger delcon"><i class="fa fa-trash-o"></i> →</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6" >
                                    已选择组合: <span id="selectedCon"></span>
                                </div>
                                <div class="col-lg-12 col-md-6 form-inline">
                                    价格为：<input type="text" class="form-control" id="iPrice">
                                    库存为：<input type="text" class="form-control" id="iStock">
                                    <button class="btn btn-success btn-sm" id="addPrice"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                            <div class="text-center btn btn-success btn-block" id="newConfig" style="margin-top: 10px">
                                <i class="fa fa-plus"></i>  新增配置
                            </div>
                            <div id="configTem" class="hidden">
                                <div class="well config">
                                    <div class="form-inline">
                                        名字：<input type="text" class="form-control configname">
                                        增加新项：
                                        <div class="input-group">
                                            <input type="text" class="form-control">
                                            <div class="input-group-addon btn btn-success addCon"><i class="fa fa-plus"></i></div>
                                        </div>
                                        <a class="btn btn-danger delcons"><i class="fa fa-trash-o"></i></a>
                                    </div>
                                    <div class="config-items">
                                        <a class="btn btn-danger delcon"><i class="fa fa-trash-o"></i> →</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="well" id="priceData">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">参数信息</div>
                    <div class="panel-body">
                        <div class="params" id="params">

                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="form-inline">
                            <label for="">添加参数 </label>
                            <div class="form-group input-group">
                                <span class="input-group-addon">参数名</span>
                                <input type="text" class="form-control" placeholder="参数名" id="paramName">
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon">参数值</span>
                                <input type="text" class="form-control" placeholder="参数值" id="paramValue">
                            </div>
                            <button id="addParam" class="btn btn-success"><i class="fa fa-plus"></i></button>
                            <button id="delParam" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                        </div>
                    </div>
                </div>
                <!-- <div class="panel panel-default">
                    <div class="panel-heading">套餐/组合</div>
                    <div class="panel-body">
                        <div class="form-inline" style="margin-bottom: 10px;">

                            <div class="input-group">
                                <div class="input-group-addon">增加新的配置</div>
                                <input type="text" class="form-control" id="newColName">
                                <div class="input-group-addon btn btn-success" id="addCol"><i class="fa fa-plus"></i></div>
                            </div>
                        </div>
                        <div class="form-inline" style="margin-bottom: 10px;">
                            给配置
                            <select id="configSelector">
                                <option value="">请添加新的配置</option>
                            </select>
                            添加新配置项
                            <input type="text" class="form-control" id="newDataName">
                            <button class="btn btn-success" id="addData"><i class="fa fa-plus"></i></button>
                        </div>
                        <table class="table table-striped table-bordered table-hover" id="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>价格</th>
                                    <th>
                                        操作
                                        <button class="btn btn-success btn-sm" id="addRow"><i class="fa fa-plus"></i></button>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td><input type="text"></td>
                                    <td>
                                        <button class="btn btn-danger btn-sm delbtn"><i class="fa fa-trash-o"></i></button>
                                        <button class="btn btn-primary btn-sm resetbtn"><i class="fa fa-repeat"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        详细内容
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label>内容宽度</label>
                            <select name="content" id="">
                                <option value="s">小（750px）</option>
                                <option value="m">中（900px）</option>
                                <option value="l">宽（1150px）</option>
                            </select>
                            <p class="help-block">详细信息展示的宽度（影响图片的显示质量）</p>
                        </div>
                        <!-- 编辑器 -->
                        <textarea id="editor" placeholder="Balabala"></textarea>
                    </div>
                </div>
                <!-- /.panel -->
                <div class="row">
                    <button type="submit" id="submit" class="btn btn-default">Submit Button</button>
                    <button type="reset" class="btn btn-default">Reset Button</button>
                </div>
            </form>
            </div>
        </div>
	</div>

    <script type="text/javascript" src="/mall/Public/Common/js/simeditor/module.min.js"></script>
    <script type="text/javascript" src="/mall/Public/Common/js/simeditor/hotkeys.min.js"></script>
    <script type="text/javascript" src="/mall/Public/Common/js/simeditor/uploader.min.js"></script>
    <script type="text/javascript" src="/mall/Public/Common/js/simeditor/simditor.min.js"></script>
    <script src="/mall/Public/Common/js/ajaxfileupload.js"></script>
    <script src="/mall/Public/Common/js/upload/jquery.ui.widget.js"></script>
    <script src="/mall/Public/Common/js/upload/jquery.fileupload.js"></script>
    <script>
        var itemData = {},
            pid = 1,
            $fileupload = $('#fileupload'),
            editor;

        $(document).ready(function() {
            var btn = $('#submit'),
                picshow = $('#picshow'),
                piclist = $('#piclist'),
                delImg = $("#delImg"),
                addImg = $("#addImg"),
                table = $("#table");

            var default_img = '/mall/Public/Common/images/default.png';

            //提交表单
            btn.on('click', function(event) {
                event.preventDefault();
                getAllData();
                $.post('../Items/index', {data: itemData}, function(data, textStatus, xhr) {
                    console.log(data);
                });
                getItemData();
                console.log(itemData);
                return false;
            });


            //选择图片
            function selectImg(img){
                picshow.find('img').attr('src', img.src);
                var me = img;
                picshow.find('input').each(function(index, el) {
                    $(this).data('pid', $(me).data('pid')).val(me.alt);
                });
                console.log("You've selected the Image . PID is "+$(me).data('pid'));
            }
            //点击选择图片
            piclist.on('click', 'img', function(event) {
                event.preventDefault();
                selectImg(this)
            });
            $('#imgdesc').on('blur', function(event) {
                event.preventDefault();
                var img = piclist.find('img[data-pid='+$(this).data('pid')+']')[0];
                img.alt = this.value;
            });

            //删除图片
            delImg.on('click', function(event) {
                event.preventDefault();
                var id = $(this).prev().data('pid');
                var del = piclist.find('img[data-pid='+id+']');

                if (del.length == 0) {alert('没有可以删除的图片');return;}
                del.remove();
                itemData['pic'][id] = null;
                var images = piclist.find('img');
                if (images.length > 0) {
                    selectImg(images[0]);
                }else{
                    picshow.find('img').attr('src', '');
                }
            });


            //异步上传图片
            $fileupload.fileupload({
                url: '../Upload/upload',
                dataType: 'json',
                done: function (e, data) {
                    console.log(data.result);
                    var fileinfo = data.result;
                    var filepath = '/mall'+fileinfo['file_path'];
                    var img = document.createElement('img');
                    img.src = filepath;
                    var $img = $(img).attr({'data-pid': pid,'data-src': filepath}).addClass('img-thumbnail list-group-item');
                    //piclist.append($img);
                    selectImg(img);
                    $img.insertBefore(addImg);
                    pid++;
                }
            })

            //初始化编辑器
            editor = new Simditor({
                textarea: $('#editor'),
                defaultImage: '/mall/Public/Common/images/default.png',
                upload: {
                    url: '../Upload/upload',
                    params: {'editor': true},
                    fileKey: 'upload_file',
                    connectionCount: 3,
                    leaveConfirm: 'Uploading is in progress, are you sure to leave this page?'
                },
                //optional options
            });


            //添加参数
            var paramIndex = <?php echo (count($data["params"])); ?>;
            var $addParam = $('#addParam'),
                $paramName = $('#paramName'),
                $paramValue = $('#paramValue'),
                $params = $('#params'),
                $delParam = $('#delParam');
            $addParam.click(function(e){
                var name = $paramName.val(),
                    value = $paramValue.val();
                if ($.trim(name) == '' || $.trim(value) == '') {
                    alert('参数项不能为空');return;
                }
                var span1 = $('<span>').text(name),
                    span2 = $('<span>').text(value),
                    param = $('<label>').addClass('param well').append(span1).append(':').append(span2).data('id', ++paramIndex);
                $params.append(param);
            });
            $delParam.click(function(e){
                var id = $(this).data('id');
                console.log(id)
                $params.find('label[data-id='+id+']').remove();
            })
            $params.on('click', '.param', function(event) {
                var spans = $(this).find('span');
                var name = spans.eq(0).text(),
                    value = spans.eq(1).text();
                $(this).addClass('active').siblings().removeClass('active')
                $paramName.val(name);
                $paramValue.val(value);
                $delParam.data('id', $(this).data('id'));
            })

            function getParams() {
                var params = [];
                $params.find('.param').each(function(index) {
                    var spans = $(this).find('span');
                    var name = spans.eq(0).text(),
                        value = spans.eq(1).text();
                    params.push({name:name,value:value});
                });
                console.log(params);
                itemData['params'] = params;
            }

            //根据className寻找父元素
            function findParentByClassName(className, childNode){
                var p = $(childNode).parent();
                while(!p.hasClass(className)){
                    p = p.parent();
                }
                return p;
            }
            //根据TagName寻找父元素
            function findParentByTagName(tagName, childNode){
                var p = $(childNode).parent();
                while(p[0].tagName.toLowerCase() != tagName){
                    p = p.parent();
                }
                return p;
            }
            //找到已选择的配置项
            function selectConfigures(){
                var d = [],i = [];
                $configs.find('.btn-primary').each(function(index,val) {
                    d.push($(this).text());
                    i.push($(this).index()-1);
                });
                return [d.join(','), i.join(',')];
            }




            //配置项配置区域
            var $newConfig = $('#configTem').html(),
                $configs = $("#configures"),
                $selectedCon = $('#selectedCon'),
                $addPrice = $('#addPrice'),
                $priceData = $("#priceData")

            var configName = '', configData = '';
            //新增配置
            $('#newConfig').click(function(event) {
                $configs.append($newConfig);
            });
            //删除配置
            $configs.on('click', '.delcons', function(event) {
                event.preventDefault();
                var p = findParentByClassName('config', this);
                p.remove();
            });
            //新增配置项
            $configs.on('click', '.addCon', function(event) {
                var $a = $('<a>').addClass('btn btn-default configbtn'),
                    p = findParentByClassName('config', this),
                    v = $(this).prev().val();
                p.find('.config-items').append($a.text(v));
            })

            //选择配置项
            $configs.on('click', '.configbtn', function(event) {
                $(this).addClass('btn-primary').siblings().removeClass('btn-primary');
                var sc = selectConfigures();
                configName = sc[0];
                configData = sc[1];
                $selectedCon.text(configName);
                $selectedCon.data('data', configData);
                //console.log(sc);
            })
            //删除配置项
            $configs.on('click', '.delcon', function(event) {
                $(this).siblings('.btn-primary').remove()
            })
            //添加价格
            $addPrice.click(function(event) {
                var price = $('#iPrice').val(),
                    stock = $('#iStock').val();
                var child = $priceData.find('div[data-name="'+configData+'"]');
                if (configData == '') {
                    alert('请选择组合');return;
                }
                if ($.trim(price) == '' || $.trim(stock) == '') {
                    alert('请填写价格或者库存');return;
                }
                if (child.length == 0) {
                    var pri = $('<div>').html('配置项 <label class="name">'+configName+"</label> 价格为 : ");
                    pri.attr('data-name', configData).append($('<span>').text(price));
                    pri.append('，库存为：').append($('<span>').text(stock));
                    pri.appendTo($priceData);
                }else{
                    child.html('配置项 <label class="name">'+configName+"</label> 价格为 : ");
                    child.append($('<span>').text(price)).append('，库存为：');
                    child.append($('<span>').text(stock));
                }
                // if (child.length == 0) {
                //     var pri = $('<div>').text('配置项 '+configName+" 价格为 : ");
                //     pri.attr('data-name', configData).append($('<span>').text(price));
                //     pri.append('，库存为：').append($('<span>').text(stock));
                //     pri.appendTo($priceData);
                // }else{
                //     child.text('配置项 '+configName+" 价格为 : ");
                //     child.append($('<span>').text(price)).append('，库存为：');
                //     child.append($('<span>').text(stock));
                // }

            });


            //获取表单的所有数据
            function getItemData(){
                $("#form").find('input,select,textarea').each(function(index, el) {
                    var name = this.name,
                        value = this.value;
                    if (name && value) {
                        itemData[name] = value;
                    }

                });
            }
            function getImages(){
                itemData['pictures'] = [];
                piclist.find('img').each(function(index, el) {
                    var src = $(this).data('src'),
                        title = this.alt;
                    itemData['pictures'].push({'src':src, 'title': title});
                });
            }
            var prices = {},allConfig = {};
            function getPriceData(){
                prices = {},allConfig = {};
                var allc = $configs.find('.config');
                    length = allc.length;
                $priceData.find('div').each(function(index, el) {
                    var name = $(this).attr('data-name'),
                        spans = $(this).find('span');
                    if (name.split(',').length == length) {
                        var pp = {};
                        pp['price'] = spans.eq(0).text();
                        pp['stock'] = spans.eq(1).text();
                        prices[name] = pp;
                    }

                });
                allc.each(function(index1, el) {
                    allConfig[index1] = {};
                    allConfig[index1]['name'] = $(this).find('.configname').val();
                    allConfig[index1]['value'] = {};
                    $(this).find('.configbtn').each(function(index2, el) {
                        allConfig[index1]['value'][index2] = $(this).text();
                    });
                });
                itemData['prices'] = prices;
                itemData['attr'] = allConfig;
                //console.log(prices)
                //console.log(allConfig)
            }
            $('#getData').click(function(event) {
                getPriceData()
            });

            function getAllData(){
                //获取基本信息
                getItemData();
                //获取图片信息
                getImages();
                //获取价格信息
                getPriceData();
                //获取编辑器信息
                var v = editor.getValue()
                itemData['detail'] = v;
                //获取参数信息
                getParams();
                console.log(itemData);
            }
        });

        /*$(document).ready(function() {
            //表格操作
            var rows = 1,
                controlTd = '<td><button class="btn btn-danger btn-sm delbtn"><i class="fa fa-trash-o"></i></button><button class="btn btn-primary btn-sm resetbtn"><i class="fa fa-repeat"></i></button></td>',
                delColBtn = '<button class="btn btn-danger btn-sm delcolbtn"><i class="fa fa-trash-o"></i></button>'
            var table = $("#table"),
                newCol = $('#newColName'),
                newData = $('#newDataName'),
                tbody = table.find('tbody'),
                thead = table.find('thead'),
                config = $("#configSelector");
            //配置表格

            //新增一行
            $('#addRow').click(function(e){
                var tr = table.find('tbody > tr');
                if (tr.length == 0) {
                    tr = $('<tr>').append($('<th>'));
                    tr.append('<td><input type="text"></td>'+controlTd)
                }else{
                    tr = tr.last().clone();
                }
                tr.find('th').first().text(++rows);
                table.append(tr);
            })

            //新增一列
            $('#addCol').click(function(e){
                var name = newCol.val(),
                    //data = newData.val(),
                    tds = '';
                if ($.trim(name) == '') {alert('请输入配置名');return;}

                //if ($.trim(data) == '') {alert('请输入数据名');return;}
                //增加头
                //table.find('thead > tr').append($('<td>').text(name));
                $('<th>').text(name).data('name', name).append(delColBtn).insertBefore(thead.find('th').last())

                //给每一行都增加一列
                tbody.find('tr').each(function(index) {

                    //$(this).append('<td><select name=---"jjj"'+index+' id=""><option value="5-2">5-2</option></select></td>');
                    $('<td><select name="'+data+'" id=""><option value="5-2">5-2</option></select></td>').insertBefore($(this).find('td').last())
                });
            });
            //根据TagName寻找父元素
            function findParentByTagName(tagName, childNode){
                var p = $(childNode).parent();
                console.log(p)
                while(p[0].tagName.toLowerCase() != tagName){
                    p = p.parent();
                    console.log(p)
                }
                return p;
            }
            //重置左边的数字
            function resetNumber(){
                table.find('tbody > tr').each(function(index, el) {
                    $(this).find('th').first().text(index + 1);
                });
            }
            //删除一行
            table.on('click', '.delbtn', function(event) {
                event.preventDefault();
                if (confirm('确认要删除该行吗？')) {
                    var p = findParentByTagName('tr', this);
                    p.remove();
                    resetNumber();
                    rows--;
                }
            });
            //重置一行
            table.on('click', '.resetbtn', function(event) {
                event.preventDefault();
                var p = findParentByTagName('tr', this);
                p.find('input').each(function(index, el) {
                    this.value = '';
                });
            });
            table.on('click', '.delcolbtn', function(event) {
                event.preventDefault();
                var ind = $(this).index();
                thead.find('tr').children().eq(ind+1).remove();
                //table.find('thead tr').children().eq(ind).remove();
                tbody.find('tr').each(function(index, el) {
                    $(this).find('td').eq(ind-1).remove();
                });
            });
        });*/
    </script>
</div>
</body>
</html>