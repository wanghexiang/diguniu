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
                    <script type="text/plain" id="myEditor" style="width:100%;">
                        <p>这里我可以写一些输入提示</p>
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
um.addListener('blur', function() {
    $('#focush2').html('编辑器失去焦点了')
});
um.addListener('focus', function() {
    $('#focush2').html('')
});
//按钮的操作
function insertHtml() {
    var value = prompt('插入html代码', '');
    um.execCommand('insertHtml', value)
}
function isFocus() {
    alert(um.isFocus())
}
function doBlur() {
    um.blur()
}
function createEditor() {
    enableBtn();
    um = UM.getEditor('myEditor');
}
function getAllHtml() {
    alert(UM.getEditor('myEditor').getAllHtml())
}
function getContent() {
    var arr = [];
    arr.push("使用editor.getContent()方法可以获得编辑器的内容");
    arr.push("内容为：");
    arr.push(UM.getEditor('myEditor').getContent());
    alert(arr.join("\n"));
}
function getPlainTxt() {
    var arr = [];
    arr.push("使用editor.getPlainTxt()方法可以获得编辑器的带格式的纯文本内容");
    arr.push("内容为：");
    arr.push(UM.getEditor('myEditor').getPlainTxt());
    alert(arr.join('\n'))
}
function setContent(isAppendTo) {
    var arr = [];
    arr.push("使用editor.setContent('欢迎使用umeditor')方法可以设置编辑器的内容");
    UM.getEditor('myEditor').setContent('欢迎使用umeditor', isAppendTo);
    alert(arr.join("\n"));
}
function setDisabled() {
    UM.getEditor('myEditor').setDisabled('fullscreen');
    disableBtn("enable");
}

function setEnabled() {
    UM.getEditor('myEditor').setEnabled();
    enableBtn();
}

function getText() {
    //当你点击按钮时编辑区域已经失去了焦点，如果直接用getText将不会得到内容，所以要在选回来，然后取得内容
    var range = UM.getEditor('myEditor').selection.getRange();
    range.select();
    var txt = UM.getEditor('myEditor').selection.getText();
    alert(txt)
}

function getContentTxt() {
    var arr = [];
    arr.push("使用editor.getContentTxt()方法可以获得编辑器的纯文本内容");
    arr.push("编辑器的纯文本内容为：");
    arr.push(UM.getEditor('myEditor').getContentTxt());
    alert(arr.join("\n"));
}
function hasContent() {
    var arr = [];
    arr.push("使用editor.hasContents()方法判断编辑器里是否有内容");
    arr.push("判断结果为：");
    arr.push(UM.getEditor('myEditor').hasContents());
    alert(arr.join("\n"));
}
function setFocus() {
    UM.getEditor('myEditor').focus();
}
function deleteEditor() {
    disableBtn();
    UM.getEditor('myEditor').destroy();
}
function disableBtn(str) {
    var div = document.getElementById('btns');
    var btns = domUtils.getElementsByTagName(div, "button");
    for (var i = 0, btn; btn = btns[i++]; ) {
        if (btn.id == str) {
            domUtils.removeAttributes(btn, ["disabled"]);
        } else {
            btn.setAttribute("disabled", "true");
        }
    }
}
function enableBtn() {
    var div = document.getElementById('btns');
    var btns = domUtils.getElementsByTagName(div, "button");
    for (var i = 0, btn; btn = btns[i++]; ) {
        domUtils.removeAttributes(btn, ["disabled"]);
    }
}
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