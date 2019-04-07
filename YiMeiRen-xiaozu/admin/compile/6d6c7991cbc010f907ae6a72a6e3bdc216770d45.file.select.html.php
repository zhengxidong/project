<?php /* Smarty version Smarty-3.1.14, created on 2017-04-01 12:43:21
         compiled from ".\template\article\select.html" */ ?>
<?php /*%%SmartyHeaderCode:264058df9a72bb2742-34145225%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d6c7991cbc010f907ae6a72a6e3bdc216770d45' => 
    array (
      0 => '.\\template\\article\\select.html',
      1 => 1491050595,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '264058df9a72bb2742-34145225',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58df9a72c82772_04670384',
  'variables' => 
  array (
    'article' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58df9a72c82772_04670384')) {function content_58df9a72c82772_04670384($_smarty_tpl) {?>﻿<!DOCTYPE HTML>
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
<title>资讯列表</title>
</head>
<body>
<nav class="Hui-breadcrumb"><i class="icon-home"></i> 首页 <span class="c-gray en">&gt;</span> 资讯管理 <span class="c-gray en">&gt;</span> 资讯列表 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="icon-refresh"></i></a></nav>
<div class="pd-20">
  <div class="text-c"><select name="" class="select">
    <option value="0">全部分类</option>
    <option value="1">分类一</option>
    <option value="2">分类二</option>
  </select> 日期范围：
    <input type="text" onFocus="WdatePicker({maxDate:'#F{$dp.$D(\'logmax\')||\'%y-%M-%d\'}'})" id="logmin" class="input-text Wdate" style="width:120px;">
    -
    <input type="text" onFocus="WdatePicker({minDate:'#F{$dp.$D(\'logmin\')}',maxDate:'%y-%M-%d'})" id="logmax" class="input-text Wdate" style="width:120px;">
    <input type="text" name="" id="" placeholder=" 资讯名称" style="width:250px" class="input-text"><button name="" id="" class="btn btn-success" type="submit"><i class="icon-search"></i> 搜资讯</button>
  </div>
  <div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onClick="datadel()" class="btn btn-danger radius"><i class="icon-trash"></i> 批量删除</a> <a class="btn btn-primary radius" href="?c=article&a=add"><i class="icon-plus"></i> 添加文章</a></span> <span class="r">共有数据：<strong>54</strong> 条</span> </div>
  <table class="table table-border table-bordered table-bg table-hover table-sort">
    <thead>
      <tr class="text-c">
        <th width="25"><input type="checkbox" name="" value=""></th>
        <th width="80">ID</th>
        <th>标题</th>
        <th width="80">内容</th>
        <th width="80">分类</th>
        <th width="120">更新时间</th>
        <!--<th width="75">浏览次数</th>-->
        <th>发布人</th>
        <th width="70">操作</th>
      </tr>
    </thead>
    <tbody>
    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['article']->value==''){?>
    <?php }else{ ?>
      <tr class="text-c">
        <td><input type="checkbox" value="" name=""></td>
        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
        
        <td class="text-l"><u style="cursor:pointer" class="text-primary" onClick="article_edit('10001','650','','查看','article-zhang.html')" title="查看"><?php echo $_smarty_tpl->tpl_vars['value']->value['articletitle'];?>
</u></td>
        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['articlecontent'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['articletypename'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['articletime'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['username'];?>
</td>
        <td class="f-14 article-manage">
            <a style="text-decoration:none" class="ml-5"  href="?c=article&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" title="编辑"><i class="icon-edit"></i></a>
            <a style="text-decoration:none" class="ml-5" onClick="if(confirm('确认删除吗？')){location.href='?c=article&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
'}" href="javascript:void(0)" title="删除"><i class="icon-trash"></i></a>
        </td>
      </tr>
    <?php }?>
    <?php } ?>
    </tbody>
  </table>
  <div id="pageNav" class="pageNav"></div>
</div>
<script type="text/javascript" src="../public/admin/js/jquery.min.js"></script>
<script type="text/javascript" src="../public/admin/layer/layer.min.js"></script>
<script type="text/javascript" src="../public/admin/js/pagenav.cn.js"></script> 
<script type="text/javascript" src="../public/admin/plugin/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript" src="../public/admin/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../public/admin/js/H-ui.js"></script> 
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
/*$('.table-sort').dataTable({
	"lengthMenu":false,//显示数量选择 
	"bFilter": false,//过滤功能
	"bPaginate": false,//翻页信息
	"bInfo": false,//数量信息
	"aaSorting": [[ 1, "desc" ]],//默认第几个排序
	"bStateSave": true,//状态保存
	"aoColumnDefs": [
	  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
	  {"orderable":false,"aTargets":[0,8]}// 制定列不参与排序
	]
});*/
</script>

</body>
</html><?php }} ?>