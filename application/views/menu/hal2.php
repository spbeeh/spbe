<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Evaluasi SPBE</title>

	<!-- Bootstrap core CSS -->
	<link href="<?php echo site_url('Asett/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="<?php echo site_url('Asett/css/modern-business.css') ?>" rel="stylesheet">
	<!-- Bootstrap -->
	<link href="<?php echo base_url('aaa/vendors/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="<?php echo base_url('aaa/vendors/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
	<!-- NProgress -->
	<link href="<?php echo base_url('aaa/vendors/nprogress/nprogress.css') ?>" rel="stylesheet">
	<!-- iCheck -->
	<link href="<?php echo base_url('aaa/vendors/iCheck/skins/flat/green.css') ?>" rel="stylesheet">

	<!-- bootstrap-progressbar -->
	<link href="<?php echo base_url('aaa/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') ?>"
		rel="stylesheet">
	<!-- JQVMap -->
	<link href="<?php echo base_url('aaa/vendors/jqvmap/dist/jqvmap.min.css') ?>" rel="stylesheet" />
	<!-- bootstrap-daterangepicker -->
	<link href="<?php echo base_url('aaa/vendors/bootstrap-daterangepicker/daterangepicker.css') ?>" rel="stylesheet">

	<!-- Custom Theme Style -->
	<link href="<?php echo base_url('aaa/build/css/custom2.min.css') ?>" rel="stylesheet">

	<script src="<?php echo base_url('aaa/vendors/jquery/dist/jquery.min.js') ?>"></script>

</head>

<body>

<<<<<<< HEAD
<<<<<<< HEAD
  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?php echo site_url('Asett/index.html') ?>">Evaluasi SPBE</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
             <a class="nav-link" href="<?php echo site_url('menu/dashboard') ?>">Beranda</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url('menu/form') ?>">Isi Kuisioner SPBE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('Asett/contact.html') ?>">Laporan</a>
          </ul>
        </div>
      </div>
    </nav>

        <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Evaluasi SPBE</h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo site_url('Asett/index.html') ?>">Beranda</a>
        </li>
        <li class="breadcrumb-item active">Isi Kuisioner SPBE</li>
      </ol>
            <div class="page-title">
              <div class="title_left">
                <h3>NOMENKLATUR (INSTANSI PUSAT/PEMERINTAH DAERAH) :  </h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

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
                              <small>Layanan publik</small>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                              Step 2<br />
                              <small>Administrasi dan Manajemen Umum</small>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                              Step 3<br />
                              <small>Administrasi Legislasi</small>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-4">
                            <span class="step_no">4</span>
                            <span class="step_descr">
                              Step 4<br />
                              <small>Manajemen Keuangan</small>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-5">
                            <span class="step_no">5</span>
                            <span class="step_descr">
                              Step 5<br />
                              <small>Sistem Informasi Keuangan Daerah</small>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-6">
                            <span class="step_no">6</span>
                            <span class="step_descr">
                              Step 6<br />
                              <small>Manajemen Kepegawaian</small>
                            </span>
                          </a>
                        </li>
                      </ul>

                      <div id="step-1">
                        <form class="form-horizontal form-label-left">
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi Tenaga Kerja</label>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                              <div class="btn-group" data-toggle="buttons">
                               <!-- copy --><label class="ada1 btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                <input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
                              </label>
                              <!-- copy --><label class="tidak1 btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                <input type="radio" name="gender" value="female"> Tidak Ada
                              </label>
                            </div>
                          </div>
                          <div class="col-md-3 col-sm-2 col-xs-12" >
                           <input id="sisi1" type="text" name="apps" class="form-control sisi1" placeholder="Nama Aplikasi">
                         </div>
                         <div class="col-md-3 col-sm-2 col-xs-12" >
                           <input id="sisi1" type="text" name="apps" class="form-control sisi1" placeholder="Unit Kerja">
                         </div>
                       </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi Pendidikan</label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <div class="btn-group" data-toggle="buttons">
                            <label class="ada2 btn btn-default ada2" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
                            </label>
                            <label class="tidak2 btn btn-primary tidak2" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="female"> Tidak Ada
                            </label>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12">
                          <input id="sisi2" type="text" name="apps" class="form-control sisi2 " placeholder="Nama Aplikasi">
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12">
                          <input id="sisi2" type="text" name="apps" class="form-control sisi2 " placeholder="Unit Kerja">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi Kepemudaan</label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default ada3" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
                            </label>
                            <label class="btn btn-primary tidak3" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="female"> Tidak Ada
                            </label>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12">
                          <input id="sisi2" type="text" name="apps" class="form-control sisi3 " placeholder="Nama Aplikasi">
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12">
                          <input id="sisi2" type="text" name="apps" class="form-control sisi3 " placeholder="Unit Kerja">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi Kesehatan</label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="female"> Tidak Ada
                            </label>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12">
                          <input type="text" name="apps" class="form-control" placeholder="Nama Aplikasi">
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12">
                          <input id="sisi2" type="text" name="apps" class="form-control sisi2 " placeholder="Unit Kerja">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi Kemiskinan dan Penyandangan Masalah Kemiskinan</label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="female"> Tidak Ada
                            </label>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12">
                          <input type="text" name="apps" class="form-control" placeholder="Nama Aplikasi">
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12">
                          <input id="sisi2" type="text" name="apps" class="form-control sisi2 " placeholder="Unit Kerja">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi Koperasi dan UMKM</label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="female"> Tidak Ada
                            </label>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12">
                          <input type="text" name="apps" class="form-control" placeholder="Nama Aplikasi">
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12">
                          <input id="sisi2" type="text" name="apps" class="form-control sisi2 " placeholder="Unit Kerja">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi Perindag</label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="female"> Tidak Ada
                            </label>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12">
                          <input type="text" name="apps" class="form-control" placeholder="Nama Aplikasi">
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12" >
                           <input id="sisi1" type="text" name="apps" class="form-control sisi1" placeholder="Unit Kerja">
                         </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi EXIM</label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="female"> Tidak Ada
                            </label>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12">
                          <input type="text" name="apps" class="form-control" placeholder="Nama Aplikasi">
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12" >
                           <input id="sisi1" type="text" name="apps" class="form-control sisi1" placeholder="Unit Kerja">
                         </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi Pertanian</label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="female"> Tidak Ada
                            </label>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12">
                          <input type="text" name="apps" class="form-control" placeholder="Nama Aplikasi">
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12" >
                           <input id="sisi1" type="text" name="apps" class="form-control sisi1" placeholder="Unit Kerja">
                         </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi Peternakan</label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="female"> Tidak Ada
                            </label>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12">
                          <input type="text" name="apps" class="form-control" placeholder="Nama Aplikasi">
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12" >
                           <input id="sisi1" type="text" name="apps" class="form-control sisi1" placeholder="Unit Kerja">
                         </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi Perkebunan</label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="female"> Tidak Ada
                            </label>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12">
                          <input type="text" name="apps" class="form-control" placeholder="Nama Aplikasi">
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12" >
                           <input id="sisi1" type="text" name="apps" class="form-control sisi1" placeholder="Unit Kerja">
                         </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi Perikanan</label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="female"> Tidak Ada
                            </label>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12">
                          <input type="text" name="apps" class="form-control" placeholder="Nama Aplikasi">
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12" >
                           <input id="sisi1" type="text" name="apps" class="form-control sisi1" placeholder="Unit Kerja">
                         </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi Kehutanan</label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="female"> Tidak Ada
                            </label>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12">
                          <input type="text" name="apps" class="form-control" placeholder="Nama Aplikasi">
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12" >
                           <input id="sisi1" type="text" name="apps" class="form-control sisi1" placeholder="Unit Kerja">
                         </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi Tanam Pangan</label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="female"> Tidak Ada
                            </label>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12">
                          <input type="text" name="apps" class="form-control" placeholder="Nama Aplikasi">
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12" >
                           <input id="sisi1" type="text" name="apps" class="form-control sisi1" placeholder="Unit Kerja">
                         </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi Wisata dan Budaya</label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="female"> Tidak Ada
                            </label>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12">
                          <input type="text" name="apps" class="form-control" placeholder="Nama Aplikasi">
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12" >
                           <input id="sisi1" type="text" name="apps" class="form-control sisi1" placeholder="Unit Kerja">
                         </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi Investasi</label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="female"> Tidak Ada
                            </label>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12">
                          <input type="text" name="apps" class="form-control" placeholder="Nama Aplikasi">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi Pembangunan Daerah</label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="female"> Tidak Ada
                            </label>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12">
                          <input type="text" name="apps" class="form-control" placeholder="Nama Aplikasi">
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12" >
                           <input id="sisi1" type="text" name="apps" class="form-control sisi1" placeholder="Unit Kerja">
                         </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi Pendayagunaan Air</label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="female"> Tidak Ada
                            </label>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12">
                          <input type="text" name="apps" class="form-control" placeholder="Nama Aplikasi">
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12" >
                           <input id="sisi1" type="text" name="apps" class="form-control sisi1" placeholder="Unit Kerja">
                         </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi Infrastruktur Teknologi Informasi dan Komunikasi</label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="female"> Tidak Ada
                            </label>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12">
                          <input type="text" name="apps" class="form-control" placeholder="Nama Aplikasi">
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12" >
                           <input id="sisi1" type="text" name="apps" class="form-control sisi1" placeholder="Unit Kerja">
                         </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi Tata Ruang, Jalan dan Jembatan</label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="female"> Tidak Ada
                            </label>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12">
                          <input type="text" name="apps" class="form-control" placeholder="Nama Aplikasi">
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12" >
                           <input id="sisi1" type="text" name="apps" class="form-control sisi1" placeholder="Unit Kerja">
                         </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi Energi Terbarukan</label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="female"> Tidak Ada
                            </label>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12">
                          <input type="text" name="apps" class="form-control" placeholder="Nama Aplikasi">
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12" >
                           <input id="sisi1" type="text" name="apps" class="form-control sisi1" placeholder="Unit Kerja">
                         </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi Lingkungan Hidup</label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="female"> Tidak Ada
                            </label>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12">
                          <input type="text" name="apps" class="form-control" placeholder="Nama Aplikasi">
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12" >
                           <input id="sisi1" type="text" name="apps" class="form-control sisi1" placeholder="Unit Kerja">
                         </div>
                      </div>
                    </form>
                  </div>

                  <div id="step-2">
                   <form class="form-horizontal form-label-left">
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi Aset dan Barang Daerah</label>
                      <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="btn-group" data-toggle="buttons">
                          <label class="ada23 btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
                          </label>
                          <label class="tidak23 btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="gender" value="female"> Tidak Ada
                          </label>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-2 col-xs-12">
                        <input id="sisi23" type="text" name="apps" class="form-control sisi23" placeholder="Nama Aplikasi">
                      </div>
                      <div class="col-md-3 col-sm-2 col-xs-12">
                        <input id="sisi23" type="text" name="apps" class="form-control sisi23" placeholder="Unit Kerja">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi Keuangan (E-Budgeting)</label>
                      <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="btn-group" data-toggle="buttons">
                          <label class="ada24 btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
                          </label>
                          <label class="tidak24 btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="gender" value="female"> Tidak Ada
                          </label>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-2 col-xs-12">
                        <input id="sisi24" type="text" name="apps" class="form-control sisi24" placeholder="Nama Aplikasi">
                      </div>
                      <div class="col-md-3 col-sm-2 col-xs-12">
                        <input id="sisi24" type="text" name="apps" class="form-control sisi24" placeholder="Unit Kerja">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi Pengadaan</label>
                      <div class="col-md-3 col-sm-3 col-xs-12">
                        <div id="gender" class="btn-group" data-toggle="buttons">
                          <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
                          </label>
                          <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="gender" value="female"> Tidak Ada
                          </label>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-2 col-xs-12">
                        <input type="text" name="apps" class="form-control" placeholder="Nama Aplikasi">
                      </div>
                      <div class="col-md-3 col-sm-2 col-xs-12" >
                           <input id="sisi1" type="text" name="apps" class="form-control sisi1" placeholder="Unit Kerja">
                         </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi Pembangunan</label>
                      <div class="col-md-3 col-sm-3 col-xs-12">
                        <div id="gender" class="btn-group" data-toggle="buttons">
                          <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
                          </label>
                          <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="gender" value="female"> Tidak Ada
                          </label>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-2 col-xs-12">
                        <input type="text" name="apps" class="form-control" placeholder="Nama Aplikasi">
                      </div>
                      <div class="col-md-3 col-sm-2 col-xs-12" >
                           <input id="sisi1" type="text" name="apps" class="form-control sisi1" placeholder="Unit Kerja">
                         </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi Legislasi</label>
                      <div class="col-md-3 col-sm-3 col-xs-12">
                        <div id="gender" class="btn-group" data-toggle="buttons">
                          <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
                          </label>
                          <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="gender" value="female"> Tidak Ada
                          </label>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-2 col-xs-12">
                        <input type="text" name="apps" class="form-control" placeholder="Nama Aplikasi">
                      </div>
                      <div class="col-md-3 col-sm-2 col-xs-12" >
                           <input id="sisi1" type="text" name="apps" class="form-control sisi1" placeholder="Unit Kerja">
                         </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi Kearsipan</label>
                      <div class="col-md-3 col-sm-3 col-xs-12">
                        <div id="gender" class="btn-group" data-toggle="buttons">
                          <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
                          </label>
                          <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="gender" value="female"> Tidak Ada
                          </label>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-2 col-xs-12">
                        <input type="text" name="apps" class="form-control" placeholder="Nama Aplikasi">
                      </div>
                      <div class="col-md-3 col-sm-2 col-xs-12" >
                           <input id="sisi1" type="text" name="apps" class="form-control sisi1" placeholder="Unit Kerja">
                         </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi Kebencanaan</label>
                      <div class="col-md-3 col-sm-3 col-xs-12">
                        <div id="gender" class="btn-group" data-toggle="buttons">
                          <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
                          </label>
                          <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="gender" value="female"> Tidak Ada
                          </label>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-2 col-xs-12">
                        <input type="text" name="apps" class="form-control" placeholder="Nama Aplikasi">
                      </div>
                      <div class="col-md-3 col-sm-2 col-xs-12" >
                           <input id="sisi1" type="text" name="apps" class="form-control sisi1" placeholder="Unit Kerja">
                         </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi Pengawasan</label>
                      <div class="col-md-3 col-sm-3 col-xs-12">
                        <div id="gender" class="btn-group" data-toggle="buttons">
                          <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
                          </label>
                          <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="gender" value="female"> Tidak Ada
                          </label>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-2 col-xs-12">
                        <input type="text" name="apps" class="form-control" placeholder="Nama Aplikasi">
                      </div>
                      <div class="col-md-3 col-sm-2 col-xs-12" >
                           <input id="sisi1" type="text" name="apps" class="form-control sisi1" placeholder="Unit Kerja">
                         </div>
                    </div>
                  </form>
                </div>

                <div id="step-3">
                 <form class="form-horizontal form-label-left">
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi Jaringan dan Dokumentasi Hukum</label>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                      <div class="btn-group" data-toggle="buttons">
                        <label class="ada31 btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                          <input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
                        </label>
                        <label class="tidak31 btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                          <input type="radio" name="gender" value="female"> Tidak Ada
                        </label>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-2 col-xs-12">
                      <input id="sisi31" type="text" name="apps" class="form-control sisi31" placeholder="Nama Aplikasi">
                    </div>
                    <div class="col-md-3 col-sm-2 col-xs-12">
                      <input id=sisi31 type="text" name="apps" class="form-control sisi31" placeholder="Unit Kerja">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi Legislatif</label>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                      <div class="btn-group" data-toggle="buttons">
                        <label class="ada32 btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                          <input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
                        </label>
                        <label class="tidak32 btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                          <input type="radio" name="gender" value="female"> Tidak Ada
                        </label>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-2 col-xs-12">
                      <input id="sisi32" type="text" name="apps" class="form-control sisi32" placeholder="Nama Aplikasi">
                    </div>
                    <div class="col-md-3 col-sm-2 col-xs-12">
                      <input id="sisi32" type="text" name="apps" class="form-control sisi32" placeholder="Unit Kerja">
                    </div>
                  </div>
                </form>
              </div>

              <div id="step-4">
               <form class="form-horizontal form-label-left">
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi Keuangan (E-Budgeting)</label>
                  <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="btn-group" data-toggle="buttons">
                      <label class="ada33 btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                        <input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
                      </label>
                      <label class="tidak33 btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                        <input type="radio" name="gender" value="female"> Tidak Ada
                      </label>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-2 col-xs-12">
                    <input id="sisi33" type="text" name="apps" class="form-control sisi33" placeholder="Nama Aplikasi">
                  </div>
                  <div class="col-md-3 col-sm-2 col-xs-12">
                    <input id="sisi33" type="text" name="apps" class="form-control sisi33" placeholder="Unit kerja">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">BPKAD, Bappeda, Biro AP, Biro Organisasi dan Dispenda</label>
                  <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="btn-group" data-toggle="buttons">
                      <label class="ada34 btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                        <input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
                      </label>
                      <label class="tidak34 btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                        <input type="radio" name="gender" value="female"> Tidak Ada
                      </label>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-2 col-xs-12">
                    <input id="sisi34" type="text" name="apps" class="form-control sisi34" placeholder="Nama Aplikasi">
                  </div>
                  <div class="col-md-3 col-sm-2 col-xs-12">
                    <input id="sisi34" type="text" name="apps" class="form-control sisi34" placeholder="Unit Kerja">
                  </div>
                </div>
              </form>
            </div>

            <div id="step-5">
             <form class="form-horizontal form-label-left">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi Keuangan (E-Budgeting)</label>
                <div class="col-md-3 col-sm-3 col-xs-12">
                  <div class="btn-group" data-toggle="buttons">
                    <label class="ada35 btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                      <input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
                    </label>
                    <label class="tidak35 btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                      <input type="radio" name="gender" value="female"> Tidak Ada
                    </label>
                  </div>
                </div>
                <div class="col-md-3 col-sm-2 col-xs-12">
                  <input id="sisi35" type="text" name="apps" class="form-control sisi35" placeholder="Nama Aplikasi">
                </div>
                <div class="col-md-3 col-sm-2 col-xs-12">
                  <input id="sisi35" type="text" name="apps" class="form-control sisi35" placeholder="Unit Kerja">
                </div>
              </div>
            </form>
          </div>

          <div id="step-6">
           <form class="form-horizontal form-label-left">
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi Kepegawaian</label>
              <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="btn-group" data-toggle="buttons">
                  <label class="ada36 btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                    <input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
                  </label>
                  <label class="tidak36 btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                    <input type="radio" name="gender" value="female"> Tidak Ada
                  </label>
                </div>
              </div>
              <div class="col-md-3 col-sm-2 col-xs-12">
                <input id="sisi36" type="text" name="apps" class="form-control sisi36" placeholder="Nama Aplikasi">
              </div>
              <div class="col-md-3 col-sm-2 col-xs-12">
                <input id="sisi36" type="text" name="apps" class="form-control sisi36" placeholder="Unit Kerja">
              </div>
            </div>
          </form>
        </div>
        <!-- End SmartWizard Content -->
        <!-- Tabs -->
      </div>
    </div>

    <!-- Footer -->
<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
  </div>
  <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="<?php echo site_url('Asett/vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?php echo site_url('Asett/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
     
    <!-- jQuery -->
   <script src="<?php echo base_url('aaa/vendors/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('aaa/vendors/fastclick/lib/fastclick.js') ?>"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url('aaa/vendors/nprogress/nprogress.js') ?>"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url('aaa/vendors/Chart.js/dist/Chart.min.js') ?>"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url('aaa/vendors/gauge.js/dist/gauge.min.js') ?>"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url('aaa/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') ?>"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url('aaa/vendors/iCheck/icheck.min.js') ?>"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url('aaa/vendors/skycons/skycons.js') ?>"></script>
    <!-- Flot -->
    <script src="<?php echo base_url('aaa/vendors/Flot/jquery.flot.js') ?>"></script>
    <script src="<?php echo base_url('aaa/vendors/Flot/jquery.flot.pie.js') ?>"></script>
    <script src="<?php echo base_url('aaa/vendors/Flot/jquery.flot.time.js') ?>"></script>
    <script src="<?php echo base_url('aaa/vendors/Flot/jquery.flot.stack.js') ?>"></script>
    <script src="<?php echo base_url('aaa/vendors/Flot/jquery.flot.resize.js') ?>"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url('aaa/vendors/flot.orderbars/js/jquery.flot.orderBars.js') ?>"></script>
    <script src="<?php echo base_url('aaa/vendors/flot-spline/js/jquery.flot.spline.min.js') ?>"></script>
    <script src="<?php echo base_url('aaa/vendors/flot.curvedlines/curvedLines.js') ?>"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url('aaa/vendors/DateJS/build/date.js') ?>"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url('aaa/vendors/jqvmap/dist/jquery.vmap.js') ?>"></script>
    <script src="<?php echo base_url('aaa/vendors/jqvmap/dist/maps/jquery.vmap.world.js') ?>"></script>
    <script src="<?php echo base_url('aaa/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') ?>"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url('aaa/vendors/moment/min/moment.min.js') ?>"></script>
    <script src="<?php echo base_url('aaa/vendors/bootstrap-daterangepicker/daterangepicker.js') ?>"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('aaa/build/js/custom.min.js') ?>"></script>

    <script src="<?php echo base_url('aaa/vendors/jquery/dist/jquery.min.js') ?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url('aaa/vendors/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('aaa/vendors/fastclick/lib/fastclick.js') ?>"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url('aaa/vendors/nprogress/nprogress.js') ?>"></script>
    <!-- jQuery Smart Wizard -->
    <script src="<?php echo base_url('aaa/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js') ?>"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('aaa/build/js/custom.min.js') ?>"></script>

    <!-- <script>
$(document).ready(function() {
  $(".ada1").click(function() {
    //alert("yeah");
    $('.a1').show();
  });
  $(".tidak1").click(function() {
    $('.a1').hide();
  });
});
$(document).ready(function() {
  $(".ada2").click(function() {
    //alert("yeah");
    $('.a2').show();
  });
  $(".tidak2").click(function() {
    $('.a2').hide();
  });
});
$(document).ready(function() {
  $(".ada3").click(function() {
    //alert("yeah");
    $('.a3').show();
  });
  $(".tidak3").click(function() {
    $('.a3').hide();
  });
});

$(document).ready(function() {
  $(".ada4").click(function() {
    //alert("yeah");
    $('.a4').show();
  });
  $(".tidak4").click(function() {
    $('.a4').hide();
  });
});

$(document).ready(function() {
  $(".ada5").click(function() {
    //alert("yeah");
    $('.a5').show();
  });
  $(".tidak5").click(function() {
    $('.a5').hide();
  });
});

$(document).ready(function() {
  $(".ada6").click(function() {
    //alert("yeah");
    $('.a6').show();
  });
  $(".tidak6").click(function() {
    $('.a6').hide();
  });
});

$(document).ready(function() {
  $(".ada7").click(function() {
    //alert("yeah");
    $('.a7').show();
  });
  $(".tidak7").click(function() {
    $('.a7').hide();
  });
});

$(document).ready(function() {
  $(".ada8").click(function() {
    //alert("yeah");
    $('.a8').show();
  });
  $(".tidak8").click(function() {
    $('.a8').hide();
  });
});

$(document).ready(function() {
  $(".ada9").click(function() {
    //alert("yeah");
    $('.a9').show();
  });
  $(".tidak9").click(function() {
    $('.a9').hide();
  });
});

$(document).ready(function() {
  $(".ada10").click(function() {
    //alert("yeah");
    $('.a10').show();
  });
  $(".tidak10").click(function() {
    $('.a10').hide();
  });
});

$(document).ready(function() {
  $(".ada11").click(function() {
    //alert("yeah");
    $('.a11').show();
  });
  $(".tidak11").click(function() {
    $('.a11').hide();
  });
});

$(document).ready(function() {
  $(".ada12").click(function() {
    //alert("yeah");
    $('.a12').show();
  });
  $(".tidak12").click(function() {
    $('.a12').hide();
  });
});

$(document).ready(function() {
  $(".ada13").click(function() {
    //alert("yeah");
    $('.a13').show();
  });
  $(".tidak13").click(function() {
    $('.a13').hide();
  });
});

$(document).ready(function() {
  $(".ada14").click(function() {
    //alert("yeah");
    $('.a14').show();
  });
  $(".tidak14").click(function() {
    $('.a14').hide();
  });
});

$(document).ready(function() {
  $(".ada15").click(function() {
    //alert("yeah");
    $('.a15').show();
  });
  $(".tidak15").click(function() {
    $('.a15').hide();
  });
});

$(document).ready(function() {
  $(".ada16").click(function() {
    //alert("yeah");
    $('.a16').show();
  });
  $(".tidak16").click(function() {
    $('.a16').hide();
  });
});

$(document).ready(function() {
  $(".ada17").click(function() {
    //alert("yeah");
    $('.a17').show();
  });
  $(".tidak17").click(function() {
    $('.a17').hide();
  });
});

$(document).ready(function() {
  $(".ada18").click(function() {
    //alert("yeah");
    $('.a18').show();
  });
  $(".tidak18").click(function() {
    $('.a18').hide();
  });
});

$(document).ready(function() {
  $(".ada19").click(function() {
    //alert("yeah");
    $('.a19').show();
  });
  $(".tidak19").click(function() {
    $('.a19').hide();
  });
});

$(document).ready(function() {
  $(".ada20").click(function() {
    //alert("yeah");
    $('.a20').show();
  });
  $(".tidak20").click(function() {
    $('.a20').hide();
  });
});

$(document).ready(function() {
  $(".ada21").click(function() {
    //alert("yeah");
    $('.a21').show();
  });
  $(".tidak21").click(function() {
    $('.a21').hide();
  });
});

$(document).ready(function() {
  $(".ada22").click(function() {
    //alert("yeah");
    $('.a22').show();
  });
  $(".tidak22").click(function() {
    $('.a22').hide();
  });
});

$(document).ready(function() {
  $(".ada23").click(function() {
    //alert("yeah");
    $('.a23').show();
  });
  $(".tidak23").click(function() {
    $('.a23').hide();
  });
});

$(document).ready(function() {
  $(".ada24").click(function() {
    //alert("yeah");
    $('.a24').show();
  });
  $(".tidak24").click(function() {
    $('.a24').hide();
  });
});

$(document).ready(function() {
  $(".ada25").click(function() {
    //alert("yeah");
    $('.a25').show();
  });
  $(".tidak25").click(function() {
    $('.a25').hide();
  });
});

$(document).ready(function() {
  $(".ada26").click(function() {
    //alert("yeah");
    $('.a26').show();
  });
  $(".tidak26").click(function() {
    $('.a26').hide();
  });
});

$(document).ready(function() {
  $(".ada27").click(function() {
    //alert("yeah");
    $('.a27').show();
  });
  $(".tidak27").click(function() {
    $('.a27').hide();
  });
});

$(document).ready(function() {
  $(".ada28").click(function() {
    //alert("yeah");
    $('.a28').show();
  });
  $(".tidak28").click(function() {
    $('.a28').hide();
  });
});

$(document).ready(function() {
  $(".ada29").click(function() {
    //alert("yeah");
    $('.a29').show();
  });
  $(".tidak29").click(function() {
    $('.a29').hide();
  });
});

$(document).ready(function() {
  $(".ada30").click(function() {
    //alert("yeah");
    $('.a30').show();
  });
  $(".tidak30").click(function() {
    $('.a30').hide();
  });
});

$(document).ready(function() {
  $(".ada31").click(function() {
    //alert("yeah");
    $('.a31').show();
  });
  $(".tidak31").click(function() {
    $('.a31').hide();
  });
});
$(document).ready(function() {
  $(".ada32").click(function() {
    //alert("yeah");
    $('.a32').show();
  });
  $(".tidak32").click(function() {
    $('.a32').hide();
  });
});
$(document).ready(function() {
  $(".ada33").click(function() {
    //alert("yeah");
    $('.a33').show();
  });
  $(".tidak33").click(function() {
    $('.a33').hide();
  });
});
$(document).ready(function() {
  $(".ada34").click(function() {
    //alert("yeah");
    $('.a34').show();
  });
  $(".tidak34").click(function() {
    $('.a34').hide();
  });
});
$(document).ready(function() {
  $(".ada35").click(function() {
    //alert("yeah");
    $('.a35').show();
  });
  $(".tidak35").click(function() {
    $('.a35').hide();
  });
});
$(document).ready(function() {
  $(".ada36").click(function() {
    //alert("yeah");
    $('.a36').show();
  });
  $(".tidak36").click(function() {
    $('.a36').hide();
  });
});
</script> -->
=======
=======
>>>>>>> 36c32af45eef047e00a84318a647b747456c6610
	<!-- Navigation -->
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">
			<a class="navbar-brand" href="<?php echo site_url('Asett/index.html') ?>">Evaluasi SPBE</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
				data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url('menu/dashboard') ?>">Beranda</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="<?php echo site_url('menu/form') ?>">Isi Kuisioner SPBE</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url('Asett/contact.html') ?>">Laporan</a>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">

		<!-- Page Heading/Breadcrumbs -->
		<h1 class="mt-4 mb-3">Evaluasi SPBE</h1>

		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="<?php echo site_url('Asett/index.html') ?>">Beranda</a>
			</li>
			<li class="breadcrumb-item active">Isi Kuisioner SPBE</li>
		</ol>
		<div class="page-title">
			<div class="title_left">
				<h3>NOMENKLATUR (INSTANSI PUSAT/PEMERINTAH DAERAH) : </h3>
			</div>
		</div>
		<div class="clearfix"></div>

		<div class="row">

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
											<small>Layanan publik</small>
										</span>
									</a>
								</li>
								<li>
									<a href="#step-2">
										<span class="step_no">2</span>
										<span class="step_descr">
											Step 2<br />
											<small>Administrasi dan Manajemen Umum</small>
										</span>
									</a>
								</li>
								<li>
									<a href="#step-3">
										<span class="step_no">3</span>
										<span class="step_descr">
											Step 3<br />
											<small>Administrasi Legislasi</small>
										</span>
									</a>
								</li>
								<li>
									<a href="#step-4">
										<span class="step_no">4</span>
										<span class="step_descr">
											Step 4<br />
											<small>Manajemen Keuangan</small>
										</span>
									</a>
								</li>
								<li>
									<a href="#step-5">
										<span class="step_no">5</span>
										<span class="step_descr">
											Step 5<br />
											<small>Sistem Informasi Keuangan Daerah</small>
										</span>
									</a>
								</li>
								<li>
									<a href="#step-6">
										<span class="step_no">6</span>
										<span class="step_descr">
											Step 6<br />
											<small>Manajemen Kepegawaian</small>
										</span>
									</a>
								</li>
							</ul>

							<div id="step-1">
								<form class="form-horizontal form-label-left">
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi Tenaga
											Kerja</label>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<div class="btn-group" data-toggle="buttons">
												<label class="ada1 btn btn-default"
													data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
												</label>
												<label class="tidak1 btn btn-primary"
													data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="female"> Tidak Ada
												</label>
											</div>
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="a1" type="text" name="apps" class="form-control a1"
												placeholder="Nama Aplikasi">
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="a1" type="text" name="apps" class="form-control a1"
												placeholder="Unit Kerja">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi
											Pendidikan</label>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<div class="btn-group" data-toggle="buttons">
												<label class="ada2 btn btn-default" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
												</label>
												<label class="tidak2 btn btn-primary"
													data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="female"> Tidak Ada
												</label>
											</div>
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="a2" type="text" name="apps" class="form-control a2 "
												placeholder="Nama Aplikasi">
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="a2" type="text" name="apps" class="form-control a2 "
												placeholder="Unit Kerja">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi
											Kepemudaan</label>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<div id="gender" class="btn-group" data-toggle="buttons">
												<label class="btn btn-default ada3" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
												</label>
												<label class="btn btn-primary tidak3" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="female"> Tidak Ada
												</label>
											</div>
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="sisi2" type="text" name="apps" class="form-control sisi3 "
												placeholder="Nama Aplikasi">
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="sisi2" type="text" name="apps" class="form-control sisi3 "
												placeholder="Unit Kerja">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi
											Kesehatan</label>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<div id="gender" class="btn-group" data-toggle="buttons">
												<label class="btn btn-default" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
												</label>
												<label class="btn btn-primary" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="female"> Tidak Ada
												</label>
											</div>
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input type="text" name="apps" class="form-control"
												placeholder="Nama Aplikasi">
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="sisi2" type="text" name="apps" class="form-control sisi2 "
												placeholder="Unit Kerja">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi
											Kemiskinan dan Penyandangan Masalah Kemiskinan</label>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<div id="gender" class="btn-group" data-toggle="buttons">
												<label class="btn btn-default" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
												</label>
												<label class="btn btn-primary" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="female"> Tidak Ada
												</label>
											</div>
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input type="text" name="apps" class="form-control"
												placeholder="Nama Aplikasi">
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="sisi2" type="text" name="apps" class="form-control sisi2 "
												placeholder="Unit Kerja">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi
											Koperasi dan UMKM</label>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<div id="gender" class="btn-group" data-toggle="buttons">
												<label class="btn btn-default" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
												</label>
												<label class="btn btn-primary" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="female"> Tidak Ada
												</label>
											</div>
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input type="text" name="apps" class="form-control"
												placeholder="Nama Aplikasi">
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="sisi2" type="text" name="apps" class="form-control sisi2 "
												placeholder="Unit Kerja">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi
											Perindag</label>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<div id="gender" class="btn-group" data-toggle="buttons">
												<label class="btn btn-default" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
												</label>
												<label class="btn btn-primary" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="female"> Tidak Ada
												</label>
											</div>
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input type="text" name="apps" class="form-control"
												placeholder="Nama Aplikasi">
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="sisi1" type="text" name="apps" class="form-control sisi1"
												placeholder="Unit Kerja">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi
											EXIM</label>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<div id="gender" class="btn-group" data-toggle="buttons">
												<label class="btn btn-default" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
												</label>
												<label class="btn btn-primary" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="female"> Tidak Ada
												</label>
											</div>
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input type="text" name="apps" class="form-control"
												placeholder="Nama Aplikasi">
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="sisi1" type="text" name="apps" class="form-control sisi1"
												placeholder="Unit Kerja">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi
											Pertanian</label>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<div id="gender" class="btn-group" data-toggle="buttons">
												<label class="btn btn-default" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
												</label>
												<label class="btn btn-primary" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="female"> Tidak Ada
												</label>
											</div>
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input type="text" name="apps" class="form-control"
												placeholder="Nama Aplikasi">
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="sisi1" type="text" name="apps" class="form-control sisi1"
												placeholder="Unit Kerja">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi
											Peternakan</label>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<div id="gender" class="btn-group" data-toggle="buttons">
												<label class="btn btn-default" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
												</label>
												<label class="btn btn-primary" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="female"> Tidak Ada
												</label>
											</div>
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input type="text" name="apps" class="form-control"
												placeholder="Nama Aplikasi">
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="sisi1" type="text" name="apps" class="form-control sisi1"
												placeholder="Unit Kerja">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi
											Perkebunan</label>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<div id="gender" class="btn-group" data-toggle="buttons">
												<label class="btn btn-default" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
												</label>
												<label class="btn btn-primary" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="female"> Tidak Ada
												</label>
											</div>
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input type="text" name="apps" class="form-control"
												placeholder="Nama Aplikasi">
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="sisi1" type="text" name="apps" class="form-control sisi1"
												placeholder="Unit Kerja">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi
											Perikanan</label>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<div id="gender" class="btn-group" data-toggle="buttons">
												<label class="btn btn-default" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
												</label>
												<label class="btn btn-primary" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="female"> Tidak Ada
												</label>
											</div>
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input type="text" name="apps" class="form-control"
												placeholder="Nama Aplikasi">
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="sisi1" type="text" name="apps" class="form-control sisi1"
												placeholder="Unit Kerja">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi
											Kehutanan</label>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<div id="gender" class="btn-group" data-toggle="buttons">
												<label class="btn btn-default" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
												</label>
												<label class="btn btn-primary" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="female"> Tidak Ada
												</label>
											</div>
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input type="text" name="apps" class="form-control"
												placeholder="Nama Aplikasi">
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="sisi1" type="text" name="apps" class="form-control sisi1"
												placeholder="Unit Kerja">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi Tanam
											Pangan</label>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<div id="gender" class="btn-group" data-toggle="buttons">
												<label class="btn btn-default" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
												</label>
												<label class="btn btn-primary" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="female"> Tidak Ada
												</label>
											</div>
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input type="text" name="apps" class="form-control"
												placeholder="Nama Aplikasi">
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="sisi1" type="text" name="apps" class="form-control sisi1"
												placeholder="Unit Kerja">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi Wisata
											dan Budaya</label>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<div id="gender" class="btn-group" data-toggle="buttons">
												<label class="btn btn-default" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
												</label>
												<label class="btn btn-primary" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="female"> Tidak Ada
												</label>
											</div>
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input type="text" name="apps" class="form-control"
												placeholder="Nama Aplikasi">
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="sisi1" type="text" name="apps" class="form-control sisi1"
												placeholder="Unit Kerja">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi
											Investasi</label>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<div id="gender" class="btn-group" data-toggle="buttons">
												<label class="btn btn-default" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
												</label>
												<label class="btn btn-primary" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="female"> Tidak Ada
												</label>
											</div>
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input type="text" name="apps" class="form-control"
												placeholder="Nama Aplikasi">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi
											Pembangunan Daerah</label>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<div id="gender" class="btn-group" data-toggle="buttons">
												<label class="btn btn-default" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
												</label>
												<label class="btn btn-primary" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="female"> Tidak Ada
												</label>
											</div>
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input type="text" name="apps" class="form-control"
												placeholder="Nama Aplikasi">
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="sisi1" type="text" name="apps" class="form-control sisi1"
												placeholder="Unit Kerja">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi
											Pendayagunaan Air</label>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<div id="gender" class="btn-group" data-toggle="buttons">
												<label class="btn btn-default" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
												</label>
												<label class="btn btn-primary" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="female"> Tidak Ada
												</label>
											</div>
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input type="text" name="apps" class="form-control"
												placeholder="Nama Aplikasi">
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="sisi1" type="text" name="apps" class="form-control sisi1"
												placeholder="Unit Kerja">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi
											Infrastruktur Teknologi Informasi dan Komunikasi</label>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<div id="gender" class="btn-group" data-toggle="buttons">
												<label class="btn btn-default" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
												</label>
												<label class="btn btn-primary" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="female"> Tidak Ada
												</label>
											</div>
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input type="text" name="apps" class="form-control"
												placeholder="Nama Aplikasi">
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="sisi1" type="text" name="apps" class="form-control sisi1"
												placeholder="Unit Kerja">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi Tata
											Ruang, Jalan dan Jembatan</label>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<div id="gender" class="btn-group" data-toggle="buttons">
												<label class="btn btn-default" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
												</label>
												<label class="btn btn-primary" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="female"> Tidak Ada
												</label>
											</div>
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input type="text" name="apps" class="form-control"
												placeholder="Nama Aplikasi">
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="sisi1" type="text" name="apps" class="form-control sisi1"
												placeholder="Unit Kerja">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi Energi
											Terbarukan</label>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<div id="gender" class="btn-group" data-toggle="buttons">
												<label class="btn btn-default" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
												</label>
												<label class="btn btn-primary" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="female"> Tidak Ada
												</label>
											</div>
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input type="text" name="apps" class="form-control"
												placeholder="Nama Aplikasi">
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="sisi1" type="text" name="apps" class="form-control sisi1"
												placeholder="Unit Kerja">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi
											Lingkungan Hidup</label>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<div id="gender" class="btn-group" data-toggle="buttons">
												<label class="btn btn-default" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
												</label>
												<label class="btn btn-primary" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="female"> Tidak Ada
												</label>
											</div>
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input type="text" name="apps" class="form-control"
												placeholder="Nama Aplikasi">
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="sisi1" type="text" name="apps" class="form-control sisi1"
												placeholder="Unit Kerja">
										</div>
									</div>
								</form>
							</div>

							<div id="step-2">
								<form class="form-horizontal form-label-left">
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi Aset
											dan Barang Daerah</label>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<div class="btn-group" data-toggle="buttons">
												<label class="ada23 btn btn-default" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
												</label>
												<label class="tidak23 btn btn-primary" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="female"> Tidak Ada
												</label>
											</div>
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="sisi23" type="text" name="apps" class="form-control sisi23"
												placeholder="Nama Aplikasi">
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="sisi23" type="text" name="apps" class="form-control sisi23"
												placeholder="Unit Kerja">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi
											Keuangan (E-Budgeting)</label>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<div class="btn-group" data-toggle="buttons">
												<label class="ada24 btn btn-default" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
												</label>
												<label class="tidak24 btn btn-primary" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="female"> Tidak Ada
												</label>
											</div>
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="sisi24" type="text" name="apps" class="form-control sisi24"
												placeholder="Nama Aplikasi">
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="sisi24" type="text" name="apps" class="form-control sisi24"
												placeholder="Unit Kerja">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi
											Pengadaan</label>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<div id="gender" class="btn-group" data-toggle="buttons">
												<label class="btn btn-default" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
												</label>
												<label class="btn btn-primary" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="female"> Tidak Ada
												</label>
											</div>
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input type="text" name="apps" class="form-control"
												placeholder="Nama Aplikasi">
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="sisi1" type="text" name="apps" class="form-control sisi1"
												placeholder="Unit Kerja">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi
											Pembangunan</label>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<div id="gender" class="btn-group" data-toggle="buttons">
												<label class="btn btn-default" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
												</label>
												<label class="btn btn-primary" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="female"> Tidak Ada
												</label>
											</div>
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input type="text" name="apps" class="form-control"
												placeholder="Nama Aplikasi">
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="sisi1" type="text" name="apps" class="form-control sisi1"
												placeholder="Unit Kerja">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi
											Legislasi</label>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<div id="gender" class="btn-group" data-toggle="buttons">
												<label class="btn btn-default" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
												</label>
												<label class="btn btn-primary" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="female"> Tidak Ada
												</label>
											</div>
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input type="text" name="apps" class="form-control"
												placeholder="Nama Aplikasi">
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="sisi1" type="text" name="apps" class="form-control sisi1"
												placeholder="Unit Kerja">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi
											Kearsipan</label>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<div id="gender" class="btn-group" data-toggle="buttons">
												<label class="btn btn-default" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
												</label>
												<label class="btn btn-primary" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="female"> Tidak Ada
												</label>
											</div>
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input type="text" name="apps" class="form-control"
												placeholder="Nama Aplikasi">
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="sisi1" type="text" name="apps" class="form-control sisi1"
												placeholder="Unit Kerja">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi
											Kebencanaan</label>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<div id="gender" class="btn-group" data-toggle="buttons">
												<label class="btn btn-default" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
												</label>
												<label class="btn btn-primary" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="female"> Tidak Ada
												</label>
											</div>
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input type="text" name="apps" class="form-control"
												placeholder="Nama Aplikasi">
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="sisi1" type="text" name="apps" class="form-control sisi1"
												placeholder="Unit Kerja">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi
											Pengawasan</label>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<div id="gender" class="btn-group" data-toggle="buttons">
												<label class="btn btn-default" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
												</label>
												<label class="btn btn-primary" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="female"> Tidak Ada
												</label>
											</div>
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input type="text" name="apps" class="form-control"
												placeholder="Nama Aplikasi">
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="sisi1" type="text" name="apps" class="form-control sisi1"
												placeholder="Unit Kerja">
										</div>
									</div>
								</form>
							</div>

							<div id="step-3">
								<form class="form-horizontal form-label-left">
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi
											Jaringan dan Dokumentasi Hukum</label>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<div class="btn-group" data-toggle="buttons">
												<label class="ada31 btn btn-default" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
												</label>
												<label class="tidak31 btn btn-primary" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="female"> Tidak Ada
												</label>
											</div>
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="sisi31" type="text" name="apps" class="form-control sisi31"
												placeholder="Nama Aplikasi">
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id=sisi31 type="text" name="apps" class="form-control sisi31"
												placeholder="Unit Kerja">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi
											Legislatif</label>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<div class="btn-group" data-toggle="buttons">
												<label class="ada32 btn btn-default" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
												</label>
												<label class="tidak32 btn btn-primary" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="female"> Tidak Ada
												</label>
											</div>
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="sisi32" type="text" name="apps" class="form-control sisi32"
												placeholder="Nama Aplikasi">
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="sisi32" type="text" name="apps" class="form-control sisi32"
												placeholder="Unit Kerja">
										</div>
									</div>
								</form>
							</div>

							<div id="step-4">
								<form class="form-horizontal form-label-left">
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi
											Keuangan (E-Budgeting)</label>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<div class="btn-group" data-toggle="buttons">
												<label class="ada33 btn btn-default" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
												</label>
												<label class="tidak33 btn btn-primary" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="female"> Tidak Ada
												</label>
											</div>
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="sisi33" type="text" name="apps" class="form-control sisi33"
												placeholder="Nama Aplikasi">
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="sisi33" type="text" name="apps" class="form-control sisi33"
												placeholder="Unit kerja">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">BPKAD, Bappeda, Biro
											AP, Biro Organisasi dan Dispenda</label>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<div class="btn-group" data-toggle="buttons">
												<label class="ada34 btn btn-default" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
												</label>
												<label class="tidak34 btn btn-primary" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="female"> Tidak Ada
												</label>
											</div>
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="sisi34" type="text" name="apps" class="form-control sisi34"
												placeholder="Nama Aplikasi">
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="sisi34" type="text" name="apps" class="form-control sisi34"
												placeholder="Unit Kerja">
										</div>
									</div>
								</form>
							</div>

							<div id="step-5">
								<form class="form-horizontal form-label-left">
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi
											Keuangan (E-Budgeting)</label>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<div class="btn-group" data-toggle="buttons">
												<label class="ada35 btn btn-default" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
												</label>
												<label class="tidak35 btn btn-primary" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="female"> Tidak Ada
												</label>
											</div>
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="sisi35" type="text" name="apps" class="form-control sisi35"
												placeholder="Nama Aplikasi">
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="sisi35" type="text" name="apps" class="form-control sisi35"
												placeholder="Unit Kerja">
										</div>
									</div>
								</form>
							</div>

							<div id="step-6">
								<form class="form-horizontal form-label-left">
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Sistem Informasi
											Kepegawaian</label>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<div class="btn-group" data-toggle="buttons">
												<label class="ada36 btn btn-default" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="male"> &nbsp; Ada &nbsp;
												</label>
												<label class="tidak36 btn btn-primary" data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
													<input type="radio" name="gender" value="female"> Tidak Ada
												</label>
											</div>
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="sisi36" type="text" name="apps" class="form-control sisi36"
												placeholder="Nama Aplikasi">
										</div>
										<div class="col-md-3 col-sm-2 col-xs-12">
											<input id="sisi36" type="text" name="apps" class="form-control sisi36"
												placeholder="Unit Kerja">
										</div>
									</div>
								</form>
							</div>
							<!-- End SmartWizard Content -->
							<!-- Tabs -->
						</div>
					</div>

					<!-- Footer -->
					<footer class="py-5 bg-dark">
						<div class="container">
							<p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
						</div>
						<!-- /.container -->
					</footer>

					<!-- Bootstrap core JavaScript -->
					<script src="<?php echo site_url('Asett/vendor/jquery/jquery.min.js') ?>"></script>
					<script src="<?php echo site_url('Asett/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

					<!-- jQuery -->
					<script src="<?php echo base_url('aaa/vendors/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
					<!-- FastClick -->
					<script src="<?php echo base_url('aaa/vendors/fastclick/lib/fastclick.js') ?>"></script>
					<!-- NProgress -->
					<script src="<?php echo base_url('aaa/vendors/nprogress/nprogress.js') ?>"></script>
					<!-- Chart.js -->
					<script src="<?php echo base_url('aaa/vendors/Chart.js/dist/Chart.min.js') ?>"></script>
					<!-- gauge.js -->
					<script src="<?php echo base_url('aaa/vendors/gauge.js/dist/gauge.min.js') ?>"></script>
					<!-- bootstrap-progressbar -->
					<script
						src="<?php echo base_url('aaa/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') ?>">
					</script>
					<!-- iCheck -->
					<script src="<?php echo base_url('aaa/vendors/iCheck/icheck.min.js') ?>"></script>
					<!-- Skycons -->
					<script src="<?php echo base_url('aaa/vendors/skycons/skycons.js') ?>"></script>
					<!-- Flot -->
					<script src="<?php echo base_url('aaa/vendors/Flot/jquery.flot.js') ?>"></script>
					<script src="<?php echo base_url('aaa/vendors/Flot/jquery.flot.pie.js') ?>"></script>
					<script src="<?php echo base_url('aaa/vendors/Flot/jquery.flot.time.js') ?>"></script>
					<script src="<?php echo base_url('aaa/vendors/Flot/jquery.flot.stack.js') ?>"></script>
					<script src="<?php echo base_url('aaa/vendors/Flot/jquery.flot.resize.js') ?>"></script>
					<!-- Flot plugins -->
					<script src="<?php echo base_url('aaa/vendors/flot.orderbars/js/jquery.flot.orderBars.js') ?>">
					</script>
					<script src="<?php echo base_url('aaa/vendors/flot-spline/js/jquery.flot.spline.min.js') ?>">
					</script>
					<script src="<?php echo base_url('aaa/vendors/flot.curvedlines/curvedLines.js') ?>"></script>
					<!-- DateJS -->
					<script src="<?php echo base_url('aaa/vendors/DateJS/build/date.js') ?>"></script>
					<!-- JQVMap -->
					<script src="<?php echo base_url('aaa/vendors/jqvmap/dist/jquery.vmap.js') ?>"></script>
					<script src="<?php echo base_url('aaa/vendors/jqvmap/dist/maps/jquery.vmap.world.js') ?>"></script>
					<script src="<?php echo base_url('aaa/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') ?>">
					</script>
					<!-- bootstrap-daterangepicker -->
					<script src="<?php echo base_url('aaa/vendors/moment/min/moment.min.js') ?>"></script>
					<script src="<?php echo base_url('aaa/vendors/bootstrap-daterangepicker/daterangepicker.js') ?>">
					</script>

					<!-- Custom Theme Scripts -->
					<script src="<?php echo base_url('aaa/build/js/custom.min.js') ?>"></script>

					<script src="<?php echo base_url('aaa/vendors/jquery/dist/jquery.min.js') ?>"></script>
					<!-- Bootstrap -->
					<script src="<?php echo base_url('aaa/vendors/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
					<!-- FastClick -->
					<script src="<?php echo base_url('aaa/vendors/fastclick/lib/fastclick.js') ?>"></script>
					<!-- NProgress -->
					<script src="<?php echo base_url('aaa/vendors/nprogress/nprogress.js') ?>"></script>
					<!-- jQuery Smart Wizard -->
					<script src="<?php echo base_url('aaa/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js') ?>">
					</script>
					<!-- Custom Theme Scripts -->
					<script src="<?php echo base_url('aaa/build/js/custom.min.js') ?>"></script>

					<script>
						$(document).ready(function() {
							$(".sisi1").click(function() {
								//alert("yeah");
								$('.sisi1').show();
							});
							$(".tidak1").click(function() {
								$('.sisi1').hide();
							});
						});
						$(document).ready(function() {
							$(".ada2").click(function() {
								//alert("yeah");
								$('.a2').show();
							});
							$(".tidak2").click(function() {
								$('.a2').hide();
							});
						});
						$(document).ready(function() {
							$(".ada3").click(function() {
								//alert("yeah");
								$('.a3').show();
							});
							$(".tidak3").click(function() {
								$('.a3').hide();
							});
						});

						$(document).ready(function() {
							$(".ada4").click(function() {
								//alert("yeah");
								$('.a4').show();
							});
							$(".tidak4").click(function() {
								$('.a4').hide();
							});
						});

						$(document).ready(function() {
							$(".ada5").click(function() {
								//alert("yeah");
								$('.a5').show();
							});
							$(".tidak5").click(function() {
								$('.a5').hide();
							});
						});

						$(document).ready(function() {
							$(".ada6").click(function() {
								//alert("yeah");
								$('.a6').show();
							});
							$(".tidak6").click(function() {
								$('.a6').hide();
							});
						});

						$(document).ready(function() {
							$(".ada7").click(function() {
								//alert("yeah");
								$('.a7').show();
							});
							$(".tidak7").click(function() {
								$('.a7').hide();
							});
						});

						$(document).ready(function() {
							$(".ada8").click(function() {
								//alert("yeah");
								$('.a8').show();
							});
							$(".tidak8").click(function() {
								$('.a8').hide();
							});
						});

						$(document).ready(function() {
							$(".ada9").click(function() {
								//alert("yeah");
								$('.a9').show();
							});
							$(".tidak9").click(function() {
								$('.a9').hide();
							});
						});

						$(document).ready(function() {
							$(".ada10").click(function() {
								//alert("yeah");
								$('.a10').show();
							});
							$(".tidak10").click(function() {
								$('.a10').hide();
							});
						});

						$(document).ready(function() {
							$(".ada11").click(function() {
								//alert("yeah");
								$('.a11').show();
							});
							$(".tidak11").click(function() {
								$('.a11').hide();
							});
						});

						$(document).ready(function() {
							$(".ada12").click(function() {
								//alert("yeah");
								$('.a12').show();
							});
							$(".tidak12").click(function() {
								$('.a12').hide();
							});
						});

						$(document).ready(function() {
							$(".ada13").click(function() {
								//alert("yeah");
								$('.a13').show();
							});
							$(".tidak13").click(function() {
								$('.a13').hide();
							});
						});

						$(document).ready(function() {
							$(".ada14").click(function() {
								//alert("yeah");
								$('.a14').show();
							});
							$(".tidak14").click(function() {
								$('.a14').hide();
							});
						});

						$(document).ready(function() {
							$(".ada15").click(function() {
								//alert("yeah");
								$('.a15').show();
							});
							$(".tidak15").click(function() {
								$('.a15').hide();
							});
						});

						$(document).ready(function() {
							$(".ada16").click(function() {
								//alert("yeah");
								$('.a16').show();
							});
							$(".tidak16").click(function() {
								$('.a16').hide();
							});
						});

						$(document).ready(function() {
							$(".ada17").click(function() {
								//alert("yeah");
								$('.a17').show();
							});
							$(".tidak17").click(function() {
								$('.a17').hide();
							});
						});

						$(document).ready(function() {
							$(".ada18").click(function() {
								//alert("yeah");
								$('.a18').show();
							});
							$(".tidak18").click(function() {
								$('.a18').hide();
							});
						});

						$(document).ready(function() {
							$(".ada19").click(function() {
								//alert("yeah");
								$('.a19').show();
							});
							$(".tidak19").click(function() {
								$('.a19').hide();
							});
						});

						$(document).ready(function() {
							$(".ada20").click(function() {
								//alert("yeah");
								$('.a20').show();
							});
							$(".tidak20").click(function() {
								$('.a20').hide();
							});
						});

						$(document).ready(function() {
							$(".ada21").click(function() {
								//alert("yeah");
								$('.a21').show();
							});
							$(".tidak21").click(function() {
								$('.a21').hide();
							});
						});

						$(document).ready(function() {
							$(".ada22").click(function() {
								//alert("yeah");
								$('.a22').show();
							});
							$(".tidak22").click(function() {
								$('.a22').hide();
							});
						});

						$(document).ready(function() {
							$(".ada23").click(function() {
								//alert("yeah");
								$('.a23').show();
							});
							$(".tidak23").click(function() {
								$('.a23').hide();
							});
						});

						$(document).ready(function() {
							$(".ada24").click(function() {
								//alert("yeah");
								$('.a24').show();
							});
							$(".tidak24").click(function() {
								$('.a24').hide();
							});
						});

						$(document).ready(function() {
							$(".ada25").click(function() {
								//alert("yeah");
								$('.a25').show();
							});
							$(".tidak25").click(function() {
								$('.a25').hide();
							});
						});

						$(document).ready(function() {
							$(".ada26").click(function() {
								//alert("yeah");
								$('.a26').show();
							});
							$(".tidak26").click(function() {
								$('.a26').hide();
							});
						});

						$(document).ready(function() {
							$(".ada27").click(function() {
								//alert("yeah");
								$('.a27').show();
							});
							$(".tidak27").click(function() {
								$('.a27').hide();
							});
						});

						$(document).ready(function() {
							$(".ada28").click(function() {
								//alert("yeah");
								$('.a28').show();
							});
							$(".tidak28").click(function() {
								$('.a28').hide();
							});
						});

						$(document).ready(function() {
							$(".ada29").click(function() {
								//alert("yeah");
								$('.a29').show();
							});
							$(".tidak29").click(function() {
								$('.a29').hide();
							});
						});

						$(document).ready(function() {
							$(".ada30").click(function() {
								//alert("yeah");
								$('.a30').show();
							});
							$(".tidak30").click(function() {
								$('.a30').hide();
							});
						});

						$(document).ready(function() {
							$(".ada31").click(function() {
								//alert("yeah");
								$('.a31').show();
							});
							$(".tidak31").click(function() {
								$('.a31').hide();
							});
						});
						$(document).ready(function() {
							$(".ada32").click(function() {
								//alert("yeah");
								$('.a32').show();
							});
							$(".tidak32").click(function() {
								$('.a32').hide();
							});
						});
						$(document).ready(function() {
							$(".ada33").click(function() {
								//alert("yeah");
								$('.a33').show();
							});
							$(".tidak33").click(function() {
								$('.a33').hide();
							});
						});
						$(document).ready(function() {
							$(".ada34").click(function() {
								//alert("yeah");
								$('.a34').show();
							});
							$(".tidak34").click(function() {
								$('.a34').hide();
							});
						});
						$(document).ready(function() {
							$(".ada35").click(function() {
								//alert("yeah");
								$('.a35').show();
							});
							$(".tidak35").click(function() {
								$('.a35').hide();
							});
						});
						$(document).ready(function() {
							$(".ada36").click(function() {
								//alert("yeah");
								$('.a36').show();
							});
							$(".tidak36").click(function() {
								$('.a36').hide();
							});
						});
					</script>
</body>

</html>