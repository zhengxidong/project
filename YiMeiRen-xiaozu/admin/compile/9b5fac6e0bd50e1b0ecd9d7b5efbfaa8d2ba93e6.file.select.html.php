<?php /* Smarty version Smarty-3.1.14, created on 2017-04-01 15:09:28
         compiled from ".\template\goods\select.html" */ ?>
<?php /*%%SmartyHeaderCode:2521358df434d2d1a96-84438183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b5fac6e0bd50e1b0ecd9d7b5efbfaa8d2ba93e6' => 
    array (
      0 => '.\\template\\goods\\select.html',
      1 => 1491059361,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2521358df434d2d1a96-84438183',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58df434d330874_61291442',
  'variables' => 
  array (
    'arr' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58df434d330874_61291442')) {function content_58df434d330874_61291442($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_jq')) include 'D:\\wamp\\www\\MyProject\\YiMeiRen-xiaozu\\libs\\plugins\\modifier.jq.php';
?>﻿<!DOCTYPE HTML>
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
<title>商品管理</title>
</head>
<body>
<nav class="Hui-breadcrumb"><i class="icon-home"></i> 首页 <span class="c-gray en">&gt;</span> 产品库 <span class="c-gray en">&gt;</span> 品牌管理 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="icon-refresh"></i></a></nav>
<div class="pd-20">
  <div class="text-c">
    <form  method="post" action="?c=goods&a=search">
        日期范围：
    <input type="text" name="sj" onClick="WdatePicker()" class="input-text Wdate" style="width:120px;">
    -
    <input type="text" name="sjtwo" onClick="WdatePicker()" class="input-text Wdate" style="width:120px;">
      <input type="text" name="goodsname" placeholder="商品名称" value="" class="input-text" style="width:120px">
      <input type="submit" class="btn radius btn-primary" value="搜索商品">
    </form>
  </div>
  <div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onClick="datadel()" class="btn btn-danger radius"><i class="icon-trash"></i> 批量删除</a>
      <a href="?c=goods&a=add" class="btn btn-primary radius"><i class="icon-plus"></i> 添加商品</a>
  </span> <span class="r">共有数据：<strong>54</strong> 条</span> </div>
    <table class="table table-border table-bordered table-bg table-sort">
      <thead>
        <tr class="text-c">
          <th width="25"><input type="checkbox" name="" value=""></th>
          <th width="80">ID</th>
          <th width="80">商品名称</th>
          <th width="200">标题</th>
          <th width="120">图片</th>
          <th>价格</th>
          <th width="70">操作</th>
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
          <td><input name="" type="checkbox" value=""></td>
          <td><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['value']->value['goodsname'];?>
</td>
          <td class="text-l"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</td>
          <td><img src="../public/zoom/<?php echo smarty_modifier_jq($_smarty_tpl->tpl_vars['value']->value['microimg']);?>
"></td>
          <td class="text-l"><?php echo $_smarty_tpl->tpl_vars['value']->value['price'];?>
</td>
          <td class="f-14 product-brand-manage">
              <a style="text-decoration:none" href="?c=goods&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" title="编辑"><i class="icon-edit"></i></a>
              <a style="text-decoration:none" class="ml-5" onClick="if(confirm('确认删除吗？')){location.href='?c=goods&delete&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
'}" href="javascript:void(0)" title="删除"><i class="icon-trash"></i></a></td>
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
<script language="javascript" type="text/javascript" src="../public/admin/My97DatePicker/WdatePicker.js"></script>
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
$('.table-sort').dataTable({
	"lengthMenu":false,//显示数量选择 
	"bFilter": false,//过滤功能
	"bPaginate": false,//翻页信息
	"bInfo": false,//数量信息
	"aaSorting": [[ 1, "desc" ]],//默认第几个排序
	"bStateSave": true,//状态保存
	"aoColumnDefs": [
	  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
	  {"orderable":false,"aTargets":[0,6]}// 制定列不参与排序
	]
});
</script>

</body>
</html><?php }} ?>