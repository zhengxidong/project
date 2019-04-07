<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>登录 - 博客管理系统</title>
<link rel="stylesheet" type="text/css" href="/MyProject/blog/Public/Admin/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/MyProject/blog/Public/Admin/css/style.css">
<link rel="stylesheet" type="text/css" href="/MyProject/blog/Public/Admin/css/login.css">
<link rel="apple-touch-icon-precomposed" href="/MyProject/blog/Public/Admin/images/icon/icon.png">
<link rel="shortcut icon" href="/MyProject/blog/Public/Admin/images/icon/favicon.ico">
<script src="/MyProject/blog/Public/Admin/js/jquery-2.1.4.min.js"></script>
<!--[if gte IE 9]>
  <script src="/MyProject/blog/Public/Admin/js/jquery-1.11.1.min.js" type="text/javascript"></script>
  <script src="/MyProject/blog/Public/Admin/js/html5shiv.min.js" type="text/javascript"></script>
  <script src="/MyProject/blog/Public/Admin/js/respond.min.js" type="text/javascript"></script>
  <script src="/MyProject/blog/Public/Admin/js/selectivizr-min.js" type="text/javascript"></script>
<![endif]-->
<!--[if lt IE 9]>
  <script>window.location.href='upgrade-browser.html';</script>
<![endif]-->
    <!-- CDN引进字体 -->
    <link href="http://cdn.bootcss.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body class="user-select">
<div class="container" style="margin: 120px auto">
  <div class="siteIcon"><img src="/MyProject/blog/Public/Admin/images/jiche.JPG" alt="" data-toggle="tooltip" data-placement="top" title="欢迎使用郑锡东博客管理系统" draggable="false" /></div>
  <form action="/MyProject/blog/index.php/Admin/Login/check" method="post" autocomplete="off" class="form-signin">
    <h2 class="form-signin-heading">管理员登录</h2>
    <label for="userName" class="sr-only">用户名</label>
    <input type="text" id="userName" name="username" class="form-control" placeholder="请输入用户名" required autofocus autocomplete="off" maxlength="10">
    <label for="userPwd" class="sr-only">密码</label>
    <input type="password" id="userPwd" name="userpwd" class="form-control" placeholder="请输入密码" required autocomplete="off" maxlength="18">
    <a><button class="btn btn-lg btn-primary btn-block" type="submit" id="signinSubmit"><i class="fa fa-sign-in"></i>&nbsp;&nbsp;登录</button></a>
  </form>
  <div class="footer">
    <p><a style="color:#fff" href="<?php echo U('Home/Index/index');?>" data-toggle="tooltip" data-placement="left" title="不知道自己在哪?">回到郑锡东博客 →</a></p>
  </div>
</div>
<script src="/MyProject/blog/Public/Admin/js/bootstrap.min.js"></script> 
<script>
$('[data-toggle="tooltip"]').tooltip();
window.oncontextmenu = function(){
	//return false;
};
$('.siteIcon img').click(function(){
	window.location.reload();
});
$('#signinSubmit').click(function(){
	if($('#userName').val() === ''){
		$(this).text('用户名不能为空');
	}else if($('#userPwd').val() === ''){
		$(this).text('密码不能为空');
	}else{
		$(this).text('请稍后...');
	}
});
</script>
</body>
</html>