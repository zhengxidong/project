<?php /* Smarty version Smarty-3.1.14, created on 2017-04-01 06:34:27
         compiled from ".\template\category\add.html" */ ?>
<?php /*%%SmartyHeaderCode:2770458df4950935c47-66761805%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f807cedaf700b197ba08f24df05e1cf18b89c008' => 
    array (
      0 => '.\\template\\category\\add.html',
      1 => 1491028461,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2770458df4950935c47-66761805',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58df4950c43c60_41869540',
  'variables' => 
  array (
    'arr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58df4950c43c60_41869540')) {function content_58df4950c43c60_41869540($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_tree')) include 'D:\\wamp\\www\\MyProject\\YiMeiRen-xiaozu\\libs\\plugins\\modifier.tree.php';
?><!DOCTYPE HTML>
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
<title>添加分类</title>
</head>
<body>
<div class="pd-20">
  <div class="Huiform">
    <form action="?c=category&a=add" method="post">
      <table class="table table-bg">
        <tbody>
          <tr>
              <th width="100" class="text-r"><span class="c-red">*</span> 选择上一级分类：</th>
              <td>
              <select name="father" class="select">
                  <option value="0">全部分类</option>
                  <?php echo smarty_modifier_tree($_smarty_tpl->tpl_vars['arr']->value);?>

              </select>
              </td>
          </tr>
          <tr>
              <th width="100" class="text-r"><span class="c-red">*</span> 分类名：</th>
              <td><input type="text" style="width:200px" class="input-text"  placeholder="" id="user-pass" name="name" datatype="*2-16"></td>
          </tr>
          <tr>
            <th class="text-r"><span class="c-red">*</span> 类型：</th>
            <td><input type="text" style="width:300px" class="input-text" placeholder="" id="user-tel" name="type"></td>
          </tr>
          <!--<tr>
            <th class="text-r">头像：</th>
            <td><input type="file" class="" name="wj[]" multiple></td>
          </tr>-->
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