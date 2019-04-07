<meta charset='utf-8'/>
<?php
/**
 * @Author: anchen
 * @Date:   2017-01-16 13:56:19
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-01-16 14:07:32
 */

 if(!empty($_POST)){
        
       //把表单中的数据添加到数据库
       require '../../connect.php';
       if(!empty($_FILES['picpath']['name']))
       {
         $sql = "select * from zxd_tem_tb_product where id=".$_POST['id'];
         $lsql = mysql_query($sql);
         $arr = array();
         while($rData = mysql_fetch_assoc($lsql)){
          $arr[] = $rData;
         }
         $lin = "../../Admin/productuploads/".$arr[0]['picpath'];
         if(file_exists($lin))
         {
          unlink($lin);
         }
        else{
           $arr = explode(".",$_FILES['picpath']['name']);//分割文件名
           $file_extend = end($arr);   //取数组中最后一个值
           $picpath = time().mt_rand(100,999999).".".$file_extend;  //路径
           move_uploaded_file($_FILES['picpath']['tmp_name'],'../../Admin/productuploads/'.$picpath);
           $insertSql = "update zxd_tem_tb_product set";
           $insertSql.= " productname = '{$_POST['productname']}',";
           $insertSql.= " classification = '{$_POST['classification']}',";
           $insertSql.= " picpath = '$picpath',";
           $insertSql.= "description = '{$_POST['description']}',";
           $insertSql.= "productdate = '{$_POST['productdate']}'";
           $insertSql.= " where id = '{$_POST['id']}'";
        } 
       
       }
       else{
         $insertSql = "update zxd_tem_tb_product set";
           $insertSql.= " productname = '{$_POST['productname']}',";
           $insertSql.= " classification = '{$_POST['classification']}',";
           $insertSql.= "description = '{$_POST['description']}',";
           $insertSql.= "productdate = '{$_POST['productdate']}'";
           $insertSql.= " where id = '{$_POST['id']}'";
       }

           $boolData = mysql_query($insertSql);
           if($boolData){
               echo "<script>alert('修改成功');location.href='index.php';</script>";
           }else{
               echo "<script>alert('修改失败！');location.href='index.php';</script>";
           }
}