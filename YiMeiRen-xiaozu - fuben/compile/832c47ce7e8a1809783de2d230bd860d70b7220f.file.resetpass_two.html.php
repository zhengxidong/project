<?php /* Smarty version Smarty-3.1.14, created on 2017-03-31 07:13:30
         compiled from ".\template\User\resetpass_two.html" */ ?>
<?php /*%%SmartyHeaderCode:1569358de019aafd2c6-86409164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '832c47ce7e8a1809783de2d230bd860d70b7220f' => 
    array (
      0 => '.\\template\\User\\resetpass_two.html',
      1 => 1490793656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1569358de019aafd2c6-86409164',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58de019ac73113_36978891',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58de019ac73113_36978891')) {function content_58de019ac73113_36978891($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="./public/css/common.css" rel="stylesheet" type="text/css" />
    <link href="./public/css/style.css" rel="stylesheet" type="text/css" />
    <link href="./public/skins/all.css" rel="stylesheet" type="text/css" />
    <!--找回密码-->
    <link href="./public/css/zh.css" rel="stylesheet" type="text/css" />
    <script src="./public/js/jquery-2.1.1.min.js" type="text/javascript"></script>
   <!-- <script type="text/javascript" src="./public/js/jquery-1.8.3-min.js"></script>-->
    <script src="./public/js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
    <!--<script src="./public/js/common_js.js" type="text/javascript"></script>-->
    <script src="./public/js/footer.js" type="text/javascript"></script>
    <script src="./public/js/iCheck.js" type="text/javascript"></script>
    <script src="./public/js/custom.js" type="text/javascript"></script>
    <title>找回密码</title>
    <style>
        .show{margin:0;padding:0;width:400px;height:70px;border:0px solid #ccc;display:none;}
        .tab{margin:0;padding:0;list-style:none;width:200px;overflow:hidden;}
        .tab li{float:left;width:60px;height:30px;background:#ccc;color:#fff; text-align:center;line-height:30px;cursor:pointer; }
        .on{display:block;}
        .tab li.cur{background:#f10180;}
    </style>
    <script type="text/javascript">

    </script>
</head>

<body>
<head>
    <div id="header_top">
        <div id="top">
            <div class="Inside_pages">
                <div class="Collection"><a href="?c=index&a=index" class="green">请登录</a> <a href="?c=index&a=register" class="green">免费注册</a></div>
                <div class="hd_top_manu clearfix">
                    <ul class="clearfix">
                        <li class="hd_menu_tit" data-addclass="hd_menu_hover"> <a href="#">我的伊美人</a> </li>
                        <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">消息中心</a></li>
                        <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">商品分类</a></li>
                        <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">我的购物车<b>(23)</b></a></li>
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
                            <div class="img"><img src="./public/images/5532506.jpg"></div>
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
<!--找回密码-->
<div class="page_style">

    <div class="content">
        <div class="web-width">
            <div class="for-liucheng">
                <div class="liulist for-cur"></div>
                <div class="liulist for-cur"></div>
                <div class="liulist"></div>
                <div class="liulist"></div>
                <div class="liutextbox">
                    <div class="liutext for-cur"><em>1</em><br /><strong>填写账户名</strong></div>
                    <div class="liutext for-cur"><em>2</em><br /><strong>验证身份</strong></div>
                    <div class="liutext"><em>3</em><br /><strong>设置新密码</strong></div>
                    <div class="liutext"><em>4</em><br /><strong>完成</strong></div>
                </div>
            </div><!--for-liucheng/-->
            <form class="forget-pwd">
                <dl>
                    <dt>验证方式：</dt>
                    <dd>
                        <select class="selyz">
                            <option value="0" selected>已验证手机</option>
                            <option value="1">已验证邮箱</option>
                        </select>
                    </dd>
                    <div class="clears"></div>
                </dl>
                <dl class="sel-yzsj">
                    <dt>已验证手机：</dt>
                    <dd><input type="text" value="" id="phone"/><input id="fsphone" style="position:absolute;
                    top:0px;left:200px;margin-left:3px;background: #ccc;border:1px solid #ccc;
                    border-radius:3px;cursor: pointer;width: 70px;text-align: center;" value="获取校验码"><span id="phone_err" style="display: none;position: absolute;top:32px;left: 30px;color:#f20266;">不存在此手机号</span></dd>
                    <div class="clears"></div>
                </dl>
                <dl class="sel-yzyx" style="display: none;">
                    <dt>已验证邮箱：</dt>
                    <dd style="position: relative;"><input type="text" value="" id="email" /><input id="fsemail" style="position:absolute;top:0px;left:200px;margin-left:3px;background: #ccc;border:1px solid #ccc;border-radius:3px;cursor: pointer;width: 70px;text-align: center;" value="获取校验码"></dd>
                    <br/>
                    <dt>邮箱校验码：</dt>
                    <br/>
                    <dd><input type="text" name="yzm" id="yzm" style="width: 60px;"/></dd>
                    <span id="chkmsg"></span>
                    <div class="clears"></div>
                </dl>
                <dl class="sel-jym">
                    <dt>手机校验码：</dt>
                    <dd><input type="text" id="sjyzm" placeholder="短信校验码"  style="width: 70px;"/> </dd>
                    <div class="clears"></div>
                </dl>
                <div class="subtijiao"><input id="sub" value="下一步" /></div>
                <div class="success"></div>
            </form><!--forget-pwd/-->
        </div><!--web-width/-->
    </div><!--content/-->


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

    <script>
            $(".selyz").change(function () {
                var selval = $(this).find("option:selected").val();
                //手机找回
                if (selval == "0") {
                    $(".sel-yzsj").show();
                    $(".sel-jym").show();
                    $(".sel-yzyx").hide();
                }
                //邮箱找回，发送验证码给邮箱
                else
                if (selval == "1") {
                    $(".sel-yzsj").hide();
                    $(".sel-jym").hide();
                    $(".sel-yzyx").show();
                    $("#fsemail").click(function(){
                        var email = $("#email").val();
                        var preg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/;
                        if (email == '' || !preg.test(email)) {
                            $("#chkmsg").html("请填写正确的邮箱！");
                        } else {
                            $("#fsemail").prop("disabled", "disabled").val('发送中..').css("cursor", "default");
                            $.post("?c=resetpass&a=checkemail", {email: email}, function (msg) {
                                if (msg == 0) {
                                    $("#chkmsg").html("该邮箱尚未注册！");
                                    $("#fsemail").removeAttr("disabled").val('提交').css("cursor", "pointer");
                                }
                                else if(msg==3){
                                    $("#chkmsg").html("发送超时，请稍后再试！");
                                }
                                else{
                                    $("#fsemail").attr("disabled", "disabled").val('已发送');
                                    $(".success").html("<h3>" + msg + "</h3>");
                                }
                            });
                        }
                    });

                }
            });
            //发送短信验证码
            $("#fsphone").click(function(){
                var phone = $("#phone").val();
                var preg = /^1[34578]\d{9}$/;
                if (phone == '' || !preg.test(phone)) {
                    $("#phone_err").show();
                    $("#phone").css("border","1px solid #f20266");
                    $("#phone").focus(function(){
                        $("#phone_err").hide();
                        $("#phone").css("border","1px solid #ccc");
                    });
                } else {
                    $("#fsphone").prop("disabled", "disabled").val('发送中..').css("cursor", "default");
                    $.post("?c=resetpass&a=checkphone", {phone: phone}, function (msg) {
                        var data = 60;
                        var tag = setInterval(function(){
                            $("#fsphone").html(data);
                            data--;
                        });
                        if(data<0){
                            $("#fsphone").html("获取校验码");
                            clearInterval(tag);
                        }
                        if (msg == 0) {
                            $("#phone_err").html("该手机号码未绑定！");
                            $("#fsphone").removeAttr("disabled").val('获取验证码').css("cursor", "pointer");
                        } else {
                            $("#fsphone").attr("disabled", "disabled").val('已发送');
                            $(".success").html("<h3>" + msg + "</h3>");
                        }
                    });
                }
            });
            //提交邮箱校验码
            $("#sub").click(function(){
                var yzm = $("#yzm").val();
                $.post("?c=resetpass&a=checkyzm", {yzm: yzm}, function (msg) {
                    if (msg == 0) {
                        $("#chkmsg").html("验证码错误！");
                        $("#yzm").css("border","1px solid #f20266");
                    }
                    if(msg==1){
                        document.location.href='?c=resetpass&a=changePassword';
                    }
                });
            });
            //提交手机校验码
            $("#sub").click(function(){
                var yzm = $("#sjyzm").val();
                $.post("?c=resetpass&a=checkyzm", {yzm: yzm}, function (msg) {

                    if (msg == 0) {
                        $("#chkmsg").html("验证码错误！");
                        $("#yzm").css("border","1px solid #f20266");
                    }
                    if(msg==1){
                        document.location.href='?c=resetpass&a=changePassword';
                    }
                });
            });
    </script>
</body>
</html>
<?php }} ?>