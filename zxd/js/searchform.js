$(document).ready(function(){
	if($("#globalsearchform_key")[0].value==""){
		$("#globalsearchform_key")[0].value="Please enter keywords";
		$("#globalsearchform_key").focus(function(){
			$("#globalsearchform_key")[0].value="";
		});
	}
	if($("#globalsearchform_key")[0].value=="Please enter keywords"){
		$("#globalsearchform_key").focus(function(){
			$("#globalsearchform_key")[0].value="";
		});
	}
});
//搜索表单校验
$(document).ready(function(){
	
	$("#globalsearchform").submit(function(){
		if($("#globalsearchform_key")[0].value==""){
			alert("Please enter keywords");
			return false;
		}
		return true;
	});
}); 