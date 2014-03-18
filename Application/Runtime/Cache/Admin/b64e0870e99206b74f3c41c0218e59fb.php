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
<div class="panel panel-primary">
 <div class="panel-heading">
          <h3 class="panel-title">管理员编辑</h3>
        </div>
		 <div class="panel-body">
<form class="form-horizontal" role="form" id="admin-info" method="post" action="<?php echo U('save');?>">
  <div class="form-group">
    <label for="username" class="col-md-2 control-label">用户名</label>
    <div class="col-sm-3">
      <input type="username" value="<?php echo ($admin["username"]); ?>"  name="username" id="username" class="form-control "  placeholder="用户名">
    </div>
  </div>
  <div class="form-group">
    <label for="password" class="col-md-2 control-label">输入密码</label>
    <div class="col-sm-3">
      <input type="password" name="password" id="password" class="form-control col-xs-4"  placeholder="密码">
    </div>
  </div>
  <div class="form-group">
    <label for="password2" class="col-md-2 control-label">确认密码</label>
    <div class="col-sm-3">
      <input type="password" name="password2" class="form-control " id="password2" placeholder="确认密码">
    </div>
  </div>
  <input type="hidden" value="<?php echo ($admin["id"]); ?>" name="id"/>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">提交</button>
    </div>
  </div>
  
  </div>
</form>
</div>
</div>
<style>
.errortips{

	color:red;
}
</style>
<script>

	$('#admin-info').validate({
		errorElement : 'span',
		errorClass : 'errortips',
		//focusCleanup : true,
		focusInvalid : true,
		rules : {
			username : {
				required : true
			},
			password : {
				required : true,
				minlength : 5
			},
			password2 : {
				required : true,
				minlength : 5,
				equalTo : "#password"
			}
		},
		messages : {
			username : {
				required : "请输入用户名.",
				username : "请输入用户名."
			},
			password : {
				required : "请输密码.",
				minlength : "密码必须大于6位数."
			},
			password2 : {
				required : "请确认密码.",
				minlength : "密码必须大于6位数.",
				equalTo : "两次输入的密码不一致"
			}
		},
		
	}); 
</script>

<div id="dialog" class="bootbox modal fade in" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" data-dismiss="modal" aria-hidden="true" class="bootbox-close-button close">
					×
				</button>
				<h4 class="modal-title">请稍后...</h4>
			</div>
			<div class="modal-body">
				<div class="bootbox-body">
					数据提正在交中... <i class="icon-spinner icon-spin orange bigger-125"></i>
				</div>
			</div>
			<div class="modal-footer">
				<button data-bb-handler="cancel" type="button" class="btn btn-default">
					Cancel
				</button>

				<button data-bb-handler="confirm" type="button" class="btn btn-primary">
					OK
				</button>
			</div>
		</div>
	</div>
</div>
</body>