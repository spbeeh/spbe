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

	<!-- Bootstrap -->
	<link href="<?php echo base_url('gentelella/vendors/bootstrap/dist/css/bootstrap.min.1.css') ?>" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="<?php echo base_url('gentelella/vendors/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
	<!-- NProgress -->
	<link href="<?php echo base_url('gentelella/vendors/nprogress/nprogress.css') ?>" rel="stylesheet">

	<link href="<?php echo base_url('gentelella/build/css/custom.min.1.css') ?>" rel="stylesheet">
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
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_content">

					<!-- Smart Wizard -->

					<div id="wizard" class="form_wizard wizard_horizontal">
						<ul class="wizard_steps">
							<li>
								<a href="#step-1">
									<span class="step_no">1</span>
									<span class="step_descr">
										Step 1<br />
									</span>
								</a>
							</li>
							<li>
								<a href="#step-2">
									<span class="step_no">2</span>
									<span class="step_descr">
										Step 2<br />
									</span>
								</a>
							</li>
							<li>
								<a href="#step-3">
									<span class="step_no">3</span>
									<span class="step_descr">
										Step 3<br />
									</span>
								</a>
							</li>
							<li>
								<a href="#step-4">
									<span class="step_no">4</span>
									<span class="step_descr">
										Step 4<br />
									</span>
								</a>
							</li>
							<li>
								<a href="#step-5">
									<span class="step_no">5</span>
									<span class="step_descr">
										Step 5<br />
									</span>
								</a>
							</li>
							<li>
								<a href="#step-6">
									<span class="step_no">6</span>
									<span class="step_descr">
										Step 6<br />
									</span>
								</a>
							</li>
							<li>
								<a href="#step-7">
									<span class="step_no">7</span>
									<span class="step_descr">
										Step 7<br />
									</span>
								</a>
							</li>
							<li>
								<a href="#step-8">
									<span class="step_no">8</span>
									<span class="step_descr">
										Step 8<br />
									</span>
								</a>
							</li>
						</ul>

						<div id="step-1">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="x_panel">
										<div class="x_title">
											<font size="4">Jelaskan misi/sasaran pelaksanaan SPBE di Instansi
												Pusat/Pemerintah Daerah masing-masing?</font>
											<div class="clearfix"></div>
										</div>
										<div class="x_content">
											<br />
											<form id="demo-form2" data-parsley-validate
												class="form-horizontal form-label-left">

												<div class="form-group">
													<textarea id="message" required="required" class="form-control"
														name="message"
														style="margin: 0px -5.5px 0px 0px; width: 100%; height: 140px; resize: none;"></textarea>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div id="step-2">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="x_panel">
										<div class="x_title">
											<font size="4">Lampirkan daftar anggota Tim Evaluator Internal di Instansi
												Pusat/Pemerintah Daerah masing-masing, termasuk surat keputusan
												pembentukan Tim Evaluator Internal jika ada.</font>
											<div class="clearfix"></div>
										</div>
										<div class="x_content">
											<br />
											<form id="demo-form2" data-parsley-validate
												class="form-horizontal form-label-left">

												<div class="form-group">
													<textarea id="message" required="required" class="form-control"
														name="message"
														style="margin: 0px -5.5px 0px 0px; width: 100%; height: 140px; resize: none;"></textarea>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div id="step-3">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="x_panel">
										<div class="x_title">
											<font size="4">Pertanyaan khusus Pemerintah Daerah</font>
											<div class="clearfix"></div>
										</div>
										<div class="x_content">
											<br />
											<form id="demo-form2" data-parsley-validate
												class="form-horizontal form-label-left">
												<font size="4">Sebutkan perguruan tinggi negeri maupun swasta yang
													memiliki jurusan/program studi terkait komputer, teknologi informasi
													dan komunikasi, sistem informasi, atau sejenisnya di wilayah
													Pemerintah Daerah masing-masing?<br></font>
												<div class="form-group">
													<textarea id="message" required="required" class="form-control"
														name="message"
														style="margin: 0px -5.5px 0px 0px; width: 100%; height: 140px; resize: none;"></textarea>
												</div>

												<font size="4">Berapakah persentase ketersediaan sumber daya listrik
													untuk pelaksanaan SPBE di Pemerintah Daerah masing-masing dalam satu
													bulan?<br></font>
												<div class="form-group">
													<textarea id="message" required="required" class="form-control"
														name="message2"
														style="margin: 0px -5.5px 0px 0px; width: 100%; height: 140px; resize: none;"></textarea>
												</div>

												<font size="4">Penjelasan : </font>
												<font size="4">Persentase ketersediaan sumber daya listrik dihitung
													dengan cara: (jumlah jam sumber daya listrik hidup) dibagi dengan
													(jumlah jam dalam 30 hari) dikali dengan 100%.</font><br /><br />

												<font size="4">Jika ada, jelaskan hubungan kerja dengan konsultan,
													perusahaan di bidang TIK, komunitas TIK, perguruan tinggi atau pihak
													lain yang membantu dalam pelaksanaan SPBE di Pemerintah Daerah
													masing-masing.<br></font>
												<div class="form-group">
													<textarea id="message" required="required" class="form-control"
														name="message3"
														style="margin: 0px -5.5px 0px 0px; width: 100%; height: 140px; resize: none;"></textarea>
												</div>

												<font size="4">Penjelasan : <br></font>
												<font size="4">dapat berisi bidang kerja sama seperti penyusunan rencana
													induk TIK, perawatan perangkat TIK, pembangunan aplikasi, instalasi
													jaringan, pengoperasian pusat data, pengolahan data, dan lainnya
													dengan menyebutkan tahun dan durasi hubungan kerja tersebut.<br>
												</font>

											</form>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div id="step-4">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="x_panel">
										<div class="x_title">
											<font size="4">Apakah terdapat penanggung jawab terhadap pelaksanaan SPBE di
												Instansi Pusat/Pemerintah Daerah masing-masing? Jika ada, sebutkan.
											</font>
											<div class="clearfix"></div>
										</div>
										<div class="x_content">
											<br />
											<form id="demo-form2" data-parsley-validate
												class="form-horizontal form-label-left">
												<div class="form-group">
													<textarea id="message" required="required" class="form-control"
														name="message"
														style="margin: 0px -5.5px 0px 0px; width: 100%; height: 140px; resize: none;"></textarea>
												</div>

												<font size="4">Penjelasan : <br></font>
												<font size="4">Penanggung jawab adalah pejabat yang ditugaskan oleh
													pimpinan Instansi Pusat atau kepala daerah untuk melaksanakan
													perencanaan, penerapan, dan pengendalian pelaksanaan SPBE di
													Instansi Pusat/Pemerintah Daerah masing-masing.<br></font>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div id="step-5">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="x_panel">
										<div class="x_title">
											<font size="4">Sebutkan unit kerja/perangkat daerah yang terlibat dalam
												pelaksanaan SPBE (perencanaan, penerapan, pengoperasian, pemantauan dan
												evaluasi SPBE) dan lampirkan struktur organisasinya.</font>
											<div class="clearfix"></div>
										</div>
										<div class="x_content">
											<br />
											<form id="demo-form2" data-parsley-validate
												class="form-horizontal form-label-left">
												<div class="form-group">
													<textarea id="message" required="required" class="form-control"
														name="message"
														style="margin: 0px -5.5px 0px 0px; width: 100%; height: 140px; resize: none;"></textarea>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
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

					<script
						src="<?php echo base_url('gentelella/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js') ?>">
					</script>
					<script src="<?php echo base_url('gentelella/vendors/fastclick/lib/fastclick.js') ?>"></script>
					<script src="<?php echo base_url('gentelella/vendors/bootstrap/dist/js/bootstrap.min.js') ?>">
					</script>
					<script src="<?php echo base_url('gentelella/vendors/jquery/dist/jquery.min.js') ?>"></script>
					<script src="<?php echo base_url('gentelella/vendors/nprogress/nprogress.js') ?>"></script>

</body>

</html>