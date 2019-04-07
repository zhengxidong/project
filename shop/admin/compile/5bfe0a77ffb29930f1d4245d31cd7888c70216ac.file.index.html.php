<?php /* Smarty version Smarty-3.1.14, created on 2017-03-10 02:02:25
         compiled from ".\template\Goods\index.html" */ ?>
<?php /*%%SmartyHeaderCode:53458c20931bf42c2-91699598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bfe0a77ffb29930f1d4245d31cd7888c70216ac' => 
    array (
      0 => '.\\template\\Goods\\index.html',
      1 => 1489111342,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53458c20931bf42c2-91699598',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'arr' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58c20931dcc908_45316556',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c20931dcc908_45316556')) {function content_58c20931dcc908_45316556($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_jq')) include 'D:\\wamp\\www\\MyProject\\shop\\libs\\plugins\\modifier.jq.php';
?><!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>TEM-Admin</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="../public/admin/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../public/admin/lib/font-awesome/css/font-awesome.css">

    <script src="../public/admin/lib/jquery-1.11.1.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="../public/admin/stylesheets/theme.css">
    <link rel="stylesheet" type="text/css" href="../public/admin/stylesheets/premium.css">
</head>
<body class=" theme-blue">

<!-- Demo page code -->

<script type="text/javascript">
    $(function() {
        var match = document.cookie.match(new RegExp('color=([^;]+)'));
        if(match) var color = match[1];
        if(color) {
            $('body').removeClass(function (index, css) {
                return (css.match (/\btheme-\S+/g) || []).join(' ')
            })
            $('body').addClass('theme-' + color);
        }

        $('[data-popover="true"]').popover({html: true});

    });
</script>
<style type="text/css">
    #line-chart {
        height:300px;
        width:800px;
        margin: 0px auto;
        margin-top: 1em;
    }
    .navbar-default .navbar-brand, .navbar-default .navbar-brand:hover {
        color: #fff;
    }
</style>

<script type="text/javascript">
    $(function() {
        var uls = $('.sidebar-nav > ul > *').clone();
        uls.addClass('visible-xs');
        $('#main-menu').append(uls.clone());
    });
</script>

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Le fav and touch icons -->
<link rel="shortcut icon" href="../assets/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">


<!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
<!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
<!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
<!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->

<!--<![endif]-->

<div class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="" href="index.html"><span class="navbar-brand"><span class="fa fa-paper-plane"></span> TEM-Admin</span></a></div>

    <div class="navbar-collapse collapse" style="height: 1px;">
        <ul id="main-menu" class="nav navbar-nav navbar-right">
            <li class="dropdown hidden-xs">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 3px;"></span> Jack Smith
                    <i class="fa fa-caret-down"></i>
                </a>

                <ul class="dropdown-menu">
                    <!-- <li><a href="./">My Account</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Admin Panel</li>
                    <li><a href="./">Users</a></li>
                    <li><a href="./">Security</a></li>
                    <li><a tabindex="-1" href="./">Payments</a></li>
                    <li class="divider"></li> -->
                    <li><a tabindex="-1" href="../login.php">注销</a></li>
                </ul>
            </li>
        </ul>

    </div>
</div>
</div>


<div class="sidebar-nav">
    <ul>
        <li><a href="#" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-dashboard"></i> 主面板<i class="fa fa-collapse"></i></a></li>
        <li><ul class="dashboard-menu nav nav-list collapse in">
           <!-- <li ><a href="../zp/index.php"><span class="fa fa-caret-right"></span> 招聘管理</a></li>
            <li ><a href="../lx/index.php"><span class="fa fa-caret-right"></span> 联系管理</a></li>-->
            <li class="active"><a href="?c=goods&a=select"><span class="fa fa-caret-right"></span> 商品管理</a></li>
            <li ><a href="?c=attr&a=select"><span class="fa fa-caret-right"></span> 属性管理</a></li>
            <li ><a href="?c=type&a=select"><span class="fa fa-caret-right"></span> 类型管理</a></li>
            <li ><a href="?c=category&a=select"><span class="fa fa-caret-right"></span> 分类管理</a></li>
            <li ><a href="?c=user&a=select"><span class="fa fa-caret-right"></span> 会员管理</a></li>
        </ul></li>
    </ul>
</div>

<div class="content">
    <div class="header">

        <h1 class="page-title">商品管理</h1>
        <ul class="breadcrumb">
            <li><a href="index.html">主面板</a> </li>
            <li class="active">商品管理</li>
        </ul>

    </div>
    <div class="main-content">

        <div class="btn-toolbar list-toolbar">

            <a href="?c=goods&a=add" class="btn btn-primary"><i class="fa fa-plus"></i> 添加商品</a>

        </div>
        <table class="table table-hover">
            <thead>
            <div class="col-md-1 col-md-offset-10">
                <input type="button" class="btn btn-primary col-md-offset-11" id="getValue" value="删除选中项" />
            </div>
            <tr>
                <th><input type="checkbox" id="all">全选</th>
                <th>ID</th>
                <th>标题</th>
                <th>图片</th>
                <th>价钱</th>
                <th style="width: 8.0em;">操作</th>
            </tr>
            </thead>
            <tbody id="list">
            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['arr']->value==''){?>
            <?php }else{ ?>
            <tr>
                <td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"></td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</td>
                <td><img src="../public/zoom/<?php echo smarty_modifier_jq($_smarty_tpl->tpl_vars['value']->value['microimg']);?>
" alt=""/></td>
               <!-- <td><img src="../public/zoom/&lt;!&ndash;{$value['microimg']|jq}&ndash;&gt;" alt=""/></td>-->
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['price'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['typeid'];?>
</td>
                <td>
                    <a title="详细" href="detail.php?id=<<?php ?>?php echo $value['id'];?<?php ?>>" ><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                    <a title="编辑" href="?c=attr&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" ><i class="fa fa-edit"></i></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                    <a title="删除" href="javascript:void(0)" onclick="if(confirm('确认要删除吗？')){location.href='?c=attr&a=delete&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
'}" role="button" data-toggle="modal"><i class="fa fa-trash-o" ></i></a>
                </td>
            </tr>
            <?php }?>
            <?php } ?>
            </tbody>
        </table>

        <ul class="pagination">

        </ul>

        <footer>
            <hr>
            <p class="pull-right">Collect from <a href=""  target="_blank"></a></p>
            <p>© 2017 <a href="#" target="_blank">Portnine</a></p>
        </footer>
    </div>
</div>


<script src="../public/admin/lib/bootstrap/js/bootstrap.js"></script>
<script src="../public/admin/js/select.js"></script>
<script type="text/javascript">
    $("[rel=tooltip]").tooltip();
    $(function() {
        $('.demo-cancel-click').click(function(){return false;});
    });
</script>



</body></html>
<?php }} ?>