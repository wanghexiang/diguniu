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
<!-- 配置文件 -->
<script charset="utf-8" type="text/javascript" src="/diguniu/Public/kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" type="text/javascript" src="/diguniu/Public/kindeditor/lang/zh_CN.js"></script>
<link  href="/diguniu/Public/kindeditor/themes/default/default.css" type="text/css" rel="stylesheet">
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">编辑文章</h3>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" role="form" id="admin-info" method="post" action="<?php echo U('save');?>">
            <div class="form-group">
                <label for="category" class="col-md-2 control-label">所属分类</label>
                <div class="col-sm-3">
                    <select name='cate_id'>
                        <?php if(is_array($categorys)): $i = 0; $__LIST__ = $categorys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["id"]); ?>"<?php if($v['id']==$article['cate_id']) echo "selected";?>><?php echo ($v["html"]); echo ($v["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="title" class="col-md-2 control-label">文章标题</label>
                <div class="col-sm-3">
                    <input type="text" name="title" id="title" class="form-control col-xs-4" placeholder="文章标题" value="<?php echo ($article["title"]); ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="category" class="col-md-2 control-label">文章内容</label>
                <div class="col-sm-5">
                    <!--style给定宽度可以影响编辑器的最终宽度-->
                   <textarea name="content" style="width:100%;height:100%;visibility:hidden;"></textarea>
                </div>
            </div>
            <input type="hidden" value="<?php echo ($article["id"]); ?>" name="id"/>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">提交</button>
                </div>
            </div>
        </form>

    </div>
</div>



<script>
			var editor;
			KindEditor.ready(function(K) {
				editor = K.create('textarea[name="content"]', {
					allowFileManager : true
				});
				
			});
		</script>
	
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