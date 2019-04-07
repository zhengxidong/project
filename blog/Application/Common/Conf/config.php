<?php
return array(
	//'配置项'=>'配置值'
    /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'db_blog',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码

    //服务器
   /* 'DB_TYPE'               =>  'mysql',
    'DB_HOST'               =>  'bdm246300294.my3w.com',
    'DB_NAME'               =>  'bdm246300294_db',
    'DB_USER'               =>  'bdm246300294',      // 用户名
    'DB_PWD'                =>  'Zheng123',          // 密码*/

    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'tb_',    // 数据库表前缀

    'TMPL_L_DELIM'          =>  '<!--{',            // 模板引擎普通标签开始标记
    'TMPL_R_DELIM'          =>  '}-->',            // 模板引擎普通标签结束标记

    'TMPL_ACTION_ERROR'     =>  'Public/View/jump.html', // 默认错误跳转对应的模板文件
    'TMPL_ACTION_SUCCESS'   =>  'Public/View/jump.html', // 默认成功跳转对应的模板文件


    /* URL设置 */
    'URL_ROUTER_ON'         =>  true,   // 是否开启URL路由
    'URL_CASE_INSENSITIVE'  =>  true,   // 默认false 表示URL区分大小写 true则表示不区分大小写
    'URL_MODEL'             =>  1,       // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
    // 0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE  模式); 3 (兼容模式)  默认为PATHINFO 模式
    //'VAR_PATHINFO'          =>  's',    // 兼容模式PATHINFO获取变量例如 ?s=/module/action/id/1 后面的参数取决于URL_PATHINFO_DEPR

);