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
    <script src="../lib/bootstrap/js/jquery-2.1.1.min.js" type="text/javascript"></script>
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
            <li class="active"><a href="../lx/index.php"><span class="fa fa-caret-right"></span> 联系管理</a></li>
            <li ><a href="../xw/index.php"><span class="fa fa-caret-right"></span> 新闻管理</a></li>
            <li ><a href="../jj/index.php"><span class="fa fa-caret-right"></span> 简介管理</a></li>
            <li ><a href="../cp/index.php"><span class="fa fa-caret-right"></span> 产品管理</a></li>
            <li ><a href="../fl/index.php"><span class="fa fa-caret-right"></span> 分类管理</a></li>
            <li ><a href="../yh/index.php"><span class="fa fa-caret-right"></span> 用户管理</a></li>
    </ul></li>
            </ul>
    </div>

    <div class="content">
        <div class="header">
            
            <h1 class="page-title">联系管理</h1>
                    <ul class="breadcrumb">
            <li><a href="index.html">主面板</a> </li>
            <li class="active">联系管理</li>
        </ul>

        </div>
        <div class="main-content">
            
<div class="col-md-4">
    <a href="add.php" class="btn btn-primary "><i class="fa fa-plus"></i> 添加联系</a>

</div>
<?php
    require '../../connect.php';
    $aData=mysql_query("select * from zxd_tem_tb_contactus");
    $arr=array();
    while ($rData = mysql_fetch_assoc($aData)) {
          $arr[]=$rData;
    }
?>
<table class="table">

  <thead>
       <div class="col-md-1 col-md-offset-10">
       <input type="button" class="btn btn-primary col-md-offset-11" id="getValue" value="删除选中项">
       </div>
    <tr> 
      <th ><input type="checkbox" id="all"></th>
      <th >ID</th>
      <th >地址</th>
      <th >tel</th>
      <th >传真</th>
      <th >电子邮件</th>
      <th >邮编</th>
      <th style="width: 8.0em;"></th>
    </tr>
  </thead>
  <tbody id="list">
    <?php foreach ($arr as $value) { ?>
      <tr >
         <td><input type="checkbox" value="<?php echo $value['id'];?>" ></td>
         <td><?php echo $value['id'];?></td>
         <td><?php echo $value['address'];?></td>
         <td><?php echo $value['tel'];?></td>
         <td><?php echo $value['fax'];?></td>
         <td><?php echo $value['email'];?></td>
         <td><?php echo $value['postcode'];?></td>
         <td>
          <a title="详细" href="detail.php?id=<?php echo $value['id'];?>" ><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;|&nbsp;&nbsp;
          <a title="编辑" href="edit.php?id=<?php echo $value['id'];?>" ><i class="fa fa-edit"></i></a>&nbsp;&nbsp;|&nbsp;&nbsp;
          <a title="删除" href="javascript:void(0)" onclick="if(confirm('确认要删除吗？')){location.href='delete.php?id=<?php echo $value['id'];?>'}" role="button" data-toggle="modal"><i class="fa fa-trash-o"></i></a>
         </td>
      </tr>
   <?php } ?>
  </tbody>
</table>
<?php
    $link = mysql_connect("localhost","root",""); 
    mysql_query("set names utf8");
    mysql_select_db("db_tem",$link);
    $sql = "select count(*) as nums from zxd_tem_tb_contactus";
    $result =mysql_query($sql);

    $row = mysql_fetch_assoc($result);

    $total_num = $row['nums']; //总的记录数
    $p_page_num =3;//每一页显示的数目

    $page_num = ceil($total_num/$p_page_num);//页数
?>

<ul class="pagination">
  <li><a href="#">&laquo;</a></li>
  <?php
  for($j=1;$j<=$page_num;$j++)
  { ?>
      <li><a href="#"><?php echo $j; ?></a></li>
  <?php
  } ?>
  
  <!-- <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li> -->
  <li><a href="#">&raquo;</a></li>
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
    <script>
  $(function(){

    //全选/不全选
    $("#all").click(function(){
      if(this.checked){
        $("#list :checkbox").prop("checked",true);
      }
      else{
        $("#list :checkbox").prop("checked",false);
      }
    });
    //反选
    /*$("#reverse").click(function(){
      $("#list :checkbox").each(function(){
        $(this).prop("checked",!$(this).prop("checked"));
      });
      allchk();
    });*/
    //设置全选复选框
    $("#list :checkbox").click(function(){
      allchk();
    });
    //获取勾选值
    $("#getValue").click(function(){
      /*var valArr = [];*/
      var vals ="";
      $("#list :checkbox").each(function(){
        if($(this).prop("checked")==true){
          vals += ","+$(this).val();
          /*valArr.push($(this).val());*/
        }
      })
      var va =vals.substring(1);
      if(va.length==0)
      {

        alert("请选择要删除的选项");
      }
      else{
        if(confirm("确定删除？删除后将无法恢复。"))
        {
          location.href='./delete.php?data='+va;
           /*alert(va);*/
        }
      }
    });
    function allchk(){
      var chknum = $("#list :checkbox").size();//选项总个数
      
      var chk = 0;
      $("#list :checkbox").each(function(){
        if($(this).prop("checked")==true){
          chk++;
        }
      });
      if(chknum==chk){
        /*alert(chk);*/
        $("#all").prop("checked",true);
      }
      else{
        $("#all").prop("checked",false);
      }
    }
  });
    
</script>

    
</body></html>
