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
   $avatar = $_GET['avatar'];
   $img ='../zxd/admin/avatarimg/'.$avatar;

   if(file_exists($img))
   {
     unlink($img);
     $deleteSql = "delete from tb_user where id='{$id}'";
    $boolData = mysql_query($deleteSql);
     if($boolData){
         echo "<script>alert('删除成功');location.href='index.php';</script>";
     }else{
         echo "<script>alert('删除失败！');location.href='index.php';</script>";
     }
   }
   else{
       $deleteSql = "delete from tb_user where id='{$id}'";
       $boolData = mysql_query($deleteSql);
       if($boolData)
       {
           echo "<script>alert('删除成功');location.href='index.php';</script>";
       }
       else
       {
           echo "<script>alert('删除失败！');location.href='index.php';</script>";
       }
   }
   


   