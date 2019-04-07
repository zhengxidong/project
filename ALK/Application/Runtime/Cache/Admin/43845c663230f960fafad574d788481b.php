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
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>编辑栏目</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="/MyProject/ALK/index.php/Admin/Column/update" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo ($list[0]['id']); ?>"/>
      <div class="form-group">
          <div class="label">
              <label>栏目名：</label>
          </div>
          <div class="field">
              <input type="text" class="input w50" name="columnname" value="<?php echo ($list[0]['columnname']); ?>" data-validate="required:请输入分类" />
              <div class="tips"></div>
          </div>
      </div>
      <div class="form-group">
          <div class="label">
              <label>排序：</label>
          </div>
          <div class="field">
              <input type="text" class="input w50" name="sort" value="<?php echo ($list[0]['sort']); ?>" data-validate="required:请输入分类" />
              <label for="">整数，例：1，2，3</label>
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