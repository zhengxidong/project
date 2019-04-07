<?php /* Smarty version Smarty-3.1.14, created on 2017-04-01 12:43:42
         compiled from ".\template\article\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:1624158dfa07eaf7788-13698604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '043d22c606852f061b2e455e13578387ae96eef5' => 
    array (
      0 => '.\\template\\article\\edit.html',
      1 => 1491050595,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1624158dfa07eaf7788-13698604',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'article' => 0,
    'type' => 0,
    'value' => 0,
    'admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58dfa07ec4f2d2_12254630',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58dfa07ec4f2d2_12254630')) {function content_58dfa07ec4f2d2_12254630($_smarty_tpl) {?>﻿<!DOCTYPE HTML>
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
    <!--编辑器-->
    <link rel="stylesheet" href="../public/admin/plugin/themes/default/default.css" />
    <script charset="utf-8" src="../public/admin/plugin/kindeditor-min.js"></script>
    <script charset="utf-8" src="../public/admin/plugin/lang/zh-CN.js"></script>
<title>基本设置</title>
</head>
<body>
<nav class="Hui-breadcrumb"><i class="icon-home"></i> 首页 <span class="c-gray en">&gt;</span> 系统管理 <span class="c-gray en">&gt;</span> 基本设置  <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="icon-refresh"></i></a></nav>
<form action="?c=article&a=update" method="post">
<div class="pd-20">
    <table class="table table-border table-bordered table-bg">
        <tbody>
        <tr>
            <th class="text-r" width="80">文章标题：</th>
            <td><input name="articletitle" value="<?php echo $_smarty_tpl->tpl_vars['article']->value[0]['articletitle'];?>
" type="text" class="input-text" id="" datatype="*1-20" nullmsg="文章标题不能为空！">
            </td>
        </tr>
        <tr>
            <th class="text-r" width="80">文章分类：</th>
            <td>
                <select name="articletypeid" class="select">
                    <option value="0">全部分类</option>
                    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['value']->value['id']==$_smarty_tpl->tpl_vars['article']->value[0]['articletypeid']){?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['value']->value['articletypename'];?>
</option>
                    <?php }else{ ?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['articletypename'];?>
</option>
                    <?php }?>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <th class="text-r" width="80">发布人：</th>
            <td>
                <select name="adminid" class="select">
                    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['admin']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['value']->value['id']==$_smarty_tpl->tpl_vars['article']->value[0]['adminid']){?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['username'];?>
</option>
                    <?php }else{ ?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['username'];?>
</option>
                    <?php }?>
                    <?php } ?>
                </select>
            </td>
        </tr>
        </tbody>
    </table>
  <div>
    <label class="form-label col-xs-4 col-sm-2">文章内容：</label>
    <textarea class="textarea" name="articlecontent" style="width:100%; height:300px; resize:none">
       <?php echo $_smarty_tpl->tpl_vars['article']->value[0]['articlecontent'];?>

    </textarea>
  </div>
  <div class="mt-20 text-c"><button name="system-base-save" id="system-base-save" class="btn btn-success radius" type="submit"><i class="icon-ok"></i> 确定</button></div>
</div>
</form>
<script type="text/javascript" src="../public/admin/js/jquery.min.js"></script>
<script type="text/javascript" src="../public/admin/js/Validform_v5.3.2_min.js"></script> 
<script type="text/javascript" src="../public/admin/layer/layer.min.js"></script>
<script type="text/javascript" src="../public/admin/js/H-ui.js"></script>
<script type="text/javascript" src="../public/admin/js/H-ui.admin.js"></script>
<script type="text/javascript">
    var editor;
    KindEditor.ready(function(K) {
        editor = K.create('textarea[name="articlecontent"]');
    });
</script>
</body>
</html><?php }} ?>