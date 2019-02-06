        <!-- page content -->
        <div class="right_col" role="main">
        	<div class="">
        		<!-- <div class="page-title">
        			<div class="title_left">
        				<h3>LAPORAN <small>Some examples to get you started</small></h3>
        			</div>

        			<div class="title_right">
        				<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
        					<div class="input-group">
        						<input type="text" class="form-control" placeholder="Search for...">
        						<span class="input-group-btn">
        							<button class="btn btn-default" type="button">Go!</button>
        						</span>
        					</div>
        				</div>
        			</div>
        		</div> -->
        		<!-- <div class="clearfix"></div> -->
        		<div class="row" id="printableArea">
        			<div class="col-md-12">
        				<div class="x_panel">
        					<div class="x_title"><?php foreach ($user as $key => $value) : ?>
        						<h2>Laporan Hasil Evaluasi <small><?php echo $value->namainstansipusat ?></small></h2>
        						<ul class="nav navbar-right panel_toolbox">
        							<!-- <li><button class="btn btn-primary" type=""><i class="fa fa-edit"></i>edit</button>
        							</li> -->
        						</ul>
        						<div class="clearfix"></div>
        					</div>
        					<div class="x_content">
        						<section class="content invoice">
        							<!-- title row -->
        							<div class="row">
        								<div class="col-xs-12 invoice-header">
        									<h1>
        										<center>PEMERINTAH KOTA MALANG <br> DINAS KOMUNIKASI DAN INFORMATIKA
        									</h1>
        									<h3>
        										<center>UPT. PUSAT KENDALI (COMMAND CENTER)
        									</h3>
        									<br>
        									<h4 class="">
        										<center>
        											Jalan Tugu No. 1 Telp.
        											(0341)
        											328553 <br>
        											email : ncc@malangkota.go.id
        									</h4>
        								</div>
        								<!-- /.col -->
        							</div>
        							<hr class="single">
        							<strong>
        								<h1>
        									<p align="center" style="font-size: 20px">BUKTI PENGISIAN</p>
        								</h1>
        							</strong>
        							<hr>
        							<br>
        							<br>
        							<!-- info row -->
        							<div class="row invoice-info">
        								<div class="pull-left col-sm-4 invoice-col">
        									<table>

        										<tr>
        											<td>
        												<h3><strong>Nama Instansi Pusat</strong></h3>
        											</td>
        											<td>&nbsp;</td>
        											<td>&nbsp;</td>
        											<td>
        												<h3>: <?php echo $value->namainstansipusat ?></h3>
        											</td>
        											<td>
        											</td>
        										</tr>
        									</table>
        									<br>
        									<table>
        										<tr>
        											<td>
        												<h2>Nama penanggung Jawab</h2>
        											</td>
        											<td>&nbsp;</td>
        											<td>&nbsp;</td>
        											<td>
        												<h2>: <?php echo $value->nama_penanggungjawab ?></h2>
        											</td>
        											<td>
        											</td>
        										</tr>
        										<tr>
        											<td>
        												<h2>NIP</h2>
        											</td>
        											<td>&nbsp;</td>
        											<td>&nbsp;</td>
        											<td>
        												<h2>: <?php echo $value->nip_pj ?></h2>
        											</td>
        											<td>
        											</td>
        										</tr>
        										<tr>
        											<td>
        												<h2>Jabatan</h2>
        											</td>
        											<td>&nbsp;</td>
        											<td>&nbsp;</td>
        											<td>
        												<h2>: <?php echo $value->jabatan_pj ?></h2>
        											</td>
        											<td>
        											</td>
        										</tr>
        									</table>
        								</div>
        								<!-- /.col -->
        								<!-- /.col -->
        								<div class="pull-right col-sm-4 invoice-col">
        									<table>
        										<tr>
        											<td>
        												<h3><strong></strong></h3>
        											</td>
        											<td>&nbsp;</td>
        											<td>&nbsp;</td>
        											<td>
        												<h3></h3>
        											</td>
        											<td>
        											</td>
        										</tr>
        									</table>
        									<br>
        									<br>
        									<br>
        									<table>
        										<tr>
        											<td>
        												<h2>Nama Operator</h2>
        											</td>
        											<td>&nbsp;</td>
        											<td>&nbsp;</td>
        											<td>
        												<h2>: <?php echo $value->nama_operator ?></h2>
        											</td>
        											<td>
        											</td>
        										</tr>
        										<tr>
        											<td>
        												<h2>NIP</h2>
        											</td>
        											<td>&nbsp;</td>
        											<td>&nbsp;</td>
        											<td>
        												<h2>:<?php echo $value->nip_op ?></h2>
        											</td>
        											<td>
        											</td>
        										</tr>
        										<tr>
        											<td>
        												<h2>Jabatan</h2>
        											</td>
        											<td>&nbsp;</td>
        											<td>&nbsp;</td>
        											<td>
        												<h2>:<?php echo $value->jabatan_op ?></h2>
        											</td>
        											<td>
        											</td>
        										</tr>
        									</table>
        								</div>
        								<!-- /.col -->
        							</div>
        							<!-- /.row -->

        							<!-- Table row -->
        							<div class="row">
        								<div class="col-xs-12 table">
        									<table class="table table-striped">
        										<thead>
        											<tr>
        												<th>No</th>
        												<th>Evaluasi</th>
        												<th>&nbsp;</th>
        												<th>Status</th>
        												<th>Aksi</th>
        												<!-- <th style="width: 59%">Description</th>
        												<th>Subtotal</th> -->
        											</tr>
        										</thead>
        										<tbody>
        											<tr>
        												<td>1</td>
        												<td>Pertanyaaan Umum</td>
        												<td></td>
        												<td>
        													<?php if (isset($pertanyaan_umum->id_user) == $this->session->userdata('id_user')) {
																					echo ("<span style='color:green'>Sudah Mengisi</span>");
																				} else {
																					echo ("<span style='color:red'>Belum Mengisi/Belum Selesai</span>");
																				} ?>
        												</td>
        												<td>
        													<form method="post"
        														action="<?php echo site_url('sistem/admin/kuisonerumum/' . $value->id_user) ?>">
        														<button type="" class="btn btn-primary btn-sm"
        															data-toggle="tooltip" data-placement="top"
        															title="Buka"><span><i
        																	class="fa fa-pencil"></i></span></button>
        													</form>
        												</td>
        											</tr>
        											<tr>
        												<td>2</td>
        												<td>Evaluasi Aplikasi</td>
        												<td></td>
        												<td>
        													<?php if (isset($value->id_user) == $this->session->userdata('id_user')) {

																					echo ("<span style='color:green'>Sudah Mengisi</span>");

																				} else {
																					echo ("<span style='color:red'>Belum Mengisi/Belum Selesai</span>");
																				} ?>
        												</td>
        												<td>
        													<form method="post"
        														action="<?php echo site_url('sistem/admin/nomenklatur/' . $value->id_user) ?>">
        														<button type="" class="btn btn-primary btn-sm"
        															data-toggle="tooltip" data-placement="top"
        															title="Buka"><span><i
        																	class="fa fa-pencil"></i></span></button>
        													</form>
        												</td>
        											</tr>
        										</tbody>
        									</table>
        								</div>
        								<!-- /.col -->
        							</div>
        							<!-- /.row -->

        							<div class="col-xs-6 pull-right">
        								<p class="lead"></p>
        								<div class="table-responsive">
        									<table class="table">
        										<tbody>
        											<tr>
        												<th style="width:50%">total:</th>
        												<td>
        													(<?php echo number_format(((count($tampil) / 36) * 100), 0) ?>%)
        													dari
        													rekomendasi Sistem
        													informasi
        												</td>
        											</tr>
        											<tr>
        												<th></th>
        												<td></td>
        											</tr>
        									</table>
        								</div>
        							</div>
        							<!-- /.col -->
        					</div>
        					<?php endforeach; ?>
        					<!-- /.row -->

        					<!-- this row will not appear when printing -->
        					<div class="row no-print">
        						<div class="col-xs-12">
        							<button onclick="printDiv('printableArea')" class="btn btn-default btn-print"><i
        									class="fa fa-print"></i> Print</button>
        						</div>
        					</div>
        					</section>
        				</div>
        			</div>
        		</div>

        	</div>
        </div>
        </div>
        <!-- /page content -->