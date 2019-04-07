<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <style type="text/css">
            #jump{
                width: 600px;
                height: 200px;
                margin:100px auto;
                border:1px solid #ccc;
                line-height: 200px;
                text-align: center;
                box-shadow: 0px 2px 3px rgba(0, 204,204, 1);
                border: 1px solid rgba(255,255,255,0.8);
            }
    </style>
</head>
<body>
   <div id="jump">
       <?php if(isset($message)): echo($message); ?>
           <?php else: ?>
        <?php echo($error); endif; ?>    ， 页面自动跳转，<span id="stime"><?php echo($waitSecond); ?></span>
   </div>
   <script type="text/javascript">
       var tag = setInterval(function(){

             var data = $("stime").innerHTML;
             data--;
            $("stime").innerHTML = data;
            if(data<=0){
                 clearInterval(tag);
                 location.href='<?php echo $jumpUrl; ?>';
            }

       },1000);

       function $(data){
           return document.getElementById(data);
       }
   </script>
</body>
</html>