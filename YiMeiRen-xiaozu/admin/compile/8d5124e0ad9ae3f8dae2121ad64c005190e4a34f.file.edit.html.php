<?php /* Smarty version Smarty-3.1.14, created on 2017-04-01 13:16:17
         compiled from "template\admin\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:839258df7375ad23a4-81484502%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d5124e0ad9ae3f8dae2121ad64c005190e4a34f' => 
    array (
      0 => 'template\\admin\\edit.html',
      1 => 1491052568,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '839258df7375ad23a4-81484502',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58df7375b99270_36149882',
  'variables' => 
  array (
    'arr' => 0,
    'role' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58df7375b99270_36149882')) {function content_58df7375b99270_36149882($_smarty_tpl) {?>﻿<!DOCTYPE HTML>
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
<title>编辑管理员</title>
</head>
<body>
<div class="pd-20">
  <form class="Huiform" id="loginform" action="?c=admin&a=update" method="post">
    <table class="table table-border table-bordered table-bg">
      <tbody>
      <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['id'];?>
" name="id"/>
      <tr>
          <th class="text-r" width="80">角色：</th>
          <td>
              <select class="select" size="1" name="roleid">
                  <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['role']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                  <?php if ($_smarty_tpl->tpl_vars['value']->value['id']==$_smarty_tpl->tpl_vars['arr']->value[0]['roleid']){?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['value']->value['rolename'];?>
</option>
                  <?php }else{ ?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['rolename'];?>
</option>
                  <?php }?>
                  <?php } ?>
              </select>
          </td>
      </tr>
        <tr>
          <th class="text-r" width="80">管理员名称：</th>
          <td>
              <input name="username" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['username'];?>
" type="text" class="input-text" datatype="*1-20">
          </td>
        </tr>
        <tr>
          <th class="text-r va-t">密码：</th>
          <td>
              <input name="password" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['password'];?>
" type="text" class="input-text" datatype="*1-20">
          </td>
        </tr>
        <tr>
          <th></th>
          <td>
            <button type="submit" class="btn btn-success radius" id="admin-role-save" name="admin-role-save"><i class="icon-ok"></i> 确定</button>
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