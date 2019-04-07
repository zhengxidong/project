<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>TEM-Admin</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

   <!--  <link href='http://fonts.useso.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> -->
    <link rel="stylesheet" type="text/css" href="../lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../lib/font-awesome/css/font-awesome.css">
    <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <script src="../lib/jquery-1.11.1.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="../stylesheets/theme.css">
    <link rel="stylesheet" type="text/css" href="../stylesheets/premium.css">
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
            <li ><a href="../jj/index.php"><span class="fa fa-caret-right"></span> 简介管理</a></li>
            <li ><a href="../cp/index.php"><span class="fa fa-caret-right"></span> 产品管理</a></li>
            <li ><a href="../fl/index.php"><span class="fa fa-caret-right"></span> 分类管理</a></li>
            <li class="active"><a href="../yh/index.php"><span class="fa fa-caret-right"></span> 用户管理</a></li>
    </ul></li>
            </ul>
    </div>

    <div class="content">
        <div class="header">
            
            <h1 class="page-title">用户管理</h1>
                    <ul class="breadcrumb">
            <li><a href="index.html">主面板</a> </li>
            <li class="active">用户管理</li>
        </ul>

        </div>
        <div class="main-content">
            
<div class="btn-toolbar list-toolbar">
   <a href="add.php" class="btn btn-primary"><i class="fa fa-plus"></i> 添加用户</a>

</div>
<?php
    require '../../connect.php';
    $res = mysql_query("select count(*) total from zxd_tem_tb_user");
    $recordData = mysql_fetch_assoc($res);
    $total = $recordData['total'];
    $show = 5;
    $pageNum = ceil($total/$show);
    $page = empty($_GET['page'])?1:$_GET['page'];
    $start = ($page-1)*$show;
    $aData=mysql_query("select * from zxd_tem_tb_user limit {$start},{$show}");
    $arr=array();
    while ($rData = mysql_fetch_assoc($aData)) {
          $arr[]=$rData;
    }
?>
<div class="row">
<div class="col-md-10 col-md-offset-1">
<table class="table">
  <thead>
    <tr>
      <th><input type="checkbox">全选</th>
      <th>ID</th>
      <th style="width: 50px;"></th>
      <th>昵称</th>
      <th>账号</th>
      <th class="hidden-xs">密码</th>
      <th>状态</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($arr as $value) {?>
    <tr>
      <td style="font-size:1.25em;padding-top:1em;"><input type="checkbox"></td>
      <td style="font-size:1.25em;padding-top:1em;"><?php echo $value['id']; ?></td>
      <td><a href="detail.php?id=<?php echo $value['id']; ?>" title="详细"><img class="user" src="../../admin/avatarimg/<?php echo $value['avatar']; ?>"></a></td>
      <td><?php echo $value['nickname']; ?><br><span class="text-sm"> <a href="edit.php?id=<?php echo $value['id']; ?>" data-toggle="modal" class="padding-right-small"><i class="fa fa-pencil "></i> 编辑</a> 
      <a href="#myModal<?php echo $value['id']; ?>" data-toggle="modal"><i class="fa fa-trash-o "></i> 删除</a>
      <div class="modal small fade" id="myModal<?php echo $value['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">Ã</button>
                  <h3 id="myModalLabel">删除确认</h3>
              </div>
              <div class="modal-body">
                  <p class="error-text"><i class="fa fa-warning modal-icon"></i>您确定要删除该用户?<br>删除将无法撤消。</p>
              </div>
              <div class="modal-footer">
                  <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">取消</button>
                  <a class="btn btn-danger"  href="delete.php?id=<?php echo $value['id']; ?>&avatar=<?php echo $value['avatar'];?>">删除</a>
              </div>
            </div>
          </div>
      </div>

      </span>
      </td>
      <td><?php echo $value['username']; ?><br><span class="label label-success">Pro User</span></td>
      <td style="font-size: 1.25em; padding-top: 1em;" class="hidden-xs text-muted"><a href="#"><i class="fa fa-facebook "></i></a> <a href="#"><i class="fa fa-twitter "></i></a> <a href="#"><i class="fa fa-github "></i></a>  <a href="#"><i class="fa fa-google "></i></a> <a href="#"><i class="fa fa-linkedin "></i></a></td>
      <td><i class="fa fa-bell text-danger"></i> 6 notifications<br><i class="fa fa-envelope-o "></i> 4 messages</td>
    </tr>
<?php } ?>

  </tbody>
</table>



<div class="modal fade" id="editUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">Ã</button>
            <h3 id="myModalLabel">Edit User</h3>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-group">
                    <label>昵称</label>
                    <input type="text" class="form-control" value="Ashley Jacobs">
                </div>
                <div class="form-group">
                    <label>账号</label>
                    <input type="text" class="form-control" value="ash11297">
                </div>
                <div class="form-group">
                    <label>密码</label>
                    <input type="text" class="form-control" value="ash11297">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" value="ash11297@example.com">
                </div>

                <label>User Card</label>
                <div class="well">
                    <p class="label label-primary header-label">Ashley Jacobs</p>
                    <div class="img pull-left padding-right">
                        <img src="../../avatar/<?php echo $value['avatar']; ?>" style="width: 64px;">
                        <div class="label label-info img-label">Pro</div>
                    </div>
                    <p class="info-text">Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Food truck fixie locavore coffee squid.</p>
                    <div>
                        <p class="time pull-right text-sm">5 minutes ago</p>
                        <a href="#"><span class="text-sm padding-right">15 <i class="fa fa-thumb-tack "></i></span></a>
                        <a href="#"><span class="text-sm padding-right">27 <i class="fa fa-bullhorn "></i></span></a>
                        <a href="#"><span class="text-sm padding-right">158 <i class="fa fa-eye "></i></span></a>
                    </div>
                    <div style="clear:both;"></div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
            <button class="btn btn-primary" data-dismiss="modal">Save</button>
        </div>
      </div>
    </div>
</div>
<script type="text/javascript">
  $(".btn_edit").on('click',function(){
    var name =$(this).parent().prev().text();
    var id =$(this).attr('data_id');
    $("#edit_name").attr('value',name);
    $("#edit_id").attr('value',name);
    $("#edit").modal('show');
  });
</script>
</div>
</div>

<ul class="pagination">
<?php 
   $strData = "<li><a>当前".$page."/".$pageNum."页 共".$total."条记录</a></li>";
   $strData .= "<li><a href='index.php?page=1'>首页</a></li>";
   if($page>1)
   {
    $strData .= "<li><a href='index.php?page=".($page-1)."'>上一页</a></li>";
   }
   if($page<$pageNum)
   {
    $strData .= "<li><a href='index.php?page=".($page+1)."'>下一页</a></li>";
   }
    $strData .= "<li><a href='index.php?page=".$pageNum."'>尾页</a></li>";
    echo $strData;
?>
</ul>

            <footer>
                <hr>
                <p class="pull-right">Collect from <a href=""  target="_blank"></a></p>
                <p>© 2017 <a href="#" target="_blank">Portnine</a></p>
            </footer>
        </div>
    </div>


    <script src="../lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script> 
    

    
</body></html>
