<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/3/11
 * Time: 15:03
 */
require './controller/Controller.php';
class AuthorityController extends Controller{
    public function add(){
        if(!empty($_POST)){
              foreach($_POST['qx'] as $value){
                  $qx = new AuthorityModel();
                  $bool = $qx->add("insert into tb_role_node values(null,'{$_POST['roleid']}','{$value}')");
              }
            if($bool){
                echo "分配权限成功!<script>location.href='?c=role&a=select'</script>";
            }else{
                echo "分配权限失败!<script>location.href='?c=role&a=select'</script>";
            }
        }else{
            $jd =new NodeModel();
            $arrx = $jd->select("select * from tb_node where level=1");
            $GLOBALS['smarty']->assign("arrx",$arrx);
            //查出node表所有数据
            $node = $jd->select("select * from tb_node");

            $GLOBALS['smarty']->assign("node",$node);
            $arr =array();
            foreach($node as $value){

                $role_node = $jd->select("select count(*) total from tb_role_node where roleid={$_GET['roleid']} and nodeid ={$value['id']}");
                if($role_node[0]['total']){
                    $value['sta'] = 1;
                }
                else{
                    $value['sta'] = 0;
                }
                $arr[] = $value;
            }
            $GLOBALS['smarty']->assign("arr",$arr);
            $GLOBALS['smarty']->display("template/Authority/Authority_add.html");
        }

    }
    public function select(){

    }
}