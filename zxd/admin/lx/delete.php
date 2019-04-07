<meta charset='utf-8'/>
<?php
/**
 * @Author: anchen
 * @Date:   2017-01-16 13:35:40
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-01-16 13:38:35
 */

   require '../../connect.php';
   $ids = trim($_REQUEST['data']);
   var_dump($ids);
   exit;
   if($ids){
       $del = "delete from zxd_tem_tb_contactus where id in(".$ids.")";
   }
   else{
   	   $del = "delete from zxd_tem_tb_contactus where id=".$_GET['id'];
   }
   $boolData = mysql_query($del);
   if($boolData){
       echo "<script>alert('删除成功');location.href='index.php';</script>";
   }else{
       echo "<script>alert('删除失败！');location.href='index.php';</script>";
   }