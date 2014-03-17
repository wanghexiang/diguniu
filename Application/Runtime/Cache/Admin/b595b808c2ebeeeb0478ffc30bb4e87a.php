<?php if (!defined('THINK_PATH')) exit();?>
<frameset border="0" rows="50,*",>
	<frame  name="top" src="<?php echo U('Admin/Index/top');?>"></frame>
	<frameset cols="200,*">
		<frame name="left" src="<?php echo U('Admin/Index/left');?>"></frame>
		<frame name="main" src="<?php echo U('Admin/Index/main');?>"></frame>
	</frameset>
</frameset>