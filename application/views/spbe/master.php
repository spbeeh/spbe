<!DOCTYPE html>
<html>
<head>
	<title><?php $this->load->view("spbe/_partial/head.php") ?></title>
</head>
<body class="nav-md">
	<div class="container body">
	<div class="main_container">
		<?php $this->load->view("spbe/_partial/sidebar.php") ?>

		<!-- top navigation -->
		<?php $this->load->view("spbe/_partial/topnav.php") ?>
		<!-- /top navigation -->

		<!-- page content -->
		<div class="right_col" role="main">
			<?php $this->load->view('spbe/content/halaman1.php') ?>
		</div>
		<!-- /page content -->

		<!-- footer content -->
		<?php $this->load->view("spbe/_partial/footer.php") ?>
		<!-- /footer content -->
	</div>
	</div>

	<!-- Script -->
	<?php $this->load->view("spbe/_partial/js.php") ?>
</body>
</html>