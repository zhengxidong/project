<?php /* Smarty version Smarty-3.1.14, created on 2017-03-29 16:58:28
         compiled from ".\template\type\type_list.html" */ ?>
<?php /*%%SmartyHeaderCode:2094658d796eee39bd0-02960695%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfcdfffa0ac63d1e01c8498b1412f1c10b2e63f1' => 
    array (
      0 => '.\\template\\type\\type_list.html',
      1 => 1490806705,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2094658d796eee39bd0-02960695',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58d796eeef4d21_81693823',
  'variables' => 
  array (
    'arr' => 0,
    'value' => 0,
    'pageinfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d796eeef4d21_81693823')) {function content_58d796eeef4d21_81693823($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
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
    <title>类型列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 类型管理 <span class="c-gray en">&gt;</span> 类型列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
    <div class="text-c">
        <!--<span class="select-box inline">
		<select name="" class="select">
            <option value="0">全部分类</option>
            <option value="1">分类一</option>
            <option value="2">分类二</option>
        </select>
		</span>--> 日期范围：
        <input type="text" onfocus="WdatePicker({maxDate:'#F{$dp.$D(\'logmax\')||\'%y-%M-%d\'}'})" id="logmin" class="input-text Wdate" style="width:120px;">
        -
        <input type="text" onfocus="WdatePicker({minDate:'#F{$dp.$D(\'logmin\')}',maxDate:'%y-%M-%d'})" id="logmax" class="input-text Wdate" style="width:120px;">
        <input type="text" name="" id="" placeholder=" 类型名称" style="width:250px" class="input-text">
        <button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜类型</button>
    </div>
    <div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a class="btn btn-primary radius" data-title="添加类型" href="?c=type&a=add"><i class="Hui-iconfont">&#xe600;</i> 添加类型</a></span> <span class="r">共有数据：<strong>54</strong> 条</span> </div>
    <div class="mt-20">
        <table class="table table-border table-bordered table-bg table-hover table-sort">
            <thead>
            <tr class="text-c">
                <th width="25"><input type="checkbox" name="" value=""></th>
                <th width="80">ID</th>
                <th>类型</th>
                <th width="120">操作</th>
            </tr>
            </thead>
            <tbody>
            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
            <tr class="text-c">
                <td><input type="checkbox" value="" name=""></td>
                <td> <?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['type'];?>
</td>
                <td class="f-14 td-manage">
                    <a style="text-decoration:none" class="ml-5" href="?c=attr&a=select&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" title="属性列表">属性列表</a>
                    <a style="text-decoration:none" class="ml-5" href="?c=type&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a>
                    <a style="text-decoration:none" class="ml-5" href="javascript:void(0)" onclick="if(confirm('确认要删除吗？')){location.href='?c=type&a=delete&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
'}" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
        <?php echo $_smarty_tpl->tpl_vars['pageinfo']->value;?>

    </div>
</div>
<script type="text/javascript" src="../public/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="../public/admin/lib/layer/2.1/layer.js"></script>
<script type="text/javascript" src="../public/admin/lib/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript" src="../public/admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../public/admin/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="../public/admin/static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript">

</script>
</body>
</html><?php }} ?>