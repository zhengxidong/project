<?php /* Smarty version Smarty-3.1.14, created on 2017-04-01 12:06:06
         compiled from ".\template\articletype\add.html" */ ?>
<?php /*%%SmartyHeaderCode:2434258df969f203f36-04573021%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b34b037c9d22d9383f6e8596cdcbf1db1e453da3' => 
    array (
      0 => '.\\template\\articletype\\add.html',
      1 => 1491048309,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2434258df969f203f36-04573021',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58df969f3a3da6_98855589',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58df969f3a3da6_98855589')) {function content_58df969f3a3da6_98855589($_smarty_tpl) {?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="../public/admin/js/html5.js"></script>
<script type="text/javascript" src="../public/admin/js/respond.min.js"></script>
<script type="text/javascript" src="../public/admin/js/PIE_IE678.js"></script>
<![endif]-->
<link type="text/css" rel="stylesheet" href="../public/admin/css/H-ui.css"/>
<link type="text/css" rel="stylesheet" href="../public/admin/css/H-ui.admin.css"/>
<link type="text/css" rel="stylesheet" href="../public/admin/font/font-awesome.min.css"/>
<!--[if IE 7]>
<link href="../public/admin/font/font-awesome-ie7.min.css" rel="stylesheet" type="text/css" />
<![endif]-->
<title>添加文章分类</title>
</head>
<body>
<div class="pd-20">
  <form class="Huiform" id="loginform" action="?c=articletype&a=add" method="post">
    <table class="table table-border table-bordered table-bg">
      <tbody>

        <tr>
            <th class="text-r" width="80">文章分类：</th>
            <td><input name="articletypename" type="text" class="input-text" id="" datatype="*1-20" nullmsg="管理员名称不能为空！">
            </td>
        </tr>
        <tr>
          <th></th>
          <td>
            <button type="submit" class="btn btn-success radius" id="admin-role-save" name="admin-role-save"><i class="icon-ok"></i> 确定</button>
          </td>
        </tr>
      </tbody>
    </table>
  </form>
</div>
<script type="text/javascript" src="../public/admin/js/jquery.min.js"></script>
<script type="text/javascript" src="../public/admin/js/Validform_v5.3.2_min.js"></script> 
<script type="text/javascript" src="../public/admin/layer/layer.min.js"></script>
<script type="text/javascript" src="../public/admin/js/H-ui.js"></script> 
<script type="text/javascript" src="../public/admin/js/H-ui.admin.js"></script> 
<script type="text/javascript">
$(".Huiform").Validform(); 
</script>

</body>
</html><?php }} ?>