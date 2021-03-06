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
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加产品</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="/MyProject/ALK/index.php/Admin/Product/add" enctype="multipart/form-data">
      <div class="form-group">
        <div class="label">
          <label>名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="productname" data-validate="required:请输入产品名称" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>图片：</label>
        </div>
        <div class="field">
          <input type="file" id="url1" name="picpath" class="input tips" style="width:25%; float:left;"   data-place="right" />
          <div class="tipss">图片尺寸：500*500</div>
        </div>
      </div>
      <div class="form-group">
          <div class="label">
              <label>度数：</label>
          </div>
          <div class="field">
              <input type="text" class="input w50" name="degree" data-validate="required:请输入度数" />
              <div style="margin-top: 10px">vol</div>
              <div class="tips"></div>
          </div>
      </div>
      <div class="form-group">
          <div class="label">
              <label>年份：</label>
          </div>
          <div class="field">
              <input type="text" class="input w50" name="years" data-validate="required:请输入年份" />
              <div class="tips"></div>
          </div>
      </div>
      <div class="form-group">
          <div class="label">
              <label>产区：</label>
          </div>
          <div class="field">
              <input type="text" class="input w50" name="producingareas" data-validate="required:请输入标题" />
              <div class="tips"></div>
          </div>
      </div>
      <div class="form-group">
          <div class="label">
              <label>等级：</label>
          </div>
          <div class="field">
              <input type="text" class="input w50" name="grade" data-validate="required:请输入等级" />
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