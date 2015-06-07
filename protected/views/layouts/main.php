<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9" lang="en" class="no-js"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
	<title>Counties Statistics Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="KingAdmin - Bootstrap Admin Dashboard Theme">
	<meta name="author" content="The Develovers">

	<!-- CSS -->
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/main.css" rel="stylesheet" type="text/css">
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/my-custom-styles.css" rel="stylesheet" type="text/css">

	<!--[if lte IE 9]>
	<link href="<?php echo Yii::app()->request->baseUrl; ?>assets/css/main-ie.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/main-ie-part2.css" rel="stylesheet" type="text/css"/>
	<![endif]-->

	<!-- Fav and touch icons -->
	<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/ico/favicon.png">
</head>

<body class="dashboard">
<!-- WRAPPER -->
<div class="wrapper">
<!-- TOP BAR -->
<div class="top-bar">
<div class="container">
<div class="row">
<!-- logo -->
<div class="col-md-2 logo">
	<a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/img/logo-white.png" alt="Counties Statistics" /></a>
	<h1 class="sr-only">County Statistics Application</h1>
</div>
<!-- end logo -->
<div class="col-md-10">
<div class="row">
<div class="col-md-3">
</div>
<div class="col-md-9">
<div class="top-bar-right">
<!-- responsive menu bar icon -->
<a href="index.html#" class="hidden-md hidden-lg main-nav-toggle"><i class="fa fa-bars"></i></a>
<!-- end responsive menu bar icon -->
<button type="button" id="global-volume" class="btn btn-link btn-global-volume"><i class="fa"></i></button>
<!-- logged user and the menu -->
<div class="logged-user">
	<div class="btn-group">
		<a href="index.html#" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/img/user-avatar.png" alt="User Avatar" />
			<span class="name">User</span> <span class="caret"></span>
		</a>
		<ul class="dropdown-menu" role="menu">
			<li>
				<a href="index.html#">
					<i class="fa fa-user"></i>
					<span class="text">Profile</span>
				</a>
			</li>
			<li>
				<a href="index.html#">
					<i class="fa fa-cog"></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="index.html#">
					<i class="fa fa-power-off"></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</div>
</div>
<!-- end logged user and the menu -->
</div>
<!-- /top-bar-right -->
</div>
</div>
<!-- /row -->
</div>
</div>
<!-- /row -->
</div>
<!-- /container -->
</div>
<!-- /top -->
<!-- BOTTOM: LEFT NAV AND RIGHT MAIN CONTENT -->
<div class="bottom">
<div class="container">
<div class="row">
<!-- left sidebar -->
<div class="col-md-2 left-sidebar">
	<!-- main-nav -->
	<nav class="main-nav">
		<ul class="main-menu">
			<li class="active">
				<a href="index.html#" class="js-sub-menu-toggle">
					<i class="fa fa-dashboard fa-fw"></i><span class="text">Dashboard</span>
					<i class="toggle-icon fa fa-angle-down"></i>
				</a>
				<ul class="sub-menu open">
					<li class="active"><a href="index.html"><span class="text">Dashboard v1</span></a></li>
					<li><a href="index-dashboard-v2.html"><span class="text">Dashboard v2 <span class="badge element-bg-color-blue">New</span></span></a></li>
				</ul>
			</li>

			<li>
				<a href="index.html#" class="js-sub-menu-toggle">
					<i class="fa fa-bar-chart-o fw"></i><span class="text">Charts &amp; Statistics</span>
					<i class="toggle-icon fa fa-angle-left"></i>
				</a>
				<ul class="sub-menu ">
					<li><a href="charts-statistics.html"><span class="text">Charts</span></a></li>
					<li><a href="charts-statistics-interactive.html"><span class="text">Interactive Charts</span></a></li>
					<li><a href="charts-statistics-real-time.html"><span class="text">Realtime Charts</span></a></li>
					<li><a href="charts-d3charts.html"><span class="text">D3 Charts</span></a></li>
				</ul>
			</li>
			<li>
				<a href="index.html#" class="js-sub-menu-toggle">
					<i class="fa fa-edit fw"></i><span class="text">Forms</span>
					<i class="toggle-icon fa fa-angle-left"></i>
				</a>
				<ul class="sub-menu ">
					<li><a href="form-inplace-editing.html"><span class="text">In-place Editing</span></a></li>
					<li><a href="form-elements.html"><span class="text">Form Elements</span></a></li>
					<li><a href="form-layouts.html"><span class="text">Form Layouts</span></a></li>
					<li><a href="form-bootstrap-elements.html"><span class="text">Bootstrap Elements</span></a></li>
					<li><a href="form-validations.html"><span class="text">Validation</span></a></li>
					<li><a href="form-file-upload.html"><span class="text">File Upload</span></a></li>
					<li><a href="form-text-editor.html"><span class="text">Text Editor</span></a></li>
				</ul>
			</li>
			<li>
				<a href="index.html#" class="js-sub-menu-toggle">
					<i class="fa fa-list-alt fw"></i><span class="text">UI Elements</span>
					<i class="toggle-icon fa fa-angle-left"></i>
				</a>
				<ul class="sub-menu ">
					<li><a href="ui-elements-general.html"><span class="text">General Elements</span></a></li>
					<li><a href="ui-elements-tabs.html"><span class="text">Tabs</span></a></li>
					<li><a href="ui-elements-buttons.html"><span class="text">Buttons</span></a></li>
					<li><a href="ui-elements-icons.html"><span class="text">Icons <span class="badge element-bg-color-blue">Updated</span></span></a></li>
					<li><a href="ui-elements-flash-message.html"><span class="text">Flash Message</span></a></li>
				</ul>
			</li>
			<li>
				<a href="widgets.html">
					<i class="fa fa-puzzle-piece fa-fw"></i><span class="text">Widgets <span class="badge element-bg-color-blue">Updated</span></span>
				</a>
			</li>
			<li>
				<a href="index.html#" class="js-sub-menu-toggle">
					<i class="fa fa-gears fw"></i><span class="text">Components</span>
					<i class="toggle-icon fa fa-angle-left"></i>
				</a>
				<ul class="sub-menu ">
					<li><a href="components-wizard.html"><span class="text">Wizard (with validation)</span></a></li>
					<li><a href="components-calendar.html"><span class="text">Calendar</span></a></li>
					<li><a href="components-maps.html"><span class="text">Maps</span></a></li>
					<li><a href="components-gallery.html"><span class="text">Gallery</span></a></li>
					<li><a href="components-tree-view.html"><span class="text">Tree View <span class="badge element-bg-color-blue">New</span></span></a></li>
				</ul>
			</li>
			<li>
				<a href="index.html#" class="js-sub-menu-toggle">
					<i class="fa fa-table fw"></i><span class="text">Tables</span>
					<i class="toggle-icon fa fa-angle-left"></i>
				</a>
				<ul class="sub-menu ">
					<li><a href="tables-static-table.html"><span class="text">Static Table</span></a></li>
					<li><a href="tables-dynamic-table.html"><span class="text">Dynamic Table</span></a></li>
				</ul>
			</li>
			<li><a href="typography.html"><i class="fa fa-font fa-fw"></i><span class="text">Typography</span></a></li>
			<li>
				<a href="index.html#" class="js-sub-menu-toggle"><i class="fa fa-bars"></i>
					<span class="text">Menu Lvl 1 <span class="badge element-bg-color-blue">New</span></span>
					<i class="toggle-icon fa fa-angle-left"></i>
				</a>
				<ul class="sub-menu">
					<li class="">
						<a href="index.html#" class="js-sub-menu-toggle">
							<span class="text">Menu Lvl 2</span>
							<i class="toggle-icon fa fa-angle-left"></i>
						</a>
						<ul class="sub-menu">
							<li><a href="index.html#">Menu Lvl 3</a></li>
							<li><a href="index.html#">Menu Lvl 3</a></li>
							<li><a href="index.html#">Menu Lvl 3</a></li>
						</ul>
					</li>
					<li>
						<a href="index.html#">
							<span class="text">Menu Lvl 2</span>
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</nav>
	<!-- /main-nav -->
	<div class="sidebar-minified js-toggle-minified">
		<i class="fa fa-angle-left"></i>
	</div>
</div>
<!-- end left sidebar -->
<!-- top general alert -->
<div class="alert alert-danger top-general-alert">
	<span>If you <strong>can't see the logo</strong> on the top left, please reset the style on right style switcher (for upgraded theme only).</span>
	<button type="button" class="close">&times;</button>
</div>
<!-- end top general alert -->
<!-- content-wrapper -->
<div class="col-md-10 content-wrapper">
<div class="row">
	<div class="col-md-4 ">
		<ul class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="index.html#">Home</a></li>
			<li class="active">Dashboard</li>
		</ul>
	</div>
	<div class="col-md-8 ">
		<div class="top-content">
			<ul class="list-inline mini-stat">
				<li>
					<h5>LIKES <span class="stat-value stat-color-orange"><i class="fa fa-plus-circle"></i> 81,450</span></h5>
					<span id="mini-bar-chart1" class="mini-bar-chart"></span>
				</li>
				<li>
					<h5>SUBSCRIBERS <span class="stat-value stat-color-blue"><i class="fa fa-plus-circle"></i> 150,743</span></h5>
					<span id="mini-bar-chart2" class="mini-bar-chart"></span>
				</li>
				<li>
					<h5>CUSTOMERS <span class="stat-value stat-color-seagreen"><i class="fa fa-plus-circle"></i> 43,748</span></h5>
					<span id="mini-bar-chart3" class="mini-bar-chart"></span>
				</li>
			</ul>
		</div>
	</div>
</div>

</div>
	<?php echo $content; ?>
	<!-- /main -->
</div>
<!-- /content-wrapper -->
</div>
<!-- /row -->
</div>
<!-- /container -->
</div>

<!-- Javascript -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/jquery/jquery-2.1.0.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/plugins/modernizr/modernizr.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/plugins/bootstrap-tour/bootstrap-tour.custom.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/king-common.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/demo-style-switcher/assets/js/deliswitch.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/plugins/stat/jquery.easypiechart.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/plugins/raphael/raphael-2.1.0.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/plugins/stat/flot/jquery.flot.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/plugins/stat/flot/jquery.flot.resize.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/plugins/stat/flot/jquery.flot.time.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/plugins/stat/flot/jquery.flot.pie.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/plugins/stat/flot/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/plugins/datatable/jquery.dataTables.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/plugins/datatable/dataTables.bootstrap.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/plugins/jquery-mapael/jquery.mapael.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/plugins/raphael/maps/usa_states.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/king-chart-stat.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/king-table.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/king-components.js"></script>

</body>

</html>
