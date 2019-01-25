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
					<li class="nav-item active-sm">
						<a class="nav-link" href="<?php echo site_url('menu/dashboard') ?>">Beranda</a>
					</li>
					<li class="nav-item active-sm">
						<a class="nav-link" href="<?php echo site_url('menu/form') ?>">Isi Kuisioner SPBE</a>
					</li>
					<li class="nav-item active-sm">
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
			<li class="breadcrumb-item active">Laporan</li>
		</ol>

		<!-- Image Header -->
		<!-- <img class="img-fluid rounded mb-4" src="http://placehold.it/1200x300" alt=""> -->

		<!-- Marketing Icons Section -->
		<div class="">
			<div class="page">
				<div class="page-content container-fluid">
					<div class="panel">
						<div class="panel-body container-fluid">
							<div class="noprint pull-right">
								<button class="btn btn-primary btn-sm waves-effect waves-light" type="button"
									onclick="cetak_datatable()">
									<i class="fa fa-print"></i> Cetak
								</button>
								<button class="btn btn-danger btn-sm waves-effect waves-light" type="button"
									onclick="window.history.back()">
									<i class="fa fa-arrow-left"></i> Beranda
								</button>
								<div class="clearfix"></div>
							</div>
							<center>
								<table class="pad5">
									<tbody>
										<tr>
											<td>
												<img src="<?php echo site_url('Asett/Image/logo.png') ?>" height="80"
													width="80">
											</td>
											<td width="30">&nbsp;</td>
											<td align="center">
												<h4 class="uppercase">Kementerian Pendayagunaan Aparatur Negara dan
													Reformasi Birokrasi</h4>
												<h4 class="uppercase">Evaluasi SPBE</h4>
												Jalan Jenderal Sudirman Kavling 69 Jakarta Selatan - 12190 Telp. (+6221)
												7398381 - 89 Ext. 2111 <br>
												email : asdep2balaks@menpan.go.id
											</td>
										</tr>
									</tbody>
								</table>
							</center>
							<hr class="single">
							<strong>
								<p align="center" style="font-size: 13px">BUKTI PENGISIAN</p>
							</strong>
							<table class="table">
								<tbody>
									<tr>
										<td style="width: 200px">Nama Instansi Daerah</td>
										<td style="width:10px">:</td>
										<td> </td>
										<td></td>
										<td style="width: 200px"></td>
										<td style="width:10px"></td>
										<td style="width:200px"></td>
									</tr>
									<tr>
										<td style="width: 200px">Nama Penanggung Jawab</td>
										<td style="width:10px">:</td>
										<td> </td>
										<td></td>
										<td style="width: 200px">Nama Operator</td>
										<td style="width:10px">:</td>
										<td style="width:200px"></td>
									</tr>
									<tr>
										<td style="width: 200px">NIP</td>
										<td style="width:10px">:</td>
										<td> </td>
										<td></td>
										<td style="width: 200px">NIP</td>
										<td style="width:10px">:</td>
										<td style="width:200px"></td>
									</tr>
									<tr>
										<td>Jabatan</td>
										<td style="width:10px">:</td>
										<td> </td>
										<td></td>
										<td style="width: 200px">Jabatan</td>
										<td style="width:10px">:</td>
										<td style="width:200px"></td>
									</tr>
								</tbody>
							</table>
							<hr class="single">
							<table class="table table-hover dataTable table-striped width-full table-print">
								<thead>
									<tr>
										<th>No</th>
										<th>Evaluasi</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Pertanyaaan Umum</td>
										<td>
											<span style="color:green">Sudah Mengisi</span> </td>
									</tr>
									<tr>
										<td>2</td>
										<td>Evaluasi Aplikasi</td>
										<td><span style="color:red">Belum Mengisi</span> </td>
									</tr>
								</tbody>
							</table>
							<br>
							<p align="right">
							</p>
							<div id="qrcode" class="pull-right"><canvas width="86" height="86"></canvas></div>
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


	<script src="<? php('coba_files/jquery.js(1).download') ?>"></script>
	<script src="<? php('coba_files/bootstrap.js.download') ?>"></script>

	<script src="<? php('coba_files/jquery-asScroll.js.download') ?>"></script>
	<script src="<? php('coba_files/jquery.mousewheel.js.download') ?>"></script>
	<script src="<? php('coba_files/jquery.asScrollable.all.js.download') ?>"></script>
	<script src="<? php('coba_files/jquery-asHoverScroll.js.download') ?>"></script>
	<script src="<? php('coba_files/waves.js.download') ?>"></script>
	<!-- Plugins -->
	<script src="<? php('coba_files/switchery.min.js.download') ?>"></script>
	<script src="<? php('coba_files/intro.js.download') ?>"></script>
	<script src="<? php('coba_files/screenfull.js.download') ?>"></script>
	<script src="<? php('coba_files/jquery-slidePanel.js.download') ?>"></script>
	<script src="<? php('coba_files/jquery.matchHeight-min.js.download') ?>"></script>
	<script src="<? php('coba_files/jquery.peity.min.js.download') ?>"></script>
	<!-- Scripts -->
	<script src="<? php('coba_files/core.js.download') ?>"></script>
	<script src="<? php('coba_files/site.js.download') ?>"></script>
	<script src="<? php('coba_files/menu.js.download') ?>"></script>
	<script src="<? php('coba_files/menubar.js.download') ?>"></script>
	<script src="<? php('coba_files/sidebar.js.download') ?>"></script>
	<script src="<? php('coba_files/config-colors.js.download') ?>"></script>
	<script src="<? php('coba_files/config-tour.js.download') ?>"></script>
	<script src="<? php('coba_files/asscrollable.js.download') ?>"></script>

	<script src="<? php('coba_files/slidepanel.js.download') ?>"></script>
	<script src="<? php('coba_files/switchery.js.download') ?>"></script>
	<script src="<? php('coba_files/tabs.js.download') ?>"></script>
	<script src="<? php('coba_files/matchheight.js.download') ?>"></script>
	<script src="<? php('coba_files/peity.js.download') ?>"></script>
	<script src="<? php('coba_files/panel.js.download') ?>"></script>
	<script src="<? php('coba_files/jquery.dataTables.min.js.download') ?>"></script>
	<script src="<? php('coba_files/dataTables.fixedHeader.js.download') ?>"></script>
	<script src="<? php('coba_files/dataTables.bootstrap.js.download') ?>"></script>
	<script src="<? php('coba_files/dataTables.responsive.js.download') ?>"></script>
	<script src="<? php('coba_files/dataTables.tableTools.js.download') ?>"></script>
	<script src="<? php('coba_files/datatables.js.download') ?>"></script>
	<script type="text/javascript">
	function cetak_datatable() {
		$('[data-plugin="dataTable"]').dataTable().fnDestroy();
		$('#pbody').removeClass('panel-body');
		window.print();
		setTimeout(function() {
			$('[data-plugin="dataTable"]').dataTable();
			$('#pbody').addClass('panel-body');
		}, 1000);
	}
	$('#qrcode').qrcode({
		width: 86,
		height: 86,
		text: gid + "|~~|" + kd
	});
	</script>
</body>

</html>