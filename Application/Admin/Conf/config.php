<?php
return array(
	//'配置项'=>'配置值'
/*	'DB_TYPE'=>'mysql',// 数据库类型
	'DB_HOST'=>'127.0.0.1',// 服务器地址
	'DB_NAME'=>'buct_shop',// 数据库名
	'DB_USER'=>'root',// 用户名
	'DB_PWD'=>'',// 密码
	'DB_PORT'=>3306,// 端口
	'DB_PREFIX'=>'tp_',// 数据库表前缀
	'DB_CHARSET'=>'utf8',// 数据库字符集
*/
	'URL_ROUTER_ON' => true,
    'URL_ROUTE_RULES' => array(
        'login' => 'Admin/Passport/toLogin',
        'regist' => 'Admin/Passport/toRegist'
    ),
);