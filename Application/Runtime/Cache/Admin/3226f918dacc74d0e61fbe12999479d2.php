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
        <h3 class="panel-title">管理员列表</h3>
    </div>
    <div class="panel-body">
        <table class="table table-hover table-bordered table-condensed">
            <tr>
                <th>名称</th>
                <th>上次登录时间</th>
                <th>操作</th>
            </tr>
            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr> 

                    <td><?php echo ($v["username"]); ?></td>
                    <td><?php echo (date('Y-m-d',$v["login_time"])); ?></td>
                    <td><a href="<?php echo U('edit?id='.$v['id']);?>"><span class="glyphicon glyphicon-pencil "></span> </a>
                        &nbsp;&nbsp;<a onclick="return confirm('确定删除?');" href="<?php echo U('delete?id='.$v['id']);?>"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
    </div>
    <div class="panel-footer">	
        <?php echo ($page); ?>

    </div>
</div>
</body>