<?php /* Smarty version Smarty-3.1.14, created on 2017-03-29 10:31:36
         compiled from ".\template\User\user_reset.html" */ ?>
<?php /*%%SmartyHeaderCode:860158da777bd42e06-50042296%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1ef12574f4fd45ecceb93c9c16450d8562aa60f' => 
    array (
      0 => '.\\template\\User\\user_reset.html',
      1 => 1490783495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '860158da777bd42e06-50042296',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58da777bdfea79_86393711',
  'variables' => 
  array (
    'arr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58da777bdfea79_86393711')) {function content_58da777bdfea79_86393711($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_tihuan')) include 'D:\\wamp\\www\\MyProject\\YiMeiRen-xiaozu\\libs\\plugins\\modifier.tihuan.php';
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
        .m-content {
            min-height: 477px;
            _height: 477px;
            background-color: #fff;
            border: 1px solid #e4e4e4;
            padding-bottom: 23px;
        }
        .m-content-hd {
            height: 45px;
            background-color: #f9f9f9;
            border-bottom: 1px solid #ececec;
        }
        .m-page-tab {
            margin-left: 32px;
            *zoom: 1;
        }
        .m-page-tab .z-current {
            color: #333;
            border-bottom: 2px solid #f21389;
        }
        .m-page-tab .tab-item {
            float: left;
            padding: 0 20px;
            font-size: 14px;
            line-height: 43px;
            color: #999;
        }
        a {
            outline: 0;
        }
        .m-content-bd {
            width: 560px;
            margin: 0 auto;
            padding-top: 50px;
        }
        .m-progress {
            margin: 0 auto 25px;
            padding-top: 10px;
            height: 60px;
        }
        .m-progress-list {
            height: 66px;
            font-size: 0;
            text-align: justify;
            text-justify: inter-ideograph;
        }
        .m-vf-item {
            padding-left: 110px;
            margin-bottom: 25px;
        }
        .m-verification-form .u-label {
            margin-right: 0;
            width: 80px;
            white-space: nowrap;
            text-align: right;
        }
        .ui-label {
            display: inline-block;
            font: 14px/32px tahoma,arial,Hiragino Sans GB,WenQuanYi Micro Hei,'\5FAE\8F6F\96C5\9ED1','\5B8B\4F53',sans-serif;
            vertical-align: middle;
            margin-right: 10px;
            cursor: pointer;
            _line-height: 34px;
            _height: 32px;
            _overflow: hidden;
        }
        .u-already-bind-show {
            display: inline-block;
            width: 240px;
            font-size: 14px;
            text-align: left;
            line-height: 32px;
            vertical-align: top;
        }
        .m-verification-form .u-label {
            margin-right: 0;
            width: 80px;
            white-space: nowrap;
            text-align: right;
        }
        .ui-label {
            display: inline-block;
            font: 14px/32px tahoma,arial,Hiragino Sans GB,WenQuanYi Micro Hei,'\5FAE\8F6F\96C5\9ED1','\5B8B\4F53',sans-serif;
            vertical-align: middle;
            margin-right: 10px;
            cursor: pointer;
            _line-height: 34px;
            _height: 32px;
            _overflow: hidden;
        }
        .m-vf-item .ui-form-item-group {
            *zoom: 1;
        }
        .ui-form-item-group {
            position: relative;
            display: inline-block;
            *display: inline;
            *zoom: 0;
            vertical-align: top;
            -webkit-transition: none !important;
            transition: none !important;
            -webkit-transition-duration: none !important;
            transition-duration: none !important;
            opacity: 1 !important;
        }
        .ui-form-item-group .ui-tooltips-bottom-left-arrow {
            left: 0;
            bottom: 100%;
            margin-bottom: 10px;
        }
        .ui-tooltips-warning {
            border-color: #f8dbb1;
            box-shadow: none;
        }
        .ui-tooltips {
            visibility: hidden;
            opacity: 0;
            -webkit-transition: -webkit-transform ease-out .15s,opacity ease-out .15s;
            transition: transform ease-out .15s,opacity ease-out .15s;
        }
        .ui-tooltips-bottom-arrow, .ui-tooltips-bottom-left-arrow, .ui-tooltips-bottom-right-arrow {
            -webkit-transform: translateY(-10px);
            -ms-transform: translateY(-10px);
            transform: translateY(-10px);
        }
        .ui-tips-pop, .ui-tooltips {
            position: absolute;
            max-width: 800px;
            border: 1px solid #dbdada;
            border-radius: 2px;
            box-shadow: 0 0 3px rgba(0,0,0,.1);
            font: 12px/18px tahoma,arial,Hiragino Sans GB,WenQuanYi Micro Hei,'\5FAE\8F6F\96C5\9ED1','\5B8B\4F53',sans-serif;
            color: #4d4d4d;
            z-index: 50;
        }
        .ui-tooltips-bottom-arrow .ui-tooltips-arrow, .ui-tooltips-bottom-left-arrow .ui-tooltips-arrow, .ui-tooltips-bottom-right-arrow .ui-tooltips-arrow {
            left: 0;
            bottom: -11px;
            width: 100%;
            height: 10px;
        }
        .ui-tooltips-arrow {
            position: absolute;
        }
        .ui-input[disabled], .ui-textarea[disabled] {
            background-color: #ecebeb;
            border-color: #b2b2b2;
            cursor: not-allowed;
        }
        button[disabled], html input[disabled] {
            cursor: not-allowed;
        }
        .u-verification-code {
            _float: left;
            width: 108px;
            margin-right: 6px;
        }
        .z-ui-input-disable {
            background-color: #ecebeb;
            border-color: #b2b2b2;
            cursor: not-allowed;
        }
        .ui-input {
            height: 18px;
            line-height: 18px;
            padding: 6px 10px;
        }
        .ui-input, .ui-textarea {
            width: 148px;
            font: 14px/20px tahoma,arial,Hiragino Sans GB,WenQuanYi Micro Hei,'\5FAE\8F6F\96C5\9ED1','\5B8B\4F53',sans-serif;
            color: #333;
            background-color: #fff;
            border: 1px solid #b2b2b2;
            border-radius: 3px;
            outline: 0;
            -webkit-transition: border-color .3s cubic-bezier(.39,.575,.565,1),background-color .3s cubic-bezier(.39,.575,.565,1);
            transition: border-color .3s cubic-bezier(.39,.575,.565,1),background-color .3s cubic-bezier(.39,.575,.565,1);
        }
        button, code, input, kbd, samp, select, textarea, tt {
            font-size: 100%;
        }
        button, input, optgroup, option, select, textarea {
            font-family: inherit;
            font-size: 100%;
            font-style: inherit;
            font-weight: inherit;
        }
        .u-btn-get-code {
            width: 98px;
            padding: 0;
            font-size: 13px;
            white-space: nowrap;
        }
        .ui-btn-secondary, .ui-btn-secondary:active, .ui-btn-secondary:hover, .ui-btn2, .ui-btn2:active, .ui-btn2:hover {
            color: #e00078;
        }
        .ui-btn-secondary, .ui-btn2 {
            background-color: #fcedf2;
            border: 1px solid #ffbee0;
        }
        .ui-btn-medium, .ui-btn-nor {
            min-width: 60px;
            _width: 60px;
            padding: 0 19px;
            font: 15px/30px tahoma,arial,Hiragino Sans GB,WenQuanYi Micro Hei,'\5FAE\8F6F\96C5\9ED1','\5B8B\4F53',sans-serif;
            _line-height: 32px;
            height: 30px;
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
        .m-vf-item .ui-btn-primary {
            margin-left: 84px;
        }
        .ui-btn-loading {
            width: 120px;
        }
        .ui-btn-loading, button.ui-btn-loading {
            padding: 0;
            overflow: hidden;
        }
        .ui-btn-primary, .ui-btn-primary:active, .ui-btn-primary:hover, .ui-btn1, .ui-btn1:active, .ui-btn1:hover {
            color: #fff;
        }
        .ui-btn-primary, .ui-btn1 {
            background-color: #f10180;
            border: 1px solid #f10180;
        }
        .ui-btn-medium, .ui-btn-nor {
            min-width: 60px;
            _width: 60px;
            padding: 0 19px;
            font: 15px/30px tahoma,arial,Hiragino Sans GB,WenQuanYi Micro Hei,'\5FAE\8F6F\96C5\9ED1','\5B8B\4F53',sans-serif;
            _line-height: 32px;
            height: 30px;
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
        .ui-btn-loading-before {
            display: inline-block;
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
                <li><a href="Home.html">首页</a></li>
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
                                <li> <a href="?c=user&userinfo"> 我的资料</a></li>
                                <li> <a href="用户中心-我的收藏.html"> 我的收藏</a></li>
                                <li> <a href="#"> 我的留言</a></li>
                                <li> <a href="#">我的标签</a></li>
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

                <div id="J_main" class="m-content">

                    <div class="m-content-hd">
                        <div class="m-page-tab"><a href="?c=user&a=reset" class="tab-item z-current" data-track="done">手机验证</a><a href="?c=user&a=resetoldpassword" class="tab-item" data-track="done">原登录密码验证</a></div>
                    </div>
                    <!-- 手机验证——步骤一 -->
                    <div id="J_phoneVerify" class="m-content-bd">
                        <div id="xm-verification-form" class="m-verification-form J_step">
                            <input type="hidden" id="verifyPhone" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['phone'];?>
"/>
                            <input type="hidden" id="verifyusername" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['username'];?>
"/>
                            <div class="m-vf-item">
                                <label class="ui-label u-label" for="">验证手机：</label>
                                <span id="J_verifyPhone" class="u-already-bind-show"><?php echo smarty_modifier_tihuan($_smarty_tpl->tpl_vars['arr']->value['phone']);?>
</span>
                            </div>
                            <div class="m-vf-item">
                                <label class="ui-label u-label" for="J_codeInput">验证码：</label>
                                <!--
                                    下拦框变红：  z-ui-form-item-warning
                                    提示方案出现：z-ui-tooltips-in
                                -->
                                <div class="ui-form-item-group">
                                    <div class="ui-tooltips ui-tooltips-warning ui-tooltips-bottom-left-arrow">
                                        <div class="ui-tooltips-content J_codeTip_tpl"></div>
                                    </div>
                                    <input maxlength="6" placeholder="短信验证码" class="ui-input u-verification-code" id="J_codeInput" name="verification-code" type="text">
                                    <!-- 点击前 -->
                                    <a  role="button" id="J_getCodeBtn" class="ui-btn-medium u-btn-get-code ui-btn-secondary">获取验证码</a>
                                    <!-- 点击后 -->
                                    <a style="display: none;" role="button" id="J_CodeBtn" class="ui-btn-medium u-btn-get-code ui-btn-secondary"><span class="second">58</span>S后重新获取</a>
                                </div>
                            </div>
                            <div class="m-vf-item">
                                <a href="javascript:;" id="J_PhoneNext" role="button" class="ui-btn-medium ui-btn-primary ui-btn-loading">
                                    <span id="sub" class="ui-btn-loading-before">下一步</span>
                                    <span class="ui-btn-loading-after"><i class="ii-loading-gray-16x16"></i></span>
                                </a>
                            </div>
                            <div class="success"></div>
                        </div>
                        <!-- 手机验证——步骤二 -->
                        <div style="display: none;" id="gm-verification-form" class="m-verification-form J_step f-hidden">
                            <div class="m-vf-item">
                                <label class="ui-label u-label" for="">新密码：</label>
                                <div class="ui-form-item-group">
                                    <div class="ui-tooltips ui-tooltips-warning ui-tooltips-bottom-left-arrow">
                                        <div class="ui-tooltips-content">
                                            <p class="ui-tooltips-msg"><i class="vipFont if-sigh"></i>密码由6-20位字母，数字和符号至少两种以上字符组合，区分大小写</p>
                                        </div>
                                    </div>
                                    <input  maxlength="20" id="J_phone_newpwd" name="verification-new-pwd" class="ui-input u-verification-input" placeholder="由6-20位字母，数字和符号组合" type="password">
                                </div>
                            </div>

                            <div class="m-vf-item">
                                <label class="ui-label u-label" for="J_email_codeInput">确认密码：</label>
                                <!-- z-ui-form-item-success 表示输入框输入正确 -->
                                <div class="ui-form-item-group z-ui-form-item-success">
                                    <div class="ui-tooltips ui-tooltips-warning ui-tooltips-bottom-left-arrow">
                                        <div class="ui-tooltips-content">
                                            <p class="ui-tooltips-msg"><i class="vipFont if-sigh"></i>两次输入的密码不一致，请重试</p>
                                        </div>
                                    </div>
                                    <input  maxlength="20" id="J_phone_againpwd" name="verification-check-new-pwd" class="ui-input u-verification-input" placeholder="请再次输入上面的密码" type="password">
                                </div>
                            </div>
                            <input type="hidden" id="user" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['username'];?>
"/>
                            <div class="m-vf-item">
                                <a href="javascript:;" id="J_phone_sure" role="button" class="ui-btn-medium ui-btn-primary ui-btn-loading">
                                    <span id="sub-btn" class="ui-btn-loading-before">确定</span>
                                    <span class="ui-btn-loading-after"><i class="ii-loading-gray-16x16"></i></span>
                                </a>
                            </div>
                        </div>
                        <div style="display: none;" class="J_step f-hidden">
                            <p class="u-page-feedback">恭喜您，修改登录密码成功，可以在伊美人开心地购物啦，为保证您购物安全，<br>建议您定期更改密码以保护账户安全。</p>
                            <p class="u-page-go-back"><span class="second">6</span> 秒后将自动返回安全中心首页</p>
                            <p class="u-page-foot-nav"><a href="?c=index&a=index" target="_blank" class="u-link">伊美人首页</a> | <a href="?c=user&a=usercenter" class="u-link">个人中心</a> | <a href="?c=user&a=security" class="u-link">安全中心</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    //获取短信验证码
    $("#J_getCodeBtn").click(function(){
        var phone = $("#verifyPhone").val();
        var username = $("#verifyusername").val();
            $.post("?c=user&a=checkphone", {phone: phone,username:username}, function (msg) {

                $("#J_getCodeBtn").hide();
                $("#J_CodeBtn").show();
                //倒数60秒
                var data = 60;
                var tag = setInterval(function(){
                    $("#J_CodeBtn").html(data);
                    data--;
                });
                if(data<0){
                    $("#J_getCodeBtn").show();
                    $("#J_CodeBtn").hide();
                    clearInterval(tag);
                }
                if(msg==1){
                    $(".success").html("<h3>" + msg + "</h3>");
                }
            });
        });
    //下一步，提交验证码
    $("#sub").click(function(){
        var yzm = $("#J_codeInput").val();
        $.post("?c=user&a=checkyzm", {yzm: yzm}, function (msg) {
            if (msg == 0) {
                /*$("#chkmsg").html("验证码错误！");*/
                $("#J_codeInput").css("border","1px solid #f20266");
            }
            if(msg==1){
                $("#xm-verification-form").hide();
                $("#gm-verification-form").show();
            }
        });
    });
    //检测密码是否一致
    var newpwd = $("#J_phone_newpwd").val();
    var againpwd = $("#J_phone_againpwd").val();
    if(newpwd!=againpwd)
    {
        $("#J_phone_newpwd").css("border","1px solid #f20266");
        $("#J_phone_againpwd").css("border","1px solid #f20266");
    }
    //获得光标，提示消失
    $("#J_phone_newpwd").focus(function(){
        $("#J_phone_newpwd").css("border","1px solid #b2b2b2");
        $("#J_phone_againpwd").css("border","1px solid #b2b2b2");
    });
    //提交密码修改
    $("#sub-btn").click(function(){
        var newpwd = $("#J_phone_newpwd").val();
        var username = $("#user").val();
        $.post("?c=user&a=changePassword", {newpwd:newpwd,username:username}, function (msg) {
            if (msg == 0) {
                $("#J_codeInput").css("border","1px solid #f20266");
            }
            if(msg==1){
                document.location.href='?c=login&a=login';
            }
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
        <div class="hotline">为生活充电在线 <span>招商热线：****-********</span> 客服热线：400-******</div>
        <div class="hotline co-ph">
            <p>版权所有Copyright ©***************</p>
            <p>*ICP备***************号 不良信息举报</p>
            <p>总机电话：****-*********/194/195/196 客服电话：4000****** 传 真：********

                E-mail:****@****.gov.cn</p>
        </div>
    </div>
</div>
</body>
</html>
<?php }} ?>