<?php /* Smarty version Smarty-3.1.14, created on 2017-04-01 05:27:47
         compiled from "template\user\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:2870758df38b59c1ef2-70343515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe10a3d774c9e298003507157b5ddea5a939bec6' => 
    array (
      0 => 'template\\user\\edit.html',
      1 => 1491024457,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2870758df38b59c1ef2-70343515',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58df38b5a58f31_81837742',
  'variables' => 
  array (
    'arr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58df38b5a58f31_81837742')) {function content_58df38b5a58f31_81837742($_smarty_tpl) {?><!DOCTYPE HTML>
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
<title>添加用户</title>
</head>
<body>
<div class="pd-20">
  <div class="Huiform">
    <form action="?c=user&a=update" method="post">
      <table class="table table-bg">
        <tbody>
        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['id'];?>
" name="id"/>
          <tr>
            <th width="100" class="text-r"><span class="c-red">*</span> 用户名：</th>
            <td><input type="text" style="width:200px" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['username'];?>
" placeholder="" id="user-name" name="username" datatype="*2-16" nullmsg="用户名不能为空"></td>
          </tr>
          <tr>
              <th width="100" class="text-r"><span class="c-red">*</span> 密码：</th>
              <td><input type="text" style="width:200px" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['password'];?>
" placeholder="" id="user-pass" name="password" datatype="*2-16" nullmsg="用户名不能为空"></td>
          </tr>
          <tr>
            <th class="text-r"><span class="c-red">*</span> 性别：</th>
            <td>
                <?php if ($_smarty_tpl->tpl_vars['arr']->value[0]['username']=='1'){?>
                <label>
                <input name="sex" type="radio" id="six_1" value="1" checked>
                男</label>
                <label>
                    <input type="radio" name="sex" value="0" id="six_0">
                    女</label></td>
                <?php }else{ ?>
              <label>
                  <input name="sex" type="radio" id="six_1" value="1" >
                  男</label>
              <label>
                <input type="radio" name="sex" value="0" id="six_0" checked>
                女</label></td>
              <?php }?>
          </tr>
          <tr>
            <th class="text-r"><span class="c-red">*</span> 手机：</th>
            <td><input type="text" style="width:300px" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['phone'];?>
" placeholder="" id="user-tel" name="phone"></td>
          </tr>
          <tr>
            <th class="text-r">邮箱：</th>
            <td><input type="text" style="width:300px" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['email'];?>
" placeholder="" id="user-email" name="email"></td>
          </tr>
          <!--<tr>
            <th class="text-r">头像：</th>
            <td><input type="file" class="" name="wj[]" multiple></td>
          </tr>-->
          <tr>
            <th class="text-r">地址：</th>
            <td><input type="text" style="width:300px" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['address'];?>
" placeholder="" id="user-address" name="address"></td>
          </tr>
         <!-- <tr>
            <th class="text-r">简介：</th>
            <td><textarea class="input-text" name="user-info" id="user-info" style="height:100px;width:300px;"></textarea></td>
          </tr>-->
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