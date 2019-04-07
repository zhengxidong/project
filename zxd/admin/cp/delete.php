<meta charset='utf-8'/>
<?php
/**
 * @Author: anchen
 * @Date:   2017-01-16 13:35:40
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-01-16 13:38:35
 */

   require '../../connect.php';
   $id = $_GET['id'];
   $picpath = $_GET['picpath'];
   $lin = '../../admin/productuploads/'.$picpath;
   if(file_exists($lin))
   {
     unlink($lin);
     $deleteSql = "delete from zxd_tem_tb_product where id='{$id}'";
       $boolData = mysql_query($deleteSql);
       if($boolData){
           echo "<script>alert('删除成功');location.href='index.php';</script>";
       }else{
           echo "<script>alert('删除失败！');location.href='index.php';</script>";
       }
   }
   else{
      $deleteSql = "delete from zxd_tem_tb_product where id='{$id}'";
       $boolData = mysql_query($deleteSql);
       if($boolData){
           echo "<script>alert('删除成功');location.href='index.php';</script>";
       }else{
           echo "<script>alert('删除失败！');location.href='index.php';</script>";
       }
   }
   