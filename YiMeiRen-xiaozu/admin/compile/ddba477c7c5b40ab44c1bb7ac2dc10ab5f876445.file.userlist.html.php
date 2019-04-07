<?php /* Smarty version Smarty-3.1.14, created on 2017-04-01 09:38:53
         compiled from "template\Role\userlist.html" */ ?>
<?php /*%%SmartyHeaderCode:399358df752d7e25a3-84146124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddba477c7c5b40ab44c1bb7ac2dc10ab5f876445' => 
    array (
      0 => 'template\\Role\\userlist.html',
      1 => 1491039526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '399358df752d7e25a3-84146124',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'arr' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58df752d893858_52113489',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58df752d893858_52113489')) {function content_58df752d893858_52113489($_smarty_tpl) {?>﻿<!DOCTYPE HTML>
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
<title>角色管理</title>
</head>
<body>
<nav class="Hui-breadcrumb"><i class="icon-home"></i> 首页 <span class="c-gray en">&gt;</span> 管理员管理 <span class="c-gray en">&gt;</span> 角色管理 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="icon-refresh"></i></a></nav>
<div class="pd-20">
  <div class="cl pd-5 bg-1 bk-gray">
    <span class="l">
      <a href="javascript:;" onClick="datadel()" class="btn btn-danger radius"><i class="icon-trash"></i> 批量删除</a>
      <a class="btn btn-primary radius" href="?c=role&a=add"><i class="icon-plus"></i> 添加角色</a>
    </span>
    <span class="r">共有数据：<strong>54</strong> 条</span>
  </div>
  <table class="table table-border table-bordered table-hover table-bg">
    <thead>
      <tr>
        <th scope="col" colspan="6">角色管理</th>
      </tr>
      <tr class="text-c">
        <th width="25"><input type="checkbox" value="" name=""></th>
        <th width="40">ID</th>
        <th width="100">管理员</th>
        <!--<th width="100">描述</th>-->
        <th width="70">操作</th>
      </tr>
    </thead>
    <tbody>
    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['value']->value==''){?>
    <?php }else{ ?>
      <tr class="text-c">
        <td><input type="checkbox" value="" name=""></td>
        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['username'];?>
</td>
        <td class="f-14">
            <a title="删除" href="javascript:void(0)" onClick="if(confirm('确认删除吗？')){location.href='?c=role&a=delete&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
'}" class="ml-5" style="text-decoration:none"><i class="icon-trash"></i></a>/
        </td>
      </tr>
    <?php }?>
    <?php } ?>
    </tbody>
  </table>
</div>
<script type="text/javascript" src="../public/admin/js/jquery.min.js"></script>
<script type="text/javascript" src="../public/admin/layer/layer.min.js"></script>
<script type="text/javascript" src="../public/admin/js/H-ui.js"></script> 
<script type="text/javascript" src="../public/admin/js/H-ui.admin.js"></script>

</body>
</html><?php }} ?>