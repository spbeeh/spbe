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
</div>
<!-- /.row -->

</div>
<!-- /.container -->