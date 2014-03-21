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
        <h3 class="panel-title">分类管理</h3>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" role="form" id="admin-info" method="post" action="<?php echo U('save');?>">
            <div class="form-group">
                <label for="category" class="col-md-2 control-label">所属分类</label>
                <div class="col-sm-3">
                    <select name='p_id'>
                        <option value="<?php echo ($base_category["id"]); ?>"><?php echo ($base_category["name"]); ?></option> 
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="category" class="col-md-2 control-label">分类名称</label>
                <div class="col-sm-3">
                    <input type="text" name="category-name" id="category-name" class="form-control col-xs-4"  placeholder="分类名称">
                </div>
            </div>
            <input type="hidden" value="<?php echo ($category["id"]); ?>" name="id"/>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">提交</button>
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
        errorElement: 'span',
        errorClass: 'errortips',
        //focusCleanup : true,
        focusInvalid: true,
        rules: {
            username: {
                required: true,
            },
            password: {
                required: true,
                minlength: 5
            },
            password2: {
                required: true,
                minlength: 5,
                equalTo: "#password"
            }
        },
        messages: {
            username: {
                required: "请输入用户名.",
                //remote :"该用户名已经存在"
            },
            password: {
                required: "请输密码.",
                minlength: "密码必须大于6位数."
            },
            password2: {
                required: "请确认密码.",
                minlength: "密码必须大于6位数.",
                equalTo: "两次输入的密码不一致"
            }
        },
    });
</script>

</body>