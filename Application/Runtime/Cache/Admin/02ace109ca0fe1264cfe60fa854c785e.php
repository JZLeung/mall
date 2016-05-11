<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>商品列表 - 商城后台管理</title>

    <link href="/mall/Public/Admin/sb/css/bootstrap.min.css" rel="stylesheet">
    <link href="/mall/Public/Admin/sb/css/sb-admin-2.css" rel="stylesheet">
    <link href="/mall/Public/Admin/sb/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/mall/Public/Common/css/simditor.css" />
    <link rel="stylesheet" href="/mall/Public/Common/css/jquery.fileupload.css">
    <style>
        .list-group-item{margin-bottom: 5px;}
        td,th{text-align: center;vertical-align: middle !important;}
        .delcolbtn{margin-left: 10px}
        .config-items{margin-top: 15px;}
        .config-items a{margin-right: 5px;}

        .param{margin-right: 10px;text-align: center;}
        .well.active{color: #fff;background-color: #337ab7 !important;}
        td >img{width: 100px;}
    </style>
</head>

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
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">商品列表</h1>
                    <div class="row" style="margin-bottom: 10px">
                    <form action="" method="get">
                        <div class="form-inline">
                            根据类目分类搜索：类目1：
                            <select class="form-control" name="lm1" id="s1">
                            </select>
                            类目2：
                            <select class="form-control" name="lm2" id="s2">
                            </select>
                            <input type="submit" class="btn btn-info" value="搜索">
                        </div>
                    </form>
                    </div>
                    <table class="table table-striped table-bordered table-hover" id="itemlist">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>预览</th>
                                <th>名称</th>
                                <th>标题</th>
                                <th>价格</th>
                                <th>操作</th>
                                <!-- <th></th>
                                <th></th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php define('index', '0'); ?>
                            <?php if(is_array($data)): foreach($data as $key=>$item): ?><tr data-id="<?php echo ($item['_id']); ?>">
                                    <td><?php echo ++$index;?></td>
                                    <td><img src="<?php echo ($item['pictures'][0]['src']); ?>" alt="<?php echo ($item['pictures'][0]['title']); ?>" /></td>
                                    <td><?php echo ($item["name"]); ?></td>
                                    <td><?php echo ($item["title"]); ?></td>
                                    <td><?php echo ($item["price"]); ?></td>
                                    <td>
                                        <a href="javascript:;" class="btn btn-info btn-circle btn-edit"><i class="fa fa-edit"></i></a>
                                        <a href="javascript:;" class="btn btn-danger btn-circle btn-del"><i class="fa fa-trash-o"></i></a>
                                        <a href="javascript:;" class="btn btn-info btn-circle btn-check"><i class="fa fa-html5"></i></a>
                                    </td>
                                </tr><?php endforeach; endif; ?>
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="/mall/Public/Common/js/admin.base.js"></script>
<script type="text/javascript" src="/mall/Public/Common/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/mall/Public/Common/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="/mall/Public/Common/js/selector.js"></script>
<script>
    var selectors, catalogData;
    $(document).ready(function() {
        var form = $('#itemlist');
            
        $('#itemlist').DataTable();

        $.get('../Catalog/getAllCatalogsFront', function(data) {
            catalogData = data;
            selectors = new selector({
                //selecotor:['#s1', '#s2', '#s3']
                selecotor:['s1', 's2'],
                data:data,
                default: ['全部', '全部']
            })
            selectors.setValue([-1], true);
            //selectors.setValue(['<?php echo ($data["lm1"]); ?>' || 0 , '<?php echo ($data["lm2"]); ?>' || 0])
            //document.getElementById('s1').selectedIndex = '<?php echo ($data["lm1"]); ?>' || 0;
            //document.getElementById('s2').selectedIndex = '<?php echo ($data["lm2"]); ?>' || 0;
        });

        function resetForm(){
            form.find('tbody tr').each(function(index, el) {
                $(this).find('td').eq(0).text(index+1);
            });
        }
        $('#itemlist').on('click', '.btn-edit', function(event) {
            event.preventDefault();
            var id = findParentByTagName('tr',this).data('id');
            location.href = '/mall/Admin/Index/item_edit?id='+id;
        }).on('click', '.btn-del', function(event) {
            event.preventDefault();
            var p = findParentByTagName('tr',this);
            var id = p.data('id'),
                name = p.find('td').eq(2).text();
            if (confirm('确认要删除商品【'+name+'】吗？')) {
                $.post('/mall/Admin/Items/delItem', {id: id}, function(data) {
                    console.log(data);
                    if (data['ok'] == 1) {
                        alert('删除成功');
                        p.remove();
                        resetForm()
                    }
                });
            }
        }).on('click', '.btn-check', function(event) {
            event.preventDefault();
            var id = findParentByTagName('tr',this).data('id');
            location.href = '/mall/item/'+id;
        });
    });
</script>
</body>