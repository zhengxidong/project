<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>郑锡东个人博客网站―一个站在后端开发之路的男技术员个人博客网站</title>
<meta name="keywords" content="个人博客,郑锡东个人博客,个人博客模板,郑锡东" />
<meta name="description" content="郑锡东个人博客，是一个站在web前端设计之路的程序员个人网站，提供个人博客模板免费资源下载的个人原创网站。" />
<link rel="icon" href="/Public/Home/images/favicon.ico" type="image/icon"/>
<link href="/Public/Home/css/base.css" rel="stylesheet">
<!-- <link href="/Public/Home/css/mood.css" rel="stylesheet"> -->
<link rel="stylesheet" href="/Public/Home/css/xinqing.css">
<!--[if lt IE 9]>
<script src="/Public/Home/js/modernizr.js"></script>
<![endif]-->
</head>
<body>
<header>
  <div id="logo"><a href="/"></a></div>
    <!--加载导航-->
    <nav class="topnav" id="topnav"><a href="<?php echo U('Home/Index/index');?>"><span>渞頁</span><span class="en">Protal</span></a><a href="<?php echo U('Home/About/about');?>"><span>關於我</span><span class="en">About</span></a><a href="<?php echo U('Home/NewList/newlist');?>"><span>蔓生活</span><span class="en">Life</span></a><a href="<?php echo U('Home/Mood/select');?>"><span>碎言碎語</span><span class="en">Doing</span></a><a href="<?php echo U('Home/Share/share');?>"><span>摸板汾享</span><span class="en">Share</span></a><a href="<?php echo U('Home/Knowledge/knowledge');?>"><span>學海無涯</span><span class="en">Learn</span></a><a href="<?php echo U('Home/Message/add');?>"><span>留言版</span><span class="en">Gustbook</span></a></nav>

</header>
<div class="moodlist">
  <h1 class="t_nav"><span>删删写写，回回忆忆，虽无法行云流水，却也可碎言碎语。</span><a href="/" class="n2">心情</a></h1>
  <div class="bloglist">
    <div class="box">
    <ul class="event_year">
      <li class="current"><label for="2017">2017</label></li>
      <li><label for="2013">2013</label></li>

    </ul>
    
    <ul class="event_list">
      <div>
          <?php echo (sjz($dateres)); ?>
      </div>
    </ul>
  
    <div class="clearfix"></div>
    
  </div>
  </div>
  <div class="page"><a title="Total record"><b>41</b></a><b>1</b><a href="/news/s/index_2.html">2</a><a href="/news/s/index_2.html">&gt;</a><a href="/news/s/index_2.html">&gt;&gt;</a></div>
</div>
<!--加载底部-->
<!-- 底部 -->
<footer>
    <p>CopyRight <i class="fa fa-copyright"></i> 2016版权所有 ICP备案号：<a>粤ICP备17046346号</a></p>
</footer>

<script src="/Public/Home/js/silder.js"></script>
<script src="/Public/Home/js/jquery.min_v1.0.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
  $('label').click(function(){
    $('.event_year>li').removeClass('current');
    $(this).parent('li').addClass('current');
    var year = $(this).attr('for');
    $('#'+year).parent().prevAll('div').slideUp(800);
    $('#'+year).parent().slideDown(800).nextAll('div').slideDown(800);
  });
});
</script>
</body>
</html>