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
           $insertSql = "update zxd_tem_tb_recruitment set";
           $insertSql.= " position = '{$_POST['position']}',";
           $insertSql.= "responsibilities = '{$_POST['responsibilities']}',";
           $insertSql.= "jobrequirements = '{$_POST['jobrequirements']}'";
           $insertSql.= " where id = '{$_POST['id']}'";

           $boolData = mysql_query($insertSql);
           if($boolData){
               echo "<script>alert('修改成功');location.href='index.php';</script>";
           }else{
               echo "<script>alert('修改失败！');location.href='index.php';</script>";
           }
}