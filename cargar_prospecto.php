<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<title>Form Validation | Melon - Flat &amp; Responsive Admin Template</title>

	<!--=== CSS ===-->

	<!-- Bootstrap -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

	<!-- jQuery UI -->
	<!--<link href="plugins/jquery-ui/jquery-ui-1.10.2.custom.css" rel="stylesheet" type="text/css" />-->
	<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="plugins/jquery-ui/jquery.ui.1.10.2.ie.css"/>
	<![endif]-->

	<!-- Theme -->
	<link href="assets/css/main.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/icons.css" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" href="assets/css/fontawesome/font-awesome.min.css">
	<!--[if IE 7]>
		<link rel="stylesheet" href="assets/css/fontawesome/font-awesome-ie7.min.css">
	<![endif]-->

	<!--[if IE 8]>
		<link href="assets/css/ie8.css" rel="stylesheet" type="text/css" />
	<![endif]-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

	<!--=== JavaScript ===-->

	<script type="text/javascript" src="assets/js/libs/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>

	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/libs/lodash.compat.min.js"></script>

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="assets/js/libs/html5shiv.js"></script>
	<![endif]-->

	<!-- Smartphone Touch Events -->
	<script type="text/javascript" src="plugins/touchpunch/jquery.ui.touch-punch.min.js"></script>
	<script type="text/javascript" src="plugins/event.swipe/jquery.event.move.js"></script>
	<script type="text/javascript" src="plugins/event.swipe/jquery.event.swipe.js"></script>

	<!-- General -->
	<script type="text/javascript" src="assets/js/libs/breakpoints.js"></script>
	<script type="text/javascript" src="plugins/respond/respond.min.js"></script> <!-- Polyfill for min/max-width CSS3 Media Queries (only for IE8) -->
	<script type="text/javascript" src="plugins/cookie/jquery.cookie.min.js"></script>
	<script type="text/javascript" src="plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script type="text/javascript" src="plugins/slimscroll/jquery.slimscroll.horizontal.min.js"></script>

	<!-- Page specific plugins -->
	<!-- Charts -->
	<script type="text/javascript" src="plugins/sparkline/jquery.sparkline.min.js"></script>

	<script type="text/javascript" src="plugins/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="plugins/daterangepicker/daterangepicker.js"></script>
	<script type="text/javascript" src="plugins/blockui/jquery.blockUI.min.js"></script>

	<!-- Forms -->
	<script type="text/javascript" src="plugins/uniform/jquery.uniform.min.js"></script> <!-- Styled radio and checkboxes -->
	<script type="text/javascript" src="plugins/select2/select2.min.js"></script> <!-- Styled select boxes -->
	<script type="text/javascript" src="plugins/fileinput/fileinput.js"></script>

	<!-- Form Validation -->
	<script type="text/javascript" src="plugins/validation/jquery.validate.min.js"></script>
	<script type="text/javascript" src="plugins/validation/additional-methods.min.js"></script>

	<!-- Noty -->
	<script type="text/javascript" src="plugins/noty/jquery.noty.js"></script>
	<script type="text/javascript" src="plugins/noty/layouts/top.js"></script>
	<script type="text/javascript" src="plugins/noty/themes/default.js"></script>

	<!-- App -->
	<script type="text/javascript" src="assets/js/app.js"></script>
	<script type="text/javascript" src="assets/js/plugins.js"></script>
	<script type="text/javascript" src="assets/js/plugins.form-components.js"></script>

	<script>
	$(document).ready(function(){
		"use strict";

		App.init(); // Init layout and core plugins
		Plugins.init(); // Init all plugins
		FormComponents.init(); // Init all form-specific plugins
	});
	</script>

	<!-- Demo JS -->
	<script type="text/javascript" src="assets/js/custom.js"></script>
	<script type="text/javascript" src="assets/js/demo/form_validation.js"></script>
</head>

<body>

	<!-- Header -->
	<header class="header navbar navbar-fixed-top" role="banner">
		<!-- Top Navigation Bar -->
		<div class="container">

			<!-- Only visible on smartphones, menu toggle -->
			<ul class="nav navbar-nav">
				<li class="nav-toggle"><a href="javascript:void(0);" title=""><i class="icon-reorder"></i></a></li>
			</ul>

			<!-- Logo -->
			<a class="navbar-brand" href="index.html">
				<img src="assets/img/logo.png" alt="logo" />
				<strong>ME</strong>LON
			</a>
			<!-- /logo -->

			<!-- Sidebar Toggler -->
			<a href="#" class="toggle-sidebar bs-tooltip" data-placement="bottom" data-original-title="Toggle navigation">
				<i class="icon-reorder"></i>
			</a>
			<!-- /Sidebar Toggler -->

			<!-- Top Left Menu 
			<ul class="nav navbar-nav navbar-left hidden-xs hidden-sm">
				<li>
					<a href="#">
						Dashboard
					</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						Dropdown
						<i class="icon-caret-down small"></i>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#"><i class="icon-user"></i> Example #1</a></li>
						<li><a href="#"><i class="icon-calendar"></i> Example #2</a></li>
						<li class="divider"></li>
						<li><a href="#"><i class="icon-tasks"></i> Example #3</a></li>
					</ul>
				</li>
			</ul>
		Top Left Menu -->

			<!-- Top Right Menu -->	
			<ul class="nav navbar-nav navbar-right">
				<!-- Notifications -->
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-warning-sign"></i>
						<span class="badge">5</span>
					</a>
					<ul class="dropdown-menu extended notification">
						<li class="title">
							<p>You have 5 new notifications</p>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="label label-success"><i class="icon-plus"></i></span>
								<span class="message">New user registration.</span>
								<span class="time">1 mins</span>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="label label-danger"><i class="icon-warning-sign"></i></span>
								<span class="message">High CPU load on cluster #2.</span>
								<span class="time">5 mins</span>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="label label-success"><i class="icon-plus"></i></span>
								<span class="message">New user registration.</span>
								<span class="time">10 mins</span>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="label label-info"><i class="icon-bullhorn"></i></span>
								<span class="message">New items are in queue.</span>
								<span class="time">25 mins</span>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="label label-warning"><i class="icon-bolt"></i></span>
								<span class="message">Disk space to 85% full.</span>
								<span class="time">55 mins</span>
							</a>
						</li>
						<li class="footer">
							<a href="javascript:void(0);">View all notifications</a>
						</li>
					</ul>
				</li>

				<!-- Tasks -->
				

				<!-- Messages -->
			

				<!-- .row .row-bg Toggler -->
				<li>
					<a href="#" class="dropdown-toggle row-bg-toggle">
						<i class="icon-resize-vertical"></i>
					</a>
				</li>

				<!-- Project Switcher Button -->
				<li class="dropdown">
					<a href="#" class="project-switcher-btn dropdown-toggle">
						<i class="icon-cog"></i>
						<span>Adminsitrador</span>
					</a>
				</li>

				<!-- User Login Dropdown -->
				<li class="dropdown user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<!--<img alt="" src="assets/img/avatar1_small.jpg" />-->
						<i class="icon-male"></i>
						<span class="username">Ivan</span>
						<i class="icon-caret-down small"></i>
					</a>
					<ul class="dropdown-menu">
						<li><a href="pages_user_profile.html"><i class="icon-user"></i> My Profile</a></li>
						<li><a href="pages_calendar.html"><i class="icon-calendar"></i> My Calendar</a></li>
						<li><a href="#"><i class="icon-tasks"></i> My Tasks</a></li>
						<li class="divider"></li>
                                                <li><a href="logout.php"><i class="icon-key"></i> Log Out</a></li>
					</ul>
				</li>
				<!-- /user login dropdown -->
			</ul>
			<!-- /Top Right Menu -->
		</div>
		<!-- /top navigation bar -->

		<!--=== Project Switcher ===-->
		<div id="project-switcher" class="container project-switcher">
			<div id="scrollbar">
				<div class="handle"></div>
			</div>

			<div id="frame">
				<ul class="project-list">
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-user"></i></span>
							<span class="title">Cuenta de usuario</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-cog"></i></span>
							<span class="title">Parametros</span>
						</a>
					</li>
					<li class="current">
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-file"></i></span>
							<span class="title">Reportes</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-thumbs-up"></i></span>
							<span class="title">Sed diam nonumy</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-female"></i></span>
							<span class="title">At vero eos et</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-beaker"></i></span>
							<span class="title">Sed diam voluptua</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-desktop"></i></span>
							<span class="title">Lorem ipsum dolor</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-compass"></i></span>
							<span class="title">Dolor sit invidunt</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-male"></i></span>
							<span class="title">Consetetur sadipscing elitr</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-thumbs-up"></i></span>
							<span class="title">Sed diam nonumy</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-female"></i></span>
							<span class="title">At vero eos et</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-beaker"></i></span>
							<span class="title">Sed diam voluptua</span>
						</a>
					</li>
				</ul>
			</div> <!-- /#frame -->
		</div> <!-- /#project-switcher -->
	</header> <!-- /.header -->

	<div id="container">
		<div id="sidebar" class="sidebar-fixed">
			<div id="sidebar-content">

				<!-- Search Input -->
				<form class="sidebar-search">
					<div class="input-box">
						<button type="submit" class="submit">
							<i class="icon-search"></i>
						</button>
						<span>
							<input type="text" placeholder="Search...">
						</span>
					</div>
				</form>

				<!-- Search Results -->
				<div class="sidebar-search-results">

					<i class="icon-remove close"></i>
					<!-- Documents -->
					<div class="title">
						Documents
					</div>
					<ul class="notifications">
						<li>
							<a href="javascript:void(0);">
								<div class="col-left">
									<span class="label label-info"><i class="icon-file-text"></i></span>
								</div>
								<div class="col-right with-margin">
									<span class="message"><strong>John Doe</strong> received $1.527,32</span>
									<span class="time">finances.xls</span>
								</div>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);">
								<div class="col-left">
									<span class="label label-success"><i class="icon-file-text"></i></span>
								</div>
								<div class="col-right with-margin">
									<span class="message">My name is <strong>John Doe</strong> ...</span>
									<span class="time">briefing.docx</span>
								</div>
							</a>
						</li>
					</ul>
					<!-- /Documents -->
					<!-- Persons -->
					<div class="title">
						Persons
					</div>
					<ul class="notifications">
						<li>
							<a href="javascript:void(0);">
								<div class="col-left">
									<span class="label label-danger"><i class="icon-female"></i></span>
								</div>
								<div class="col-right with-margin">
									<span class="message">Jane <strong>Doe</strong></span>
									<span class="time">21 years old</span>
								</div>
							</a>
						</li>
					</ul>
				</div> <!-- /.sidebar-search-results -->

				<!--=== Navigation ===-->
				<ul id="nav">
					<li>
						<a href="index.html">
							<i class="icon-home"></i>
							inicio
						</a>
					</li>
					<li>
						<a href="cargar_prospecto.html">
							<i class="icon-plus"></i><i class="icon-user"></i>
							Subir prospectos
						</a>
					</li>
					<li>
						<a href="index.html">
							<i class="icon-dashboard"></i>
							Realizar venta
						</a>
					</li>
				
					
				
					
				
				</ul>
				
				<!-- /Navigation -->
				<div class="sidebar-title">
					<span>Notifications</span>
				</div>
				<ul class="notifications demo-slide-in"> <!-- .demo-slide-in is just for demonstration purposes. You can remove this. -->
					<li style="display: none;"> <!-- style-attr is here only for fading in this notification after a specific time. Remove this. -->
						<div class="col-left">
							<span class="label label-danger"><i class="icon-warning-sign"></i></span>
						</div>
						<div class="col-right with-margin">
							<span class="message">Server <strong>#512</strong> crashed.</span>
							<span class="time">few seconds ago</span>
						</div>
					</li>
					<li style="display: none;"> <!-- style-attr is here only for fading in this notification after a specific time. Remove this. -->
						<div class="col-left">
							<span class="label label-info"><i class="icon-envelope"></i></span>
						</div>
						<div class="col-right with-margin">
							<span class="message"><strong>John</strong> sent you a message</span>
							<span class="time">few second ago</span>
						</div>
					</li>
					<li>
						<div class="col-left">
							<span class="label label-success"><i class="icon-plus"></i></span>
						</div>
						<div class="col-right with-margin">
							<span class="message"><strong>Emma</strong>'s account was created</span>
							<span class="time">4 hours ago</span>
						</div>
					</li>
				</ul>

				<div class="sidebar-widget align-center">
					<div class="btn-group" data-toggle="buttons" id="theme-switcher">
						<label class="btn active">
							<input type="radio" name="theme-switcher" data-theme="bright"><i class="icon-sun"></i> Bright
						</label>
						<label class="btn">
							<input type="radio" name="theme-switcher" data-theme="dark"><i class="icon-moon"></i> Dark
						</label>
					</div>
				</div>

			</div>
			<div id="divider" class="resizeable"></div>
		</div>
		<!-- /Sidebar -->

		<div id="content">
			<div class="container">
				<!-- Breadcrumbs line -->
				<div class="crumbs">
					<ul id="breadcrumbs" class="breadcrumb">
						<li>
							<i class="icon-home"></i>
							<a href="index.html">Dashboard</a>
						</li>
						<li class="current">
							<a href="pages_calendar.html" title="">Calendar</a>
						</li>
					</ul>

					<ul class="crumb-buttons">
						<li><a href="charts.html" title=""><i class="icon-signal"></i><span>Statistics</span></a></li>
						<li class="dropdown"><a href="#" title="" data-toggle="dropdown"><i class="icon-tasks"></i><span>Users <strong>(+3)</strong></span><i class="icon-angle-down left-padding"></i></a>
							<ul class="dropdown-menu pull-right">
							<li><a href="form_components.html" title=""><i class="icon-plus"></i>Add new User</a></li>
							<li><a href="tables_dynamic.html" title=""><i class="icon-reorder"></i>Overview</a></li>
							</ul>
						</li>
						<li class="range"><a href="#">
							<i class="icon-calendar"></i>
							<span></span>
							<i class="icon-angle-down"></i>
						</a></li>
					</ul>
				</div>
				<!-- /Breadcrumbs line -->

				<!--=== Page Header ===-->
				<div class="page-header">
					<div class="page-title">
						<h3><i class="icon-user" style="font-size:40px"></i> SUBIR PROSPECTO</h3>
						<!--<span>Good morning, John!</span>-->
					</div>

					<!-- Page Stats -->
					
					<!-- /Page Stats -->
				</div>
				<!-- /Page Header -->

				<!--=== Page Content ===-->
				<div class="row">
			<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i>Ingrese los siguientes datos:</h4>
							</div>
							<div class="widget-content">
								<form class="form-horizontal row-border"  id="validate-1" action="#">
									<div class="form-group">
										<label class="col-md-2 control-label"> <span class="required">Nombre completo*</span></label>
										<div class="col-md-10">
											<input type="text" size="20"name="req1" class="form-control required">
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-2 control-label">Telefono: <span class="required">*</span></label>
										<div class="col-md-10">
											<div class="row">
												<div class="col-md-4">
													<input name="regular"  type="tel" class="form-control required"
													><span class="help-block">Número Teléfonico</span>
												</div>
												
												
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-2 control-label">Parentesco Drop:</label>
										<div class="col-md-10">
											
											<input class="form-control input-width-large" placeholder=".input-width-large" style="display: block; margin-top: 6px;" type="text">
																				</div>
									</div>

									
									<div class="form-actions">
										<input value="Validate Me" class="btn btn-primary pull-right" type="submit">
									</div>
								</form>
							</div>
						</div>
						
					</div>

					
				</div>
				<!-- /Page Content -->
			</div>
			<!-- /.container -->

		</div>
	</div>

</body>
</html>