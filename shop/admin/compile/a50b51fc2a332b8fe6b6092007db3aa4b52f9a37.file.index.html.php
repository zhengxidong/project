<?php /* Smarty version Smarty-3.1.14, created on 2017-03-26 10:12:10
         compiled from ".\template\type\index.html" */ ?>
<?php /*%%SmartyHeaderCode:186258d793fac45d52-59482280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a50b51fc2a332b8fe6b6092007db3aa4b52f9a37' => 
    array (
      0 => '.\\template\\type\\index.html',
      1 => 1489076116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186258d793fac45d52-59482280',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'arr' => 0,
    'value' => 0,
    'pageinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58d793fb0ad652_90019375',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d793fb0ad652_90019375')) {function content_58d793fb0ad652_90019375($_smarty_tpl) {?><!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>TEM-Admin</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!--  <link href='http://fonts.useso.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> -->
    <link rel="stylesheet" type="text/css" href="../public/admin/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../public/admin/lib/font-awesome/css/font-awesome.css">
    <!--<link href="../public/admin/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />-->
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
            <li ><a href="../lx/index.php"><span class="fa fa-caret-right"></span> 联系管理</a></li>
            <li ><a href="../xw/index.php"><span class="fa fa-caret-right"></span> 新闻管理</a></li>-->
            <li ><a href="?c=goods&a=select"><span class="fa fa-caret-right"></span> 商品管理</a></li>
            <li ><a href="?c=attr&a=select"><span class="fa fa-caret-right"></span> 属性管理</a></li>
            <li class="active"><a href="?c=type&a=select"><span class="fa fa-caret-right"></span> 类型管理</a></li>
            <li ><a href="?c=category&a=select"><span class="fa fa-caret-right"></span> 分类管理</a></li>
            <li ><a href="?c=user&a=select"><span class="fa fa-caret-right"></span> 会员管理</a></li>
        </ul></li>
    </ul>
</div>

<div class="content">
    <div class="header">

        <h1 class="page-title">类型管理</h1>
        <ul class="breadcrumb">
            <li><a href="index.html">主面板</a> </li>
            <li class="active">类型管理</li>
        </ul>

    </div>
    <div class="main-content">

        <div class="btn-toolbar list-toolbar">

            <a href="?c=type&a=add" class="btn btn-primary"><i class="fa fa-plus"></i> 添加类型</a>

        </div>
        <table class="table table-hover">
            <thead>
            <!--<div class="col-md-1 col-md-offset-10">
                <input type="button" class="btn btn-primary col-md-offset-11" id="getValue" value="删除选中项"/>
            </div>-->
            <tr>
               <!-- <th><input type="checkbox" id="all"></th>-->
                <th>ID</th>
                <th>类型</th>
                <th style="width: 13.0em;">操作</th>
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
               <!-- <td><input type="checkbox" value="&lt;!&ndash;{$value['id']}&ndash;&gt;"></td>-->
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['type'];?>
</td>
                <td>
                    <a href="?c=attr&a=select&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">属性列表</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                    <a title="详细" href="detail.php?id=<<?php ?>?php echo $value['id'];?<?php ?>>" ><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                    <a title="编辑" href="?c=type&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" ><i class="fa fa-edit"></i></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                    <a title="删除" href="javascript:void(0)" onclick="if(confirm('确认要删除吗？')){location.href='?c=type&a=delete&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
'}" role="button" data-toggle="modal"><i class="fa fa-trash-o"></i></a>
                </td>
            </tr>
            <?php }?>
            <?php } ?>
            </tbody>
        </table>

        <ul class="pagination">
           <?php echo $_smarty_tpl->tpl_vars['pageinfo']->value;?>

        </ul>

        <footer>
            <hr>
            <p class="pull-right">Collect from <a href=""  target="_blank"></a></p>
            <p>© 2017 <a href="#" target="_blank">Portnine</a></p>
        </footer>
    </div>
</div>


<script src="../public/admin/lib/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript">
    $("[rel=tooltip]").tooltip();
    $(function() {
        $('.demo-cancel-click').click(function(){return false;});
    });
    $(function (){
        $("#all").click(function(){
            if(this.checked){
                $("#list :checkbox").prop("checked",true);
            }else{
                $("#list :checkbox").prop("checked",false);
            }
        });
        $("#list :checkbox").click(function(){
            allchk();
        });
        $("#getValue").click(function (){
            var vals = "";
            $("#list :checkbox").each(function(){
                if($(this).prop("checked")==true){
                    vals +=","+$(this).val();
                }
            });
            var va = vals.substring(1);
            if(va.length==0)
            {
                alert("请选择要删除的选项");
            }
            else{
                location.href='?c='+type+'&a='+delAll+'&id='+va;

            }
        });
        function allchk(){
            var chknum = $("#list :checkbox").size();
            var chk =0;
            $("#list :checkbox").each(function(){
                if($(this).prop("checked")==true){
                    chk++;
                }
            });
            if(chknum==chk){
                $("#all").prop("checked",true);
            }
            else{
                $("#all").prop("checked",false);
            }
        }

    });
</script>



</body></html>
<?php }} ?>