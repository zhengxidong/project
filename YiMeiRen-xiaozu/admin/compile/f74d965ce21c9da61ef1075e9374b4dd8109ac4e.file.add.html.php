<?php /* Smarty version Smarty-3.1.14, created on 2017-04-01 10:15:28
         compiled from "template\node\add.html" */ ?>
<?php /*%%SmartyHeaderCode:2388058df7dc0db1813-73472708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f74d965ce21c9da61ef1075e9374b4dd8109ac4e' => 
    array (
      0 => 'template\\node\\add.html',
      1 => 1491041662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2388058df7dc0db1813-73472708',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'arr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58df7dc11b8610_30875025',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58df7dc11b8610_30875025')) {function content_58df7dc11b8610_30875025($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_nodex')) include 'D:\\wamp\\www\\MyProject\\YiMeiRen-xiaozu\\libs\\plugins\\modifier.nodex.php';
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
<title>添加节点</title>
</head>
<body>
<div class="pd-20">
  <form class="Huiform" id="loginform" action="?c=node&a=add" method="post">
    <table class="table table-border table-bordered table-bg">
      <tbody>
      <tr>
          <th class="text-r" width="80">上一级：</th>
          <td>
              <select class="select" size="1" name="pid">
                  <option value="0" selected>顶级</option>
                  <?php echo smarty_modifier_nodex($_smarty_tpl->tpl_vars['arr']->value);?>

              </select>
          </td>
      </tr>
        <tr>
          <th class="text-r" width="80">节点名称：</th>
          <td><input name="name" type="text" class="input-text" id="" datatype="*1-20" nullmsg="节点名称不能为空！">
          </td>
        </tr>
        <!--<tr>
          <th class="text-r va-t">权限：</th>
          <td>
            <table class="table table-border table-bordered table-bg">
              <tbody>
                <tr>
                  <th width="70">用户管理（会员）</th>
                  <td class="permission-list">
               
                    <div class="cl">
                    <label class="item"><input name="" type="checkbox" value=""> 添加</label>
                    <label class="item"><input name="" type="checkbox" value=""> 删除</label>
                    <label class="item"><input name="" type="checkbox" value=""> 编辑</label>
                    <label class="item"><input name="" type="checkbox" value=""> 排序</label>
                    </div>
         
                    <div class="cl">
                    <label class="item"><input name="" type="checkbox" value=""> 查看</label></div>
                  </td>
                </tr>
                <tr>
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
                </tr>
              </tbody>
            </table>
          </td>
        </tr>-->
        <tr>
          <th class="text-r va-t">节点中文名称：</th>
          <td>
              <input name="title" type="text" class="input-text" datatype="*1-20" nullmsg="节点中文名称不能为空！">
          </td>
        </tr>
      <tr>
          <th class="text-r va-t">节点等级：</th>
          <td>
              <input name="level" type="text" class="input-text" datatype="*1-20" nullmsg="节点等级不能为空！">
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