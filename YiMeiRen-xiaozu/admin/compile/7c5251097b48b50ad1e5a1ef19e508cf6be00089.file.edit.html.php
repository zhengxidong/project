<?php /* Smarty version Smarty-3.1.14, created on 2017-04-01 08:37:17
         compiled from ".\template\type\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:1061758df66bd7e56d8-40267953%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c5251097b48b50ad1e5a1ef19e508cf6be00089' => 
    array (
      0 => '.\\template\\type\\edit.html',
      1 => 1491035830,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1061758df66bd7e56d8-40267953',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'arr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58df66bd850583_18070917',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58df66bd850583_18070917')) {function content_58df66bd850583_18070917($_smarty_tpl) {?><!DOCTYPE HTML>
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
<title>编辑类型</title>
</head>
<body>
<div class="pd-20">
  <div class="Huiform">
    <form action="?c=category&a=update" method="post">
      <table class="table table-bg">
        <tbody>
        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['id'];?>
" name="id"/>
          <tr>
            <th class="text-r"><span class="c-red">*</span> 类型：</th>
            <td><input type="text" style="width:300px" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['type'];?>
" placeholder="" id="user-tel" name="type"></td>
          </tr>
          <tr>
            <th></th>
            <td><button class="btn btn-success radius" type="submit"><i class="icon-ok"></i> 确定</button></td>
          </tr>
        </tbody>
      </table>
    </form>
  </div>
</div>
<script type="text/javascript" src="../public/admin/js/jquery.min.js"></script>
<script type="text/javascript" src="../public/admin/js/Validform_v5.3.2_min.js"></script> 
<script type="text/javascript" src="../public/admin/js/H-ui.js"></script> 
<script type="text/javascript" src="../public/admin/js/H-ui.admin.js"></script> 
<script type="text/javascript">
$(".Huiform").Validform(); 
</script>

</body>
</html><?php }} ?>