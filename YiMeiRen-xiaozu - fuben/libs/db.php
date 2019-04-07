<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/22
 * Time: 9:08
 */
class Db{

       private $host = 'localhost';//服务器地址
       private $user = 'root';//账号
       private $pw = '';//密码
       protected $resData='';//连接资源
       private $dbname="db_shop";
       private static $obj='';

       private function __construct(){
           $this->resData = @mysql_connect($this->host,$this->user,$this->pw) or die('连接数据库服务器失败');
           @mysql_select_db($this->dbname) or die('数据库不存在');
           mysql_query('set names utf8');
       }
       public static function getInstance(){
        if(self::$obj){
          return self::$obj;
        }
        else{
          self::$obj = new self();
          return self::$obj;
        }
       }
        /**
         * 执行sql语句
         * @param $sql sql语句
         * @return bool|resource
         */
       public function query($sql){
           if(!empty($sql)){
               $data = mysql_query($sql);
               if(!$data){
                   return false;
               }else{
                   return $data;
               }
           }else{
               return false;
           }
       }

        /**
         * 提取数据库结果集
         * @param $resData  数据库结果集
         * @return array|bool
         */
      public function fetchAll($resData){
           if(is_resource($resData)){
                $arrDataBig = array();
                while($arr = mysql_fetch_assoc($resData)){
                     $arrDataBig[] = $arr;
                }
                unset($resData);
                return $arrDataBig;
           }else{
               return false;
           }
      }

        /**
         * 释放连接资源
         */
     public function __destruct(){
        if(strtolower(get_resource_type($this->resData))=="mysql link"){
             mysql_close($this->resData);
        }
     }
}