<?php /* Smarty version Smarty-3.1.14, created on 2017-04-01 06:44:18
         compiled from ".\template\category\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:2583658df4c42a75009-59697254%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ea2c95d09c2fa4351efcf17b70c6f86324126cb' => 
    array (
      0 => '.\\template\\category\\edit.html',
      1 => 1489076115,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2583658df4c42a75009-59697254',
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
  'unifunc' => 'content_58df4c42dd1328_12175048',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58df4c42dd1328_12175048')) {function content_58df4c42dd1328_12175048($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_tree')) include 'D:\\wamp\\www\\MyProject\\shop\\libs\\plugins\\modifier.tree.php';
?><!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>TEM-Admin</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!--    <link href='http://fonts.useso.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> -->
    <link rel="stylesheet" type="text/css" href="../public/admin/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../public/admin/lib/font-awesome/css/font-awesome.css">
    <script src="../public/admin/lib/jquery-1.11.1.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="../public/admin/stylesheets/theme.css">
    <link rel="stylesheet" type="text/css" href="../public/admin/stylesheets/premium.css">

    <!--日期选择器外部样式-->
    <!-- <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> -->
    <link href="../public/admin/lib/bootstrap/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
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
            <li ><a href="../xw/index.php"><span class="fa fa-caret-right"></span> 新闻管理</a></li>
            <li ><a href="../jj/index.php"><span class="fa fa-caret-right"></span> 简介管理</a></li>-->
            <li ><a href="?c=goods&a=select"><span class="fa fa-caret-right"></span> 商品管理</a></li>
            <li ><a href="?c=attr&a=select"><span class="fa fa-caret-right"></span> 属性管理</a></li>
            <li ><a href="?c=type&a=select"><span class="fa fa-caret-right"></span> 类型管理</a></li>
            <li class="active"><a href="?c=category&a=select"><span class="fa fa-caret-right"></span> 分类管理</a></li>
            <li ><a href="?c=user&a=select"><span class="fa fa-caret-right"></span> 会员管理</a></li>
        </ul></li>

    </ul>
</div>

<div class="content">
    <div class="header">

        <h1 class="page-title">编辑分类</h1>
        <ul class="breadcrumb">
            <li><a href="index.html">主面板</a> </li>
            <li class="active">编辑分类</li>
            <!-- <li class="active">jsmith</li> -->
        </ul>

    </div>
    <div class="main-content">
        <div class="row">
            <div class="col-md-4">
                <br>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane active in" id="home">
                        <form action="?c=category&a=update" method="post" id="tab">
                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['id'];?>
">
                            <!--  <label>发布时间</label>
                             <div class="form-group">
                                   <label for="dtp_input1" class="col-md-2 control-label">DateTime Picking</label>
                                    <div  class="input-group date form_datetime col-md-12" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd HH:ii:ss" data-link-field="dtp_input1">
                                        <input class="form-control" size="16" type="text" value="<<?php ?>?php echo $arrData['jobdate'];?<?php ?>>" readonly>
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                                    </div>
                                    <input type="hidden" name="jobdate" id="dtp_input1" value="" /><br/>
                             </div> -->
                            <div class="form-group">
                                <label>上一级分类</label>
                                <select name="father" class="form-control selectpicker" id="">
                                    <option value="0">顶级分类</option>
                                    <?php echo smarty_modifier_tree($_smarty_tpl->tpl_vars['arr']->value,$_smarty_tpl->tpl_vars['arrx']->value[0]['father']);?>

                                </select>
                            </div>
                            <div class="form-group">
                                <label>分类名</label>
                                <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['name'];?>
" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>类型</label>
                                <input type="text" name="type" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['type'];?>
" class="form-control">
                            </div>
                            <div class="btn-toolbar list-toolbar">
                                <input class="btn btn-primary"  type="submit" value="修改"></input>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
        <!-- <div style="height:100px;border:1px solid blue;"></div> -->

        <footer>
            <hr>


            <p class="pull-right">Collect from <a  target="_blank"></a></p>
            <p>© 2017 <a href="#" target="_blank">Portnine</a></p>
        </footer>
    </div>
</div>


<script src="../public/admin/lib/bootstrap/js/bootstrap.js"></script>
<!--日期选择器外部js-->
<script type="text/javascript" src="../lib/bootstrap/js/jquery-1.8.3.min.js" charset="UTF-8"></script>
<!--<script type="text/javascript" src="../lib/bootstrap/js/bootstrap.min.js"></script>-->
<script type="text/javascript" src="../lib/bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="../lib/bootstrap/js/bootstrap-datetimepicker.zh-CN.js" charset="UTF-8"></script>
<script type="text/javascript">
    $("[rel=tooltip]").tooltip();
    $(function() {
        $('.demo-cancel-click').click(function(){return false;});
    });
</script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        language:  'zh-CN',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });
</script>

</body></html>
<?php }} ?>