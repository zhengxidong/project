<?php /* Smarty version Smarty-3.1.14, created on 2017-04-01 06:40:11
         compiled from ".\template\category\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:826958df4b4b4a2198-24395219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ea2c95d09c2fa4351efcf17b70c6f86324126cb' => 
    array (
      0 => '.\\template\\category\\edit.html',
      1 => 1491028802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '826958df4b4b4a2198-24395219',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'arr' => 0,
    'arrx' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58df4b4b51fa06_38049793',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58df4b4b51fa06_38049793')) {function content_58df4b4b51fa06_38049793($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_tree')) include 'D:\\wamp\\www\\MyProject\\YiMeiRen-xiaozu\\libs\\plugins\\modifier.tree.php';
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
<title>编辑分类</title>
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
            <th width="100" class="text-r"><span class="c-red">*</span> 上一级分类：</th>
            <td>
                <select name="father" class="select">
                    <option value="0">顶级分类</option>
                    <?php echo smarty_modifier_tree($_smarty_tpl->tpl_vars['arr']->value,$_smarty_tpl->tpl_vars['arrx']->value[0]['father']);?>

                </select>
            </td>
          </tr>
          <tr>
              <th width="100" class="text-r"><span class="c-red">*</span> 分类名：</th>
              <td><input type="text" style="width:200px" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['name'];?>
" placeholder="" id="user-pass" name="name" datatype="*2-16" nullmsg="用户名不能为空"></td>
          </tr>

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