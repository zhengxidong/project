<?php /* Smarty version Smarty-3.1.14, created on 2017-03-29 13:05:30
         compiled from ".\template\Address\address_list.html" */ ?>
<?php /*%%SmartyHeaderCode:503258da1c5da2f414-30282825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '757713021b14434e25a1e563ceddbb27b1e54025' => 
    array (
      0 => '.\\template\\Address\\address_list.html',
      1 => 1490792728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '503258da1c5da2f414-30282825',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58da1c5e4e24e7_20290813',
  'variables' => 
  array (
    'arr' => 0,
    'address' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58da1c5e4e24e7_20290813')) {function content_58da1c5e4e24e7_20290813($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<title>我的地址</title>
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
   <div class="left_style">
     <div class="menu_style">
     <div class="user_title">用户中心</div>
     <div class="user_Head">
     <div class="user_portrait">
      <a href="#" title="修改头像" class="btn_link"></a> <img src="<?php echo $_smarty_tpl->tpl_vars['arr']->value['avatar'];?>
">
      <div class="background_img"></div>
      </div>
      <div class="user_name">
       <p><span class="name"><?php echo $_smarty_tpl->tpl_vars['arr']->value['username'];?>
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
          <li> <a href="?c=address&a=select&id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">收货地址</a></li>
          <li><a href="#">跟踪包裹</a></li>
        </ul>
      </dd>
    </dl>
     <dl class="accountSideOption1">
      <dt class="transaction_manage"><em class="icon_2"></em>会员管理</dt>
        <dd>
      <ul>
        <li> <a href="?c=user&a=userinfo&id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">我的资料</a></li>
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
       <li><a href="?c=user&a=security">安全中心</a></li>
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
 <!--右侧样式属性-->
 <div class="right_style">
 <!--地址管理-->
  <div class="user_address_style">
    <div class="title_style"><em></em>地址管理</div> 
   <div class="add_address">
    <span class="name">添加收货地址</span>
    <table cellpadding="0" cellspacing="0" width="100%">
     <tr><td class="label_name">收&nbsp;货&nbsp;&nbsp;人：</td><td><input name="" type="text"  class="add_text" style=" width:100px"/><i>*</i></td></tr>
     <tr><td class="label_name">所在地区：</td><td>
             <select size="1">
              <option value="1">省</option>
            </select>
            <select size="1">
              <option value="2">市</option>
            </select>
            <select size="1">
              <option value="3">县/区</option>
            </select><i>*</i></td></tr>
     <tr><td class="label_name">街道地址：</td><td><textarea name="" cols="" rows="" style=" width:500px; height:100px; margin:5px 0px"></textarea><i>*</i></td></tr>
     <tr><td class="label_name">邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;编：</td><td><input name="" type="text" class="add_text" style=" width:100px"/><i>*</i></td></tr>
     <tr><td class="label_name">手&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;机：</td><td><input name="" type="text" class="add_text" style=" width:200px"/>&nbsp;&nbsp;(选填)</td></tr>
     <tr><td class="label_name">固定电话：</td>
     <td><input name="" type="text" class="add_text" style="width:60px" placeholder="区号"/>-<input name="" type="text" class="add_text" style="width:100px" placeholder="电话号码"/>-<input name="" type="text" class="add_text" style="width:60px" placeholder="分机号"/>&nbsp;&nbsp;(选填)</td></tr>
     <tr class="moren_dz" style="color: #999"><td class="label_name"></td><td><label><input name="" type="checkbox" value="" />设置为默认地址</label></td></tr>
     <tr><td colspan="2" class="center"><input name="" type="submit" value="保存"  class="add_dzbtn"/><input name="" type="reset" value="清空"  class="reset_btn"/></td></tr>
    </table>
   </div>
   <!--用户地址-->
   <div class="address_content">
    <div class="address_prompt">以添加了5条地址，最多保存添加15条地址</div>
    <table cellpadding="0" cellspacing="0" class="user_address" width="100%">
    <thead>
     <tr class="label"><td width="80px;">收货人</td><td width="180px;">所在地</td><td width="220px;">详细地址</td><td width="80px;">邮编</td><td width="120px;">电话手机</td><td width="180px;">发票抬头</td><td width="80px;">操作</td></tr>
     </thead>
     <tbody>
     <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['address']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
      <tr><td><?php echo $_smarty_tpl->tpl_vars['value']->value['consignee'];?>
</td><td>江苏南京雨花台区</td><td>大件路4号软件大厦B栋102室</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value['zipCode'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value['telephone'];?>
</td><td>个人</td><td><a href="?c=address&a=addressEdit&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">修改</a> | <a href="#">删除</a></td></tr>
     <?php } ?>
     </tbody>
    </table>
   </div>  
  </div>
 </div>
 </div>
 </div>
    <script>
            $(document).ready(function(){
              $('.moren_dz input').iCheck({
                checkboxClass: 'icheckbox_flat-green',
                radioClass: 'iradio_flat-green'
              });
            });
            </script>
 <!--网站地图-->
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