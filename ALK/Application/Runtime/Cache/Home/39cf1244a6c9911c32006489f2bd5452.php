<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=7" />
<title>澳力康</title>
<link rel="stylesheet" href="/MyProject/ALK/Public/Home/css/css.css" type="text/css" />
<link rel="stylesheet" href="/MyProject/ALK/Public/Home/css/zzsc.css" type="text/css" />
<link type="text/css" href="/MyProject/ALK/Public/Home/css/flexslider.min.css" rel="stylesheet" />
<link type="text/css" href="/MyProject/ALK/Public/Home/css/lrtk.css" rel="stylesheet" />
<script type="text/javascript" src="/MyProject/ALK/Public/Home/js/jquery.js"></script>
<script type="text/javascript" src="/MyProject/ALK/Public/Home/js/js.js"></script>

<script type="text/javascript" src="/MyProject/ALK/Public/Home/js/jquery.min.js"></script>
<script type="text/javascript" src="/MyProject/ALK/Public/Home/js/jquery.flexslider.min.js"></script>

<script type="text/javascript">

$(window).load(function() {
$('.flexslider').flexslider();
});

$(document).ready(function() {
$('.flexslider').hover(function() {
$('.flex-direction-nav li a.prev').css('display', 'block');
$('.flex-direction-nav li a.next').css('display', 'block');
}, function() {
$('.flex-direction-nav li a.prev').css('display', 'none');
$('.flex-direction-nav li a.next').css('display', 'none');
});

});

</script>
</head>

<body>


<!-------------------------  logo s ---------------------->
<div style="background:url(images/bg01.jpg) no-repeat center">
<div class="logo">
<div class="logoa"><a href="index.html"><img src="/MyProject/ALK/Public/Home/images/logo02.png"/></a></div>
</div>
</div>
<!-------------------------  logo e ---------------------->


<!-------------------------  menu s ---------------------->
<div class="muen_box">
<div class="muen">
<ul>
    <li><a href="<?php echo U('Home/Index/index');?>" class="c">首页<br/><span>Home</span></a></li>
    <li><a href="<?php echo U('Home/Company/company');?>">公司简介<br/><span>Company</span></a></li>
    <li><a href="<?php echo U('Home/News/news');?>">新闻资讯<br/><span>News</span></a></li>
    <li><a href="<?php echo U('Home/QuestProduct/wineculture');?>">探秘产品<br/><span>Quest Product</span></a></li>
    <li><a href="<?php echo U('Home/Product/select');?>">产品展示<br/><span>Products shows</span></a></li>
    <li><a href="<?php echo U('Home/Member/area');?>">商务专区<br/><span>Business Area</span></a></li>
    <li><a href="<?php echo U('Home/JoinsUs/merchants');?>">招商加盟<br/><span>Joins   Us</span></a></li>
    <li><a href="<?php echo U('Home/CustomerService/security');?>">客服服务<br/><span>Customer Service</span></a></li>
    <li><a href="<?php echo U('Home/ContactUs/contactus');?>">联系我们<br/><span>Contact Us</span></a></li>
</ul>
</div>
</div>
<!-------------------------  menu e ---------------------->



<!-------------------------  a_banner s ---------------------->
<div style="background:url(images/bg02.jpg) no-repeat center">
<div class="a_banner">
<div class="a_banner_box"><div class="moduletable-banner">
	<div class="flexslider">
		<ul class="slides">
			<li>
			<a href="#" target="_blank">
			<img src="/MyProject/ALK/Public/Home/images/news07.jpg" width="1003px" height="289" /></a>
			</li>
			<li>
			<a href="#" target="_blank">
			<img src="/MyProject/ALK/Public/Home/images/news071.jpg" width="1003px" height="289"  /></a>
			</li>
			<li>
			<a href="#" target="_blank">
			<img src="/MyProject/ALK/Public/Home/images/news07.jpg" width="1003px" height="289" /></a>
			</li>
			<li>
			<a href="#" target="_blank">
			<img src="/MyProject/ALK/Public/Home/images/news071.jpg" width="1003px" height="289"  /></a>
			</li>
		</ul>
	</div>
</div></div>
</div>
</div>
<!-------------------------  a_banner e ---------------------->


<!-------------------------  a_box s ---------------------->
<div class="a_box">

<!-------------------------  a_l s ---------------------->
<div class="a_l">

<div class="a_la">
<div class="a_la_mian">
<div class="Quest_lat"><div class="a_lat_title"><span>探秘产品</span><br/>Quest Product</div></div>
<div class="a_left1">
<div class="a_left2">
<div class="a_left_top">
    <a href="Quest Product.html" >葡萄酒文化</a>
    <a href="Quest Product1.html">葡萄酒工艺</a>
    <a href="Quest Product2.html" class="c01">橄榄油知识</a>
    <a href="Quest Product3.html">橄榄油作用</a>
</div>
</div>
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>

<div class="a_lb">
<div class="a_lb_main">
<div class="a_lba">联系我们&nbsp;<span>contact us</span></div>
<div class="a_lbb"><div class="a_lbb_title">广西桂林八里街工业园区</div></div>
<div class="a_lbbb"><div class="a_lbb_title">aullican@126.com</div></div>
<div class="a_lbc"><div class="a_lbc_title">0773-2639188<br/>13393639268</div></div>
</div>
</div>


</div>

<!-------------------------  a_l e ---------------------->


<!-------------------------  a_r s ---------------------->
<div class="a_r">

<div class="a_rt">
<div class="a_rt_title">探秘产品<span>/Quest Product</span></div>
</div>

<div class="us">

<div class="us_t"></div>
<div class="us_c">
<div class="Company_main">
<div class="newslist_list">
	<ul>
	<li><a href="#"><?php echo ($arr['content']); ?></a></li>
    </ul>
    <div class="clear"></div>
	<br/>
	</div>
</div>
</div>
<div class="us_d"></div>
<div class="xianshi">每页显示XX条&nbsp;共XX条&nbsp;第X/X页</div>
<div class="about_t_down_fanye">
<p>
<div class="meneame"><span class="disabled"> < </span><a href="#?page=1">1</a><a href="#?page=2">2</a><a href="#?page=3">3</a><a href="#?page=4">4</a><a href="#?page=5">5</a><a href="#?page=6">6</a><a href="#?page=7">7</a>...<a href="#?page=199">199</a><a href="#?page=200">200</a><a href="#?page=2"> > </a></div></p>

</div>
</div>


</div>
<!-------------------------  a_r e ---------------------->

</div>
<!-------------------------  a_box e ---------------------->



<div class="H20"></div>
<!-------------------------  footer s ---------------------->
<div class="footer">
<div class="footer_main">
<div class="H20"></div>
Copyright © 桂林澳力康食品有限责任公司  版权所有<br/>
手机号码：13393639268  电话/传真：0773-2639188  电子邮箱：aullican@126.com<br/>
公司地址：广西桂林八里街工业园区
</div>
</div>
<!-------------------------  footer e ---------------------->


<!--代码开始-->
<div id="chat_f1">
	<div id="chat_f1_main">
		<div id="close"></div>
		<a title="点击咨询在线客服" href="#" class="a_kf"></a>
		<a title="点击咨询售后" href="#" class="a_sh"></a>
	</div>
	<div class="chat_f1_expr">
		<div class="list">
		<a href="#">&nbsp;<img src="/MyProject/ALK/Public/Home/images/kefu01.jpg"/></a>
		<br/>
		<a href="#">&nbsp;<img src="/MyProject/ALK/Public/Home/images/kefu02.jpg"/></a>
		<br/>
		</div>
		<div class="list">
		手机号码：<br/><span style="color:#b40303;">13393639268</span>
		</div>
		<div class="list">	
		电话/传真：<br/><span style="color:#b40303;">0773-2639188</span>
		</div>
	</div>
	<div id="chat_f1_bottom"></div>
</div>
<div id="chat_f2" style="display:none;">我要咨询</div>
<!--代码结束-->
</body>

</html>