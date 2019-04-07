<meta charset="utf-8">
<?php
    /*move_uploaded_file($_FILES['path']['tmp_name'],'../uploads/sdfs.jpg');*/
    require '../../connect.php';

    $arr = explode(".",$_FILES['path']['name']);//分割文件名

    $file_extend = end($arr);   //取数组中最后一个值
    $path = time().mt_rand(100,999999).".".$file_extend;  //路径
    move_uploaded_file($_FILES['path']['tmp_name'],'../../uploads/'.$path);

    $synopsiscontent = $_POST['synopsiscontent']; //内容
    /*$releasedate = time();   //时间*/
    $classify = $_POST['classify']; //分类
    $sql = "insert into zxd_tem_tb_companyprofile values(null,'$path','$synopsiscontent','$classify',now())";
    $boolData = mysql_query($sql);
    if($boolData){
      echo "<script>alert('添加成功');location.href='index.php';</script>";
    }
    else{
      echo "<script>alert('添加失败');location.href='index.php';</script>";
    }
   ?>