<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>E-APIK | Elektrik Administrasi Pegawai Izin Keluar</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="../assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/colors.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/style.css" rel="stylesheet" type="text/css">
	<link href="../assets/js/plugins/datatable/datatable.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="../assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="../assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/loaders/blockui.min.js"></script>
	<script type="text/javascript" src="../assets/js/core/libraries/jquery-ui.js"></script>	
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="../assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/pickers/daterangepicker.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/datatable/jquery.dataTables.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/datatable/datatables.js"></script>

	<script type="text/javascript" src="../assets/js/core/app.js"></script>
	<!-- <script type="text/javascript" src="../assets/js/pages/dashboard.js"></script> -->
	<!-- /theme JS files -->
	<?php 
	session_start();
	if($_SESSION['status'] != "admin_login"){
		header("location:../index.php");
	}
	?>

	<?php include '../config.php'; ?>
</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-default header-highlight">
		<div class="navbar-header">
			<!-- <a class="navbar-brand" href="index.html"><img src="../assets/images/logo_light.png" alt=""></a> -->
			<a class="navbar-brand" href="index.php">
				<!-- 	<img src="../assets/images/logo_light.png" alt=""> -->
			</a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
				
			</ul>

			<p class="navbar-text"><span class=""><b>E-APIK | Elektrik Administrasi Pegawai Izin Keluar</b></span></p>
			
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<a href="#" class="media-left"><img src="../assets/images/unknown.jpg" class="img-circle img-sm" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold"><?php echo $_SESSION['nama']; ?></span>
									<div class="text-size-mini text-muted">
										ADMIN
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">
								<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
								<li class="active"><a href="index.php"><i class="icon-home4"></i> <span>Beranda</span></a></li>														
								<li><a href="pegawai.php"><i class="icon-user"></i> <span>Pegawai</span></a></li>
								<!-- <li class="">
									<a href="#" class="has-ul"><i class="icon-stack2"></i> <span>Cuti</span></a>
									<ul class="hidden-ul" style="display: none;">
										<li><a href="permohonan.php"><span>Status Permohonan Cuti</span></a></li>								
										<li><a href="permohonan_dikonfir.php"><span>Permohonan Cuti</span></a></li>
									</ul>
								</li> -->
								<li><a href="ijin.php"><i class="icon-stack2"></i><span>Status Izin Keluar</span></a></li>								
								<li><a href="ijin_dikonfir.php"><i class="icon-stack2"></i><span>Permohonan Izin Keluar</span></a></li>						
								<li><a href="notifikasi.php"><i class="icon-bell3"></i> <span>Notifikasi</span></a></li>								
								<li><a href="profil.php"><i class="icon-user"></i> <span>Profil</span></a></li>								
								<li><a href="gantipassword.php"><i class="icon-wrench"></i> <span>Ganti Password</span></a></li>
								<li><a href="logout.php"><i class="icon-switch2"></i> <span>Logout</span></a></li>								
							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->


			