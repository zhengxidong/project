<?php /* Smarty version Smarty-3.1.14, created on 2017-03-21 05:41:24
         compiled from ".\template\Login\login.html" */ ?>
<?php /*%%SmartyHeaderCode:1409858cd0509ce7f25-59396597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb65d196dad7a92ce0c4c972755abffcafeb2a35' => 
    array (
      0 => '.\\template\\Login\\login.html',
      1 => 1490074883,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1409858cd0509ce7f25-59396597',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58cd050a4f0854_62640544',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58cd050a4f0854_62640544')) {function content_58cd050a4f0854_62640544($_smarty_tpl) {?>
<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>TEM-Admin</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- <link href='http://fonts.useso.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> -->
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
        <a class="" href="../index.html"><span class="navbar-brand"><span class="fa fa-paper-plane"></span> TEM-Admin</span></a></div>


</div>
</div>
<div class="navbar-collapse collapse" style="height: 1px;">
    <ul id="main-menu" class="nav navbar-nav navbar-right">
        <li >
            <embed src="../public/admin/img/honehone_clock_wh.swf" type=""style=" height:45px; width:120px;"/>
        </li>
    </ul>
</div>


<div class="dialog">
    <div class="panel panel-default">
        <p class="panel-heading no-collapse">登录</p>
        <!--  <span>
            <<?php ?>?php
                if(empty($_POST))
                {
                    $error = $_SESSION['error'];
                    echo $error;
                }
            ?<?php ?>>
        </span> -->
        <div class="panel-body">
            <form action="?c=login&a=check" method="post">
                <div class="form-group">
                    <label>账号</label>
                    <input type="text" name="username" class="form-control span12">
                </div>
                <div class="form-group">
                    <label>密码</label>
                    <input type="password" name="password" class="form-controlspan12 form-control">
                </div>
                <div class="form-group ">
                    <label>验证码</label>
                    <img src="?c=login&a=yzm" width="70" height="30" alt=""
                         onclick="this.src='?c=login&a=yzm&id='+Math.random()" style="cursor:pointer;"/>
                    <div class="col-sm-4 col-sm-offset-0" style="padding-left: 0;">
                    <input type="text" name="Code" class="form-control span11 form-control"/>
                    </div>
                </div>
                <!-- <button type="sb" class="btn btn-primary pull-center">登录</button> -->
                <div class="form-group ">
                    <div class="col-md-3 col-md-offset-4">
                     <input class="btn btn-primary col-md-12 col-md-offset-3"  type="submit" value="登录"></input>
                    </div>
                </div>
                <!--  <label class="remember-me"><input type="checkbox"> Remember me</label> -->
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
    <!-- <p class="pull-right" style=""><a href="#" target="blank" style="font-size: .75em; margin-top: .25em;">Design by Portnine</a></p> -->
    <!--  <p><a href="reset-password.html">Forgot your password?</a></p> -->
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