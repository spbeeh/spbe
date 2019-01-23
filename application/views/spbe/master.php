<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view("spbe/_partial/head.php") ?>
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
				<?php $this->load->view("spbe/content/$content") ; ?>
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