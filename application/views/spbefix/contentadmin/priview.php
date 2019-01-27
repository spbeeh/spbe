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
        					<div class="x_title">
        						<h2>Laporan Hasil Evaluasi <small>(nama instansi)</small></h2>
        						<!-- <ul class="nav navbar-right panel_toolbox">
        							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        							</li>
        							<li class="dropdown">
        								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
        									aria-expanded="false"><i class="fa fa-wrench"></i></a>
        								<ul class="dropdown-menu" role="menu">
        									<li><a href="#">Settings 1</a>
        									</li>
        									<li><a href="#">Settings 2</a>
        									</li>
        								</ul>
        							</li>
        							<li><a class="close-link"><i class="fa fa-close"></i></a>
        							</li>
        						</ul> -->
        						<div class="clearfix"></div>
        					</div>
        					<div class="x_content">
        						<section class="content invoice">
        							<!-- title row -->
        							<div class="row">
        								<div class="col-xs-12 invoice-header">
        									<h1>
        										<center>Kementerian Pendayagunaan Aparatur Negara dan
        											Reformasi Birokrasi
        									</h1>
        									<br>
        									<h4 class="">
        										<center>
        											Jalan Jenderal Sudirman Kavling 69 Jakarta Selatan - 12190 Telp.
        											(+6221)
        											7398381 - 89 Ext. 2111 <br>
        											email : asdep2balaks@menpan.go.id
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
											<?php foreach ($user as $key => $value) : ?>
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
        													<span style="color:green">Sudah Mengisi</span> </td>
        											</tr>
        											<tr>
        												<td>2</td>
        												<td>Evaluasi Aplikasi</td>
        												<td></td>
        												<td><span style="color:red">Belum Mengisi/Belum Selesai</span>
        												</td>
        											</tr>
        										</tbody>
        									</table>
        								</div>
        								<!-- /.col -->
        							</div>
        							<!-- /.row -->

        							<!-- <div class="row"> -->
        							<!-- accepted payments column -->
        							<!-- <div class="col-xs-6">
        									<p class="lead">Payment Methods:</p>
        									<img src="images/visa.png" alt="Visa">
        									<img src="images/mastercard.png" alt="Mastercard">
        									<img src="images/american-express.png" alt="American Express">
        									<img src="images/paypal.png" alt="Paypal">
        									<p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
        										Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly
        										ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers
        										sifteo edmodo ifttt zimbra.
        									</p> -->
        							<!-- </div> -->
        							<!-- /.col -->
        							<!-- <div class="col-xs-6">
        									<p class="lead">Amount Due 2/22/2014</p>
        									<div class="table-responsive">
        										<table class="table">
        											<tbody>
        												<tr>
        													<th style="width:50%">Subtotal:</th>
        													<td>$250.30</td>
        												</tr>
        												<tr>
        													<th>Tax (9.3%)</th>
        													<td>$10.34</td>
        												</tr>
        												<tr>
        													<th>Shipping:</th>
        													<td>$5.80</td>
        												</tr>
        												<tr>
        													<th>Total:</th>
        													<td>$265.24</td>
        												</tr>
        											</tbody>
        										</table>
        									</div>
        								</div> -->
        							<!-- /.col -->
							</div>
							<?php endforeach; ?>
        					<!-- /.row -->

        					<!-- this row will not appear when printing -->
        					<div class="row no-print">
        						<div class="col-xs-12">
        							<button onclick="printDiv('printableArea')" class="btn btn-default btn-print"><i
        									class="fa fa-print"></i> Print</button>
        							<button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i>
        								Submit Payment</button>
        							<button class="btn btn-primary pull-right" style="margin-right: 5px;"><i
        									class="fa fa-download"></i> Generate PDF</button>
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