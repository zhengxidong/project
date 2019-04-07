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
<div style="background:url(/MyProject/ALK/Public/Home/images/bg01.jpg) no-repeat center">
<div class="logo">
<div class="logoa"><a href="../index.html"><img src="/MyProject/ALK/Public/Home/images/logo02.png"/></a></div>
</div>
</div>
<!-------------------------  logo e ---------------------->


<!-------------------------  menu s ---------------------->
<div class="muen_box">
<div class="muen">
<ul>
    <li><a href="<?php echo U('Home/Index/index');?>" >首页<br/><span>Home</span></a></li>
    <li><a href="<?php echo U('Home/Company/company');?>">公司简介<br/><span>Company</span></a></li>
    <li><a href="<?php echo U('Home/News/news');?>">新闻资讯<br/><span>News</span></a></li>
    <li><a href="<?php echo U('Home/QuestProduct/wineculture');?>">探秘产品<br/><span>Quest Product</span></a></li>
    <li><a href="<?php echo U('Home/Product/select');?>" class="c">产品展示<br/><span>Products shows</span></a></li>
    <li><a href="<?php echo U('Home/Member/area');?>">商务专区<br/><span>Business Area</span></a></li>
    <li><a href="<?php echo U('Home/JoinsUs/merchants');?>">招商加盟<br/><span>Joins   Us</span></a></li>
    <li><a href="<?php echo U('Home/CustomerService/security');?>">客服服务<br/><span>Customer Service</span></a></li>
    <li><a href="<?php echo U('Home/ContactUs/contactus');?>">联系我们<br/><span>Contact Us</span></a></li>
</ul>
</div>
</div>
<!-------------------------  menu e ---------------------->



<!-------------------------  a_banner s ---------------------->
<div style="background:url(/MyProject/ALK/Public/Home/images/bg02.jpg) no-repeat center">
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
<div class="a_lat"><div class="a_lat_title"><span>产品展示</span><br/>products shows</div></div>
<div class="a_left1">
<div class="a_left2">
<div class="a_left_top"><a href="Products%20shows.html" class="c01">进口红葡萄酒</a><a href="Products shows1.html">进口橄榄油</a> <a href="Products shows2.html">精品展示</a> <a href="Products shows3.html">其他产品</a></div>
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
<div class="a_rt_title">产品展示<span>/ Products shows</span></div>
</div>

<div class="products_main">

<div class="products_maint">
<div class="products_maintl"><div class="products_maintll"><img src="/MyProject/ALK/Public/Upload/Product/<?php echo ($arr['picpath']); ?>" width="80" height="234"/></div></div>
<div class="products_maintr">
<div class="products_maintrt"><?php echo ($arr['productname']); ?></div>
<div class="products_maintrd"><table width="328" border="1">
  <tr>
    <td>度数：<?php echo ($arr['degree']); ?>vol</td>
  </tr>
  <tr>
    <td>年份：<?php echo ($arr['years']); ?>年</td>
  </tr>
  <tr>
    <td>产区：<?php echo ($arr['producingareas']); ?></td>
  </tr>
  <tr>
    <td>等级：<?php echo ($arr['grade']); ?></td>
  </tr>
  <tr>
    <td>零售价：￥<span style="color:#a10033; font-size:18px;"><?php echo ($arr['price']); ?></span></td>
  </tr>
</table>
</div>
</div>
</div>

<div class="products_maind">
<div class="products_maindt"><div class="products_maindt_title">>>酒品详细信息</div></div>
<div class="products_maindd">
葡萄品种：黑皮诺、巴拉巴、赤珠霞<br/>
饮食搭配：可以搭配红肉、烧烤、香肠及奶酪饮用<br/>
酒品特征：因为长时间的浸皮，本酒为清澈靓丽的宝石红，带紫色色调，以及完美的光泽。多重成熟果香变幻—洋李、桑葚、醋栗及糖渍水果，入口给人一种轻柔、优雅、舒适、别致的感觉，以及带有一种愉悦的橡木味（因为法国和中欧栎木桶的原因），后味以脂香味和白胡椒味为主，绵长给人以无限回味。
    <?php echo ($arr['detail']); ?>
</div>
</div>

</div>

<div class="clear"></div>
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