<?php /* Smarty version Smarty-3.1.14, created on 2017-03-29 13:06:45
         compiled from ".\template\User\user_info2.html" */ ?>
<?php /*%%SmartyHeaderCode:3228058dbaf692acbb1-88243912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98b667cdc929a4f1ac9c4c147f2175c80ef4cc10' => 
    array (
      0 => '.\\template\\User\\user_info2.html',
      1 => 1490792802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3228058dbaf692acbb1-88243912',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58dbaf693d90b9_96948484',
  'variables' => 
  array (
    'arr' => 0,
    'use' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58dbaf693d90b9_96948484')) {function content_58dbaf693d90b9_96948484($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="./public/css/common.css" rel="stylesheet" type="text/css" />
<link href="./public/css/style.css" rel="stylesheet" type="text/css" />
<link href="./public/css/user_style.css" rel="stylesheet" type="text/css" />
<link href="./public/skins/all.css" rel="stylesheet" type="text/css" />
<script src="./public/js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="./public/js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
<script src="./public/js/common_js.js" type="text/javascript"></script>
<script src="./public/js/footer.js" type="text/javascript"></script>
<script src="./public/layer/layer.js" type="text/javascript"></script>
<script src="./public/js/iCheck.js" type="text/javascript"></script>
<script src="./public/js/custom.js" type="text/javascript"></script>
<!--my97时间选择器-->
<script language="javascript" type="text/javascript" src="./public/js/My97DatePicker/WdatePicker.js"></script>
<title>我的资料</title>
</head>

<body>
<head>
 <div id="header_top">
  <div id="top">
    <div class="Inside_pages">
        <?php if ($_smarty_tpl->tpl_vars['arr']->value==0){?>
        <div class="Collection"><a href="?c=login&a=login" class="green">请登录</a> <a href="?c=index&a=register" class="green">免费注册</a></div>
        <?php }else{ ?>
        <div class="Collection"><a href="#" class="green">欢迎，<?php echo $_smarty_tpl->tpl_vars['arr']->value['username'];?>
</a><a href="?c=login&a=loginOut">退出</a></div>
        <?php }?>
	<div class="hd_top_manu clearfix">
	  <ul class="clearfix">
	   <li class="hd_menu_tit" data-addclass="hd_menu_hover"> <a href="#">个人中心</a> </li>
	   <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">消息</a></li>
       <!--<li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">商品分类</a></li>
        <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">我的购物车<b>(23)</b></a></li>	-->
	  </ul>
	</div>
    </div>
  </div>
  <div id="header"  class="header page_style">
  <div class="logo"><a href="index.html"><img src="./public/images/logo.png" /></a></div>
  <!--结束图层-->
  <div class="Search">
        <div class="search_list">
            <ul>
                <li class="current"><a href="#">产品</a></li>
            </ul>
        </div>
        <div class="clear search_cur">
           <input name="searchName" id="searchName" class="search_box" onkeydown="keyDownSearch()" type="text">
           <input name="" type="submit" value="搜 索"  class="Search_btn"/>
        </div>
        <div class="clear hotword">热门搜索词：香醋&nbsp;&nbsp;&nbsp;茶叶&nbsp;&nbsp;&nbsp;草莓&nbsp;&nbsp;&nbsp;葡萄&nbsp;&nbsp;&nbsp;菜油</div>
</div>
 <!--购物车样式-->
 <div class="hd_Shopping_list" id="Shopping_list">
   <div class="s_cart"><a href="#">我的购物车</a> <i class="ci-right">&gt;</i><i class="ci-count" id="shopping-amount">0</i></div>
   <div class="dorpdown-layer">
    <div class="spacer"></div>
	 <!--<div class="prompt"></div><div class="nogoods"><b></b>购物车中还没有商品，赶紧选购吧！</div>-->
	 <ul class="p_s_list">	   
		<li>
		    <div class="img"><img src="images/tianma.png"></div>
		    <div class="content"><p class="name"><a href="#">产品名称</a></p><p>颜色分类:紫花8255尺码:XL</p></div>
			<div class="Operations">
			<p class="Price">￥55.00</p>
			<p><a href="#">删除</a></p></div>
		  </li>
		</ul>		
	 <div class="Shopping_style">
	 <div class="p-total">共<b>1</b>件商品　共计<strong>￥ 515.00</strong></div>
	  <a href="Shop_cart.html" title="去购物车结算" id="btn-payforgoods" class="Shopping">去购物车结算</a>
	 </div>	 
   </div>
 </div>
</div>
<!--菜单栏-->
	<div class="Navigation" id="Navigation">
		 <ul class="Navigation_name">
			<li><a href="?c=index&a=index">首页</a></li>
			<li><a href="#">你身边的超市</a></li>
			<li><a href="#">预售专区</a><em class="hot_icon"></em></li>
			<li><a href="products_list.html">商城</a></li>
			<li><a href="#">半小时生活圈</a></li>
			<li><a href="#">好评商户</a></li>
			<li><a href="#">热销活动</a></li>
			<li><a href="Brands.html">联系我们</a></li>
		 </ul>			 
		</div>
	<script>$("#Navigation").slide({titCell:".Navigation_name li",trigger:"click"});</script>
    </div>
</head>
<!--用户中心样式-->
<div class="user_style clearfix">
 <div class="user_center clearfix">
   <!--左侧样式-->
    <div class="left_style">
     <div class="menu_style">
     <div class="user_title">个人中心</div>
     <div class="user_Head">
     <div class="user_portrait">
      <a href="#" title="修改头像" class="btn_link"></a>
         <?php if ($_smarty_tpl->tpl_vars['use']->value[0]['avatar']==''){?>
         <?php }else{ ?>
         <img src="<?php echo $_smarty_tpl->tpl_vars['use']->value[0]['avatar'];?>
">
         <?php }?>
      <div class="background_img"></div>
      </div>
      <div class="user_name">
       <p><span class="name"><?php echo $_smarty_tpl->tpl_vars['use']->value[0]['username'];?>
</span><a href="#">[修改密码]</a></p>
       <p>访问时间：2016-1-21 10:23</p>
       </div>           
     </div>
     <div class="sideMen">
     <!--菜单列表图层-->
     <dl class="accountSideOption1">
      <dt class="transaction_manage"><em class="icon_1"></em>订单管理</dt>
      <dd>
        <ul>
          <li> <a href="?c=order&a=myorder&id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">我的订单</a></li>
          <li> <a href="?c=address&a=select">收货地址</a></li>
          <li><a href="#">跟踪包裹</a></li>
        </ul>
      </dd>
    </dl>
     <dl class="accountSideOption1">
      <dt class="transaction_manage"><em class="icon_2"></em>会员管理</dt>
        <dd>
      <ul>
        <li> <a href="?c=user&userinfo&id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
"> 我的资料</a></li>
        <li> <a href="用户中心-我的收藏.html"> 我的收藏</a></li>
        <li> <a href="#"> 我的留言</a></li>
        <li><a href="#"> 我的评论</a></li>
      </ul>
    </dd>
    </dl>
     <dl class="accountSideOption1">
      <dt class="transaction_manage"><em class="icon_3"></em>账户与安全</dt>
      <dd>
       <ul>
       <li><a href="?c=user&a=security">安全与中心</a></li>
       <li><a href="用户中心-账户管理.html">账户余额</a></li>
       <li><a href="用户中心-消费记录.html">消费记录</a></li>     
       <li><a href="#">资金管理</a></li>
      </ul>
     </dd>
    </dl>
    </div>
      <script>jQuery(".sideMen").slide({titCell:"dt", targetCell:"dd",trigger:"click",defaultIndex:0,effect:"slideDown",delayTime:300,returnDefault:true});</script>
   </div>
 </div>
 <!--右侧样式-->
   <div class="right_style">
 <!--消费记录样式-->
  <div class="user_address_style">
    <div class="title_style"><em></em>我的资料</div>
      <!--用户信息样式-->
     <!--个人信息-->
      <form action="?c=user&a=updateinfo" method="post" enctype="multipart/form-data">
      <div class="Personal_info" id="Personal">
         <ul class="xinxi">
         <li><label>用户名：</label>  <span><input name="username" type="text" value="<?php echo $_smarty_tpl->tpl_vars['use']->value[0]['username'];?>
"  class="text"  disabled="disabled"/></span></li>
         <li><label>真实姓名：</label>  <span><input name="actualname" type="text" value="<?php echo $_smarty_tpl->tpl_vars['use']->value[0]['actualname'];?>
"  class="text"  disabled="disabled"/></span></li>
        <!-- <li><label>出身日期：</label> <span class="time"><input name="" type="text" value="&lt;!&ndash;{$use[0]['birthday']}&ndash;&gt;"   class="text" onClick="WdatePicker()" /></span>-->

         <li><label>生日：</label> <span class="time text" disabled="disabled"><?php echo $_smarty_tpl->tpl_vars['use']->value[0]['birthday'];?>
</span>
             <div class="add_time">
                 <input name="birthday" type="text" value="<?php echo $_smarty_tpl->tpl_vars['use']->value[0]['birthday'];?>
"   class="text" onClick="WdatePicker()" />
                 <!--<select name=""></select><select name=""></select><select name=""></select>-->
             </div>
         </li>

          <li><label>性别：</label> <span class="sex"><?php if ($_smarty_tpl->tpl_vars['use']->value[0]['sex']==1){?>男<?php }else{ ?>女<?php }?></span>
          <div class="add_sex">
          <input type="radio" name="sex" value="0" checked="checked">
                    保密&nbsp;&nbsp;
                    <input type="radio" name="sex" value="1">
                    男&nbsp;&nbsp;
                    <input type="radio" name="sex" value="2">
                  女&nbsp;&nbsp;</div></li>
          <li><label>电子邮箱：</label>  <span><input name="email" type="text" value="<?php echo $_smarty_tpl->tpl_vars['use']->value[0]['email'];?>
"  class="text"  disabled="disabled"/></span></li>
         <!-- <li><label>用户QQ：</label>  <span><input name="" type="text" value="455656565"  class="text"  disabled="disabled"/></span></li>   -->
          <li><label>移动电话：</label>  <span><input name="phone" type="text" value="<?php echo $_smarty_tpl->tpl_vars['use']->value[0]['phone'];?>
"  class="text"  disabled="disabled"/></span></li>
          <!--<li><label>固定电话：</label> <span><input name="" type="text" value="455656565"  class="text"  disabled="disabled"/></span></li>-->
          <li><label></label> <span><input name="id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['use']->value[0]['id'];?>
"  class="text"  disabled="disabled"/></span></li>
          <div class="bottom">
              <input name="" id="tj" value="修改资料" style="text-align: center;" class="modify"/>
              <input type="submit" value="确认修改"  class="confirm text"  disabled="disabled"/>
          </div>
         </ul>
          <script>
              $("#").cilck(function(){
                  $("#fsphone").removeAttr("disabled");
              })
          </script>
         <ul class="Head_portrait">
          <li class="User_avatar">
              <?php if ($_smarty_tpl->tpl_vars['use']->value[0]['avatar']==''){?>
              <?php }else{ ?>
              <img src="<?php echo $_smarty_tpl->tpl_vars['use']->value[0]['avatar'];?>
" width="202" height="202"/>
              <?php }?>
          </li>
          <li><span ><input name="wj[]" type="file" value="上传头像"  class="submit text" disabled="disabled"/></span></li>
         </ul>
      </div>
      </form>
   </div>

  </div>
 </div>
 </div>
  <div class="fri-link-bg clearfix">
    <div class="fri-link">
        <div class="logo left margin-r20"><img src="./public/images/fo-logo.jpg" width="152" height="81" /></div>
        <div class="left"><img src="./public/images/qd.jpg" width="90"  height="90" />
            <p>扫描下载APP</p>
        </div>
       <div class="">
    <dl>
	 <dt>新手上路</dt>
	 <dd><a href="#">售后流程</a></dd>
     <dd><a href="#">购物流程</a></dd>
     <dd><a href="#">订购方式</a> </dd>
     <dd><a href="#">隐私声明 </a></dd>
     <dd><a href="#">推荐分享说明 </a></dd>
	</dl>
	<dl>
	 <dt>配送与支付</dt>
	 <dd><a href="#">保险需求测试</a></dd>
     <dd><a href="#">专题及活动</a></dd>
     <dd><a href="#">挑选保险产品</a> </dd>
     <dd><a href="#">常见问题 </a></dd>
	</dl>
	<dl>
	 <dt>售后保障</dt>
	 <dd><a href="#">保险需求测试</a></dd>
     <dd><a href="#">专题及活动</a></dd>
     <dd><a href="#">挑选保险产品</a> </dd>
     <dd><a href="#">常见问题 </a></dd>
	</dl>
	<dl>
	 <dt>支付方式</dt>
	 <dd><a href="#">保险需求测试</a></dd>
     <dd><a href="#">专题及活动</a></dd>
     <dd><a href="#">挑选保险产品</a> </dd>
     <dd><a href="#">常见问题 </a></dd>
	</dl>	
    <dl>
	 <dt>帮助中心</dt>
	 <dd><a href="#">保险需求测试</a></dd>
     <dd><a href="#">专题及活动</a></dd>
     <dd><a href="#">挑选保险产品</a> </dd>
     <dd><a href="#">常见问题 </a></dd>
	</dl>
     <dl>
	 <dt>帮助中心</dt>
	 <dd><a href="#">保险需求测试</a></dd>
     <dd><a href="#">专题及活动</a></dd>
     <dd><a href="#">挑选保险产品</a> </dd>
     <dd><a href="#">常见问题 </a></dd>
	</dl>	   
   </div>
    </div>
</div>
<!--网站地图END-->
<!--网站页脚-->
<div class="copyright">
    <div class="copyright-bg">
        <div class="hotline">为生活充电在线 <span>招商热线：400-6067733</span> 客服热线：0571-87361599</div>
        <div class="hotline co-ph">
            <p>版权所有Copyright 2016-2017 伊美人</p>
            <p>京ICP备070359号 不良信息举报：4006561155</p>
            <p>总机电话：0571-87361534/194/195/196 客服电话：0571-87361599 传 真：86 519-85125379
            <p> E-mail:css@meili-inc.com</p>
        </div>
    </div>
</div>
</body>
</html>
<?php }} ?>