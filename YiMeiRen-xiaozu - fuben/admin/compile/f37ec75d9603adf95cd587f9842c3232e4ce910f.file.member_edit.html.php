<?php /* Smarty version Smarty-3.1.14, created on 2017-03-27 03:37:33
         compiled from "template\User\member_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:718358d888fdc90cf3-75109537%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f37ec75d9603adf95cd587f9842c3232e4ce910f' => 
    array (
      0 => 'template\\User\\member_edit.html',
      1 => 1489239076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '718358d888fdc90cf3-75109537',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'arr' => 0,
    'role' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58d888fde5eee8_98438372',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d888fde5eee8_98438372')) {function content_58d888fde5eee8_98438372($_smarty_tpl) {?><!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <LINK rel="Bookmark" href="/favicon.ico" >
    <LINK rel="Shortcut Icon" href="/favicon.ico" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="../public/admin/lib/html5.js"></script>
    <script type="text/javascript" src="../public/admin/lib/respond.min.js"></script>
    <script type="text/javascript" src="../public/admin/lib/PIE_IE678.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="../public/admin/static/h-ui/css/H-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="../public/admin/static/h-ui.admin/css/H-ui.admin.css" />
    <link rel="stylesheet" type="text/css" href="../public/admin/lib/Hui-iconfont/1.0.7/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="../public/admin/lib/icheck/icheck.css" />
    <link rel="stylesheet" type="text/css" href="../public/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
    <link rel="stylesheet" type="text/css" href="../public/admin/static/h-ui.admin/css/style.css" />
    <!--[if IE 6]>
    <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <!--/meta 作为公共模版分离出去-->

    <title>添加用户 - H-ui.admin v2.3</title>
    <meta name="keywords" content="H-ui.admin v2.3,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
    <meta name="description" content="H-ui.admin v2.3，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container">
    <form action="?c=user&a=update" method="post" class="form form-horizontal" >
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>用户名：</label>
            <div class="formControls col-xs-8 col-sm-2">
                <input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['username'];?>
" placeholder="" id="username" name="username">
            </div>
            <input type="hidden" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['id'];?>
" placeholder="" id="id" name="id">
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>性别：</label>
            <div class="formControls col-xs-8 col-sm-9 skin-minimal">
                <div class="radio-box">
                    <?php if ($_smarty_tpl->tpl_vars['arr']->value[0]['sex']==0){?>
                    <input name="sex" type="radio" value="0" checked>
                    <label >男</label>
                    <?php }else{ ?>
                    <input name="sex" type="radio" value="1">
                    <label >女</label>
                    <?php }?>
                </div>
                <div class="radio-box">
                    <?php if ($_smarty_tpl->tpl_vars['arr']->value[0]['sex']!=1){?>
                    <input type="radio" value="1" name="sex">
                    <label>女</label>
                    <?php }else{ ?>
                    <input name="sex" type="radio" value="0" checked>
                    <label >男</label>
                    <?php }?>
                </div>
                <!--<div class="radio-box">
                    <input type="radio" id="sex-3" name="sex">
                    <label for="sex-3">保密</label>
                </div>-->
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>手机：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['phone'];?>
" placeholder="" id="mobile" name="phone">
            </div>
        </div>

        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>邮箱：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['email'];?>
" placeholder="@" name="email" id="email">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">是否锁定：</label>
            <div class="formControls col-xs-8 col-sm-2"> <span class="select-box">
				<select class="select" size="1" name="islocked">
                    <option value="0" selected>否</option>
                    <option value="1">是</option>
                </select>
				</span>
            </div>
            <label class="form-label col-xs-4 col-sm-3">管理员：</label>
            <div class="formControls col-xs-8 col-sm-2"> <span class="select-box">
				<select class="select" size="1" name="roleid">
                    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['role']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                    <?php if ($_smarty_tpl->tpl_vars['value']->value['rolename']=='注册用户'){?>
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
				</span>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">地址：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <textarea name="address"  cols="" rows="" class="textarea"  placeholder="说点什么...最少输入10个字符"><?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['address'];?>
</textarea>
                <p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
            </div>
        </div>
        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
            </div>
        </div>
    </form>
</article>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="../public/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="../public/admin/lib/layer/2.1/layer.js"></script>
<script type="text/javascript" src="../public/admin/lib/icheck/jquery.icheck.min.js"></script>
<script type="text/javascript" src="../public/admin/lib/jquery.validation/1.14.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="../public/admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="../public/admin/lib/jquery.validation/1.14.0/messages_zh.min.js"></script>
<script type="text/javascript" src="../public/admin/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="../public/admin/static/h-ui.admin/js/H-ui.admin.js"></script>
<!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript">
    $(function(){
        $('.skin-minimal input').iCheck({
            checkboxClass: 'icheckbox-blue',
            radioClass: 'iradio-blue',
            increaseArea: '20%'
        });

        $("#form-member-add").validate({
            rules:{
                username:{
                    required:true,
                    minlength:2,
                    maxlength:16
                },
                sex:{
                    required:true,
                },
                mobile:{
                    required:true,
                    isMobile:true,
                },
                email:{
                    required:true,
                    email:true,
                },
                uploadfile:{
                    required:true,
                },

            },
            onkeyup:false,
            focusCleanup:true,
            success:"valid",
            submitHandler:function(form){
                //$(form).ajaxSubmit();
                var index = parent.layer.getFrameIndex(window.name);
                //parent.$('.btn-refresh').click();
                parent.layer.close(index);
            }
        });
    });
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html><?php }} ?>