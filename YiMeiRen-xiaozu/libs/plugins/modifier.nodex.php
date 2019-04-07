<?php
/**
 * Created by PhpStorm.
 * User: Dong
 * Date: 2017/2/28
 * Time: 14:06
 */
//递归分类节点

function smarty_modifier_nodex($arrData,$id=null, $pid=0,$format="")
{
    $format.="&nbsp;&nbsp;&nbsp;";
    foreach ($arrData as $key => $value) {
        if($value['pid']==$pid){
            if($value['id']==$id){
                echo "<option value=".$value['id']." selected>".$format.$value['title']."</option>";
            }else{
                echo "<option value=".$value['id'].">".$format.$value['title']."</option>";
            }
            smarty_modifier_nodex($arrData,$id,$value['id'],$format);
        }
    }
}
?>