<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login V18</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url('Asset/images/icons/favicon.ico') ?>" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('Asset/vendor/bootstrap/css/bootstrap.css'); ?>">
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
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-43">
						SPBE
					</span>


					<div class="wrap-input100 validate-input" data-validate="number">
						<input class="input100" type="text" name="number">
						<span class="focus-input100"></span>
						<span class="label-input100">NIP</span>
					</div>


					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<!-- <div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div> -->


					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="login">
							Login </a></button>

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
	<script src="<?php echo base_url('Assets/vendor/jquery/jquery-3.2.1.min.js') ?>"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url('Assets/vendor/animsition/js/animsition.min.js') ?>"></script>
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