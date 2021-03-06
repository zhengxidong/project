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
    <title>网站信息</title>  
    <link rel="stylesheet" href="/MyProject/ALK/Public/Admin/css/pintuer.css">
    <link rel="stylesheet" href="/MyProject/ALK/Public/Admin/css/admin.css">
    <script src="/MyProject/ALK/Public/Admin/js/jquery.js"></script>
    <script src="/MyProject/ALK/Public/Admin/js/pintuer.js"></script>  
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 网站信息</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="/MyProject/ALK/index.php/Admin/Index/update" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo ($arr[0]['id']); ?>"/>
      <div class="form-group">
        <div class="label">
          <label>网站标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="title" value="<?php echo ($arr[0]['title']); ?>" />
          <div class="tips"></div>
        </div>
      </div>
        <br/>
      <div class="form-group">
        <div class="label">
          <label>网站LOGO：</label>
        </div>
        <div class="field">
          <input type="file" id="url1" name="logo" class="input tips" style="width:25%; float:left;"data-place="right" />
            <div >               <img style="margin-top: -25px;margin-left: 10px;border:1px solid rgba(255,255,255,0.8);box-shadow:0px 0px 5px rgba(0,204,204,1);" src="/MyProject/ALK/Public/Upload/logo/<?php echo ($arr[0]['logo']); ?>" alt="" width="100" height="100"/>
            </div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>网站域名：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="surl" value="<?php echo ($arr[0]['surl']); ?>" />
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>网站关键字：</label>
        </div>
        <div class="field">
          <textarea class="input" name="keywords" style="height:80px"><?php echo ($arr[0]['keywords']); ?></textarea>
            <label>多个关键字，请用逗号隔开</label>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
          <div class="label">
              <label>网站描述：</label>
          </div>
          <div class="field">
              <textarea class="input" name="description"><?php echo ($arr[0]['description']); ?></textarea>
              <div class="tips"></div>
          </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>手机：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="phone" value="<?php echo ($arr[0]['phone']); ?>" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>传真：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="fax" value="<?php echo ($arr[0]['fax']); ?>" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>Email：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="email" value="<?php echo ($arr[0]['email']); ?>" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>地址：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="address" value="<?php echo ($arr[0]['address']); ?>" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field" style="text-align: center">
          <button class="button bg-main icon-check-square-o" type="submit"> 更新</button>
        </div>
      </div>
    </form>
  </div>
</div>
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