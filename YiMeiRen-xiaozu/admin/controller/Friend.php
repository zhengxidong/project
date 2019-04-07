<?php
/**
 * Created by PhpStorm.
 * User: liangbing
 * Date: 2017/3/8
 * Time: 21:10
 */
require './controller/Controller.php';
class FriendController extends Controller{

    public function select(){
        $ca = new FriendModel();
        $GLOBALS['smarty']->assign("arr",$ca->select("select * from tb_friendlink"));//把商品分类数据从模型中提出，然后赋给模板
        $GLOBALS['smarty']->display("../template/Friend_link/select.html");
    }


    public function add(){

        if(!empty($_FILES["wj"]["name"])){//判断有没有数据过来，然后处理进行入库
            require BASE."/libs/upload.php";//加载上传文件类
            $up = new Upload();//实例化上传类
            $up->sc();//调用上传类里面的上传文件的方法
            $ca = new FriendModel();//实例化Friend模型
            $pith = $up->getLastFile();
            if($ca->add($pith))
            {
                echo "<script>alert('操作成功');location.href='?c=friend&a=select'</script>";
            }else{
                echo "<script>alert('操作失败');location.href='?c=friend&a=select'</script>";
            }
        }else{
            $GLOBALS['smarty']->display("../template/Friend_link/add.html");
        }
    }



    public function editor(){
        $GLOBALS['smarty']->display("../template/Friend_link/editor.html");
    }






    public function __call($fn,$param){
        exit('not this action');
    }
}