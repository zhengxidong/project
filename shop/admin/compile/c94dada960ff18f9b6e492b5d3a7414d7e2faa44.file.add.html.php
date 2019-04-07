<?php /* Smarty version Smarty-3.1.14, created on 2017-03-10 10:17:18
         compiled from ".\template\Goods\add.html" */ ?>
<?php /*%%SmartyHeaderCode:2864358c20cc0844315-17696646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c94dada960ff18f9b6e492b5d3a7414d7e2faa44' => 
    array (
      0 => '.\\template\\Goods\\add.html',
      1 => 1489141035,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2864358c20cc0844315-17696646',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58c20cc0a60e75_24244823',
  'variables' => 
  array (
    'category' => 0,
    'type' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c20cc0a60e75_24244823')) {function content_58c20cc0a60e75_24244823($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_tree')) include 'D:\\wamp\\www\\MyProject\\shop\\libs\\plugins\\modifier.tree.php';
?><!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>Bootstrap Admin</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="../public/admin/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../public/admin/lib/font-awesome/css/font-awesome.css">

    <script src="../public/admin/lib/jquery-1.11.1.min.js" type="text/javascript"></script>

    

    <link rel="stylesheet" type="text/css" href="../public/admin/stylesheets/theme.css">
    <link rel="stylesheet" type="text/css" href="../public/admin/stylesheets/premium.css">
    <!--编辑器第一步-->
    <link rel="stylesheet" href="../public/plugin/themes/default/default.css" />
    <script charset="utf-8" src="../public/plugin/kindeditor-min.js"></script>
    <script charset="utf-8" src="../public/plugin/lang/zh-CN.js"></script>
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
          <a class="" href="index.html"><span class="navbar-brand"><span class="fa fa-paper-plane"></span> Aircraft</span></a></div>

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
                <li class="divider"></li>-->
                <li><a tabindex="-1" href="javascript:void(0)" onclick="if(confirm('确定退出？')){location.href='?c=login&a=loginOut'}">注销</a></li>
              </ul>
            </li>
          </ul>

        </div>
      </div>
    </div>
    

    <div class="sidebar-nav">
    <ul>
    <li><a href="#" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-dashboard"></i> Dashboard<i class="fa fa-collapse"></i></a></li>
    <li><ul class="dashboard-menu nav nav-list collapse in">
            <li class="active"><a href="?c=goods&a=select"><span class="fa fa-caret-right"></span> 商品管理</a></li>
            <li ><a href="?c=attr&a=select"><span class="fa fa-caret-right"></span> 属性管理</a></li>
            <li ><a href="?c=type&a=select"><span class="fa fa-caret-right"></span> 类型管理</a></li>
            <li ><a href="?c=category&a=select"><span class="fa fa-caret-right"></span> 分类管理</a></li>
            <li ><a href="?c=user&a=select"><span class="fa fa-caret-right"></span> 会员管理</a></li>
    </ul></li>

            </ul>
    </div>
    <form id="tab" action="?c=goods&a=add" method="post" enctype="multipart/form-data">
    <div class="content">
        <div class="header">
            
            <h1 class="page-title">商品配置</h1>
                    <ul class="breadcrumb">
            <li><a href="index.html">主页</a> </li>
            <li><a href="users.html">商品配置</a> </li>
            <!--<li class="active">jsmith</li>-->
        </ul>

        </div>
        <div class="main-content">
            
<ul class="nav nav-tabs">
  <li class="active"><a href="#home" data-toggle="tab">商品配置</a></li>
  <li><a href="#profile" id="dianji" data-toggle="tab">其它参数</a></li>
</ul>

<div class="row">
  <div class="col-md-4">
    <br>
    <div id="myTabContent" class="tab-content">

      <div class="tab-pane active in" id="home">

          <div class="form-group">
        <label>商品标题</label>
        <input type="text" value="" name="title" class="form-control">
        </div>
          <div class="form-group">
              <label>分类</label>
              <select name="categoryid"  class="form-control">
                  <option value="0">顶部分类</option>
                  <?php echo smarty_modifier_tree($_smarty_tpl->tpl_vars['category']->value);?>

              </select>
          </div>
          <div class="form-group">
        <label>价格</label>
        <input type="text" name="price" class="form-control">
        </div>
          <div class="form-group">
        <label>上传图片</label>
        <input type="file" name="wj[]" class="form-control" multiple>
        </div>
          <div class="form-group">
        <label>库存</label>
        <input type="text" value="" name="kucun" class="form-control">
        </div>
          <div class="form-group">
              <label>新品</label>
              <input type="radio" value="1" name="isnew" class="form-control">是
              <input type="radio" value="0" name="isnew" class="form-control" checked>否
          </div>
          <div class="form-group">
              <label>热卖</label>
              <input type="radio" value="1" name="ishot" class="form-control">是
              <input type="radio" value="0" name="ishot" class="form-control" checked>否
          </div>
          <div class="form-group">
              <label>推荐</label>
              <input type="radio" value="1" name="tj" class="form-control">是
              <input type="radio" value="0" name="tj" class="form-control" checked>否
          </div>
          <div class="form-group">
              <label>商品描述</label>
              <textarea name="detail" class="form-control" style="width: 800px;height: 400px;"></textarea>
          </div>
       <!-- </form>-->
      </div>
      <div class="tab-pane fade" id="profile" >

        <div id="tab2">
            <div id="xxk2" class="form-group">
              <p id="type">
            <label>类型</label>
              <select name="typeid" id="goodstype">
                  <option value="">--请选择--</option>
                  <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['type'];?>
</option>
                  <?php } ?>
              </select></p>
            </div>
        </div>

      </div>
        <button class="btn btn-primary" type="submit">提交</button>
 </div>
        </form>


   <!-- <div class="btn-toolbar list-toolbar">
      <button class="btn btn-primary"><i class="fa fa-save"></i> 保存</button>
      <a href="#myModal" data-toggle="modal" class="btn btn-danger">Delete</a>
    </div>-->
  </div>
</div>

<div class="modal small fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Delete Confirmation</h3>
      </div>
      <div class="modal-body">
        
        <p class="error-text"><i class="fa fa-warning modal-icon"></i>Are you sure you want to delete the user?</p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
        <button class="btn btn-danger" data-dismiss="modal">Delete</button>
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
        var editor;
        KindEditor.ready(function(K) {
            editor = K.create('textarea[name="detail"]');
        });
        $("[rel=tooltip]").tooltip();

        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
        $("#goodstype").change(function(){
            $.getJSON("?c=goods&a=getAttr",
                    {id:$(this).val()},
                        function(msg){
                            $("#xxk2 p[id!=type]").remove();
                        for(var i=0;i<msg.length;i++){
                            //动态生成表单元素
                            $("<p>"+msg[i].attr+":<input type='text' name='attr_list[]'value='' />" +
                            "<input type='hidden' name='attr_id[]' value='" +
                            msg[i].id+"' /></p>").appendTo($("#xxk2"));
                        }
                    });

                });
    </script>
    
  
</body></html>
<?php }} ?>