<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
    <div class="head-l"><a class="button button-little bg-green" href="<?php echo U('Home/Index/index');?>" target="_blank"><span class="icon-home"></span> 前台首页</a> &nbsp;&nbsp;<a href="##" class="button button-little bg-blue"><span class="icon-wrench"></span> 清除缓存</a> &nbsp;&nbsp;<a class="button button-little bg-red" href="<?php echo U('Admin/Login/logout');?>"><span class="icon-power-off"></span> 退出登录</a> </div>
</div>
<div class="leftnav">
    <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
    <h2><span class="icon-user"></span>基本设置</h2>
    <ul style="display:block">
        <li><a href="<?php echo U('Admin/Index/info');?>" target="right"><span class="icon-caret-right"></span>网站设置</a></li>
        <li><a href="<?php echo U('Admin/Admin/chuangpw');?>" target="right"><span class="icon-caret-right"></span>修改密码</a></li>
        <li><a href="<?php echo U('Admin/Company/select');?>" target="right"><span class="icon-caret-right"></span>公司简介</a></li>
        <li><a href="<?php echo U('Admin/Rotation/select');?>" target="right"><span class="icon-caret-right"></span>首页轮播</a></li>
        <li><a href="<?php echo U('Admin/Message/select');?>" target="right"><span class="icon-caret-right"></span>留言管理</a></li>
    </ul>
    <h2><span class="icon-pencil-square-o"></span>产品管理</h2>
    <ul>
        <li><a href="<?php echo U('Admin/Product/select');?>" target="right"><span class="icon-caret-right"></span>产品列表</a></li>
    </ul>
    <h2><span class="icon-pencil-square-o"></span>新闻管理</h2>
    <ul>
        <li><a href="<?php echo U('Admin/News/select');?>" target="right"><span class="icon-caret-right"></span>新闻列表</a></li>
    </ul>
    <h2><span class="icon-pencil-square-o"></span>探索产品管理</h2>
    <ul>
        <li><a href="<?php echo U('Admin/QuestProduct/select');?>" target="right"><span class="icon-caret-right"></span>内容列表</a></li>
        <li><a href="<?php echo U('Admin/QuestProductType/select');?>" target="right"><span class="icon-caret-right"></span>分类列表</a></li>
    </ul>
    <h2><span class="icon-pencil-square-o"></span>栏目管理</h2>
    <ul>
        <li><a href="<?php echo U('Admin/Column/select');?>" target="right"><span class="icon-caret-right"></span>栏目列表</a></li>
    </ul>
</div>
<script type="text/javascript">
    $(function(){
        $(".leftnav h2").click(function(){
            $(this).next().slideToggle(200);
            $(this).toggleClass("on");
        })
        $(".leftnav ul li a").click(function(){
            $("#a_leader_txt").text($(this).text());
            $(".leftnav ul li a").removeClass("on");
            $(this).addClass("on");
        })
    });
</script>
<ul class="bread">
    <li><a href="<?php echo U('Index/info');?>" target="right" class="icon-home"> 首页</a></li>
    <li><a href="##" id="a_leader_txt">网站信息</a></li>
    <li><b>当前语言：</b><span style="color:red;">中文</php></span>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;切换语言：<a href="##">中文</a> &nbsp;&nbsp;<a href="##">英文</a> </li>
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
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加分类</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="/MyProject/ALK/index.php/Admin/QuestProductType/add" enctype="multipart/form-data">
      <!--<div class="form-group">
        <div class="label">
          <label>名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="productname" data-validate="required:请输入产品名称" />
          <div class="tips"></div>
        </div>
      </div>-->
       <!-- <div class="form-group">
            <div class="label">
                <label>分类：</label>
            </div>
            <div class="field">
                <select name="questproducttypeid" class="input w50">
                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="&lt;!&ndash;{$vo.id}&ndash;&gt;">&lt;!&ndash;{$vo.name}&ndash;&gt;</option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
                <div class="tips">不选择上级分类默认为一级分类</div>
            </div>
        </div>-->

      <div class="form-group">
          <div class="label">
              <label>分类名：</label>
          </div>
          <div class="field">
              <input type="text" class="input w50" name="name" data-validate="required:请输入分类" />
              <div class="tips"></div>
          </div>
      </div>

      <div class="clear"></div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>

</body></html>
</div>
</body>
</html>