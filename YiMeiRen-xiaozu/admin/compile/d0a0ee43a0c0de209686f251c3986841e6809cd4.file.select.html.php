<?php /* Smarty version Smarty-3.1.14, created on 2017-04-01 14:06:08
         compiled from "template\user\select.html" */ ?>
<?php /*%%SmartyHeaderCode:1857958de8e20582256-04766169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0a0ee43a0c0de209686f251c3986841e6809cd4' => 
    array (
      0 => 'template\\user\\select.html',
      1 => 1491055536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1857958de8e20582256-04766169',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58de8e205c5201_49219995',
  'variables' => 
  array (
    'arr' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58de8e205c5201_49219995')) {function content_58de8e205c5201_49219995($_smarty_tpl) {?>﻿<!DOCTYPE HTML>
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
<title>用户管理</title>
</head>
<body>
<nav class="Hui-breadcrumb"><i class="icon-home"></i> 首页 <span class="c-gray en">&gt;</span> 用户中心 <span class="c-gray en">&gt;</span> 用户管理 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="icon-refresh"></i></a></nav>
<div class="pd-20">
    <form action="?c=user&a=search" method="post">
  <div class="text-c"> 日期范围：
    <input type="text" name="sj" onClick="WdatePicker()" class="input-text Wdate" style="width:120px;">
    -
    <input type="text" name="sjtwo" onClick="WdatePicker()" class="input-text Wdate" style="width:120px;">
    <input type="text" name="name" class="input-text" style="width:250px" placeholder="输入会员名称、电话、邮箱">
      <button type="submit" class="btn btn-success"><i class="icon-search"></i> 搜用户</button>
  </div>
 </form>
  <div class="cl pd-5 bg-1 bk-gray mt-20">
    <span class="l"><a href="javascript:;" onClick="datadel()" class="btn btn-danger radius"><i class="icon-trash"></i> 批量删除</a>
    <a href="?c=user&a=add" class="btn btn-primary radius"><i class="icon-plus"></i> 添加用户</a></span>
    <span class="r">共有数据：<strong>88</strong> 条</span>
  </div>
  <table class="table table-border table-bordered table-hover table-bg table-sort">
    <thead>
      <tr class="text-c">
        <th width="25"><input type="checkbox" name="" value=""></th>
        <th width="80">ID</th>
        <th width="100">用户名</th>
        <th width="40">性别</th>
        <th width="90">手机</th>
        <th width="100">邮箱</th>
        <th width="">地址</th>
        <th width="70">注册时间</th>
        <th width="70">状态</th>
        <th width="100">操作</th>
      </tr>
    </thead>
    <tbody>
    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
      <tr class="text-c">
        <td><input type="checkbox" value="1" name=""></td>
        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
       
        <td><u style="cursor:pointer" class="text-primary" onclick="user_show('10001','360','','张三','user-show.html')"><?php echo $_smarty_tpl->tpl_vars['value']->value['username'];?>
</u></td>
        <td>
            <?php if ($_smarty_tpl->tpl_vars['value']->value['sex']=='0'){?>
            男
            <?php }else{ ?>
            女
            <?php }?>
        </td>
        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['phone'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['email'];?>
</td>
        <td class="text-l"><?php echo $_smarty_tpl->tpl_vars['value']->value['address'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['regtime'];?>
</td>
        <td class="user-status"><span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['value']->value['islocked'];?>
</span></td>
        <td class="f-14 user-manage">
            <a title="编辑" href="?c=user&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="ml-5" style="text-decoration:none"><i class="icon-edit"></i></a>
      </tr>
    <?php } ?>
    </tbody>
  </table>
  <div id="pageNav" class="pageNav"></div>
</div>
<script type="text/javascript" src="../public/admin/js/jquery.min.js"></script>
<script type="text/javascript" src="../public/admin/layer/layer.min.js"></script>
<script type="text/javascript" src="../public/admin/js/pagenav.cn.js"></script>
<script type="text/javascript" src="../public/admin/js/H-ui.js"></script>
<script language="javascript" type="text/javascript" src="../public/admin/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript" src="../public/admin/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../public/admin/js/H-ui.admin.js"></script>
<script type="text/javascript">
window.onload = (function(){
    // optional set
    pageNav.pre="&lt;上一页";
    pageNav.next="下一页&gt;";
    // p,当前页码,pn,总页面
    pageNav.fn = function(p,pn){$("#pageinfo").text("当前页:"+p+" 总页: "+pn);};
    //重写分页状态,跳到第三页,总页33页
    pageNav.go(1,13);
});
$('.table-sort').dataTable({
	"lengthMenu":false,//显示数量选择 
	"bFilter": false,//过滤功能
	"bPaginate": false,//翻页信息
	"bInfo": false,//数量信息
	"aaSorting": [[ 1, "desc" ]],//默认第几个排序
	"bStateSave": true,//状态保存
	"aoColumnDefs": [
	  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
	  {"orderable":false,"aTargets":[0,8,9]}// 制定列不参与排序
	]
});
</script>

</body>
</html><?php }} ?>