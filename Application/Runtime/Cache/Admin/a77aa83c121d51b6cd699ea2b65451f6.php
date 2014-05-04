<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Form Wizard - Ace Admin</title>

		<meta name="description" content="and Validation" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!--basic styles-->

		<link href="/diguniu/Public/ace/assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="/diguniu/Public/ace/assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/diguniu/Public/ace/assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="/diguniu/Public/ace/assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!--page specific plugin styles-->

		<!--fonts-->
        <!--
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />
         -->
		<!--ace styles-->

		<link rel="stylesheet" href="/diguniu/Public/ace/assets/css/ace.min.css" />
		<link rel="stylesheet" href="/diguniu/Public/ace/assets/css/ace-responsive.min.css" />
		<link rel="stylesheet" href="/diguniu/Public/ace/assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="/diguniu/Public/ace/assets/css/ace-ie.min.css" />
		<![endif]-->

		<!--inline styles related to this page-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

	<body>
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a href="#" class="brand">
						<small>
							<i class="icon-leaf"></i>
							Ace Admin
						</small>
					</a><!--/.brand-->

					<ul class="nav ace-nav pull-right">
						<li class="grey">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-tasks"></i>
								<span class="badge badge-grey">4</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
								<li class="nav-header">
									<i class="icon-ok"></i>
									4 Tasks to complete
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Software Update</span>
											<span class="pull-right">65%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:65%" class="bar"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Hardware Upgrade</span>
											<span class="pull-right">35%</span>
										</div>

										<div class="progress progress-mini progress-danger">
											<div style="width:35%" class="bar"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Unit Testing</span>
											<span class="pull-right">15%</span>
										</div>

										<div class="progress progress-mini progress-warning">
											<div style="width:15%" class="bar"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Bug Fixes</span>
											<span class="pull-right">90%</span>
										</div>

										<div class="progress progress-mini progress-success progress-striped active">
											<div style="width:90%" class="bar"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										See tasks with details
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="purple">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-bell-alt icon-animated-bell"></i>
								<span class="badge badge-important">8</span>
							</a>

							<ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-closer">
								<li class="nav-header">
									<i class="icon-warning-sign"></i>
									8 Notifications
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-mini no-hover btn-pink icon-comment"></i>
												New Comments
											</span>
											<span class="pull-right badge badge-info">+12</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<i class="btn btn-mini btn-primary icon-user"></i>
										Bob just signed up as an editor ...
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-mini no-hover btn-success icon-shopping-cart"></i>
												New Orders
											</span>
											<span class="pull-right badge badge-success">+8</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-mini no-hover btn-info icon-twitter"></i>
												Followers
											</span>
											<span class="pull-right badge badge-info">+11</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										See all notifications
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="green">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-envelope icon-animated-vertical"></i>
								<span class="badge badge-success">5</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
								<li class="nav-header">
									<i class="icon-envelope-alt"></i>
									5 Messages
								</li>

								<li>
									<a href="#">
										<img src="/diguniu/Public/ace/assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Alex:</span>
												Ciao sociis natoque penatibus et auctor ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>a moment ago</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="/diguniu/Public/ace/assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Susan:</span>
												Vestibulum id ligula porta felis euismod ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>20 minutes ago</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="/diguniu/Public/ace/assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Bob:</span>
												Nullam quis risus eget urna mollis ornare ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>3:15 pm</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										See all messages
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="/diguniu/Public/ace/assets/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									Jason
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
								<li>
									<a href="#">
										<i class="icon-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="#">
										<i class="icon-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="#">
										<i class="icon-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul><!--/.ace-nav-->
				</div><!--/.container-fluid-->
			</div><!--/.navbar-inner-->
		</div>

		<div class="main-container container-fluid">
			<a class="menu-toggler" id="menu-toggler" href="#">
				<span class="menu-text"></span>
			</a>

			<div class="sidebar" id="sidebar">
				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-small btn-success">
							<i class="icon-signal"></i>
						</button>

						<button class="btn btn-small btn-info">
							<i class="icon-pencil"></i>
						</button>

						<button class="btn btn-small btn-warning">
							<i class="icon-group"></i>
						</button>

						<button class="btn btn-small btn-danger">
							<i class="icon-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!--#sidebar-shortcuts-->

				<?php echo ($htmltree); ?>
				
				<div class="sidebar-collapse" id="sidebar-collapse">
					<i class="icon-double-angle-left"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="breadcrumbs" id="breadcrumbs">
					<ul class="breadcrumb">
						<li>
							<i class="icon-home home-icon"></i>
							<a href="#">Home</a>

							<span class="divider">
								<i class="icon-angle-right arrow-icon"></i>
							</span>
						</li>

						<li>
							<a href="#">Forms</a>

							<span class="divider">
								<i class="icon-angle-right arrow-icon"></i>
							</span>
						</li>
						<li class="active">Wizard &amp; Validation</li>
					</ul><!--.breadcrumb-->

					<div class="nav-search" id="nav-search">
						<form class="form-search" />
							<span class="input-icon">
								<input type="text" placeholder="Search ..." class="input-small nav-search-input" id="nav-search-input" autocomplete="off" />
								<i class="icon-search nav-search-icon"></i>
							</span>
						</form>
					</div><!--#nav-search-->
				</div>
				
				<!--basic scripts-->

		<!--[if !IE]>-->
        <!--
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        -->
		<!--<![endif]-->

		<!--[if IE]>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<![endif]-->

		<!--[if !IE]>-->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='/diguniu/Public/ace/assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!--<![endif]-->

		<!--[if IE]>
		<script type="text/javascript">
			window.jQuery || document.write("<script src='/diguniu/Public/ace/assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
		</script>
		<![endif]-->
		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='/diguniu/Public/ace/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="/diguniu/Public/ace/assets/js/bootstrap.min.js"></script>


		<!--ace scripts-->

		<script src="/diguniu/Public/ace/assets/js/ace-elements.min.js"></script>
		<script src="/diguniu/Public/ace/assets/js/ace.min.js"></script>
				
				﻿				<link rel="stylesheet" href="/diguniu/Public/ace/assets/css/select2.css" />
				<div class="page-content">
					<div class="page-header position-relative">
						<h1>
							菜单管理
							<small>
								<i class="icon-double-angle-right"></i>
								编辑菜单
							</small>
						</h1>
					</div><!--/.page-header-->

					<div class="row-fluid">
						<div class="span12">
							<!--PAGE CONTENT BEGINS-->
							
							<div class="row-fluid">
								<div class="span12">
									<div class="widget-box">
										<div class="widget-header widget-header-blue widget-header-flat">
											<h4 class="lighter">编辑菜单信息</h4>

											
										</div>

										<div class="widget-body">
											<div class="widget-main">
												<div class="row-fluid">
												
													<div class="step-content row-fluid position-relative" id="step-container">
														<div class="step-pane active" id="step1">
															<h3 class="lighter block green">在下面输入菜单信息</h3>

															<form  id="validation-form" method="post" action="<?php echo U('save');?>" />
																<div class="control-group">
																	<label class="control-label" for="name">菜单名称:</label>

																	<div class="controls">
																		<div class="span12">
																			<input type="text" name="name" id="name" class="span4" value="<?php echo ($menu["name"]); ?>" />
																		</div>
																	</div>
																</div>

																<div class="control-group">
																	<label class="control-label" for="pid">上级菜单:</label>

																	<div class="controls">
																		<div class="span12">
																			<select name="pid" id="pid">
																			<?php if(is_array($menus)): $i = 0; $__LIST__ = $menus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php if($vo['id']==$menu['pid']):?> "selected" <?php endif;?>> <?php echo ($vo["html"]); echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>	
																			</select>
																		</div>
																	</div>
																</div>

																<div class="control-group">
																	<label class="control-label" for="url">链接地址:</label>

																	<div class="controls">
																		<div class="span12">
																			<input type="text" name="url" id="url" class="span4" value="<?php echo ($menu["url"]); ?>" />
																		</div>
																	</div>
																</div>
																<div class="control-group">
																	<label class="control-label" for="sort">排序:</label>

																	<div class="controls">
																		<div class="span12">
																			<input type="text" name="sort" id="sort" class="span4" value="<?php echo ($menu["sort"]); ?>" />
																		</div>
																	</div>
																</div>
																<div class="control-group">
																	<label class="control-label" for="icon">图标:</label>

																	<div class="controls">
																		<div class="span10 input-append input-prepend input-icon">
			
																			<input type="text" name="icon" id="icon" class="span4" value="<?php echo ($menu["icon"]); ?>" />
																			<i></i>
																			<span class="btn btn-small btn-primary" data-toggle="modal" data-target="#myModal">选择</span>
									
																		</div>
																		
																	</div>
																</div>
																
																<input type="hidden" name="menuid" value="<?php echo ($menu["id"]); ?>"/>
															
														</div>

														
													</div>

													<hr />
													<div class="form-actions">
														<button type="submit" class="btn btn-info">
														<i class="icon-ok bigger-110"></i>
															提交
															</button>

																	&nbsp; &nbsp; &nbsp;
														<button type="reset" class="btn">
														<i class="icon-undo bigger-110"></i>
															重置
														</button>
													</div>
													</form>
												</div>
											</div><!--/widget-main-->
										</div><!--/widget-body-->
									</div>
								</div>
							</div>

							<!--PAGE CONTENT ENDS-->
						</div><!--/.span-->
					</div><!--/.row-fluid-->
				</div><!--/.page-content-->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:800px;left:40%">
		
						<div class="row-fluid">
								<div class="row-fluid">
									<h3 class="header smaller lighter blue">
										在下面选择合适的图标
									</h3>
								</div>
		
								<div class="row-fluid">
									<div class="span3">
										<ul class="unstyled the-icons">
											<li>
												<i class="icon-adjust"></i>
												icon-adjust
											</li>
											
											<li>
												<i class="icon-asterisk"></i>
												icon-asterisk
											</li>

											<li>
												<i class="icon-ban-circle"></i>
												icon-ban-circle
											</li>

											<li>
												<i class="icon-bar-chart"></i>
												icon-bar-chart
											</li>

											<li>
												<i class="icon-barcode"></i>
												icon-barcode
											</li>

											<li>
												<i class="icon-beaker"></i>
												icon-beaker
											</li>

											<li>
												<i class="icon-beer"></i>
												icon-beer
											</li>

											<li>
												<i class="icon-bell"></i>
												icon-bell
											</li>

											<li>
												<i class="icon-bell-alt"></i>
												icon-bell-alt
											</li>

											<li>
												<i class="icon-bolt"></i>
												icon-bolt
											</li>

											<li>
												<i class="icon-book"></i>
												icon-book
											</li>

											<li>
												<i class="icon-bookmark"></i>
												icon-bookmark
											</li>

											<li>
												<i class="icon-bookmark-empty"></i>
												icon-bookmark-empty
											</li>

											<li>
												<i class="icon-briefcase"></i>
												icon-briefcase
											</li>

											<li>
												<i class="icon-bullhorn"></i>
												icon-bullhorn
											</li>

											<li>
												<i class="icon-calendar"></i>
												icon-calendar
											</li>

											<li>
												<i class="icon-camera"></i>
												icon-camera
											</li>

											<li>
												<i class="icon-camera-retro"></i>
												icon-camera-retro
											</li>

											<li>
												<i class="icon-certificate"></i>
												icon-certificate
											</li>
										</ul>
									</div>

									<div class="span3">
										<ul class="unstyled the-icons">
											<li>
												<i class="icon-check"></i>
												icon-check
											</li>

											<li>
												<i class="icon-check-empty"></i>
												icon-check-empty
											</li>

											<li>
												<i class="icon-circle"></i>
												icon-circle
											</li>

											<li>
												<i class="icon-circle-blank"></i>
												icon-circle-blank
											</li>

											<li>
												<i class="icon-cloud"></i>
												icon-cloud
											</li>

											<li>
												<i class="icon-cloud-download"></i>
												icon-cloud-download
											</li>

											<li>
												<i class="icon-cloud-upload"></i>
												icon-cloud-upload
											</li>

											<li>
												<i class="icon-coffee"></i>
												icon-coffee
											</li>

											<li>
												<i class="icon-cog"></i>
												icon-cog
											</li>

											<li>
												<i class="icon-cogs"></i>
												icon-cogs
											</li>

											<li>
												<i class="icon-comment"></i>
												icon-comment
											</li>

											<li>
												<i class="icon-comment-alt"></i>
												icon-comment-alt
											</li>

											<li>
												<i class="icon-comments"></i>
												icon-comments
											</li>

											<li>
												<i class="icon-comments-alt"></i>
												icon-comments-alt
											</li>

											<li>
												<i class="icon-credit-card"></i>
												icon-credit-card
											</li>

											<li>
												<i class="icon-dashboard"></i>
												icon-dashboard
											</li>

											<li>
												<i class="icon-desktop"></i>
												icon-desktop
											</li>

											<li>
												<i class="icon-download"></i>
												icon-download
											</li>

											<li>
												<i class="icon-download-alt"></i>
												icon-download-alt
											</li>
										</ul>
									</div>

									<div class="span3">
										<ul class="unstyled the-icons">
											<li>
												<i class="icon-edit"></i>
												icon-edit
											</li>

											<li>
												<i class="icon-envelope"></i>
												icon-envelope
											</li>

											<li>
												<i class="icon-envelope-alt"></i>
												icon-envelope-alt
											</li>

											<li>
												<i class="icon-exchange"></i>
												icon-exchange
											</li>

											<li>
												<i class="icon-exclamation-sign"></i>
												icon-exclamation-sign
											</li>

											<li>
												<i class="icon-external-link"></i>
												icon-external-link
											</li>

											<li>
												<i class="icon-eye-close"></i>
												icon-eye-close
											</li>

											<li>
												<i class="icon-eye-open"></i>
												icon-eye-open
											</li>

											<li>
												<i class="icon-facetime-video"></i>
												icon-facetime-video
											</li>

											<li>
												<i class="icon-fighter-jet"></i>
												icon-fighter-jet
											</li>

											<li>
												<i class="icon-film"></i>
												icon-film
											</li>

											<li>
												<i class="icon-filter"></i>
												icon-filter
											</li>

											<li>
												<i class="icon-fire"></i>
												icon-fire
											</li>

											<li>
												<i class="icon-flag"></i>
												icon-flag
											</li>

											<li>
												<i class="icon-folder-close"></i>
												icon-folder-close
											</li>

											<li>
												<i class="icon-folder-open"></i>
												icon-folder-open
											</li>

											<li>
												<i class="icon-folder-close-alt"></i>
												icon-folder-close-alt
											</li>

											<li>
												<i class="icon-folder-open-alt"></i>
												icon-folder-open-alt
											</li>

											<li>
												<i class="icon-food"></i>
												icon-food
											</li>
										</ul>
									</div>

									<div class="span3">
										<ul class="unstyled the-icons">
											<li>
												<i class="icon-gift"></i>
												icon-gift
											</li>

											<li>
												<i class="icon-glass"></i>
												icon-glass
											</li>

											<li>
												<i class="icon-globe"></i>
												icon-globe
											</li>

											<li>
												<i class="icon-group"></i>
												icon-group
											</li>

											<li>
												<i class="icon-hdd"></i>
												icon-hdd
											</li>

											<li>
												<i class="icon-headphones"></i>
												icon-headphones
											</li>

											<li>
												<i class="icon-heart"></i>
												icon-heart
											</li>

											<li>
												<i class="icon-heart-empty"></i>
												icon-heart-empty
											</li>

											<li>
												<i class="icon-home"></i>
												icon-home
											</li>

											<li>
												<i class="icon-inbox"></i>
												icon-inbox
											</li>

											<li>
												<i class="icon-info-sign"></i>
												icon-info-sign
											</li>

											<li>
												<i class="icon-key"></i>
												icon-key
											</li>

											<li>
												<i class="icon-leaf"></i>
												icon-leaf
											</li>

											<li>
												<i class="icon-laptop"></i>
												icon-laptop
											</li>

											<li>
												<i class="icon-legal"></i>
												icon-legal
											</li>

											<li>
												<i class="icon-lemon"></i>
												icon-lemon
											</li>

											<li>
												<i class="icon-lightbulb"></i>
												icon-lightbulb
											</li>

											<li>
												<i class="icon-lock"></i>
												icon-lock
											</li>

											<li>
												<i class="icon-unlock"></i>
												icon-unlock
											</li>
										</ul>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-mini btn-primary" data-dismiss="modal">关闭</button>
								</div>
							</div>
							</div>


		<!--page specific plugin scripts-->

		<script src="/diguniu/Public/ace/assets/js/fuelux/fuelux.wizard.min.js"></script>
		<script src="/diguniu/Public/ace/assets/js/jquery.validate.min.js"></script>
		<script src="/diguniu/Public/ace/assets/js/additional-methods.min.js"></script>
		<script src="/diguniu/Public/ace/assets/js/bootbox.min.js"></script>
		<script src="/diguniu/Public/ace/assets/js/jquery.maskedinput.min.js"></script>
		<script src="/diguniu/Public/ace/assets/js/select2.min.js"></script>

		<!--inline scripts related to this page-->
		<style>
			.current-menu{
				background-color:blue;
			}
		</style>
		<script type="text/javascript">
			$(function() {
			
				$('#validation-form').validate({
					errorElement: 'span',
					errorClass: 'help-inline',
					focusInvalid: false,
					rules: {
						name: {
							required: true,
						},
						url: {
							required: true,
							
						},
						pid: {
							required: true,
							
						},
						
						
					},
			
					messages: {
						name:{
							required:"请输入菜单名称",
						},
						url: {
							required: "请输入菜单地址.",
							
						},
						pid: {
							reeuried:"请选择上级分类",
						}
						
					},
			
					invalidHandler: function (event, validator) { //display error alert on form submit   
						$('.alert-error', $('.login-form')).show();
					},
			
					highlight: function (e) {
						$(e).closest('.control-group').removeClass('info').addClass('error');
					},
			
					success: function (e) {
						$(e).closest('.control-group').removeClass('error').addClass('info');
						$(e).remove();
					},
			
					errorPlacement: function (error, element) {
						if(element.is(':checkbox') || element.is(':radio')) {
							var controls = element.closest('.controls');
							if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
							else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
						}
						else if(element.is('.select2')) {
							error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
						}
						else if(element.is('.chzn-select')) {
							error.insertAfter(element.siblings('[class*="chzn-container"]:eq(0)'));
						}
						else error.insertAfter(element);
					},
			
					
				});
			
				$('#modal-wizard .modal-header').ace_wizard();
				$('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');
				
				//选择图标
				$(".row-fluid").find("li").mousemove(function(){
					$(this).addClass("btn-success");
				});
				//取消选中
				//选择图标
				$(".row-fluid").find("li").mouseout(function(){
					$(this).removeClass("btn-success");
				});
				//选择图标
				$(".row-fluid").find("li").click(function(){
					//$("#icon").val($(this).html());
					var icon=$(this).find("i").prop("outerHTML");
					var icon_class=$(this).find("i").attr("class");
					//alert(icon_class);
					$("#icon").val(icon);
					$("#icon").next("i").removeClass();
					$("#icon").next("i").addClass(icon_class);
					$('#myModal').modal('hide');
				});
			})
		</script>



				<div class="ace-settings-container" id="ace-settings-container">
					<div class="btn btn-app btn-mini btn-warning ace-settings-btn" id="ace-settings-btn">
						<i class="icon-cog bigger-150"></i>
					</div>

					<div class="ace-settings-box" id="ace-settings-box">
						<div>
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
									<option data-class="default" value="#438EB9" />#438EB9
									<option data-class="skin-1" value="#222A2D" />#222A2D
									<option data-class="skin-2" value="#C6487E" />#C6487E
									<option data-class="skin-3" value="#D0D0D0" />#D0D0D0
								</select>
							</div>
							<span>&nbsp; Choose Skin</span>
						</div>

						<div>
							<input type="checkbox" class="ace-checkbox-2" id="ace-settings-header" />
							<label class="lbl" for="ace-settings-header"> Fixed Header</label>
						</div>

						<div>
							<input type="checkbox" class="ace-checkbox-2" id="ace-settings-sidebar" />
							<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
						</div>

						<div>
							<input type="checkbox" class="ace-checkbox-2" id="ace-settings-breadcrumbs" />
							<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
						</div>

						<div>
							<input type="checkbox" class="ace-checkbox-2" id="ace-settings-rtl" />
							<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
						</div>
					</div>
				</div><!--/#ace-settings-container-->
			</div><!--/.main-content-->
		</div><!--/.main-container-->

		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse">
			<i class="icon-double-angle-up icon-only bigger-110"></i>
		</a>

	</body>
</html>