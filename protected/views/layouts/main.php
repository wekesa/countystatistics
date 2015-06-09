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
<a href="#" class="hidden-md hidden-lg main-nav-toggle"><i class="fa fa-bars"></i></a>
<!-- end responsive menu bar icon -->
<button type="button" id="global-volume" class="btn btn-link btn-global-volume"><i class="fa"></i></button>
<!-- logged user and the menu -->
<div class="logged-user">
	<div class="btn-group">
		<a href="#" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
<!--			<img src="--><?php //echo Yii::app()->request->baseUrl; ?><!--/assets/img/user-avatar.png" alt="User Avatar" />-->
			<span class="name">User</span> <span class="caret"></span>
		</a>
		<ul class="dropdown-menu" role="menu">
			<li>
				<a href="#">
					<i class="fa fa-user"></i>
					<span class="text">Profile</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class="fa fa-cog"></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="#">
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
            <li  class="active"><a href="<?php echo Yii::app()->createAbsoluteUrl('site'); ?>#"><i class="fa fa-dashboard fa-fw"></i><span class="text">Dashboard</span></a></li>


            <li>
				<a href="#" class="js-sub-menu-toggle">
					<i class="fa fa-bar-chart-o fw"></i><span class="text">Malaria Prevalence</span>
					<i class="toggle-icon fa fa-angle-left"></i>
				</a>
				<ul class="sub-menu ">
					<li><a href="<?php echo Yii::app()->createAbsoluteUrl('malaria'); ?>"><span class="text">Tabular Data</span></a></li>
					<li><a href="<?php echo Yii::app()->createAbsoluteUrl('malaria/chart'); ?>"><span class="text">Realtime charts representation</span></a></li>
					<li><a href="#"><span class="text">Map representation</span></a></li>
				</ul>
			</li>
            <li>
                <a href="#" class="js-sub-menu-toggle">
                    <i class="fa fa-list-alt fw"></i><span class="text">Tuberculosis Prevalence</span>
                    <i class="toggle-icon fa fa-angle-left"></i>
                </a>
                <ul class="sub-menu ">
                    <li><a href="<?php echo Yii::app()->createAbsoluteUrl('tuberculosis'); ?>"><span class="text">Tabular Data</span></a></li>
                    <li><a href="<?php echo Yii::app()->createAbsoluteUrl('tuberculosis/tuberchart'); ?>"><span class="text">Realtime charts representation</span></a></li>
                    <li><a href="#"><span class="text">Map representation</span></a></li>
                </ul>
            </li>
			<li><a href="<?php echo Yii::app()->createAbsoluteUrl('site/help'); ?>"><i class="fa fa-font fa-eye"></i><span class="text">Help</span></a></li>
            <li><a href="<?php echo Yii::app()->createAbsoluteUrl('site/about'); ?>"><i class="fa fa-font fa-fw"></i><span class="text">About</span></a></li>


        </ul>
	</nav>
	<!-- /main-nav -->
	<div class="sidebar-minified js-toggle-minified">
		<i class="fa fa-angle-left"></i>
	</div>
</div>
<!-- end left sidebar -->
<!-- top general alert -->
<!-- end top general alert -->
<!-- content-wrapper -->
<div class="col-md-10 content-wrapper">
<div class="row">
	<div class="col-md-4 ">
		<ul class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="<?php echo Yii::app()->createAbsoluteUrl('site'); ?>">Home</a></li>
			<li class="active">Dashboard</li>
		</ul>
	</div>
	<div class="col-md-8 ">
		<div class="top-content">
			<ul class="list-inline mini-stat">
				<li>
					<h5>COUNTIES <span class="stat-value stat-color-orange"><i class="fa fa-plus-circle"></i> 47</span></h5>
					<span id="mini-bar-chart1" class="mini-bar-chart"></span>
				</li>
				<li>
					<h5>AVERAGE POPULATION <span class="stat-value stat-color-blue"><i class="fa fa-plus-circle"></i> 9,150,743</span></h5>
					<span id="mini-bar-chart2" class="mini-bar-chart"></span>
				</li>
				<li>
					<h5>AFFECTED NUMBER <span class="stat-value stat-color-seagreen"><i class="fa fa-plus-circle"></i> 643,748</span></h5>
					<span id="mini-bar-chart3" class="mini-bar-chart"></span>
				</li>
			</ul>
		</div>
	</div>
</div>
	<div class="content">
    <?php echo $content; ?>
</div>
</div>
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
