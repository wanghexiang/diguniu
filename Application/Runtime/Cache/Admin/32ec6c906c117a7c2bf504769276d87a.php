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

<!-- Modal -->

        <div class="modal-content col-sm-4 container">
            <div class="modal-header">
                <h2 class="modal-title" id="myModalLabel">用户登陆</h2>
            </div>
            <div class="modal-body">
                <form role="form" class="form-signin" method="post" action="<?php echo U('login');?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">用户名</label>
                        <input type="text" name="username" class="form-control" id="username" placeholder="用户名">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">密码</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="密码">
                    </div>
                    <div class="form-group">
                        <label for="verify">验证码</label>
                        <input type="text" name="verify" class="form-control" id="verify" placeholder="验证码">
                       <img src="<?php echo U('verify');?>" id='verify-image' onClick="this.src=this.src+'&time='+Math.random()"/>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remenber-me" id="remenber-me">一周内自动登陆？
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">登陆</button>     
                </form>
            </div>
           
        </div><!-- /.modal-content -->

<script>
    $('#myModal').modal("show");
    $(document).ready(function(){
    $("#verify-image").click(function(){
        //alert($(this).src="<?php echo U('verify');?>?"+new Date().getTime());
       // $(this).prop("src","<?php echo U('verify');?>?"+new Date().getTime());
    })
    });
</script>

<style>
    body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #eee;
    }

    .form-signin {
        max-width: 330px;
        padding: 15px;
        margin: 0 auto;
    }
    .form-signin .form-signin-heading
    {
        margin-bottom: 10px;
    }

    .form-signin .form-control {
        position: relative;
        font-size: 16px;
        height: auto;
        padding: 10px;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    .form-signin .form-control:focus {
        z-index: 2;
    }
</style>

</body>