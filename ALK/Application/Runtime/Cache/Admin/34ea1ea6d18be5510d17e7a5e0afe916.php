<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>后台管理中心</title>
    <link rel="stylesheet" href="/MyProject/ALK/Public/Admin/css/pintuer.css">
    <link rel="stylesheet" href="/MyProject/ALK/Public/Admin/css/admin.css">
    <script src="/MyProject/ALK/Public/Admin/js/jquery.js"></script>
</head>
<body style="background-color:#f2f9fd;">
<div class="header bg-main">
    <div class="logo margin-big-left fadein-top">
        <h1><img src="/MyProject/ALK/Public/Admin/images/logo.jpg" class="radius-circle rotate-hover" height="50" alt="" />后台管理中心</h1>
    </div>
    <div class="head-l"><a class="button button-little bg-green" href="<?php echo U('Home/Index/index');?>" target="_blank"><span class="icon-home"></span> 前台首页</a> &nbsp;&nbsp;<a href="##" class="button button-little bg-blue"><span class="icon-wrench"></span> 清除缓存</a> &nbsp;&nbsp;<a class="button button-little bg-red" href="<?php echo U('Admin/Login/login');?>"><span class="icon-power-off"></span> 退出登录</a> </div>
</div>
<div class="leftnav">
    <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
    <h2><span class="icon-user"></span>基本设置</h2>
    <ul style="display:block">
        <li><a href="<?php echo U('Admin/Index/index');?>"><span class="icon-caret-right"></span>网站设置</a></li>
        <li><a href="<?php echo U('Admin/Admin/chuangpw');?>"><span class="icon-caret-right"></span>修改密码</a></li>
        <li><a href="<?php echo U('Admin/Company/select');?>" ><span class="icon-caret-right"></span>公司简介</a></li>
        <li><a href="<?php echo U('Admin/Rotation/select');?>"><span class="icon-caret-right"></span>首页轮播</a></li>
        <li><a href="<?php echo U('Admin/Message/select');?>"><span class="icon-caret-right"></span>留言管理</a></li>
    </ul>
    <h2><span class="icon-pencil-square-o"></span>产品管理</h2>
    <ul>
        <li><a href="<?php echo U('Admin/Product/select');?>"><span class="icon-caret-right"></span>产品列表</a></li>
    </ul>
    <h2><span class="icon-pencil-square-o"></span>新闻管理</h2>
    <ul>
        <li><a href="<?php echo U('Admin/News/select');?>" ><span class="icon-caret-right"></span>新闻列表</a></li>
    </ul>
    <h2><span class="icon-pencil-square-o"></span>探索产品管理</h2>
    <ul>
        <li><a href="<?php echo U('Admin/QuestProduct/select');?>"><span class="icon-caret-right"></span>内容列表</a></li>
        <li><a href="<?php echo U('Admin/QuestProductType/select');?>"><span class="icon-caret-right"></span>分类列表</a></li>
    </ul>
    <h2><span class="icon-pencil-square-o"></span>栏目管理</h2>
    <ul>
        <li><a href="<?php echo U('Admin/Column/select');?>"><span class="icon-caret-right"></span>栏目列表</a></li>
    </ul>
</div>

<ul class="bread">
    <li><a href="<?php echo U('Index/info');?>" target="right" class="icon-home"> 首页</a></li>
    <li><a href="##" id="a_leader_txt">网站信息</a></li>
</ul>
<div class="admin">
    <!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="/MyProject/ALK/Public/Admin/css/pintuer.css">
<link rel="stylesheet" href="/MyProject/ALK/Public/Admin/css/admin.css">
<script src="/MyProject/ALK/Public/Admin/js/jquery.js"></script>
<script src="/MyProject/ALK/Public/Admin/js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong></div>
  <div class="padding border-bottom">  
  <button type="button" class="button border-yellow" onclick="window.location.href='/MyProject/ALK/index.php/Admin/Rotation/add'"><span class="icon-plus-square-o"></span> 添加图片</button>
  </div>
  <table class="table table-hover text-center">
    <tr>
      <th width="10%">ID</th>
      <th width="20%">图片</th>
      <th width="15%">分类名称</th>
      <th width="20%">描述</th>
      <th width="15%">操作</th>
    </tr>
   <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
      <td><?php echo ($vo["id"]); ?></td>
      <td><img src="/MyProject/ALK/Public/Upload/Rotation/<?php echo ($vo["picpath"]); ?>" alt="" width="120" height="50" /></td>
      <td><?php echo ($vo["category"]); ?></td>
      <td><?php echo ($vo["description"]); ?></td>
      <td><div class="button-group">
      <a class="button border-main" href="#add"><span class="icon-edit"></span> 修改</a>
      <a class="button border-red" href="javascript:void(0)" onclick="return del(<?php echo ($vo["id"]); ?>)"><span class="icon-trash-o"></span> 删除</a>
      </div></td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
  </table>
</div>
<script type="text/javascript">
function del(id){
	if(confirm("您确定要删除吗?")){
        location.href='/MyProject/ALK/index.php/Admin/Rotation/delete/id/'+id;
	}
}
</script>
</body></html>
 <!--   <iframe scrolling="auto" rameborder="0" src="info.html" name="right" width="100%" height="100%"></iframe>-->
</div>
<script type="text/javascript">
    $(function(){
        $(".leftnav h2").click(function(){
            $(this).next().slideToggle(200);
            $(this).toggleClass("on");
        });
        $(".leftnav ul li a").click(function(){
            $("#a_leader_txt").text($(this).text());
            $(".leftnav ul li a").removeClass("on");
            $(this).addClass("on");
        })
    });
</script>
</body>
</html>