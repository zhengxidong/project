<?php /* Smarty version Smarty-3.1.14, created on 2017-04-01 11:59:30
         compiled from ".\template\articletype\select.html" */ ?>
<?php /*%%SmartyHeaderCode:3168758df8113851794-40605942%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca8445dd02bc0afa9ea0176a911c962d60baae6e' => 
    array (
      0 => '.\\template\\articletype\\select.html',
      1 => 1491046492,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3168758df8113851794-40605942',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58df811392f4b1_03005960',
  'variables' => 
  array (
    'arr' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58df811392f4b1_03005960')) {function content_58df811392f4b1_03005960($_smarty_tpl) {?><!DOCTYPE HTML>
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
<link type="text/css" rel="stylesheet"href="../public/admin/css/H-ui.css"/>
<link type="text/css" rel="stylesheet"href="../public/admin/css/H-ui.admin.css"/>
<link type="text/css" rel="stylesheet" href="../public/admin/font/font-awesome.min.css"/>
<!--[if IE 7]>
<link href="../public/admin/font/font-awesome-ie7.min.css" rel="stylesheet" type="text/css" />
<![endif]-->
<title>分类管理</title>
</head>
<body>
<nav class="Hui-breadcrumb"><i class="icon-home"></i> 首页 <span class="c-gray en">&gt;</span> 资讯管理 <span class="c-gray en">&gt;</span> 分类管理 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="icon-refresh"></i></a></nav>
<div class="pd-20 text-c">
  <form class="Huiform" action="/" method="post">
    上级栏目：
    <select class="select" id="sel_Sub" name="sel_Sub" onChange="SetSubID(this);">
      <option value="0">顶级分类</option>
      <option value="100">分类一级</option>
      <option value="101">&nbsp;&nbsp;├ 分类二级</option>
      <option value="102">&nbsp;&nbsp;├ 分类二级</option>
      <option value="201">分类一级</option>
      <option value="101">&nbsp;&nbsp;├ 分类二级</option>
    </select>
    <input type="hidden" id="hid_ccid" value="">
    <input class="input-text" style="width:250px" type="text" value="" placeholder="输入分类" id="article-class-val"><button type="button" class="btn btn-success" id="" name="" onClick="article_class_add(this);"><i class="icon-plus"></i> 添加</button>
  </form>
    <div class="cl pd-5 bg-1 bk-gray mt-20">
    <span class="l"><a href="javascript:;" onClick="datadel()" class="btn btn-danger radius"><i class="icon-trash"></i> 批量删除</a>
    <a href="?c=articletype&a=add" class="btn btn-primary radius"><i class="icon-plus"></i> 添加文章分类</a>
    </span>
        <span class="r">共有数据：<strong>54</strong> 条</span>
    </div>
  <div class="article-class-list cl mt-20">
    <table class="table table-border table-bordered table-hover table-bg">
      <thead>
        <tr class="text-c">
          <th width="25"><input type="checkbox" name="" value=""></th>
          <th width="80">ID</th>
          <th width="80">文章分类名称</th>
          <th>新增时间</th>
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
          <td><input type="checkbox" name="" value=""></td>
          <td><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['value']->value['articletypename'];?>
</td>
          <td class="text-l"><?php echo $_smarty_tpl->tpl_vars['value']->value['articletypetime'];?>
</td>
          <td class="f-14">
              <a title="编辑" href="?c=articletype&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"  style="text-decoration:none"><i class="icon-edit"></i></a>
              <a title="删除" href="javascript:void(0)" onClick="if(confirm('确认删除吗？')){location.href='?c=articletype&a=delete&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
'}" class="ml-5" style="text-decoration:none"><i class="icon-trash"></i></a>
          </td>
        </tr>
      <?php }?>
      <?php } ?>
      </tbody>
    </table>
  </div>
</div>
<script type="text/javascript" src="../public/admin/js/jquery.min.js"></script>
<script type="text/javascript" src="../public/admin/js/Validform_v5.3.2_min.js"></script> 
<script type="text/javascript" src="../public/admin/layer/layer.min.js"></script>
<script type="text/javascript" src="../public/admin/js/H-ui.js"></script>
<script type="text/javascript" src="../public/admin/js/H-ui.admin.js"></script>

</body>
</html><?php }} ?>