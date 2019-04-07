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
    <div class="head-l"><a class="button button-little bg-green" href="<?php echo U('Home/Index/index');?>" target="_blank"><span class="icon-home"></span> 前台首页</a> &nbsp;&nbsp;<a class="button button-little bg-red" href="<?php echo U('Admin/Login/login');?>"><span class="icon-power-off"></span> 退出登录</a> </div>
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
    <title>添加新闻</title>
    <link rel="stylesheet" href="/MyProject/ALK/Public/Admin/css/pintuer.css">
    <link rel="stylesheet" href="/MyProject/ALK/Public/Admin/css/admin.css">
    <script src="/MyProject/ALK/Public/Admin/js/jquery.js"></script>
    <script src="/MyProject/ALK/Public/Admin/js/pintuer.js"></script>
    <!--编辑器第一步-->
    <link rel="stylesheet" href="/MyProject/ALK/Public/Admin/plugins/themes/default/default.css" />
    <script charset="utf-8" src="/MyProject/ALK/Public/Admin/plugins/kindeditor-min.js"></script>
    <script charset="utf-8" src="/MyProject/ALK/Public/Admin/plugins/lang/zh_CN.js"></script>
</head>
<body>
<div class="panel admin-panel margin-top">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加内容</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="/MyProject/ALK/index.php/Admin/News/add" enctype="multipart/form-data">
      <div class="form-group">
          <div class="label">
              <label>新闻图片：</label>
          </div>
          <div class="field">
              <input type="file" id="url1" name="newspath" class="input tips" style="width:25%; float:left;" data-place="right" />
              <div class="tipss">图片尺寸：1920*200</div>
          </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="newstitle" value="" data-validate="required:请输入标题" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
          <div class="label">
              <label>内容：</label>
          </div>
          <div class="field">
              <textarea type="text" style="height: 400px;width: 800px;" class="input w50" name="newscontent" data-validate="required:请输入内容" /></textarea>
              <div class="tips"></div>
          </div>
      </div>
        <!--<div class="form-group">
          <div class="label">
            <label>栏目图片：</label>
          </div>
          <div class="field">
            <input type="text" id="url1" name="banner" class="input tips" style="width:25%; float:left;"  value="" data-toggle="hover" data-place="right" data-image="" />
            <input type="button" class="button bg-blue margin-left" id="image1" value="+ 浏览上传"  style="float:left;">
            <div class="tipss">图片尺寸：1920*200</div>
          </div>
        </div>
         <div class="form-group">
          <div class="label">
            <label>英文标题：</label>
          </div>
          <div class="field">
            <input type="text" class="input w50" name="entitle" value="" />
            <div class="tips"></div>
          </div>
        </div>
        <div class="form-group">
          <div class="label">
            <label>关键字标题：</label>
          </div>
          <div class="field">
            <input type="text" class="input" name="s_title" value="" />
          </div>
        </div>
        <div class="form-group">
          <div class="label">
            <label>栏目关键字：</label>
          </div>
          <div class="field">
            <input type="text" class="input" name="s_keywords" value=""/>
          </div>
        </div>
        <div class="form-group">
          <div class="label">
            <label>关键字描述：</label>
          </div>
          <div class="field">
            <textarea type="text" class="input" name="s_desc" style="height:100px;" ></textarea>
          </div>
       </div>

       <div class="form-group">
          <div class="label">
            <label>显示：</label>
          </div>
          <div class="field">
            <div class="button-group radio">

            <label class="button active">
                 <span class="icon icon-check"></span>
                <input name="isshow" value="1" type="radio" checked="checked">是
            </label>

            <label class="button active"><span class="icon icon-times"></span>
                <input name="isshow" value="0"  type="radio" checked="checked">否
            </label>
             </div>
          </div>
       </div>
        <div class="form-group">
          <div class="label">
            <label>排序：</label>
          </div>
          <div class="field">
            <input type="text" class="input w50" name="sort" value="0"  data-validate="required:,number:排序必须为数字" />
            <div class="tips"></div>
          </div>
        </div>-->
     <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field" style="text-align: center">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
<script type="text/javascript">
    var editor;
    KindEditor.ready(function(K){
        editor = K.create('textarea[name="newscontent"]');
    })
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