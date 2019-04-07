<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>TEM-Admin</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

 <!--    <link href='http://fonts.useso.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> -->
    <link rel="stylesheet" type="text/css" href="../lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../lib/font-awesome/css/font-awesome.css">
    <!-- <script src="../lib/jquery-1.11.1.min.js" type="text/javascript"></script> -->
     <script type="text/javascript" src="../lib/bootstrap/js/jquery-1.8.3.min.js" charset="UTF-8"></script>
    <link rel="stylesheet" type="text/css" href="../stylesheets/theme.css">
    <link rel="stylesheet" type="text/css" href="../stylesheets/premium.css">

    <!--日期选择器外部样式-->
    <!-- <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> -->
    <link href="../lib/bootstrap/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

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
            <li ><a href="../zp/index.php"><span class="fa fa-caret-right"></span> 招聘管理</a></li>
            <li ><a href="../lx/index.php"><span class="fa fa-caret-right"></span> 联系管理</a></li>
            <li ><a href="../xw/index.php"><span class="fa fa-caret-right"></span> 新闻管理</a></li>
            <li class="active"><a href="../jj/index.php"><span class="fa fa-caret-right"></span> 简介管理</a></li>
            <li ><a href="../cp/index.php"><span class="fa fa-caret-right"></span> 产品管理</a></li>
            <li ><a href="../fl/index.php"><span class="fa fa-caret-right"></span> 分类管理</a></li>
            <li ><a href="../yh/index.php"><span class="fa fa-caret-right"></span> 用户管理</a></li>
    </ul></li>
                
            </ul>
    </div>

    <div class="content">
        <div class="header">
            
            <h1 class="page-title">编辑简介</h1>
                    <ul class="breadcrumb">
            <li><a href="index.html">主面板</a> </li>
            <li class="active">编辑简介</li>
            <!-- <li class="active">jsmith</li> -->
        </ul>

        </div>
        <div class="main-content">
            
<!-- <ul class="nav nav-tabs">
  <li class="active"><a href="#home" data-toggle="tab">Profile</a></li>
  <li><a href="#profile" data-toggle="tab">Password</a></li>
</ul> -->
<?php
   if(!empty($_GET['id']))
   {
    require '../../connect.php';
    $selectSql = "select * from zxd_tem_tb_companyprofile where id=".$_GET['id'];
    $resData= mysql_query($selectSql);
    $arrData=mysql_fetch_assoc($resData);
   }
?>
<div class="row">
  <div class="col-md-4">
    <br>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
      <form action="update.php" method="post" id="tab" enctype="multipart/form-data">
         <input type="hidden" name="id" value="<?php echo $arrData['id'];?>">
        <label>发布时间</label>
         <div class="form-group">
               <!--  <label for="dtp_input1" class="col-md-2 control-label">DateTime Picking</label> -->
                <div  class="input-group date form_datetime col-md-12" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd HH:ii:ss" data-link-field="dtp_input1">
                    <input class="form-control" size="16" type="text" value="<?php echo $arrData['releasedate'];?>" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                </div>
                <input type="hidden" name="releasedate" id="dtp_input1" value="<?php echo $arrData['releasedate'];?>" /><br/>
         </div>
        <div class="form-group">
        <label>图片路径</label>
       <!--  <input type="text" name="path" disabled="true" value="<?php echo $arrData['path'];?>" class="form-control"> -->
        <input type="file" name="path" class="form-control">
        <img width="100px" height="100px" src="../../uploads/<?php echo $arrData['path'];?>">
        
        </div>
        <div class="form-group">
          <label>内容</label>
          <textarea value="Smith" rows="12" name="synopsiscontent" class="form-control"><?php echo $arrData['synopsiscontent'];?></textarea>
        </div>

        <div class="form-group">
          <label>分类</label>
           <input type="text" name="classify" value="<?php echo $arrData['classify'];?>" class="form-control">
        </div>
        <!-- <div class="form-group">
          <label>发布时间</label>
           <input type="text" name="releasedate" value="<?php echo $arrData['releasedate'];?>" class="form-control">
        </div> -->
          <div class="btn-toolbar list-toolbar">
            <input class="btn btn-primary"  type="submit" value="修改"></input>
          </div>
        </form>
      </div>
    </div>

    
  </div>
</div>


            <footer>
                <hr>

                
                <p class="pull-right">Collect from <a  target="_blank"></a></p>
                <p>© 2017 <a href="#" target="_blank">Portnine</a></p>
            </footer>
        </div>
    </div>


    <script src="../lib/bootstrap/js/bootstrap.js"></script>
    <!--日期选择器外部js-->
   <!--  <script type="text/javascript" src="../lib/bootstrap/js/jquery-1.8.3.min.js" charset="UTF-8"></script> -->
    <!-- <script type="text/javascript" src="../lib/bootstrap/js/bootstrap.min.js"></script> -->
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