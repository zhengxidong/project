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
           $insertSql = "update zxd_tem_tb_news set";
           $insertSql.= " newstitle = '{$_POST['newstitle']}',";
           $insertSql.= "newscontent = '{$_POST['newscontent']}',";
           $insertSql.= "newsdate = '{$_POST['newsdate']}'";
           $insertSql.= " where id = '{$_POST['id']}'";

           $boolData = mysql_query($insertSql);
           if($boolData){
               echo "<script>alert('修改成功');location.href='index.php';</script>";
           }else{
               echo "<script>alert('修改失败！');location.href='index.php';</script>";
           }
}