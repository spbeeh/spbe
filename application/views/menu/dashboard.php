<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>
		<?php echo ucfirst($this->uri->segment(1)) . " - " . ucfirst($this->uri->segment(2)) ?>
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
					<li class="nav-item active-sm">
						<a class="nav-link" href="<?php echo site_url('menu/dashboard') ?>">Beranda</a>
					</li>
					<li class="nav-item active-sm">
						<a class="nav-link" href="<?php echo site_url('menu/form') ?>">Isi Kuisioner SPBE</a>
					</li>
					<li class="nav-item active-sm">
						<a class="nav-link" href="<?php echo site_url('menu/laporan') ?>">Laporan</a>
					</li>
					<li>
						<a class="nav-link" href="<?php echo site_url('logout') ?>">Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Page Content -->
	<div class="container">
		<!-- Page Heading/Breadcrumbs -->
		<h1 class="mt-4 mb-3">Selamat Datang
			<small></small>
		</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="<?php echo base_url('menu/dashboard') ?>">Beranda</a>
			</li>
			<li class="breadcrumb-item active">Isi Kuisoner SPBE</li>
		</ol>
		<!-- Intro Content -->
		<div class="row">
			<div class="col-lg-6">
				<img class="Image" src="<?php echo site_url('Asett/Image/logo.png') ?>"
					style="width:500px;height:500px;" alt="">
			</div>
			<div class="col-lg-6" style="text-align:justify;">
				<h2>EVALUASI SPBE</h2>
				<p>Pelaksanaan Sistem Pemerintahan Berbasis Elektronik, yang selanjutnya disingkat SPBE, di Instansi
					Pusat dan Pemerintah Daerah ditujukan untuk mewujudkan proses kerja yang efisien, efektif,
					transparan, dan akuntabel serta meningkatkan kualitas pelayanan publik. Agar pelaksanaan SPBE
					dapat berjalan untuk mencapai tujuannya, maka perlu dilakukan evaluasi secara berkala untuk
					mengetahui sejauh mana kemajuan dari pelaksanaan SPBE di setiap Instansi Pusat dan Pemerintah
					Daerah.</p>
				<p>Evaluasi SPBE merupakan proses penilaian terhadap pelaksanaan SPBE di Instansi Pusat dan
					Pemerintah Daerah untuk menghasilkan suatu nilai Indeks SPBE yang menggambarkan tingkat
					kematangan (maturity level) dari pelaksanaan SPBE di Instansi Pusat dan Pemerintah Daerah. Agar
					penilaian ini dilaksanakan secara efektif dan obyektif, maka perlu disusun pedoman evaluasi yang
					dapat dipahami oleh semua pemangku kepentingan evaluasi SPBE.</p>
				<p>Pedoman Evaluasi SPBE disusun untuk memberikan petunjuk dalam rangka melaksanakan evaluasi atas
					pelaksanaan SPBE di Instansi Pusat dan Pemerintah Daerah. Pedoman evaluasi ini mengatur tentang
					perencanaan, pelaksanaan, dan pelaporan hasil evaluasi SPBE. Ruang lingkup penyelenggaraan SPBE
					di Instansi Pusat dan Pemerintah Daerah yang akan dievaluasi sedikitnya mencakup tata kelola
					SPBE, layanan SPBE, dan kebijakan SPBE. </p>
			</div>
		</div>
		<!-- /.row -->
		<!-- Team Members -->
		<h2>TUJUAN EVALUASI SPBE</h2>
		<!-- /.row -->
		<!-- Our Customers -->
		<div class="row">
			<div class="col-lg-2 col-sm-4 mb-4">
				<img class="Image" src="<?php echo site_url('Asett/Image/tujuan.png') ?>"
					style="width:1200px;height:300px;" alt="">
			</div>
			<!-- /.row -->
		</div>
	</div>
	<!-- /.container -->
	<!-- Footer -->

	<!-- Bootstrap core JavaScript -->
	<script src="<?php echo site_url('Asett/vendor/jquery/jquery.min.js') ?> "></script>
	<script src="<?php echo site_url('Asett/vendor/bootstrap/js/bootstrap.bundle.min.js') ?> "></script>
</body>

</html>