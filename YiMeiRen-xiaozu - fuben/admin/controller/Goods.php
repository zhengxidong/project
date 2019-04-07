<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/3/9
 * Time: 18:47
 */
require './controller/Controller.php';
class GoodsController extends Controller{
    //添加商品
    public function add(){
        if(empty($_POST)){
            //取出分类
            $category = new CategoryModel();
            $GLOBALS['smarty']->assign("category", $category->select("select * from tb_category"));
            //取出类型
            $type = new TypeModel();
            $GLOBALS['smarty']->assign("type", $type->select("select * from tb_type"));
            $GLOBALS['smarty']->display("Goods/goods_add.html");
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
            /*$up->dir =BASE."public/tt/";*/ //给上传类传一个新地址
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
    //查出所有商品
    public function select(){
        $goods = new GoodsModel();
        $arr = $goods->select("select * from tb_goods");
        $GLOBALS['smarty']->assign("arr",$arr);
        $GLOBALS['smarty']->display("Goods/goods_list.html");
    }
    public function getAttr(){
        $at = new AttrModel();
        $arr = $at->select("select *from tb_attr where typeid={$_GET['id']}");
        echo json_encode($arr);
    }
    //删除商品
    public function delete(){
        $dele = new GoodsModel();

        $arr = $dele->select("select * from tb_goods where id='{$_GET['id']}'");
        /*$tt = explode(",",$arr[0]['microimg']);*/
        $tt = rtrim($arr[0]['microimg'],',');
        var_dump($tt);
        exit;
        $microimg = $arr[0]['microimg'];
        $smallimg = $arr[0]['smallimg'];
        $normalimg = $arr[0]['normalimg'];
        $bigimg = $arr[0]['bigimg'];
        var_dump($microimg);
        var_dump($smallimg);
        var_dump($normalimg);
        var_dump($bigimg);
        exit;
        if($dele->delete()){
            echo "<script>alert('操作成功');location.href='?c=goods&a=select'</script>";
        }
        else{
            echo "<script>alert('操作成功');location.href='?c=goods&a=select'</script>";
        }
    }
}