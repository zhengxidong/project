<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>编辑新闻</title>
    <link rel="stylesheet" href="/MyProject/ALK/Public/Admin/css/pintuer.css">
    <link rel="stylesheet" href="/MyProject/ALK/Public/Admin/css/admin.css">
    <script src="/MyProject/ALK/Public/Admin/js/jquery.js"></script>
    <script src="/MyProject/ALK/Public/Admin/js/pintuer.js"></script>
    <!--编辑器第一步-->
    <link rel="stylesheet" href="/MyProject/ALK/Public/Admin/plugins/themes/default/default.css" />
    <script charset="utf-8" src="/MyProject/ALK/Public/Admin/plugins/kindeditor-min.js"></script>
    <script charset="utf-8" src="/MyProject/ALK/Public/Admin/plugins/lang/zh_CN.js"></script>
</head>
<body>
<div class="panel admin-panel margin-top">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>编辑内容</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="/MyProject/ALK/index.php/Admin/News/update" enctype="multipart/form-data">
      <input type="hidden" name="id"  value="<?php echo ($arr['id']); ?>" />
      <div class="form-group">
          <div class="label">
              <label>新闻图片：</label>
          </div>
          <div class="field">
              <input type="file" id="url1" name="newspath" class="input tips" style="width:25%; float:left;" data-place="right" />
              <img src="/MyProject/ALK/Public/Upload/newsimg/<?php echo ($arr['newspath']); ?>" alt=""/>
              <div class="tipss">图片尺寸：1920*200</div>
          </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="newstitle" value="<?php echo ($arr['newstitle']); ?>" data-validate="required:请输入标题" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
          <div class="label">
              <label>内容：</label>
          </div>
          <div class="field">
              <textarea type="text" style="height: 400px;width: 800px;" class="input w50" name="newscontent" data-validate="required:请输入内容" /><?php echo ($arr['newscontent']); ?></textarea>
              <div class="tips"></div>
          </div>
      </div>
        <!--<div class="form-group">
          <div class="label">
            <label>栏目图片：</label>
          </div>
          <div class="field">
            <input type="text" id="url1" name="banner" class="input tips" style="width:25%; float:left;"  value="" data-toggle="hover" data-place="right" data-image="" />
            <input type="button" class="button bg-blue margin-left" id="image1" value="+ 浏览上传"  style="float:left;">
            <div class="tipss">图片尺寸：1920*200</div>
          </div>
        </div>
         <div class="form-group">
          <div class="label">
            <label>英文标题：</label>
          </div>
          <div class="field">
            <input type="text" class="input w50" name="entitle" value="" />
            <div class="tips"></div>
          </div>
        </div>
        <div class="form-group">
          <div class="label">
            <label>关键字标题：</label>
          </div>
          <div class="field">
            <input type="text" class="input" name="s_title" value="" />
          </div>
        </div>
        <div class="form-group">
          <div class="label">
            <label>栏目关键字：</label>
          </div>
          <div class="field">
            <input type="text" class="input" name="s_keywords" value=""/>
          </div>
        </div>
        <div class="form-group">
          <div class="label">
            <label>关键字描述：</label>
          </div>
          <div class="field">
            <textarea type="text" class="input" name="s_desc" style="height:100px;" ></textarea>
          </div>
       </div>

       <div class="form-group">
          <div class="label">
            <label>显示：</label>
          </div>
          <div class="field">
            <div class="button-group radio">

            <label class="button active">
                 <span class="icon icon-check"></span>
                <input name="isshow" value="1" type="radio" checked="checked">是
            </label>

            <label class="button active"><span class="icon icon-times"></span>
                <input name="isshow" value="0"  type="radio" checked="checked">否
            </label>
             </div>
          </div>
       </div>
        <div class="form-group">
          <div class="label">
            <label>排序：</label>
          </div>
          <div class="field">
            <input type="text" class="input w50" name="sort" value="0"  data-validate="required:,number:排序必须为数字" />
            <div class="tips"></div>
          </div>
        </div>-->
     <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 更新</button>
        </div>
      </div>
    </form>
  </div>
</div>
<script type="text/javascript">
    var editor;
    KindEditor.ready(function(K){
        editor = K.create('textarea[name="newscontent"]');
    })
</script>
</body></html>