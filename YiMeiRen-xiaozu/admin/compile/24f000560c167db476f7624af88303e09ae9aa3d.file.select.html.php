<?php /* Smarty version Smarty-3.1.14, created on 2017-04-01 13:17:24
         compiled from "template\admin\select.html" */ ?>
<?php /*%%SmartyHeaderCode:350758df7138eca7a0-10684897%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24f000560c167db476f7624af88303e09ae9aa3d' => 
    array (
      0 => 'template\\admin\\select.html',
      1 => 1491052639,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '350758df7138eca7a0-10684897',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58df7139021bd2_82362639',
  'variables' => 
  array (
    'admin' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58df7139021bd2_82362639')) {function content_58df7139021bd2_82362639($_smarty_tpl) {?>﻿<!DOCTYPE HTML>
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
<title>管理员列表</title>
</head>
<body>
<nav class="Hui-breadcrumb"><i class="icon-home"></i> 首页 <span class="c-gray en">&gt;</span> 管理员管理 <span class="c-gray en">&gt;</span> 管理员列表 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="icon-refresh"></i></a></nav>
<div class="pd-20">
  <div class="text-c">
    <form class="Huiform" method="post" action="" target="_self">
      <input type="text" placeholder="帐号" autocomplete="off" value="" class="input-text">
      <input type="password" placeholder="密码" autocomplete="off" value="" class="input-text">
      <input type="password" placeholder="确认密码" autocomplete="off" value="" class="input-text">
      <select class="select" name="admin-role" size="1">
        <option value="0">超级管理员</option>
        <option value="1">总编</option>
        <option value="2">栏目主辑</option>
        <option value="3">栏目编辑</option>
      </select>
      <button type="button" class="btn btn-success" id="" name="" onClick="admin_add(this);"><i class="icon-plus"></i> 添加</button>
    </form>
  </div>
  <div class="cl pd-5 bg-1 bk-gray mt-20">
    <span class="l"><a href="javascript:;" onClick="datadel()" class="btn btn-danger radius"><i class="icon-trash"></i> 批量删除</a>
    <a href="?c=admin&a=add" class="btn btn-primary radius"><i class="icon-plus"></i> 添加管理员</a>
    </span>
    <span class="r">共有数据：<strong>54</strong> 条</span>
  </div>
  <table class="table table-border table-bordered table-bg">
    <thead>
      <tr>
        <th scope="col" colspan="7">员工列表</th>
      </tr>
      <tr class="text-c">
        <th width="25"><input type="checkbox" name="" value=""></th>
        <th width="40">ID</th>
        <th width="150">登录名</th>
        <th>角色</th>
        <th width="130">加入时间</th>
        <th width="100">是否已启用</th>
        <th width="70">操作</th>
      </tr>
    </thead>
    <tbody>
    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['admin']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['admin']->value==''){?>
    <?php }else{ ?>
      <tr class="text-c">
        <td><input type="checkbox" value="1" name=""></td>
        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['username'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['rolename'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['regtime'];?>
</td>
        <td class="admin-status"><span class="label label-success">已启用</span></td>
        <td class="f-14 admin-manage">
            <a style="text-decoration:none" onClick="admin_stop(this,'10001')" href="javascript:;" title="停用"><i class="icon-hand-down"></i></a>
            <a title="编辑" href="?c=admin&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" onClick="admin_edit('4','400','310','角色编辑','admin-edit.html')" class="ml-5" style="text-decoration:none"><i class="icon-edit"></i></a>
            <a title="删除" href="javascript:void(0)" onClick="if(confirm('确认删除吗？')){location.href='?c=admin&a=delete&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
'}" class="ml-5" style="text-decoration:none"><i class="icon-trash"></i></a></td>
      </tr>
    <?php }?>
    <?php } ?>
    </tbody>
  </table>
</div>
<script type="text/javascript" src="../public/admin/js/jquery.min.js"></script>
<script type="text/javascript" src="../public/admin/js/pagenav.cn.js"></script> 
<script type="text/javascript" src="../public/admin/js/H-ui.js"></script> 
<script type="text/javascript" src="../public/admin/js/H-ui.admin.js"></script>

</body>
</html><?php }} ?>