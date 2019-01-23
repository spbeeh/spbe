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

  <link href="<?php echo base_url('aaa/vendors/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('aaa/vendors/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('aaa/vendors/nprogress/nprogress.css') ?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url('aaa/vendors/iCheck/skins/flat/green.css') ?>" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url('aaa/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') ?>" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url('aaa/vendors/jqvmap/dist/jqvmap.min.css') ?>" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url('aaa/vendors/bootstrap-daterangepicker/daterangepicker.css') ?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('aaa/build/css/custom2.min.css') ?>" rel="stylesheet">

    <script src="<?php echo base_url('aaa/vendors/jquery/dist/jquery.min.js') ?>"></script>

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
            <a class="nav-link" href="<?php echo site_url('Asett/about.html') ?>">Beranda</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo site_url('Asett/services.html') ?>">Isi Kuisioner SPBE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('Asett/contact.html') ?>">Laporan</a>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Other Pages
              </a>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Isi KuisionerSPBE
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo site_url('Asett/index.html') ?>">Beranda</a>
        </li>
        <li class="breadcrumb-item active">Isi Kuisioner SPBE</li>
      </ol>

      <!-- Image Header -->
      
          <div class="page-title">
      <div class="title_left">
        <h3>Kuisioner Umum :  </h3>
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
                      <font size="4">Jelaskan misi/sasaran pelaksanaan SPBE di Instansi Pusat/Pemerintah Daerah masing-masing?</font>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <br />
                      <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                        <div class="form-group">
                         <textarea id="message" required="required" class="form-control" name="message" style="margin: 0px -5.5px 0px 0px; width: 100%; height: 140px; resize: none;"></textarea>
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
               <font size="4">Lampirkan daftar anggota Tim Evaluator Internal di Instansi Pusat/Pemerintah Daerah masing-masing, termasuk surat keputusan pembentukan Tim Evaluator Internal jika ada.</font>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <br />
                      <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                        <div class="form-group">
                         <textarea id="message" required="required" class="form-control" name="message" style="margin: 0px -5.5px 0px 0px; width: 100%; height: 140px; resize: none;"></textarea>
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
                        <br/>
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                        <font size="4">Sebutkan perguruan tinggi  negeri maupun swasta yang memiliki jurusan/program studi terkait komputer, teknologi informasi dan komunikasi, sistem informasi, atau sejenisnya di wilayah Pemerintah Daerah masing-masing?<br></font>
                          <div class="form-group">
                           <textarea id="message" required="required" class="form-control" name="message" style="margin: 0px -5.5px 0px 0px; width: 100%; height: 140px; resize: none;"></textarea>
                          </div>

                          <font size="4">Berapakah persentase ketersediaan sumber daya listrik untuk pelaksanaan SPBE di Pemerintah Daerah masing-masing dalam satu bulan?<br></font>
                          <div class="form-group">
                           <textarea id="message" required="required" class="form-control" name="message2" style="margin: 0px -5.5px 0px 0px; width: 100%; height: 140px; resize: none;"></textarea>
                          </div>

                          <font size="4">Penjelasan : </font>
                          <font size="4">Persentase ketersediaan sumber daya listrik dihitung dengan cara: (jumlah jam sumber daya listrik hidup) dibagi dengan (jumlah jam dalam 30 hari) dikali dengan 100%.</font><br /><br />

                          <font size="4">Jika ada, jelaskan hubungan kerja dengan konsultan, perusahaan di bidang TIK, komunitas TIK, perguruan tinggi atau pihak lain yang membantu dalam pelaksanaan SPBE di Pemerintah Daerah masing-masing.<br></font>
                          <div class="form-group">
                           <textarea id="message" required="required" class="form-control" name="message3" style="margin: 0px -5.5px 0px 0px; width: 100%; height: 140px; resize: none;"></textarea>
                          </div>

                          <font size="4">Penjelasan : <br></font>
                          <font size="4">dapat berisi bidang kerja sama seperti penyusunan rencana induk TIK, perawatan perangkat TIK, pembangunan aplikasi, instalasi jaringan, pengoperasian pusat data, pengolahan data, dan lainnya dengan menyebutkan tahun dan durasi hubungan kerja tersebut.<br></font>

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
                  <font size="4">Apakah terdapat penanggung jawab terhadap pelaksanaan SPBE di Instansi Pusat/Pemerintah Daerah masing-masing? Jika ada, sebutkan.</font>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                        <br />
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                          <div class="form-group">
                           <textarea id="message" required="required" class="form-control" name="message" style="margin: 0px -5.5px 0px 0px; width: 100%; height: 140px; resize: none;"></textarea>
                          </div>

                          <font size="4">Penjelasan : <br></font>
                          <font size="4">Penanggung jawab adalah pejabat yang ditugaskan oleh pimpinan Instansi Pusat atau kepala daerah untuk melaksanakan perencanaan, penerapan, dan pengendalian pelaksanaan SPBE di Instansi Pusat/Pemerintah Daerah masing-masing.<br></font>
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
                  <font size="4">Sebutkan unit kerja/perangkat daerah yang terlibat dalam pelaksanaan SPBE (perencanaan, penerapan, pengoperasian, pemantauan dan evaluasi SPBE) dan lampirkan struktur organisasinya.</font>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                        <br />
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                          <div class="form-group">
                           <textarea id="message" required="required" class="form-control" name="message" style="margin: 0px -5.5px 0px 0px; width: 100%; height: 140px; resize: none;"></textarea>
                          </div>
                        </form>
                      </div>
                    </div>
                </div>
            </div>
      </div>

      <div id="step-6">
        <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                      <div class="x_title">
                  <font size="4">Sebutkan nilai anggaran untuk pelaksanaan SPBE khususnya pada bidang teknologi informasi dan komunikasi di Instansi Pusat/Pemerintah Daerah masing-masing pada tahun 2017 sebagai berikut: </font>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                        <br />
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                          <font size="4">Pembangunan/pengembangan/pembelian aplikasi dan software komersial.</font>
                          <div class="clearfix"></div>
                          <div class="form-group">
                           <textarea id="message" required="required" class="form-control" name="message" style="margin: 0px -5.5px 0px 0px; width: 100%; height: 140px; resize: none;"></textarea>
                          </div>

                          <font size="4">Pembelian/pengadaan perangkat keras teknologi informasi dan komunikasi antara lain PC, laptop, server, penyimpan data (storage), jaringan, appliance, dan pendukung lainnya.</font>
                          <div class="clearfix"></div>
                          <div class="form-group">
                           <textarea id="message" required="required" class="form-control" name="message" style="margin: 0px -5.5px 0px 0px; width: 100%; height: 140px; resize: none;"></textarea>
                          </div>

                          <font size="4">Pemeliharaan perangkat keras teknologi informasi dan komunikasi, aplikasi, dan software komersial antara lain perawatan PC/laptop/server/jaringan/appliance, lisensi software komersial, bandwidth internet, jasa sewa perangkat, jasa pengoperasian, dan jasa konsultansi lainnya.</font>
                          <div class="clearfix"></div>
                          <div class="form-group">
                           <textarea id="message" required="required" class="form-control" name="message" style="margin: 0px -5.5px 0px 0px; width: 100%; height: 140px; resize: none;"></textarea>
                          </div>
                        </form>
                      </div>
                    </div>
                </div>
            </div>
      </div>
      <div id="step-7">
        <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                      <div class="x_title">
                  <font size="4">Berapakah persentase nilai anggaran untuk pelaksanaan SPBE khususnya pada bidang teknologi informasi dan komunikasi terhadap total nilai anggaran Instansi Pusat/Pemerintah Daerah masing-masing pada tahun 2017. </font>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                        <br />
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                          <div class="form-group">
                           <textarea id="message" required="required" class="form-control" name="message" style="margin: 0px -5.5px 0px 0px; width: 100%; height: 140px; resize: none;"></textarea>
                          </div>

                          <font size="4">Penjelasan : <br></font>
                          <font size="4">Nilai anggaran untuk pelaksanaan SPBE khususnya pada bidang teknologi informasi dan komunikasi adalah penjumlahan dari pertanyaan nomor 6.<br></font>
                        </form>
                      </div>
                    </div>
                </div>
            </div>
      </div>
      <div id="step-8">
        <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                      <div class="x_title">
                  <font size="4">Buatlah daftar aplikasi yang dipergunakan untuk melaksanakan manajemen internal birokrasi dan pelayanan publik di Instansi Pusat/Pemerintah Daerah masing-masing.</font>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                        <br />
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                          <div class="form-group">
                           <textarea id="message" required="required" class="form-control" name="message" style="margin: 0px -5.5px 0px 0px; width: 100%; height: 140px; resize: none;"></textarea>
                          </div>
                          <font size="4">Penjelasan : <br></font>
                          <font size="4">Daftar aplikasi menggunakan formulir yang telah ditetapkan.<br></font>
                        </form>
                      </div>
                    </div>
                </div>
            </div>
      </div>
<!-- End SmartWizard Content -->
<!-- Tabs -->
  </div>
</div><!-- Marketing Icons Section -->
      
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
<script src="<?php echo site_url('Asett/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script><!-- jQuery -->
    <!-- Bootstrap -->
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


</body>


</html>
