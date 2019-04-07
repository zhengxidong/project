<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/2/28
 * Time: 14:06
 */
//递归分类节点
/*function smarty_modifier_tree($arrData,$id=null,$pid=0,$format="")
{
    $format.="|--";
    foreach($arrData as $key => $value){

        if($value['father']==$pid){

            if($value['id']==$id){
                echo "<option value".$value['id']." selected>".$format.$value['name']."</option>";
            }
            else{
                echo "<option value".$value['id'].">".$format.$value['name']."</option>";
            }
            smarty_modifier_tree($arrData,$id,$value['id'],$format);
        }
    }
}*/
function smarty_modifier_tree($arrData,$id=null, $pid=0,$format="")
{
    $format.="&nbsp;&nbsp;&nbsp;";
    foreach ($arrData as $key => $value) {
        if($value['father']==$pid){
            if($value['id']==$id){
                echo "<option value=".$value['id']." selected>".$format.$value['name']."</option>";
            }else{
                echo "<option value=".$value['id'].">".$format.$value['name']."</option>";
            }

            smarty_modifier_tree($arrData,$id,$value['id'],$format);
        }
    }
}
?>