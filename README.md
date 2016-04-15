## 基于ThinkPHP搭建的简易商城

### 简介
使用国内流行的PHP框架 —— ThinkPHP 开发的简易商城。
使用MongoDB作为后台数据库。
前台界面采用扁平化设计。
后台管理界面采用SB Admin2 + Bootstrap3搭建。

### 使用
1. 下载解压源码至本地服务器目录`./mall`中
2. 目录`./data/`为数据库中的json文件，在终端中使用`mongoimport -d tp_mall -c tableName jsonFile`命令导入数据
3. 使用浏览器访问 `[object path]/mall/`
4. 后台进入地址：`[object path]/mall/Admin`,初始账号密码为:`admin` ，`admin123`


### 已完成
1. 后台管理
	* 商品管理：增加，编辑，删除，查看
	* 分类管理：增加，编辑，删除，查看
	* 用户管理：查看
2. 前台页面
	* 用户中心模板
	* 商品的查看，搜索
	* 根据分类查看商品