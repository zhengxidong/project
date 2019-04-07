<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/3/9
 * Time: 18:47
 */
require './controller/Controller.php';
class GoodsController extends Controller{
    public function add(){
        if(empty($_POST)){
            $category = new CategoryModel();
            $type = new TypeModel();
            $GLOBALS['smarty']->assign("category", $category->select("select * from tb_category"));
            $GLOBALS['smarty']->assign("type", $type->select("select * from tb_type"));
            $GLOBALS['smarty']->display("Goods/add.html");
        }
        if(!empty($_FILES['wj']['name'])){
            /*var_dump($_POST);
            var_dump($_FILES);
            exit;*/
            require BASE.'/libs/upload.php';
            require BASE.'/libs/image.php';
            require BASE."/libs/db.php";
            $im = new Image(array('zoomdir'=>BASE."/public/zoom/"));
            $up = new Upload();
            $up->sc();
            $arr =$up->getLastFile();
            foreach($arr as $value){
                $im->zoom(50,$value,"micro_");
                $im->zoom(220,$value,"small_");
                $im->zoom(350,$value,"normal_");
                $im->zoom(800,$value,"big_");
            }
            $microimg ="";//微图字符串
            $smallimg ="";//小图字符串
            $normalimg ="";//中图字符串
            $biglimg ="";//大图字符串
            foreach($im->config['newfilename'] as $key=>$value){
                for($i=0;$i<count($im->config['newfilename']);$i++) {
                    $index = (($i + 1) - 1) * 4;
                    if($index==$key){
                        $microimg.=$im->config['newfilename'][$key].",";
                    }

                    if($index+1==$key){
                        $smallimg.=$im->config['newfilename'][$key].",";
                    }

                    if($index+2==$key){
                        $normalimg.=$im->config['newfilename'][$key].",";
                    }

                    if($index+3==$key){
                        $biglimg.=$im->config['newfilename'][$key].",";
                    }
                }
            }
            $sql = "insert into tb_goods values(";
            $sql .= "null,'{$_POST['title']}',";
            $sql .= "'{$_POST['price']}','{$microimg}',";
            $sql .= "'{$smallimg}','{$normalimg}',";
            $sql .= "'{$biglimg}','{now()}',";
            $sql .= "'{$_POST['kucun']}','{$_POST['isnew']}',";
            $sql .= "'{$_POST['ishot']}','{$_POST['tj']}',";
            $sql .= "'{$_POST['typeid']}','{$_POST['categoryid']}',";
            $sql .= "'{$_POST['detail']}')";
            $boolData =Db::getInstance()->query($sql);
            if($boolData){
                $goodsid = mysql_insert_id();
                /*var_dump($_POST);
                exit;*/
                foreach($_POST['attr_list'] as $key=>$value){
                    $sql ="insert into tb_value values(null,'{$value}',{$_POST['attr_id'][$key]},{$goodsid})";
                Db::getInstance()->query($sql);
                }
                echo "<script>alert('操作成功');location.href='?c=goods&a=select'</script>";
            }else{
               echo "<script>alert('操作失败');location.href='?c=goods&a=select'</script>";
            }
        }

    }
    public function select(){
        require BASE."/libs/db.php";
        $res = Db::getInstance()->query("select * from tb_goods");
        $GLOBALS['smarty']->assign("arr",Db::getInstance()->fetchAll($res));
        $GLOBALS['smarty']->display("Goods/index.html");
    }
    public function getAttr(){
        $at = new AttrModel();
        $arr = $at->select("select *from tb_attr where typeid={$_GET['id']}");
        echo json_encode($arr);
    }
}