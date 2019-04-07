<?php /* Smarty version Smarty-3.1.14, created on 2017-03-31 06:05:15
         compiled from ".\template\User\security_center.html" */ ?>
<?php /*%%SmartyHeaderCode:2679958da6e7ddf9199-20972818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd44c2a2b39fda9315a219af285a16881c7e80143' => 
    array (
      0 => '.\\template\\User\\security_center.html',
      1 => 1490793599,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2679958da6e7ddf9199-20972818',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58da6e7e046b80_19458267',
  'variables' => 
  array (
    'arr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58da6e7e046b80_19458267')) {function content_58da6e7e046b80_19458267($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_tihuan')) include 'D:\\wamp\\www\\MyProject\\YiMeiRen-xiaozu\\libs\\plugins\\modifier.tihuan.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<script src="./public/js/iCheck.js" type="text/javascript"></script>
<script src="./public/js/custom.js" type="text/javascript"></script>
<script src="./public/layer/layer.js" type="text/javascript"></script>
<title>账户管理-安全中心</title>
    <style>
        .m-safety-list {
            list-style: none;
            margin:0;
            padding: 0;
        }
        .m-safety-list li {
            position: relative;
            padding: 25px 60px;
        }
        /*登录密码*/
        .i-safety-lock {
            display: inline-block;
            *display: inline;
            *zoom: 1;
            vertical-align: top;
            background-image: url(./public/images/sprite2.png);
            background-position: -90px -45px;
            width: 40px;
            height: 40px;
        }
        em, i {
            font-style: normal;
        }
        .m-msg-box {
            display: inline-block;
            *display: inline;
            *zoom: 1;
            padding-left: 22px;
            vertical-align: middle;
        }
        .u-msg-title {
            color: #333;
            font-size: 16px;
            font-weight: 700;
        }
        .u-msg-content {
            color: #666;
        }
        .u-safety-btn {
            position: absolute;
            right: 70px;
            top: 33px;
        }
        .ui-btn-secondary, .ui-btn-secondary:active, .ui-btn-secondary:hover, .ui-btn2, .ui-btn2:active, .ui-btn2:hover {
            color: #e00078;
        }
        .ui-btn-secondary, .ui-btn2 {
            background-color: #fcedf2;
            border: 1px solid #ffbee0;
        }
        .ui-btn-small {
            min-width: 48px;
            _width: 48px;
            padding: 0 11px;
            font: 12px/22px tahoma,arial,Hiragino Sans GB,WenQuanYi Micro Hei,'\5FAE\8F6F\96C5\9ED1','\5B8B\4F53',sans-serif;
            _line-height: 24px;
            height: 22px;
        }
        .ui-btn-big, .ui-btn-large, .ui-btn-medium, .ui-btn-mini, .ui-btn-nor, .ui-btn-small {
            display: inline-block;
            border-radius: 3px;
            text-decoration: none;
            text-align: center;
            vertical-align: top;
            -webkit-transition: .3s;
            transition: .3s;
            cursor: pointer;
            *white-space: nowrap;
            _overflow-y: hidden;
        }
        /*支付密码*/
        .z-wallete-done {
            background-image: url(./public/images/sprite2.png);
            background-position: -135px -90px;
            width: 40px;
            height: 40px;
        }
        .i-safety-wallet {
            display: inline-block;
            *display: inline;
            *zoom: 1;
            vertical-align: top;
            background-image: url(./public/images/sprite2.png);
            background-position: 0 -135px;
            width: 40px;
            height: 40px;
        }
        .u-forget-password {
            position: absolute;
            right: 62px;
            top: 60px;
            color: #1d94d1;
        }
        /*绑定手机*/
        .z-iphone-done {
            background-image: url(./public/images/sprite2.png);
            background-position: -45px -45px;
            width: 40px;
            height: 40px;
        }
        .i-safety-iphone {
            display: inline-block;
            *display: inline;
            *zoom: 1;
            vertical-align: top;
            background-image: url(./public/images/sprite2.png);
            background-position: -45px -45px;
            width: 40px;
            height: 40px;
        }
        em, i {
            font-style: normal;
        }
        /*验证邮箱*/
        .i-safety-mail .z-mail-done {
            background-image: url(./public/images/sprite2.png);
            background-position: 0 -90px;
            width: 40px;
            height: 40px;
        }
        .i-safety-mail {
            display: inline-block;
            *display: inline;
            *zoom: 1;
            vertical-align: top;
            background-image: url(./public/images/sprite2.png);
            background-position: 0 0px;
            width: 40px;
            height: 40px;
        }
        /*身份认证*/
        .i-safety-idcard {
            display: inline-block;
            *display: inline;
            *zoom: 1;
            vertical-align: top;
            background-image: url(./public/images/sprite2.png);
            background-position: 0 -45px;
            width: 40px;
            height: 40px;
        }
        .u-safety-btn {
            position: absolute;
            right: 70px;
            top: 33px;
        }
        .ui-btn-primary, .ui-btn-primary:active, .ui-btn-primary:hover, .ui-btn1, .ui-btn1:active, .ui-btn1:hover {
            color: #fff;
        }
        .ui-btn-primary, .ui-btn1 {
            background-color: #f10180;
            border: 1px solid #f10180;
        }
        .ui-btn-small {
            min-width: 48px;
            _width: 48px;
            padding: 0 11px;
            font: 12px/22px tahoma,arial,Hiragino Sans GB,WenQuanYi Micro Hei,'\5FAE\8F6F\96C5\9ED1','\5B8B\4F53',sans-serif;
            _line-height: 24px;
            height: 22px;
        }
        .ui-btn-big, .ui-btn-large, .ui-btn-medium, .ui-btn-mini, .ui-btn-nor, .ui-btn-small {
            display: inline-block;
            border-radius: 3px;
            text-decoration: none;
            text-align: center;
            vertical-align: top;
            -webkit-transition: .3s;
            transition: .3s;
            cursor: pointer;
            *white-space: nowrap;
            _overflow-y: hidden;
        }
        /*安全问题*/
        .i-safety-security {
            display: inline-block;
            *display: inline;
            *zoom: 1;
            vertical-align: top;
            background-image: url(./public/images/sprite2.png);
            background-position: -135px -45px;
            width: 40px;
            height: 40px;
        }
    </style>
</head>

<body>
<head>
 <div id="header_top">
  <div id="top">
    <div class="Inside_pages">
        <?php if ($_smarty_tpl->tpl_vars['arr']->value==0){?>
        <div class="Collection"><a href="?c=login&a=login" class="green">请登录</a> <a href="?c=index&a=register" class="green">免费注册</a></div>
        <?php }else{ ?>
        <div class="Collection"><a href="?c=user&a=usercenter&id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
" class="green">欢迎，<?php echo $_smarty_tpl->tpl_vars['arr']->value['username'];?>
</a><a href="?c=login&a=loginOut">退出</a></div>
        <?php }?>
	<div class="hd_top_manu clearfix">
	  <ul class="clearfix">
	   <li class="hd_menu_tit" data-addclass="hd_menu_hover"> <a href="?c=user&a=usercenter">个人中心</a> </li>
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
<!--账户管理样式-->
<div class="user_style clearfix">
 <div class="user_center clearfix">
 <div class="left_style">
     <div class="menu_style">
     <div class="user_title">个人中心</div>
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
          <li> <a href="?c=order&myorder">我的订单</a></li>
          <li> <a href="?c=address&a=select">收货地址</a></li>
        </ul>
      </dd>
    </dl>
     <dl class="accountSideOption1">
      <dt class="transaction_manage"><em class="icon_2"></em>会员管理</dt>
        <dd>
      <ul>
        <li> <a href="?c=user&a=userinfo&id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
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
        <li><a href="?c=user&a=security">安全中心</a></li>
        <li><a href="用户中心-消费记录.html">购买记录</a></li>
       <li><a href="#">跟踪包裹</a></li>
       <li><a href="#">资金管理</a></li>
      </ul>
     </dd>
    </dl>
    </div>
      <script>jQuery(".sideMen").slide({titCell:"dt", targetCell:"dd",trigger:"click",defaultIndex:0,effect:"slideDown",delayTime:300,returnDefault:true});</script>
   </div>
 </div>
 <!---->
     <div class="right_style">
  <div class="title_style"><em></em>安全中心</div>
  <div class="user_Account_style">

      <ul class="m-safety-list">

          <li class="J_LoginPwd">
              <i class="i-safety-lock"></i>
              <div class="m-msg-box">
                  <p class="u-msg-title">登录密码</p>
                  <p class="u-msg-content">为保证您购物安全，建议您定期更改密码以保护账户安全。</p>
              </div>
              <a href="?c=user&a=reset" role="button" class="ui-btn-small ui-btn-secondary u-safety-btn">修改</a>
          </li>
          <li class="J_paymentPwd hidden" data-func="none">
              <i class="i-safety-wallet"></i>
              <div class="m-msg-box">
                  <p class="u-msg-title">支付密码</p>
                  <p class="u-msg-content">启用支付密码功能，为您资产账户安全加把锁。</p>
              </div>
              <a href="" data-href="" role="button" class="ui-btn-small ui-btn-primary u-safety-btn">立即启用</a>
          </li>
          <!--<li class="J_paymentPwd" data-func="done">
              <i class="i-safety-wallet z-wallete-done"></i>
              <div class="m-msg-box">
                  <p class="u-msg-title">支付密码</p>
                  <p class="u-msg-content">在使用钱包、唯品币等资产时，均需通过支付密码<br>进行身份验证，为您资产账户安全加把锁。</p>
              </div>
              <a href="https://myvpal.vip.com/pc/modifyPayPass" data-href="https://myvpal.vip.com/pc/modifyPayPass" role="button" class="ui-btn-small ui-btn-secondary u-safety-btn" mars_sead="531|2|3|3">修改</a>
              <a href="javascript:;" data-href="https://myvpal.vip.com/pc/resetPayPass" class="J_forgetPaymentPwd u-forget-password" mars_sead="531|2|3|4">忘记支付密码？</a>
          </li>-->

          <!--手机-->
          <?php if ($_smarty_tpl->tpl_vars['arr']->value['phone']==''){?>
          <li class="J_verifyPhone hidden" data-func="none">
              <i class="i-safety-iphone"></i>
              <div class="m-msg-box">
                  <p class="u-msg-title">绑定手机</p>
                  <p class="u-msg-content">验证后，可用于快速找回登录密码及支付密码，接收账户<br>余额变动提醒。</p>
              </div>
              <a href="?c=user&a=bindphone" class="ui-btn-small ui-btn-primary u-safety-btn" >立即启用</a>
          </li>
          <?php }else{ ?>
          <li class="J_verifyPhone" data-func="done">
              <i class="i-safety-iphone z-iphone-done"></i>
              <div class="m-msg-box">
                  <p class="u-msg-title">绑定手机</p>
                  <p class="u-msg-content">轻松找回密码，验证身份。已绑定：<span class="phone"><?php echo smarty_modifier_tihuan($_smarty_tpl->tpl_vars['arr']->value['phone']);?>
</span></p>
              </div>
              <a href="?c=user&a=chuangphone" class="ui-btn-small ui-btn-secondary u-safety-btn">修改</a>
          </li>
          <?php }?>

          <!--邮箱-->
          <?php if ($_smarty_tpl->tpl_vars['arr']->value['email']==''){?>
          <li class="J_verifyEmail hidden" data-func="none">
              <i class="i-safety-mail"></i>
              <div class="m-msg-box">
                  <p class="u-msg-title">验证邮箱</p>
                  <p class="u-msg-content">您的邮箱还没验证，为了保障账户安全，请验证！</p>
              </div>
              <a href="?c=user&a=bindemail" role="button" class="ui-btn-small ui-btn-primary u-safety-btn">立即启用</a>
          </li>
          <?php }else{ ?>
          <li class="J_verifyEmail" data-func="done">
              <i class="i-safety-mail z-mail-done"></i>
              <div class="m-msg-box">
                  <p class="u-msg-title">验证邮箱</p>
                  <p class="u-msg-content">您验证的邮箱: <span class="email"><?php echo smarty_modifier_tihuan($_smarty_tpl->tpl_vars['arr']->value['email']);?>
</span></p>
              </div>
              <a href="" class="ui-btn-small ui-btn-secondary u-safety-btn">修改</a>
          </li>
          <?php }?>
         <!-- <li class="J_identity" data-func="none">
              <i class="i-safety-idcard"></i>
              <div class="m-msg-box">
                  <p class="u-msg-title">身份认证</p>
                  <p class="u-msg-content">用于提升账号的安全性和信任级别。认证后不能修改认证信息。</p>
              </div>
              <a href="javascript:;" data-href="https://myvpal.vip.com/pc/realName" role="button" class="ui-btn-small ui-btn-primary u-safety-btn " mars_sead="531|2|3|9">立即启用</a>
          </li>
          <li class="J_identity hidden" data-func="done">
              <i class="i-safety-idcard z-idcard-done"></i>
              <div class="m-msg-box">
                  <p class="u-msg-title">身份认证</p>
                  <p class="u-msg-content">恭喜您实名认证成功。身份证号码：(<span class="idcode"></span>）</p>
              </div>
          </li>-->

          <!--<li class="J_securityIssue" data-func="none">
              <i class="i-safety-security"></i>
              <div class="m-msg-box">
                  <p class="u-msg-title">安全问题</p>
                  <p class="u-msg-content">保护账户安全，验证您身份的工具之一。</p>
              </div>
              <a href="javascript:;" data-href="//safe.vip.com/securityQuestion/set/page" class="ui-btn-small ui-btn-primary u-safety-btn" mars_sead="531|2|3|5">立即启用</a>
          </li>
          <li class="J_securityIssue hidden" data-func="done">
              <i class="i-safety-security z-security-done"></i>
              <div class="m-msg-box">
                  <p class="u-msg-title">安全问题</p>
                  <p class="u-msg-content">安全问题设置成功，请牢记问题答案哦。</p>
              </div>
              <a href="javascript:;" data-href="//safe.vip.com/securityQuestion/update/page" class="ui-btn-small ui-btn-secondary u-safety-btn" mars_sead="531|2|3|6">修改</a>
          </li>-->

      </ul>

  </div>
  </div>
 </div>
</div>
  <script type="text/javascript">
         //弹出一个iframe层
$('#cz_Records_btn').on('click', function(){
    layer.open({
        type: 2,
        title: '充值记录',
        maxmin: true,
        shadeClose: true, //点击遮罩关闭层
        area : ['900px' , '450px'],
        content:'分销管理-提现账单.html'
    });
});</script>
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