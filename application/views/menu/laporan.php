<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Modern Business - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo site_url ('Asett/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo site_url ('Asett/css/modern-business.css') ?>" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.html">Start Bootstrap</a>
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
            <a class="nav-link" href="<?php echo site_url('menu/laporan') ?>">Laporan</a>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Contact
        <small>Subheading</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="menu/dashboard">Beranda</a>
        </li>
        <li class="breadcrumb-item active">Laporan</li>
      </ol>
      <div class="page">
        <div class="page-content container-fluid">
          <div class="panel">
            <div class="panel-body container-fluid">
              <div class="noprint pull-right">
                <button class="btn btn-primary btn-sm waves-effect waves-light" type="button" onclick="cetak_datatable()">
                  <i class="fa fa-print"></i> Cetak
                </button>
                <button class="btn btn-danger btn-sm waves-effect waves-light" type="button" onclick="window.history.back()">
                  <i class="fa fa-arrow-left"></i> Kembali
                </button>
                <div class="clearfix"></div>
              </div>
              <center>
                <table class="pad5">
                  <tbody><tr>
                    <td>
                      <img src="Asett/Image/logo.png" alt="hitam_putih_logo" height="80" width="80">
                    </td>
                    <td width="30">&nbsp;</td>
                    <td align="center">
                      <h4 class="uppercase">Kementerian Pendayagunaan Aparatur Negara dan Reformasi Birokrasi</h4>
                      <h4 class="uppercase">Evaluasi SPBE</h4>
                      Jalan Jenderal Sudirman Kavling 69 Jakarta Selatan - 12190  Telp. (+6221) 7398381 - 89 Ext. 2111 <br>
                     email : asdep2balaks[at]menpan[dot]go[dot]id
                    </td>
                  </tr> 
                </tbody></table>
              </center>
              <hr class="single">
              <strong><p align="center" style="font-size: 13px">BUKTI PENGISIAN</p></strong>
              <table class="table">
                <tbody><tr>
                  <td style="width: 200px">Nama Instansi Daerah</td>
                  <td style="width:10px">:</td>
                  <td>  </td>
                </tr>

                <tbody><tr>
                  <td style="width: 200px">NIP</td>
                  <td style="width:10px">:</td>
                  <td>  </td>
                </tr>
                <tr>
                  <td>Nama</td>
                  <td style="width:10px">:</td>
                  <td> </td>
                </tr>
              </tbody></table>
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
                      <span style="color:green">Sudah Mengisi</span>                  </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Layanan Publikr</td>
                        <span style="color:red">Belum Mengisi</span>                  </td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Administrasi Dan Manajemen Umum</td>
                          <span style="color:green">Sudah Mengisi</span>                  </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Administrasi Legislasi</td>
                          <td>
                            <span style="color:green">Sudah Mengisi</span>                  </td>
                          </tr>
                          <tr>
                            <td>5</td>
                            <td>Manajemen Keuangan</td>
                            <td>
                              <span style="color:green">Sudah Mengisi</span>                  </td>
                            </tr>
                            <tr>
                              <td>6</td>
                              <td>Sistem Informasi Keuangan Daerah</td>
                              <td>
                                <span style="color:green">Sudah Mengisi</span>                  </td>
                              </tr>
                              <tr>
                                <td>7</td>
                                <td>Manajemen Keuangan</td>
                                <td>
                                  <span style="color:green">Sudah Mengisi</span>                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Content Row -->

                  <!-- /.container -->

                  <!-- Footer -->
                  <footer class="py-5 bg-dark">
                    <div class="container">
                      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
                    </div>
                    <!-- /.container -->
                  </footer>

                  <!-- Bootstrap core JavaScript -->
                  <script src="<?php echo site_url ('Asett/vendor/jquery/jquery.min.js') ?> "></script>
                  <script src=<?php echo site_url ('Asett/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

                  <!-- Contact form JavaScript -->
                  <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
                  <script src="<?php echo site_url ('Asett/js/jqBootstrapValidation.js') ?>"></script>
                  <script src="<?php echo site_url ('Asett/js/contact_me.js') ?>"></script>

                </body>

                </html>
