<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view("spbe/_partial/head.php") ?>
</head>
<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<?php $this->load->view("spbe/_partial/sidebar.php") ?>

			<!-- top navigation -->
			<?php $this->load->view("spbe/_partial/topnav.php") ?>
			<!-- /top navigation -->
			<div class="right_col" role="main">
			<!-- page content -->
				<div class="page-title">
				    <div class="title_left">
				        <h3>Data pertanyaan</h3>
				    </div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
				        <div class="x_panel">
				            <div class="x_content">
								<div class="row">
								    <div class="col-12">
								        <div class="card">
								            <div class="card-body">
								                <div class="table-responsive m-t-20">
								                    <table id="myTable" class="table table-bordered table-striped">
								                        <thead>
								                        	
								                            <tr align="center">
								                                <th>Nama Instansi</th>
								                                <th>Nama Penanggung Jawab</th>                         
								                                <td colspan="2" style="font-weight:bold">Action</td>
								                            </tr>
								                        </thead>
								                        <tbody>
								                        	<?php foreach ($jawaban as $jawaban):?>
									                       <tr>
																<td>
																	<?php echo $jawaban->NAMAINSTANSIPUSAT;  ?>
																</td>
																<td>
																	<?php echo $jawaban->NAMA_PENANGGUNGJAWAB; ?>
																</td>
															</tr>
														<?php endforeach; ?>
								                        </tbody>
								                    </table>
								                </div>
								            </div>
								        </div>
								    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /page content -->

			<!-- footer content -->
			<?php $this->load->view("spbe/_partial/footer.php") ?>
			<!-- /footer content -->
		</div>
	</div>

	<!-- Script -->
	<?php $this->load->view("spbe/_partial/js.php") ?>
</body>
</html>