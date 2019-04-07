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
       if(!empty($_FILES['path']['name']))
       {
         $arr = explode(".",$_FILES['path']['name']);//分割文件名
         $file_extend = end($arr);   //取数组中最后一个值
         $path = time().mt_rand(100,999999).".".$file_extend;  //路径
          move_uploaded_file($_FILES['path']['tmp_name'],'../../uploads/'.$path);
           $insertSql = "update zxd_tem_tb_companyprofile set";
           $insertSql.= " path = '$path',";
           $insertSql.= "synopsiscontent = '{$_POST['synopsiscontent']}',";
           $insertSql.= "classify = '{$_POST['classify']}',";
           $insertSql.= "releasedate = '{$_POST['releasedate']}'";
           $insertSql.= " where id = '{$_POST['id']}'";
       }
       else
       {
         $insertSql = "update zxd_tem_tb_companyprofile set";
           $insertSql.= " synopsiscontent = '{$_POST['synopsiscontent']}',";
           $insertSql.= "classify = '{$_POST['classify']}',";
           $insertSql.= "releasedate = '{$_POST['releasedate']}'";
           $insertSql.= " where id = '{$_POST['id']}'";
       }

           $boolData = mysql_query($insertSql);
           if($boolData){
               echo "<script>alert('修改成功');location.href='index.php';</script>";
           }else{
               echo "<script>alert('修改失败！');location.href='index.php';</script>";
           }
}