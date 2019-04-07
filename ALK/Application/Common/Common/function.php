<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/4/12
 * Time: 23:57
 */
function getpage($count,$pagesize=10){
    $p =new \Think\Page($count,$pagesize);
    $p->setConfig('header', '<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
    $p->setConfig('prev', '上一页');
    $p->setConfig('next', '下一页');
    $p->setConfig('last', '末页');
    $p->setConfig('first', '首页');
    $p->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');

    $p->lastSuffix = false;//最后一页不显示为总页数
    return $p;
}
//将时间戳转换成2016-01-02 3:12:24
function sj($str){
    return date("Y-m-d H:i:s",$str);
}
//将标签解析过滤掉
function jiexi($str){
    return htmlspecialchars_decode($str);
}
//将首页新闻资讯时间戳转换为月日格式
function newssj($str){
    return date("m-d",$str);
}
//新闻列表
function newslist($str){
    return date("Y-m-d",$str);
}