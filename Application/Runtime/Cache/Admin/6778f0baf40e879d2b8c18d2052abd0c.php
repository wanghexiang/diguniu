<?php if (!defined('THINK_PATH')) exit();?>
<!-- 最新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="/diguniu/Public/static/admin/bootstrap/css/bootstrap.min.css">
<!-- 可选的Bootstrap主题文件（一般不用引入） -->
<link rel="stylesheet" href="/diguniu/Public/static/admin/bootstrap/css/bootstrap-theme.min.css">

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="/diguniu/Public/static/jquery.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="/diguniu/Public/static/admin/bootstrap/js/bootstrap.min.js"></script>

<script src="/diguniu/Public/static/jquery.validate.min.js"></script>



<body style="margin:10px;">
<div class="list-group">
  <a href="#" class="list-group-item active">
    用户管理
  </a>
  <a href="<?php echo U('Admin/Admin/admin_list');?>" target="main" class="list-group-item">用户列表</a>
  <a href="<?php echo U('Admin/Admin/edit');?>" target="main"  class="list-group-item">添加用户</a>
   <a href="#" class="list-group-item active">
   内容管理
  </a>
  <a href="<?php echo U('Admin/Category/edit');?>" target="main" class="list-group-item">分类管理</a>
  <a href="<?php echo U('Admin/Admin/edit');?>" target="main"  class="list-group-item">文章管理</a>
  <a href="#" class="list-group-item active">
    系统管理
  </a>
  <a href="<?php echo U('Admin/Login/loginout');?>" class="list-group-item" target="main">登出</a>
</div>
</body>