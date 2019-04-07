/**
 * Created by Dong on 2017/3/1.
 */
$(function (){
   $("#all").click(function(){
       if(this.checked){
           $("#list :checkbox").prop("checked",true);
       }else{
           $("#list :checkbox").prop("checked",false);
       }
   });
    $("#list :checkbox").click(function(){
       allchk();
    });
    /*$("#getValue").click(function (){*/
    function del(attr,delAll){
        var vals = "";
        $("#list :checkbox").each(function(){
            if($(this).prop("checked")==true){
                vals +=","+$(this).val();
            }
        });
        var va = vals.substring(1);
        if(va.length==0)
        {
            alert("请选择要删除的选项");
        }
        else{
            location.href='?c='+attr+'&a='+delAll+'&id='+va;

        }
    }
    /*});*/
    function allchk(){
        var chknum = $("#list :checkbox").size();
        var chk =0;
        $("#list :checkbox").each(function(){
            if($(this).prop("checked")==true){
                chk++;
            }
        });
        if(chknum==chk){
            $("#all").prop("checked",true);
        }
        else{
            $("#all").prop("checked",false);
        }
    }

});