<!DOCTYPE html>
<html lang="en">

<head>
	<title><?php echo ucfirst($this->uri->segment(1)) ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url('Asset/images/icons/favicon.ico') ?>" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		href="<?php echo base_url('Asset/vendor/bootstrap/css/bootstrap.min.css') ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		href="<?php echo base_url('Asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		href="<?php echo base_url('Asset/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('Asset/vendor/animate/animate.css') ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		href="<?php echo base_url('Asset/vendor/css-hamburgers/hamburgers.min.css') ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		href="<?php echo base_url('Asset/vendor/animsition/css/animsition.min.css') ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('Asset/vendor/select2/select2.min.css') ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		href="<?php echo base_url('Asset/vendor/daterangepicker/daterangepicker.css') ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('Asset/css/util.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('Asset/css/main.css') ?>">
	<!--===============================================================================================-->
</head>

<body style="background-color: #666666;">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="Post" action="<?php echo base_url('login') ?>"
					role="login">
					<span class="login100-form-title p-b-43">
						SPBE
					</span>

					<div class="wrap-input100 validate-input" data-validate="number">
						<input class="input100" type="text" name="nip_pj">
						<span class="focus-input100"></span>
						<span class="label-input100">NIP</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn" name="submit" value="login">Login
						</button>
					</div>
					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							<!-- or sign up using -->
						</span>
					</div>
				</form>
				<div class="login100-more"
					style="background-image: url('<?php echo base_url('Asset/images/teratai.jpg') ?>');">
				</div>
			</div>
		</div>
	</div>





	<!--===============================================================================================-->
	<script src="<?php echo base_url('Asset/vendor/jquery/jquery-3.2.1.min.js') ?>"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url('Asset/vendor/animsition/js/animsition.min.js') ?>"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url('Asset/vendor/bootstrap/js/popper.js') ?>"></script>
	<script src="<?php echo base_url('Asset/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url('Asset/vendor/select2/select2.min.js') ?>"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url('Asset/vendor/daterangepicker/moment.min.js') ?>"></script>
	<script src="<?php echo base_url('Asset/vendor/daterangepicker/daterangepicker.js') ?>"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url('Asset/vendor/countdowntime/countdowntime.js') ?>"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url('Asset/js/main.js') ?>"></script>

</body>

</html>