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
       if(!empty($_FILES['avatar']['name']))
       {
          $sql = "select * from tb_user where id='{$_POST['id']}'";
          $lsql = mysql_query($sql);
           $arr=array();
            while ($rData = mysql_fetch_assoc($lsql)) {
                  $arr[]=$rData;
            }
          /*var_dump($arr[0]['avatar']);
          exit();*/
          $lin = '../../avatarimg/'.$arr[0]['avatar'];
          if(file_exists($lin))
          {
           unlink($lin);
          }
          else
          {
            $arr =explode(".",$_FILES['avatar']['name']);//分割文件名
          $file_extend = end($arr);  //取数组中最后一个值
          $avatar =time().mt_rand(100,999999).".".$file_extend; //利用时间加随机数重命名文件名
          move_uploaded_file($_FILES['avatar']['tmp_name'], '../../avatarimg/'.$avatar);
           $insertSql = "update tb_user set";
             $insertSql.= " avatar = '$avatar',";
             $insertSql.= "nickname = '{$_POST['nickname']}',";
             $insertSql.= "username = '{$_POST['username']}',";
             $insertSql.= "password = '{$_POST['password']}',";
             $insertSql.= "state = '{$_POST['state']}'";
             $insertSql.= " where id = '{$_POST['id']}'";
          }
       }
       else
       {
           $insertSql = "update tb_user set";
           $insertSql.= " nickname = '{$_POST['nickname']}',";
           $insertSql.= "username = '{$_POST['username']}',";
           $insertSql.= "password = '{$_POST['password']}',";
           $insertSql.= "state = '{$_POST['state']}'";
           $insertSql.= " where id = '{$_POST['id']}'";
       }
       $boolData = mysql_query($insertSql);
       if($boolData){
           echo "<script>alert('修改成功');location.href='index.php';</script>";
       }else{
           echo "<script>alert('修改失败！');location.href='index.php';</script>";
       }
}