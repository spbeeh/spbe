<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?php echo ucfirst($this->uri->segment(1)) . " - " . ucfirst($this->uri->segment(2)) ?>
	</title>

	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url('Asett/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="<?php echo base_url('Asett/css/modern-business.css') ?>" rel="stylesheet">

</head>

<body>

	<!-- Navigation -->
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">
			<a class="navbar-brand" href="<?php echo site_url('menu/dashboard') ?>">SPBE</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
				data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="<?php echo site_url('menu/dashboard') ?>">Beranda</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="<?php echo site_url('menu/form') ?>">Isi Kuisioner SPBE</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url('menu/laporan') ?>">Laporan</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Page Content -->
	<div class="container">

		<!-- Page Heading/Breadcrumbs -->
		<h1 class="mt-4 mb-3">Jenis Form Evaluasi
			<small></small>
		</h1>

		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="<?php echo base_url('menu/dashboard') ?>">Beranda</a>
			</li>
			<li class="breadcrumb-item active">Jenis Evaluasi Form</li>
		</ol>

		<!-- Image Header -->
		<!-- <img class="img-fluid rounded mb-4" src="http://placehold.it/1200x300" alt=""> -->

		<!-- Marketing Icons Section -->
		<div class="row">
			<div class="col-lg-4 mb-4">
				<div class="card h-100">
					<h4 class="card-header">Pertanyaan Umum</h4>
					<div class="card-body">
						<p class="card-text">evaluasi umum</p>
					</div>
					<div class="card-footer">
						<a href="#" class="btn btn-primary">Buka</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 mb-4">
				<div class="card h-100">
					<h4 class="card-header">Pertanyaan Nomunklatur</h4>
					<div class="card-body">
						<p class="card-text">Evaluasi aplikasi yang dipergunakan untuk melaksanakan manajemen internal
							birokrasi dan pelayanan publik
						</p>
					</div>
					<div class="card-footer">
						<a href="#" class="btn btn-primary">Buka</a>
					</div>
				</div>
			</div>
			<!-- <div class="col-lg-4 mb-4">
				<div class="card h-100">
					<h4 class="card-header">Card Title</h4>
					<div class="card-body">
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
							necessitatibus neque.</p>
					</div>
					<div class="card-footer">
						<a href="#" class="btn btn-primary">Learn More</a>
					</div>
				</div>
			</div> -->
		</div>
		<!-- /.row -->

	</div>
	<!-- /.container -->

	<!-- Footer -->
	<!-- <footer class="py-5 bg-dark">
		<div class="container">
			<p class="m-0 text-center text-white">Copyright &copy; 2019</p>
		</div> -->
	<!-- /.container -->
	<!-- </footer> -->

	<!-- Bootstrap core JavaScript -->
	<script src="<?php echo base_url('Asett/vendor/jquery/jquery.min.js') ?>"></script>
	<script src="<?php echo base_url('Asett/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

</body>

</html>