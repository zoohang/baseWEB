<?php
return array(
	//'配置项'=>'配置值'
  //'配置项'=>'配置值'
  'TMPL_FILE_DEPR'=>'_',
  //'TMPL_TEMPLATE_SUFFIX'=>'.tpl', #设置试图输出模板的格式
  'SESSION_AUTO_START' => true, //是否开启session

	//'URL_MODEL' => '2',

  'DOMAIN_NAME' => 'http://www.zoohang.com',
  // 配置邮件发送服务器
  'MAIL_HOST' =>'smtp.qq.com',//smtp服务器的名称
  'MAIL_SMTPAUTH' =>TRUE, //启用smtp认证
  'MAIL_USERNAME' =>'136927705@qq.com',//你的邮箱名
  'MAIL_FROM' =>'136927705@qq.com',//发件人地址
  'MAIL_PASSWORD' =>'zuo15802346441.',//邮箱密码
  'MAIL_FROMNAME'=>'xxxx邮件通知中心',//发件人姓名
  'MAIL_CHARSET' =>'utf-8',//设置邮件编码
  'MAIL_ISHTML' =>TRUE, // 是否HTML格式邮件

  'DB_TYPE'      =>  'mysql',     // 数据库类型
  'DB_HOST'      =>  'localhost',     // 服务器地址
  'DB_NAME'      =>  'test',     // 数据库名
  'DB_USER'      =>  'root',     // 用户名
  'DB_PWD'       =>  'root',     // 密码
  'DB_PORT'      =>  '3306',     // 端口
  'DB_PREFIX'    =>  'think_',     // 数据库表前缀
  'DB_DSN'       =>  '',     // 数据库连接DSN 用于PDO方式
  'DB_CHARSET'   =>  'utf8', // 数据库的编码 默认为utf8

  'URL_ROUTER_ON'   => false,  //开启路由
  'URL_ROUTE_RULES'=>array(
    'home'  => 'Home/Index/home',
    'about' => 'Home/Index/about',
    'contact' => 'Home/Index/contact',
    'privacy' => 'Home/Index/privacy',
    'repair'  => 'Home/Repair/index',
    'location'  => 'Home/Location/index'
    )
);