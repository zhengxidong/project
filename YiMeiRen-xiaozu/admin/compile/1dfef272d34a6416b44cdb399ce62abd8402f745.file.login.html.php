<?php /* Smarty version Smarty-3.1.14, created on 2017-03-31 17:08:39
         compiled from "template\login\login.html" */ ?>
<?php /*%%SmartyHeaderCode:749158de8825e37f05-98958734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1dfef272d34a6416b44cdb399ce62abd8402f745' => 
    array (
      0 => 'template\\login\\login.html',
      1 => 1490980117,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '749158de8825e37f05-98958734',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58de8826d5ba59_83265058',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58de8826d5ba59_83265058')) {function content_58de8826d5ba59_83265058($_smarty_tpl) {?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<LINK rel="Bookmark" href="/favicon.ico" >
<LINK rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="../public/admin/js/html5.js"></script>
<script type="text/javascript" src="../public/admin/js/respond.min.js"></script>
<script type="text/javascript" src="../public/admin/js/PIE_IE678.js"></script>
<![endif]-->
<link href="../public/admin/css/H-ui.css" rel="stylesheet" type="text/css" />
<link href="../public/admin/css/H-ui.login.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="../public/admin/js/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>后台登录 - 伊美人后台管理系统</title>
<meta name="keywords" content="H-ui.admin v2.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v2.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<input type="hidden" id="TenantId" name="TenantId" value="" />
<div class="header"></div>
<div class="loginWraper">
  <div id="loginform" class="loginBox">
    <form action="?c=login&a=check" method="post">
      <div class="formRow user">
        <input id="" name="username" type="text" placeholder="账户" class="input_text input-big">
      </div>
      <div class="formRow password">
        <input id="" name="password" type="password" placeholder="密码" class="input_text input-big">
      </div>
      <div class="formRow yzm">
        <input class="input_text input-big" name="Code" type="text" placeholder="验证码" onBlur="if(this.value==''){this.value='验证码:'}" onClick="if(this.value=='验证码:'){this.value='';}" value="验证码:" style="width:150px;">
        <img src="?c=login&a=yzm" id="yzm" onclick="this.src='?c=login&a=yzm&id='+Math.random()"> <a id="kanbuq" href="javascript:;" onclick="document.getElementById('yzm').src='?c=login&a=yzm&id='+Math.random()">看不清，换一张</a> </div>
      <div class="formRow">
        <label for="online">
          <input type="checkbox" name="online" id="online" value="">
          使我保持登录状态</label>
      </div>
      <div class="formRow">
        <input name="" type="submit" class="btn radius btn-success btn-big" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
        <input name="" type="reset" class="btn radius btn-default btn-big" value="&nbsp;取&nbsp;&nbsp;&nbsp;&nbsp;消&nbsp;">
      </div>
    </form>
  </div>
</div>
<div class="footer">伊美人网站后台管理系统 V2.0</div>
<script type="text/javascript" src="../public/admin/js/jquery.min.js"></script>
<script type="text/javascript" src="../public/admin/js/H-ui.js"></script>

</body>
</html><?php }} ?>