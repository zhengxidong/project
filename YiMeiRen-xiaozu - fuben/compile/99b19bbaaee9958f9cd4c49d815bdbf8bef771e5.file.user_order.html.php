<?php /* Smarty version Smarty-3.1.14, created on 2017-03-29 13:02:03
         compiled from ".\template\Order\user_order.html" */ ?>
<?php /*%%SmartyHeaderCode:271458da059f451832-08825340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99b19bbaaee9958f9cd4c49d815bdbf8bef771e5' => 
    array (
      0 => '.\\template\\Order\\user_order.html',
      1 => 1490792521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '271458da059f451832-08825340',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58da059f538e96_44356704',
  'variables' => 
  array (
    'arr' => 0,
    'order' => 0,
    'va' => 0,
    'comment' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58da059f538e96_44356704')) {function content_58da059f538e96_44356704($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="./public/css/common.css" rel="stylesheet" type="text/css" />
<link href="./public/css/style.css" rel="stylesheet" type="text/css" />
<link href="./public/skins/all.css" rel="stylesheet" type="text/css" />
<script src="./public/js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="./public/js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
<script src="./public/js/common_js.js" type="text/javascript"></script>
<script src="./public/js/footer.js" type="text/javascript"></script>
<script src="./public/js/iCheck.js" type="text/javascript"></script>
<script src="./public/js/custom.js" type="text/javascript"></script>
<title>订单管理</title>
</head>
<script type="text/javascript">
$(document).ready(function () {
	
	$('#CheckedAll').on('ifChecked', function(event){
		$('input').iCheck('check');
	});
	$('#CheckedAll').on('ifUnchecked', function(event){
		$('input').iCheck('uncheck');
	});
   //全选
//   $("#CheckedAll").click(function () {
//	   if (this.checked) {                 //如果当前点击的多选框被选中
//		   $('ifChecked').attr("check", true);
//	   } else {
//		   $('ifUnchecked').attr("uncheck", false);
//	   }
//   });
//   $('input[type=checkbox][name=checkitems]').click(function () {
//	   var flag = true;
//	   $('input[type=checkbox][name=checkitems]').each(function () {
//		   if (!this.checked) {
//			   flag = false;
//		   }
//	   });
//
//	   if (flag) {
//		   $('#CheckedAll').attr('checked', true);
//	   } else {
//		   $('#CheckedAll').attr('checked', false);
//	   }
//   });
   //输出值
   $("#send").click(function () {
	      if($("input[type='checkbox'][name='checkitems']:checked").attr("checked")){
	   var str = "批量确认收货订单：\r\n";
	   $('input[type=checkbox][name=checkitems]:checked').each(function () {
		   str += $(this).val() + "\r\n";
	   })
	   alert(str);
		  }
		  else{
			   var str = "你未选中任何商品，请选择后在操作！"; 
			   alert(str);
       }
	   	    
   });
})
</script>
<body>
<head>
 <div id="header_top">
  <div id="top">
    <div class="Inside_pages">
        <?php if ($_smarty_tpl->tpl_vars['arr']->value==0){?>
        <div class="Collection"><a href="?c=login&a=login" class="green">请登录</a> <a href="?c=index&a=register" class="green">免费注册</a></div>
        <?php }else{ ?>
        <div class="Collection"><a href="?c=user&a=usercenter&id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['username'];?>
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
            <li><span class="bg_muen"></span><a href="#">半小时生活圈</a></li>
			<li><a href="#">你身边的超市</a></li>
			<li><a href="#">预售专区</a><em class="hot_icon"></em></li>
			<li><a href="products_list.html">商城</a></li>
			
			<li><a href="#">好评商户</a></li>
			<li><a href="#">热销活动</a></li>
			<li><a href="Brands.html">联系我们</a></li>
		 </ul>			 
		</div>
	<script>$("#Navigation").slide({titCell:".Navigation_name li",trigger:"click"});</script>
    </div>
</head>
<div class="Inside_pages clearfix">
 <div class="left_style">
<!--列表-->
  <div class="menu_style">
   <ul class="menu_list">
    <!--<li ><em></em><a href="店铺专区.html">店铺专区</a></li>
    <li ><em></em><a href="商品专区.html">商品专区</a></li>-->
    <li class="on"><em></em><a href="订单专区.html">订单专区</a></li>
    <!--<li><em></em><a href="发货管理.html">发货管理</a></li>
    <li><em></em><a href="收款账号.html">收款账户</a></li>
    <li><em></em><a href="我的报表.html">我的报表</a></li>-->
   </ul>
  </div>
</div>
<div class="right_style">
  <!--内容详细-->
   <div class="title_style"><em></em>我的订单</div>
    <div class="content_style">
    <!--订单管理-->
     <div class="Order_form_style">
      <div class="Order_form_filter">
       <a href="#" class="on">全部订单</a>
       <a href="#" class="">待付款</a>
       <a href="#" class="">待发货</a>
       <a href="#" class="">待收货</a>
       <a href="#" class="">待评价</a>
       <a href="#" class="">交易成功</a>
       <a href="#" class="">交易关闭</a>
      </div>
      <div class="Order_Operation">
       <form  method="post" action="">
     <div class="left"> 
     <label> <input type="checkbox" id="CheckedAll" name="" class="checkbox" clstag="clickcart">全选</label> 
     <input name="" type="submit" value="批量确认收货" id="send" class="confirm_Order"/></div>
     <div class="right_search"><input name="" type="text"  class="add_Ordertext" placeholder="请输入产品标题或订单号进行搜索"/><input name="" type="submit" value="搜索订单"  class="search_order"/></div>
      </div>
      <div class="Order_form_list">
         <table>
         <thead>
          <tr><td class="list_name_title0">商品</td>
          <td class="list_name_title1">单价(元)</td>
          <td class="list_name_title2">数量</td>
          <td class="list_name_title4">实付款(元)</td>
          <td class="list_name_title5">订单状态</td>
          <td class="list_name_title6">操作</td>
         </tr>
         </thead>
             <?php  $_smarty_tpl->tpl_vars['va'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['va']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['va']->key => $_smarty_tpl->tpl_vars['va']->value){
$_smarty_tpl->tpl_vars['va']->_loop = true;
?>
            <tbody>
           <tr class="Order_info"><td colspan="6" class="Order_form_time"><input name="checkitems" type="checkbox" value="天然绿色多汁香甜无污染水蜜桃"  class=""/>下单时间：2015-12-3 | 订单号：445454654654654 <em></em></td></tr>
           <tr class="Order_Details">
           <td colspan="3">
           <table class="Order_product_style">
           <tbody><tr>
           <td>
            <div class="product_name clearfix">
            <a href="#" class="product_img"><img src="Products/p_2.jpg" width="80px" height="80px"></a>
            <a href="3"><?php echo $_smarty_tpl->tpl_vars['va']->value['goodsname'];?>
</a>
            <p class="specification">礼盒装20个/盒</p>
            </div>
            </td>
            <td>5</td>
           <td>2</td>
            </tr>
            </tbody></table>
           </td>   
           <td class="split_line">100</td>
           <td class="split_line"><p style="color:#F30">已发货，待收货</p></td>
           <td class="operating">
             <a href="#">查看订单</a>
             <a href="#">查看物流</a>
               <?php if ($_smarty_tpl->tpl_vars['va']->value['salesreturn']=='已收货'){?>
                   <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comment']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                   <?php if ($_smarty_tpl->tpl_vars['value']->value['orderid']==$_smarty_tpl->tpl_vars['va']->value['id']){?>
                   <a href="">已评价</a>
                   <?php }else{ ?>
                 <a href="?c=comment&a=select&userid=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['va']->value['goodsid'];?>
&orderid=<?php echo $_smarty_tpl->tpl_vars['va']->value['id'];?>
">评价</a>
                   <?php }?>
                   <?php } ?>
               <?php }else{ ?>
               <?php }?>
             <a href="#">删除</a>
           </td>
           </tr>
           </tbody>
             <?php } ?>
         </table>
    </div>
     </div>
     </form>
   </div>
  </div>
</div>
   <script>
            $(document).ready(function(){
              $('.Order_form_style input').iCheck({
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