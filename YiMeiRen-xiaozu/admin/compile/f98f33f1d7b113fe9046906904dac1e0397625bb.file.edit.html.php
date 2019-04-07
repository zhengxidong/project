<?php /* Smarty version Smarty-3.1.14, created on 2017-04-01 14:25:44
         compiled from "template\node\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:2249758df7dd9970750-35606217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f98f33f1d7b113fe9046906904dac1e0397625bb' => 
    array (
      0 => 'template\\node\\edit.html',
      1 => 1491056731,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2249758df7dd9970750-35606217',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58df7dd9a06569_91209034',
  'variables' => 
  array (
    'node' => 0,
    'arr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58df7dd9a06569_91209034')) {function content_58df7dd9a06569_91209034($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_nodex')) include 'D:\\wamp\\www\\MyProject\\YiMeiRen-xiaozu\\libs\\plugins\\modifier.nodex.php';
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
<title>编辑节点</title>
</head>
<body>
<div class="pd-20">
  <form class="Huiform" id="loginform" action="?c=node&a=update" method="post">
    <table class="table table-border table-bordered table-bg">
      <tbody>
      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['node']->value[0]['id'];?>
"/>
      <tr>
          <th class="text-r" width="80">上一级：</th>
          <td>
              <select class="select" size="1" name="pid">
                  <option value="0" selected>顶级</option>
                  <?php echo smarty_modifier_nodex($_smarty_tpl->tpl_vars['arr']->value,$_smarty_tpl->tpl_vars['node']->value[0]['pid']);?>

              </select>
          </td>
      </tr>
        <tr>
          <th class="text-r" width="80">节点名称：</th>
          <td><input name="name" type="text" value="<?php echo $_smarty_tpl->tpl_vars['node']->value[0]['name'];?>
" class="input-text" id="" datatype="*1-20" nullmsg="节点名称不能为空！">
          </td>
        </tr>
        <tr>
          <th class="text-r va-t">节点中文名称：</th>
          <td>
              <input name="title" type="text" value="<?php echo $_smarty_tpl->tpl_vars['node']->value[0]['title'];?>
" class="input-text" datatype="*1-20" nullmsg="节点中文名称不能为空！">
          </td>
        </tr>
      <tr>
          <th class="text-r va-t">节点等级：</th>
          <td>
              <input name="level" type="text" value="<?php echo $_smarty_tpl->tpl_vars['node']->value[0]['level'];?>
" class="input-text" datatype="*1-20" nullmsg="节点等级不能为空！">
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