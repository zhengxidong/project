<?php /* Smarty version Smarty-3.1.14, created on 2017-03-18 10:00:02
         compiled from "template\index.html" */ ?>
<?php /*%%SmartyHeaderCode:3102358cd05220a0dc0-42599504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebc2c8c13204242ac649637da6b1a05aab91bf5a' => 
    array (
      0 => 'template\\index.html',
      1 => 1489076116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3102358cd05220a0dc0-42599504',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58cd05222689a7_55582938',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58cd05222689a7_55582938')) {function content_58cd05222689a7_55582938($_smarty_tpl) {?><!--<<?php ?>?php
session_start();
   if(empty($_SESSION['admin']))
   {
      /*$error = "非法访问";*/
      echo "<script>alert('非法访问');location.href='login.php';</script>";
}
?<?php ?>>-->
<!doctype html>
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

<script src="../public/admin/lib/jQuery-Knob/js/jquery.knob.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function() {
        $(".knob").knob();
    });
</script>


<link rel="stylesheet" type="text/css" href="../public/admin/stylesheets/theme.css">
<link rel="stylesheet" type="text/css" href="../public/admin/stylesheets/premium.css">

</head>
<body class=" theme-blue">

<!-- Demo page code -->

<script type="text/javascript">
    $(function(){
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

                    <li><a href="./">我的账户</a></li>
                    <!--  <li><a href="./">我的账户</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">管理面板</li>
                    <li><a href="./">用户</a></li>
                    <li><a href="./">安全</a></li>
                    <li><a tabindex="-1" href="./">支付</a></li>
                    <li class="divider"></li> -->
                    <li><a tabindex="-1" href="javascript:void(0)" onclick="if(confirm('确定退出？')){location.href='?c=login&a=loginOut'}">退出</a></li>


                </ul>

            </li>
        </ul>

    </div>
</div>
</div>
<div class="copyrights"> <a href=""  title=""></a></div>

<div class="sidebar-nav">
    <ul>
        <li data-popover="true"><a href="#" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-dashboard"></i> 伊美人<i class="fa fa-collapse"></i></a></li>
        <li><ul class="dashboard-menu nav nav-list collapse in">
           <!-- <li><a href="zp/index.php"><span class="fa fa-caret-right"></span> 招聘管理</a></li>
            <li ><a href="lx/index.php"><span class="fa fa-caret-right"></span> 联系管理</a></li>-->
            <li ><a href="?c=goods&a=select"><span class="fa fa-caret-right"></span> 商品管理</a></li>
            <li ><a href="?c=attr&a=select"><span class="fa fa-caret-right"></span> 属性管理</a></li>
            <li ><a href="?c=type&a=select"><span class="fa fa-caret-right"></span> 类型管理</a></li>
            <li ><a href="?c=category&a=select"><span class="fa fa-caret-right"></span> 分类管理</a></li>
            <li ><a href="?c=user&a=select"><span class="fa fa-caret-right"></span> 会员管理</a></li>
        </ul></li>

    </ul>
</div>

<div class="content">
    <div class="header">
        <div class="stats">
            <p class="stat"><span class="label label-info">5</span> Tickets</p>
            <p class="stat"><span class="label label-success">27</span> Tasks</p>
            <p class="stat"><span class="label label-danger">15</span> Overdue</p>
        </div>

        <h1 class="page-title">主面板</h1>
        <ul class="breadcrumb">
            <li><a href="houtai/index.html">主面板</a> </li>
            <!-- <li class="active">Dashboard</li> -->
        </ul>

    </div>
    <div class="main-content">





        <div class="panel panel-default">
            <a href="#page-stats" class="panel-heading" data-toggle="collapse">Latest Stats</a>
            <div id="page-stats" class="panel-collapse panel-body collapse in">

                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="knob-container">
                            <input class="knob" data-width="200" data-min="0" data-max="3000" data-displayPrevious="true" value="2500" data-fgColor="#92A3C2" data-readOnly=true;>
                            <h3 class="text-muted text-center">Accounts</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="knob-container">
                            <input class="knob" data-width="200" data-min="0" data-max="4500" data-displayPrevious="true" value="3299" data-fgColor="#92A3C2" data-readOnly=true;>
                            <h3 class="text-muted text-center">Subscribers</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="knob-container">
                            <input class="knob" data-width="200" data-min="0" data-max="2700" data-displayPrevious="true" value="1840" data-fgColor="#92A3C2" data-readOnly=true;>
                            <h3 class="text-muted text-center">Pending</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="knob-container">
                            <input class="knob" data-width="200" data-min="0" data-max="15000" data-displayPrevious="true" value="10067" data-fgColor="#92A3C2" data-readOnly=true;>
                            <h3 class="text-muted text-center">Completed</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading no-collapse">Not Collapsible<span class="label label-warning">+10</span></div>
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Mark</td>
                            <td>Tompson</td>
                            <td>the_mark7</td>
                        </tr>
                        <tr>
                            <td>Ashley</td>
                            <td>Jacobs</td>
                            <td>ash11927</td>
                        </tr>
                        <tr>
                            <td>Audrey</td>
                            <td>Ann</td>
                            <td>audann84</td>
                        </tr>
                        <tr>
                            <td>John</td>
                            <td>Robinson</td>
                            <td>jr5527</td>
                        </tr>
                        <tr>
                            <td>Aaron</td>
                            <td>Butler</td>
                            <td>aaron_butler</td>
                        </tr>
                        <tr>
                            <td>Chris</td>
                            <td>Albert</td>
                            <td>cab79</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="panel panel-default">
                    <a href="#widget1container" class="panel-heading" data-toggle="collapse">Collapsible </a>
                    <div id="widget1container" class="panel-body collapse in">
                        <h2>Here's a Tip</h2>
                        <p>This template was developed with <a href="http://middlemanapp.com/" target="_blank">Middleman</a> and includes .erb layouts and views.</p>
                        <p>All of the views you see here (sign in, sign up, users, etc) are already split up so you don't have to waste your time doing it yourself!</p>
                        <p>The layout.erb file includes the header, footer, and side navigation and all of the views are broken out into their own files.</p>
                        <p>If you aren't using Ruby, there is also a set of plain HTML files for each page, just like you would expect.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading no-collapse">
                <span class="panel-icon pull-right">
                    <a href="#" class="demo-cancel-click" rel="tooltip" title="Click to refresh"><i class="fa fa-refresh"></i></a>
                </span>

                        Needed to Close
                    </div>
                    <table class="table list">
                        <tbody>
                        <tr>
                            <td>
                                <a href="#"><p class="title">Care Hospital</p></a>
                                <p class="info">Sales Rating: 86%</p>
                            </td>
                            <td>
                                <p>Date: 7/19/2012</p>
                                <a href="#">View Transaction</a>
                            </td>
                            <td>
                                <p class="text-danger h3 pull-right" style="margin-top: 12px;">$20,500</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#"><p class="title">Custom Eyesight</p></a>
                                <p class="info">Sales Rating: 58%</p>
                            </td>
                            <td>
                                <p>Date: 7/19/2012</p>
                                <a href="#">View Transaction</a>
                            </td>
                            <td>
                                <p class="text-danger h3 pull-right" style="margin-top: 12px;">$12,600</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#"><p class="title">Clear Dental</p></a>
                                <p class="info">Sales Rating: 76%</p>
                            </td>
                            <td>
                                <p>Date: 7/19/2012</p>
                                <a href="#">View Transaction</a>
                            </td>
                            <td>
                                <p class="text-danger h3 pull-right" style="margin-top: 12px;">$2,500</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#"><p class="title">Safe Insurance</p></a>
                                <p class="info">Sales Rating: 82%</p>
                            </td>
                            <td>
                                <p>Date: 7/19/2012</p>
                                <a href="#">View Transaction</a>
                            </td>
                            <td>
                                <p class="text-danger h3 pull-right" style="margin-top: 12px;">$22,400</p>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="panel panel-default">
                    <a href="#widget2container" class="panel-heading" data-toggle="collapse">Collapsible </a>
                    <div id="widget2container" class="panel-body collapse in">
                        <h2>Built with Less</h2>
                        <p>The CSS is built with Less. There is a compiled version included if you prefer plain CSS.</p>
                        <p>Fava bean jícama seakale beetroot courgette shallot amaranth pea garbanzo carrot radicchio peanut leek pea sprouts arugula brussels sprout green bean. Spring onion broccoli chicory shallot winter purslane pumpkin gumbo cabbage squash beet greens lettuce celery. Gram zucchini swiss chard mustard burdock radish brussels sprout groundnut. Asparagus horseradish beet greens broccoli brussels.</p>
                        <p><a class="btn btn-primary">Learn more »</a></p>
                    </div>
                </div>
            </div>
        </div>


        <footer>
            <hr>


            <p class="pull-right">Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
            <p>© 2014 <a href="#" target="_blank">Portnine</a></p>
        </footer>
    </div>
</div>


<script src="../public/admin/lib/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript">
    $("[rel=tooltip]").tooltip();
    $(function() {
        $('.demo-cancel-click').click(function(){return false;});
    });
</script>


</body></html>
<?php }} ?>