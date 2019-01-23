<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo site_url('Asett/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo site_url('Asett/css/modern-business.css') ?>" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.html">Evaluasi SPBE</a>
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

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Evaluasi SPBE
        <small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
/          <a href="<?php echo site_url('Asett/index.html') ?>">Beranda</a>
        </li>
        <li class="breadcrumb-item active">Isi Kuisioner SPBE</li>
      </ol>

      <!-- Image Header -->
      

      <!-- Marketing Icons Section -->
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Pertanyaan Umum</h4>
            <div class="card-body">
              <p class="card-text">Berisikan Pertanyaan Umum seputar Aplikasi dengan Jawaban Uraian tentang Aplikasi</p>
            </div>
            <div class="card-footer">
              <a href="<?php echo site_url('menu/hal1') ?>" class="btn btn-primary">Pertanyaan Umum</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Kuisioner Daftar 
            Aplikasi </h4>
            <div class="card-body">
              <p class="card-text">Berisi Kuisioner Aplikasi yang digunakan pada instansi tersebut</p>
            </div>
            <div class="card-footer">
              <a href="<?php echo site_url('menu/hal2') ?>" class="btn btn-primary">Kuisioner</a>
            </div>
          </div>
        </div>
            <!-- /.row -->

    </div>
    <!-- /.container -->

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

  </body>

</html>
