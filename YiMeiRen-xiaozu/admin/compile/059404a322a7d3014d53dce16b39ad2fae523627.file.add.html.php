<?php /* Smarty version Smarty-3.1.14, created on 2017-04-01 05:02:01
         compiled from "template\user\add.html" */ ?>
<?php /*%%SmartyHeaderCode:1293558df32cb62b996-70740742%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '059404a322a7d3014d53dce16b39ad2fae523627' => 
    array (
      0 => 'template\\user\\add.html',
      1 => 1491022914,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1293558df32cb62b996-70740742',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58df32cb66c456_16051908',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58df32cb66c456_16051908')) {function content_58df32cb66c456_16051908($_smarty_tpl) {?><!DOCTYPE HTML>
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
<title>添加用户</title>
</head>
<body>
<div class="pd-20">
  <div class="Huiform">
    <form action="?c=user&a=add" method="post">
      <table class="table table-bg">
        <tbody>
          <tr>
            <th width="100" class="text-r"><span class="c-red">*</span> 用户名：</th>
            <td><input type="text" style="width:200px" class="input-text" value="" placeholder="" id="user-name" name="username" datatype="*2-16" nullmsg="用户名不能为空"></td>
          </tr>
          <tr>
              <th width="100" class="text-r"><span class="c-red">*</span> 密码：</th>
              <td><input type="text" style="width:200px" class="input-text" value="" placeholder="" id="user-pass" name="password" datatype="*2-16" nullmsg="用户名不能为空"></td>
          </tr>
          <tr>
            <th class="text-r"><span class="c-red">*</span> 性别：</th>
            <td><label>
                <input name="sex" type="radio" id="six_1" value="1" checked>
                男</label>
              <label>
                <input type="radio" name="sex" value="0" id="six_0">
                女</label></td>
          </tr>
          <tr>
            <th class="text-r"><span class="c-red">*</span> 手机：</th>
            <td><input type="text" style="width:300px" class="input-text" value="" placeholder="" id="user-tel" name="phone"></td>
          </tr>
          <tr>
            <th class="text-r">邮箱：</th>
            <td><input type="text" style="width:300px" class="input-text" value="" placeholder="" id="user-email" name="email"></td>
          </tr>
          <!--<tr>
            <th class="text-r">头像：</th>
            <td><input type="file" class="" name="wj[]" multiple></td>
          </tr>-->
          <tr>
            <th class="text-r">地址：</th>
            <td><input type="text" style="width:300px" class="input-text" value="" placeholder="" id="user-address" name="address"></td>
          </tr>
         <!-- <tr>
            <th class="text-r">简介：</th>
            <td><textarea class="input-text" name="user-info" id="user-info" style="height:100px;width:300px;"></textarea></td>
          </tr>-->
          <tr>
            <th></th>
            <td><button class="btn btn-success radius" type="submit"><i class="icon-ok"></i> 确定</button></td>
          </tr>
        </tbody>
      </table>
    </form>
  </div>
</div>
<script type="text/javascript" src="../public/admin/js/jquery.min.js"></script>
<script type="text/javascript" src="../public/admin/js/Validform_v5.3.2_min.js"></script> 
<script type="text/javascript" src="../public/admin/js/H-ui.js"></script> 
<script type="text/javascript" src="../public/admin/js/H-ui.admin.js"></script> 
<script type="text/javascript">
$(".Huiform").Validform(); 
</script>

</body>
</html><?php }} ?>