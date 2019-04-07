<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>写个人 - 博客管理系统</title>
<link rel="stylesheet" type="text/css" href="/Public/Admin/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/Public/Admin/css/style.css">
<link rel="stylesheet" type="text/css" href="/Public/Admin/css/font-awesome.min.css">
<link rel="apple-touch-icon-precomposed" href="/Public/Admin/images/icon/icon.png">
<link rel="shortcut icon" href="/Public/Admin/images/icon/favicon.ico">
<script src="/Public/Admin/js/jquery-2.1.4.min.js"></script>
<!--[if gte IE 9]>
  <script src="/Public/Admin/js/jquery-1.11.1.min.js" type="text/javascript"></script>
  <script src="/Public/Admin/js/html5shiv.min.js" type="text/javascript"></script>
  <script src="/Public/Admin/js/respond.min.js" type="text/javascript"></script>
  <script src="/Public/Admin/js/selectivizr-min.js" type="text/javascript"></script>
<![endif]-->
    <!--编辑器第一步-->
    <link rel="stylesheet" href="/Public/Plugin/themes/default/default.css" />
    <script charset="utf-8" src="/Public/Plugin/kindeditor-min.js"></script>
    <script charset="utf-8" src="/Public/Plugin/lang/zh-CN.js"></script>
    <!--日期选择器-->
    <script language="javascript" type="text/javascript" src="/Public/Plugin/My97DatePicker/WdatePicker.js"></script>
<!--[if lt IE 9]>
  <script>window.location.href='upgrade-browser.html';</script>
<![endif]-->
</head>

<body class="user-select">
<section class="container-fluid">
  <header>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">切换导航</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="/">YlsatCMS</a> </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <!--加载导航-->
            <ul class="nav navbar-nav navbar-right">
    <li><a href="">消息 <span class="badge"></span></a></li>
    <li><a href="<?php echo U('Admin/Album/select');?>" target="_blank">相册 <span class="badge" ></span></a></li>
    <li><a href="<?php echo U('Home/Index/index');?>" target="_blank">去博客 <span class="badge"></span></a></li>
    <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">admin <span class="caret"></span></a>
        <ul class="dropdown-menu dropdown-menu-left">
            <li><a title="查看或修改个人信息" href="<?php echo U('Admin/About/select');?>">个人信息</a></li>
            <li><a title="查看您的登录记录" data-toggle="modal" data-target="#seeUserLoginlog">登录记录</a></li>
        </ul>
    </li>
    <li><a href="<?php echo U('Admin/Login/logout');?>"><i class="fa fa-sign-out"></i>退出</a></li>
</ul>
          <form action="" method="post" class="navbar-form navbar-right" role="search">
            <div class="input-group">
              <input type="text" class="form-control" autocomplete="off" placeholder="键入关键字搜索" maxlength="15">
              <span class="input-group-btn">
              <button class="btn btn-default" type="submit">搜索</button>
              </span> </div>
          </form>
        </div>
      </div>
    </nav>
  </header>
  <div class="row">
      <!--加载左边导航-->
      <aside class="col-sm-3 col-md-2 col-lg-2 sidebar">
    <ul class="nav nav-sidebar">
        <li class="active"><a href="<?php echo U('Admin/Index/index');?>">报告</a></li>
    </ul>
    <ul class="nav nav-sidebar">
        <li><a href="<?php echo U('Admin/Img/select');?>">封面管理</a></li>
        <li><a href="<?php echo U('Admin/Article/select');?>">文章管理</a></li>
        <li><a href="<?php echo U('Admin/Mood/select');?>">说说管理</a></li>
        <li><a href="<?php echo U('Admin/Tag/select');?>">标签管理</a></li>
        <li><a href="comment.html">评论管理</a></li>
        <li><a href="<?php echo U('Admin/Message/select');?>">留言管理</a></li>
    </ul>
    <ul class="nav nav-sidebar">
        <li><a class="dropdown-toggle" id="otherMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">其他</a>
            <ul class="dropdown-menu" aria-labelledby="otherMenu">
                <li><a href="<?php echo U('Admin/About/aboutblog');?>">关于博客</a></li>
                <li><a href="<?php echo U('Admin/Friendlylink/select');?>">友情链接</a></li>
                <li><a href="<?php echo U('Admin/Process/select');?>">网站更新</a></li>
                <li><a href="<?php echo U('Admin/Visitors/select');?>">访问记录</a></li>
            </ul>
        </li>
    </ul>
    <ul class="nav nav-sidebar">
        <li><a class="dropdown-toggle" id="userMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">资源管理</a>
            <ul class="dropdown-menu" aria-labelledby="userMenu">
                <li><a href="<?php echo U('Admin/Resources/select');?>">资源管理</a></li>
                <li><a href="<?php echo U('Admin/ResourcesType/select');?>">资源分类管理</a></li>
            </ul>
        </li>
        <li><a class="dropdown-toggle" id="settingMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">设置</a>
            <ul class="dropdown-menu" aria-labelledby="settingMenu">
                <li><a href="setting.html">基本设置</a></li>
                <li><a href="readset.html">阅读设置</a></li>
                <li role="separator" class="divider"></li>
                <li><a data-toggle="modal" data-target="#areDeveloping">安全配置</a></li>
            </ul>
        </li>
    </ul>
</aside>

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-lg-10 col-md-offset-2 main" id="main">
      <div class="row">
        <form action="/Admin/About/update" method="post" class="add-article-form">
          <div class="col-md-9">
            <h1 class="page-header">撰写个人信息</h1>
           <!-- <div class="form-group ">
              <label for="article-title" class="sr-only">标题</label>
              <input type="text" id="article-title" name="articletitle" class="form-control" placeholder="在此处输入标题" required autofocus autocomplete="off">
            </div>-->
            <div class="add-article-box">
                <h2 class="add-article-box-title"><span>籍贯</span></h2>
                <div class="add-article-box-content">
                    <input type="text" name="info_nativeplace" value="<?php echo ($arr[0]['info_nativeplace']); ?>" class="form-control" placeholder="请输入籍贯" autocomplete="off">
                    <span class="prompt-text">写火星也可以。</span> </div>
            </div>
            <div class="add-article-box">
                <h2 class="add-article-box-title"><span>现居地</span></h2>
                <div class="add-article-box-content">
                    <input type="text" name="info_nowliving" value="<?php echo ($arr[0]['info_nowliving']); ?>" class="form-control" placeholder="请输入现居地" autocomplete="off">
                    <span class="prompt-text">写本人的现居地。</span> </div>
            </div>
            <div class="add-article-box">
                <h2 class="add-article-box-title"><span>职业</span></h2>
                <div class="add-article-box-content">
                    <input type="text" name="info_career" value="<?php echo ($arr[0]['info_career']); ?>" class="form-control" placeholder="请输入职业" autocomplete="off">
                    <span class="prompt-text">可填可不填。</span> </div>
            </div>
            <div class="add-article-box">
                <h2 class="add-article-box-title"><span>喜欢的书</span></h2>
                <div class="add-article-box-content">
                    <input type="text" name="info_likebook" value="<?php echo ($arr[0]['info_likebook']); ?>" class="form-control" placeholder="请输入书籍" autocomplete="off">
                    <span class="prompt-text">写几本有艺术性，有意义的书籍</span> </div>
            </div>
            <div class="add-article-box">
                <h2 class="add-article-box-title"><span>喜欢的音乐</span></h2>
                <div class="add-article-box-content">
                    <input type="text" name="info_likemusic" value="<?php echo ($arr[0]['info_likemusic']); ?>" class="form-control" placeholder="请输入音乐" autocomplete="off">
                    <span class="prompt-text">填写自己喜欢的音乐。</span> </div>
            </div>
            <div class="form-group">
              <label for="article-content" class="sr-only">个人描述</label>
              <textarea id="article-content" name="info_content" style="width: 800px;height: 400px;"><?php echo ($arr[0]['info_content']); ?></textarea>
            </div>
              <input type="hidden" name="id" value="<?php echo ($arr[0]['id']); ?>"/>
            <!--<div class="add-article-box">
              <h2 class="add-article-box-title"><span>关键字</span></h2>
              <div class="add-article-box-content">
              	<input type="text" class="form-control" placeholder="请输入关键字" name="keywords" autocomplete="off">
                <span class="prompt-text">多个标签请用英文逗号,隔开。</span>
              </div>
            </div>-->
            <!--<div class="add-article-box">
              <h2 class="add-article-box-title"><span>描述</span></h2>
              <div class="add-article-box-content">
              	<textarea class="form-control" name="description" autocomplete="off"></textarea>
                <span class="prompt-text">描述是可选的手工创建的内容总结，并可以在网页描述中使用</span>
              </div>
            </div>-->
          </div>
          <div class="col-md-3">
            <h1 class="page-header">操作</h1>
            <!--<div class="add-article-box">
              <h2 class="add-article-box-title"><span>栏目</span></h2>
              <div class="add-article-box-content">
                <ul class="category-list">
                  <li>
                    <label>
                      <input name="category" type="radio" value="1" checked>
                      这是栏目 <em class="hidden-md">( 栏目ID: <span>1</span> )</em></label>
                  </li>
                  <li>
                    <label>
                      <input name="category" type="radio" value="2">
                      这是栏目 <em class="hidden-md">( 栏目ID: <span>2</span> )</em></label>
                  </li>
                  <li>
                    <label>
                      <input name="category" type="radio" value="3">
                      这是栏目 <em class="hidden-md">( 栏目ID: <span>3</span> )</em></label>
                  </li>
                  <li>
                    <label>
                      <input name="category" type="radio" value="4">
                      这是栏目 <em class="hidden-md">( 栏目ID: <span>4</span> )</em></label>
                  </li>
                  <li>
                    <label>
                      <input name="category" type="radio" value="5">
                      这是栏目 <em class="hidden-md">( 栏目ID: <span>5</span> )</em></label>
                  </li>
                </ul>
              </div>
            </div>-->

            <div class="add-article-box">
              <h2 class="add-article-box-title"><span>网名</span></h2>
              <div class="add-article-box-content">
                <input type="text" class="form-control" placeholder="输入网名" name="info_nickname" value="<?php echo ($arr[0]['info_nickname']); ?>" autocomplete="off">
                <span class="prompt-text">写个性的网名</span> </div>
            </div>
            <div class="add-article-box">
              <h2 class="add-article-box-title"><span>名字</span></h2>
              <div class="add-article-box-content">
                <input type="text" class="form-control" placeholder="请输入名字"  name="info_name" value="<?php echo ($arr[0]['info_name']); ?>" autocomplete="off">
              </div>
            </div>
            <div class="add-article-box">
                <h2 class="add-article-box-title"><span>生日</span></h2>
                <div class="add-article-box-content">
                    <input type="text" class="form-control" placeholder="请输入生日"  name="info_birthday" value="<?php echo ($arr[0]['info_birthday']); ?>" onClick="WdatePicker()" autocomplete="off">
                </div>
            </div>
            <div class="add-article-box">
              <h2 class="add-article-box-title"><span>发布</span></h2>
              <!--<div class="add-article-box-content">
              	<p><label>状态：</label><span class="article-status-display">未发布</span></p>
                <p><label>公开度：</label><input type="radio" name="ispublic" value="0" checked/>公开 <input type="radio" name="ispublic" value="1" />加密</p>
                <p><label>发布于：</label><span class="article-time-display"><input style="border: none;" type="datetime" id="time" name="articletime" value="" /></span></p>
              </div>-->
              <div class="add-article-box-footer">
                <button class="btn btn-primary" type="submit" name="submit">更新</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!--个人信息模态框-->
<div class="modal fade" id="seeUserInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <form action="" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" >个人信息</h4>
        </div>
        <div class="modal-body">
          <table class="table" style="margin-bottom:0px;">
            <thead>
              <tr> </tr>
            </thead>
            <tbody>
              <tr>
                <td wdith="20%">姓名:</td>
                <td width="80%"><input type="text" value="王雨" class="form-control" name="truename" maxlength="10" autocomplete="off" /></td>
              </tr>
              <tr>
                <td wdith="20%">用户名:</td>
                <td width="80%"><input type="text" value="admin" class="form-control" name="username" maxlength="10" autocomplete="off" /></td>
              </tr>
              <tr>
                <td wdith="20%">电话:</td>
                <td width="80%"><input type="text" value="18538078281" class="form-control" name="usertel" maxlength="13" autocomplete="off" /></td>
              </tr>
              <tr>
                <td wdith="20%">旧密码:</td>
                <td width="80%"><input type="password" class="form-control" name="old_password" maxlength="18" autocomplete="off" /></td>
              </tr>
              <tr>
                <td wdith="20%">新密码:</td>
                <td width="80%"><input type="password" class="form-control" name="password" maxlength="18" autocomplete="off" /></td>
              </tr>
              <tr>
                <td wdith="20%">确认密码:</td>
                <td width="80%"><input type="password" class="form-control" name="new_password" maxlength="18" autocomplete="off" /></td>
              </tr>
            </tbody>
            <tfoot>
              <tr></tr>
            </tfoot>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
          <button type="submit" class="btn btn-primary">提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
<!--个人登录记录模态框-->
<div class="modal fade" id="seeUserLoginlog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" >登录记录</h4>
      </div>
      <div class="modal-body">
        <table class="table" style="margin-bottom:0px;">
          <thead>
            <tr>
              <th>登录IP</th>
              <th>登录时间</th>
              <th>状态</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>::1:55570</td>
              <td>2016-01-08 15:50:28</td>
              <td>成功</td>
            </tr>
            <tr>
              <td>::1:64377</td>
              <td>2016-01-08 10:27:44</td>
              <td>成功</td>
            </tr>
            <tr>
              <td>::1:64027</td>
              <td>2016-01-08 10:19:25</td>
              <td>成功</td>
            </tr>
            <tr>
              <td>::1:57081</td>
              <td>2016-01-06 10:35:12</td>
              <td>成功</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">朕已阅</button>
      </div>
    </div>
  </div>
</div>
<!--微信二维码模态框-->
<div class="modal fade user-select" id="WeChat" tabindex="-1" role="dialog" aria-labelledby="WeChatModalLabel">
  <div class="modal-dialog" role="document" style="margin-top:120px;max-width:280px;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="WeChatModalLabel" style="cursor:default;">微信扫一扫</h4>
      </div>
      <div class="modal-body" style="text-align:center"> <img src="images/weixin.jpg" alt="" style="cursor:pointer"/> </div>
    </div>
  </div>
</div>
<!--提示模态框-->
<div class="modal fade user-select" id="areDeveloping" tabindex="-1" role="dialog" aria-labelledby="areDevelopingModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="areDevelopingModalLabel" style="cursor:default;">该功能正在日以继夜的开发中…</h4>
      </div>
      <div class="modal-body"> <img src="images/baoman/baoman_01.gif" alt="深思熟虑" />
        <p style="padding:15px 15px 15px 100px; position:absolute; top:15px; cursor:default;">很抱歉，程序猿正在日以继夜的开发此功能，本程序将会在以后的版本中持续完善！</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">朕已阅</button>
      </div>
    </div>
  </div>
</div>
<!--右键菜单列表-->
<div id="rightClickMenu">
  <ul class="list-group rightClickMenuList">
    <li class="list-group-item disabled">欢迎访问异清轩博客</li>
    <li class="list-group-item"><span>IP：</span>172.16.10.129</li>
    <li class="list-group-item"><span>地址：</span>河南省郑州市</li>
    <li class="list-group-item"><span>系统：</span>Windows10 </li>
    <li class="list-group-item"><span>浏览器：</span>Chrome47</li>
  </ul>
</div>
<script src="/Public/Admin/js/bootstrap.min.js"></script> 
<script src="/Public/Admin/js/admin-scripts.js"></script>
<!--<script src="/Public/Admin/lib/ueditor/ueditor.config.js"></script>
<script src="/Public/Admin/lib/ueditor/ueditor.all.min.js"> </script>
<script src="/Public/Admin/lib/ueditor/lang/zh-cn/zh-cn.js"></script>-->
<script id="uploadEditor" type="text/plain" style="display:none;"></script>
<script type="text/javascript">
    var editor;
    KindEditor.ready(function(K) {
        editor = K.create('textarea[name="info_content"]');
    });
    /*$(function(){
        var mydate = new Date();
        var t = mydate.getFullYear()+"-";
         t +=(mydate.getMonth()+1)+"-";
         t +=mydate.getDate()+"";
         t +=mydate.getHours()+":";
         t +=mydate.getMinutes()+":";
        t +=mydate.getSeconds();
        $("#time").val(t);
    })*/
</script>
</body>
</html>