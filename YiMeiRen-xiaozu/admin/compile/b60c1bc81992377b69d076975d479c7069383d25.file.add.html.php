<?php /* Smarty version Smarty-3.1.14, created on 2017-04-01 14:45:08
         compiled from "template\authority\add.html" */ ?>
<?php /*%%SmartyHeaderCode:2927858df76b6dea537-91507273%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b60c1bc81992377b69d076975d479c7069383d25' => 
    array (
      0 => 'template\\authority\\add.html',
      1 => 1491057903,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2927858df76b6dea537-91507273',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58df76b6e9a6e7_89743143',
  'variables' => 
  array (
    'arr' => 0,
    'value' => 0,
    'va' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58df76b6e9a6e7_89743143')) {function content_58df76b6e9a6e7_89743143($_smarty_tpl) {?>﻿<!DOCTYPE HTML>
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
<title>角色编辑</title>
</head>
<body>
<div class="pd-20">
  <form class="Huiform" id="loginform" action="?c=authority&a=add" method="post">
    <table class="table table-border table-bordered table-bg">
      <tbody>
        <tr>
            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['value']->value['level']==0){?>
          <th class="text-r va-t" >权限：<input name="qx[]" <?php if ($_smarty_tpl->tpl_vars['value']->value['sta']==1){?> checked <?php }?>  type="checkbox" value=""><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</th>
            <?php }?>
            <?php } ?>
          <td>
            <table class="table table-border table-bordered table-bg">
              <tbody>
              <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
              <?php if ($_smarty_tpl->tpl_vars['value']->value['level']==1){?>
                <tr>

                  <th width="90"><input name="qx[]" <?php if ($_smarty_tpl->tpl_vars['value']->value['sta']==1){?> checked <?php }?>  type="checkbox" value=""><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
 </th>
                  <td class="permission-list">
                    <div class="cl">
                        <?php  $_smarty_tpl->tpl_vars['va'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['va']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['va']->key => $_smarty_tpl->tpl_vars['va']->value){
$_smarty_tpl->tpl_vars['va']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['value']->value['id']==$_smarty_tpl->tpl_vars['va']->value['pid']){?>
                    <label class="item"><input name="qx[]" <?php if ($_smarty_tpl->tpl_vars['va']->value['sta']==1){?> checked <?php }?>  type="checkbox" value=""><?php echo $_smarty_tpl->tpl_vars['va']->value['title'];?>
 </label>
                        <?php }?>
                        <?php } ?>
                    </div>
                  </td>
                </tr>
              <?php }?>
              <?php } ?>
                <!--<tr>
                  <th>资讯管理</th>
                  <td class="permission-list">
                    <div class="cl">
                      <b class="item">分类：</b>
                      <label class="item"><input name="" type="checkbox" value=""> 添加</label>
                      <label class="item"><input name="" type="checkbox" value=""> 删除</label>
                      <label class="item"><input name="" type="checkbox" value=""> 编辑</label>
                      <label class="item"><input name="" type="checkbox" value=""> 查看</label>
                    </div>
                    <div class="cl">
                      <b class="item">资讯：</b>
                      <label class="item"><input name="" type="checkbox" value=""> 添加</label>
                      <label class="item"><input name="" type="checkbox" value=""> 删除</label>
                      <label class="item"><input name="" type="checkbox" value=""> 编辑</label>
                      <label class="item"><input name="" type="checkbox" value=""> 查看</label>
                    </div>
                    <div class="cl"><label class="item c-orange"><input name="" type="checkbox" value=""> 只能操作自己发布的</label></div>
                  </td>
                </tr>
                <tr>
                  <th>图片库</th>
                  <td class="permission-list">
                    <div class="cl">
                      <b class="item">分类：</b>
                      <label class="item"><input name="" type="checkbox" value=""> 添加</label>
                      <label class="item"><input name="" type="checkbox" value=""> 删除</label>
                      <label class="item"><input name="" type="checkbox" value=""> 编辑</label>
                      <label class="item"><input name="" type="checkbox" value=""> 查看</label>
                    </div>
                    <div class="cl">
                      <b class="item">图片：</b>
                      <label class="item"><input name="" type="checkbox" value=""> 添加</label>
                      <label class="item"><input name="" type="checkbox" value=""> 删除</label>
                      <label class="item"><input name="" type="checkbox" value=""> 编辑</label>
                      <label class="item"><input name="" type="checkbox" value=""> 查看</label>
                    </div>
                    <div class="cl"><label class="item c-orange"><input name="" type="checkbox" value=""> 只能操作自己发布的</label></div>
                  </td>
                </tr>
                <tr>
                  <th>产品库</th>
                  <td class="permission-list">
                    <div class="cl">
                      <b class="item">分类：</b>
                      <label class="item"><input name="" type="checkbox" value=""> 添加</label>
                      <label class="item"><input name="" type="checkbox" value=""> 删除</label>
                      <label class="item"><input name="" type="checkbox" value=""> 编辑</label>
                      <label class="item"><input name="" type="checkbox" value=""> 查看</label>
                    </div>
                    <div class="cl">
                      <b class="item">产品：</b>
                      <label class="item"><input name="" type="checkbox" value=""> 添加</label>
                      <label class="item"><input name="" type="checkbox" value=""> 删除</label>
                      <label class="item"><input name="" type="checkbox" value=""> 编辑</label>
                      <label class="item"><input name="" type="checkbox" value=""> 查看</label>
                    </div>
                    <div class="cl"><label class="item c-orange"><input name="" type="checkbox" value=""> 只能操作自己发布的</label></div>
                  </td>
                </tr>
                <tr>
                  <th>页面管理</th>
                  <td class="permission-list">
                    <label class="item"><input name="" type="checkbox" value=""> 添加</label>
                    <label class="item"><input name="" type="checkbox" value=""> 删除</label>
                    <label class="item"><input name="" type="checkbox" value=""> 编辑</label>
                    <label class="item"><input name="" type="checkbox" value=""> 查看</label>
                  </td>
                </tr>
                <tr>
                  <th>管理员管理</th>
                  <td class="permission-list">
                    <label class="item"><input name="" type="checkbox" value=""> 管理员添加</label>
                    <label class="item"><input name="" type="checkbox" value=""> 管理员删除</label>
                    <label class="item"><input name="" type="checkbox" value=""> 权限编辑</label>
                    <label class="item"><input name="" type="checkbox" value=""> 角色编辑</label>
                  </td>
                </tr>
                <tr>
                  <th>系统管理</th>
                  <td class="permission-list">
                    <label class="item"><input name="" type="checkbox" value=""> 基本设置</label>
                    <label class="item"><input name="" type="checkbox" value=""> 栏目设置</label>
                    <label class="item"><input name="" type="checkbox" value=""> 数据字典</label>
                    <label class="item"><input name="" type="checkbox" value=""> 系统日志</label>
                  </td>
                </tr>
                <tr>
                  <th>统计管理</th>
                  <td class="permission-list">
                    <label class="item"><input name="" type="checkbox" value=""> 产看</label>
                  </td>
                </tr>-->
              </tbody>
            </table>
          </td>
        </tr>
        <tr>
          <th></th>
          <td>
            <button type="submit" class="btn btn-success radius" id="admin-role-save" name="admin-role-save"><i class="icon-ok"></i> 分配</button>
          </td>
        </tr>
      </tbody>
    </table>
  </form>
</div>
<script type="text/javascript" src="../public/admin/js/jquery.min.js"></script>
<script type="text/javascript" src="../public/admin/js/Validform_v5.3.2_min.js"></script> 
<script type="text/javascript" src="../public/admin/layer/layer.min.js"></script>
<script type="text/javascript" src="../public/admin/js/H-ui.js"></script> 
<script type="text/javascript" src="../public/admin/js/H-ui.admin.js"></script> 
<script type="text/javascript">
$(".Huiform").Validform(); 
</script>

</body>
</html><?php }} ?>