<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>E-APIK | Elektrik Administrasi Pegawai Izin Keluar</title>

	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.css" rel="stylesheet" type="text/css">

	<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>

	<script type="text/javascript" src="assets/js/plugins/forms/validation/validate.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>	

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/login.js"></script>
	<style type="text/css">
		body {
			background-image:url(assets/pnmbo.jpg);
			background-size:cover;
			background-attachment: fixed;
		}
	</style>


</head>

<body class="login-container">

	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">
				

					<?php 
					if(isset($_GET['alert'])){
						if($_GET['alert']=="gagal"){
							echo "<center><span class='alert alert-danger'>LOGIN GAGAL! USERNAME DAN PASSWORD TIDAK SESUAI</span><center>";
						}
					}
					?>
					<br/>
					<br/>
					
					<form action="index_act.php" method="post">
						<div class="col-md-6 col-md-offset-3">
							<div class="panel panel-body">
								<div class="col-md-6">
									<center>			
										<br/>							
										<br/>							
										<br/>							
										<br/>							
										<br/>							
										<img src="assets/logo.png" style="width: 60%;height: auto">
									</center>
								</div>
								<div class="col-md-6">
									<div class="text-center">								
										<h1 class="content-group-lg"><b>E-APIK </b><br/>Elektrik Administrasi Pegawai Izin Keluar</h1>
									</div>							
									<br/>
									<div class="form-group has-feedback has-feedback-left">
										<input type="text" class="form-control" placeholder="Username" name="username" required="required">
										<div class="form-control-feedback">
											<i class="icon-user text-muted"></i>
										</div>
									</div>

									<div class="form-group has-feedback has-feedback-left">
										<input type="password" class="form-control" placeholder="Password" name="password" required="required">
										<div class="form-control-feedback">
											<i class="icon-lock2 text-muted"></i>
										</div>
									</div>

									<div class="form-group has-feedback has-feedback-left">
										<select class="form-control" name="akses" required="required">
											<option value="">-PILIH-</option>
											<option value="superadmin">Super Admin</option>
											<option value="admin">Admin</option>									
											<option value="ketua">Ketua</option>									
											<option value="pegawai">Pegawai</option>
										</select>
										<div class="form-control-feedback">
											<i class="icon-lock2 text-muted"></i>
										</div>
									</div>


									<div class="form-group">
										<button type="submit" class="btn bg-success btn-block">Login <i class="icon-circle-right2 position-right"></i></button>
									</div>
								</div>

								
								<br/>
								
							</form>
						</div>
					</div>


				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
