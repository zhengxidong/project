<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="/MyProject/ALK/Public/Admin/css/pintuer.css">
<link rel="stylesheet" href="/MyProject/ALK/Public/Admin/css/admin.css">
<script src="/MyProject/ALK/Public/Admin/js/jquery.js"></script>
<script src="/MyProject/ALK/Public/Admin/js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加内容</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="/MyProject/ALK/index.php/Admin/QuestProduct/add" enctype="multipart/form-data">
      <!--<div class="form-group">
        <div class="label">
          <label>名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="productname" data-validate="required:请输入产品名称" />
          <div class="tips"></div>
        </div>
      </div>-->
        <div class="form-group">
            <div class="label">
                <label>分类：</label>
            </div>
            <div class="field">
                <select name="questproducttypeid" class="input w50">
                    <?php if(is_array($typelist)): $i = 0; $__LIST__ = $typelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
                <div class="tips">不选择上级分类默认为一级分类</div>
            </div>
        </div>

      <div class="form-group">
          <div class="label">
              <label>内容：</label>
          </div>
          <div class="field">
              <textarea type="text" class="input w50" name="content" data-validate="required:请输入标题" /></textarea>
              <div class="tips"></div>
          </div>
      </div>

      <div class="clear"></div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>

</body></html>