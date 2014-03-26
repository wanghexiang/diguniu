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
<script type="text/javascript" src="/diguniu/Public/ueditor/umeditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="/diguniu/Public/ueditor/umeditor.min.js"></script>
<!-- 语言包文件(建议手动加载语言包，避免在ie下，因为加载语言失败导致编辑器加载失败) -->
<script type="text/javascript" src="/diguniu/Public/ueditor/lang/zh-cn/zh-cn.js"></script>
<link  href="/diguniu/Public/ueditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
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
                    <script type="text/plain" id="myEditor" name="content" style="width:95%;">
                        <?php echo html_entity_decode($content['content']);?>
                    </script>
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
<style>
    .errortips{

        color:red;
    }
</style>
<script type="text/javascript">
//实例化编辑器
var um = UM.getEditor('myEditor');
</script>
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