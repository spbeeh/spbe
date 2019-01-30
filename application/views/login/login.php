<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<php echo base_url('Asset/assets/img/apple-icon.png') ?>">
	<link rel="icon" type="image/png" href="<?php echo base_url('Asset/images/icons/favicon.ico') ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title><?php echo ucfirst($this->uri->segment(1)) ?></title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
		name='viewport' />
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<!-- CSS Files -->
	<link href="<?php echo base_url('Asset/assets/css/bootstrap.min.css') ?>" rel="stylesheet" />
	<link href="<?php echo base_url('Asset/assets/css/now-ui-kit.css?v=1.2.0') ?>" rel="stylesheet" />
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="<?php echo base_url('Asset/assets/demo/demo.css') ?>" rel="stylesheet" />
</head>

<body class="login-page sidebar-collapse">
	<!-- Navbar -->
	<!-- End Navbar -->
	<div class="page-header clear-filter" filter-color="orange">
		<div class="page-header-image"
			style="background-image:url(<?php echo base_url('Asset/assets/img/Tugu_Malang.jpg') ?>"></div>
		<div class="content">
			<div class="container">
				<div class="col-md-4 ml-auto mr-auto">
					<div class="card card-login card-plain">
						<form class="form" method="Post" action="<?php echo base_url('login') ?>" role="login">
							<div class="card-header text-center">
								<div class="logo-container">
									<img src="<?php echo base_url('Asset/assets/img/now-logo.png') ?>" alt="">
								</div>
							</div>
							<div class="card-body">
								<div class="input-group no-border input-lg" data-validate="number">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="now-ui-icons users_circle-08"></i>
										</span>
									</div>
									<input type="text" class="form-control" name="nip_pj" placeholder="NIP">
								</div>
								<div class="input-group no-border input-lg" data-validate="Password is required">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="now-ui-icons text_caps-small"></i>
										</span>
									</div>
									<input type="password" placeholder="Password" name="password"
										class="form-control" />
								</div>
							</div>
							<div class="card-footer text-center">
								<button type="submit" class="btn btn-primary btn-round btn-lg btn-block" name="submit"
									value="login">Login</button>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer class="footer">
		<div class="container">
			<div class="copyright" id="copyright">
				&copy;
				<script>
				document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
				</script>, Designed by
				<a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
				<a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
			</div>
		</div>
	</footer>
	</div>
	<!--   Core JS Files   -->
	<script src="<?php echo base_url('Asset/assets/js/core/jquery.min.js') ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('Asset/assets/js/core/popper.min.js') ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('Asset/assets/js/core/bootstrap.min.js') ?>" type="text/javascript"></script>
	<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
	<script src="<?php echo base_url('Asset/assets/js/plugins/bootstrap-switch.js') ?>"></script>
	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="<?php echo base_url('Asset/assets/js/plugins/nouislider.min.js') ?>" type="text/javascript"></script>
	<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
	<script src="<?php echo base_url('Asset/assets/js/plugins/bootstrap-datepicker.js') ?>" type="text/javascript">
	</script>
	<!--  Google Maps Plugin    -->
	<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
	<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
	<script src="<?php echo base_url('Asset/assets/js/now-ui-kit.js?v=1.2.0') ?>" type="text/javascript"></script>
</body>

</html>