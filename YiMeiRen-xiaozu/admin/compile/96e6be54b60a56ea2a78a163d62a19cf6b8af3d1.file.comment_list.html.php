<?php /* Smarty version Smarty-3.1.14, created on 2017-03-29 15:42:43
         compiled from ".\template\Comment\comment_list.html" */ ?>
<?php /*%%SmartyHeaderCode:3189858d93c33359cf7-61606811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96e6be54b60a56ea2a78a163d62a19cf6b8af3d1' => 
    array (
      0 => '.\\template\\Comment\\comment_list.html',
      1 => 1490802143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3189858d93c33359cf7-61606811',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58d93c33408b11_42131877',
  'variables' => 
  array (
    'arr' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d93c33408b11_42131877')) {function content_58d93c33408b11_42131877($_smarty_tpl) {?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="../public/admin/lib/html5.js"></script>
<script type="text/javascript" src="../public/admin/lib/respond.min.js"></script>
<script type="text/javascript" src="../public/admin/lib/PIE_IE678.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="../public/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="../public/admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="../public/admin/lib/Hui-iconfont/1.0.7/iconfont.css" />
<link rel="stylesheet" type="text/css" href="../public/admin/lib/icheck/icheck.css" />
<link rel="stylesheet" type="text/css" href="../public/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="../public/admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>评价管理</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 用户中心 <span class="c-gray en">&gt;</span> 用户管理 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
    <form action="?c=comment&a=search" method="post">
	<div class="text-c"> 日期范围：
		<input type="text" name="sj" onfocus="WdatePicker({maxDate:'#F{$dp.$D(\'datemax\')||\'%y-%M-%d\'}'})" id="datemin" class="input-text Wdate" style="width:120px;">
		-
		<input type="text" name="sje" onfocus="WdatePicker({minDate:'#F{$dp.$D(\'datemin\')}',maxDate:'%y-%M-%d'})" id="datemax" class="input-text Wdate" style="width:120px;">
		<input type="text" name="name" class="input-text" style="width:250px" placeholder="输入评价商品" id="">
		<button type="submit" class="btn btn-success radius"><i class="Hui-iconfont">&#xe665;</i> 搜评价</button>
	</div>
    </form>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>
    </span> </div>
	<div class="mt-20">
	<table class="table table-border table-bordered table-hover table-bg table-sort">
		<thead>
			<tr class="text-c">
				<th width="25"><input type="checkbox" name="" value=""></th>
				<th width="80">ID</th>
                <th width="100">该商品</th>
				<th width="100">评价内容</th>
				<th width="90">评价用户</th>
				<th width="150">评价时间</th>
				<th width="100">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['arr']->value==''){?>
        <?php }else{ ?>
			<tr class="text-c">
				<td><input type="checkbox" value="1" name=""></td>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['goodsname'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['comment'];?>
</td>
				<td class="text-l"><?php echo $_smarty_tpl->tpl_vars['value']->value['username'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['commenttime'];?>
</td>
				<td class="td-manage">
                    <a title="删除" href="javascript:void(0)" onclick="if(confirm('确认删除吗')){location.href='?c=comment&a=delete&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
'}" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
			</tr>
        <?php }?>
        <?php } ?>
		</tbody>
	</table>
	</div>
</div>
<script type="text/javascript" src="../public/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="../public/admin/lib/layer/2.1/layer.js"></script>
<script type="text/javascript" src="../public/admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript" src="../public/admin/lib/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript" src="../public/admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../public/admin/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="../public/admin/static/h-ui.admin/js/H-ui.admin.js"></script>

</body>
</html><?php }} ?>