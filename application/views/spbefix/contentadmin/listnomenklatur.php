<<<<<<< HEAD
<!-- page content -->
=======
>>>>>>> d3758a4a1515482ee87376267bcbeeaf7a08ff69
<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3><small></small></h3>
			</div>
			<div class="title_right">
				<div class="col-md-5 col-sm-5 col-xs-12 form-group">
					<!-- <div class="input-group">
						<input type="text" class="form-control" placeholder="Search for...">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button">Go!</button>
						</span>
					</div> -->
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<!-- <div class="row"> -->
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>List Data Pertanyaan Nomenklatur<small></small></h2>
					<div class="clearfix"></div>
				</div>
				<div class="row">
					<div class="x_content">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahuser"><span class="fa fa-plus"></span>Tambah
							data</button>
						<div id="tambahuser" class="modal fade" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Tambah data</h4>
									</div>
									<div class="modal-body">
										<form class="form-horizontal form-label-left" method="post" action="<?php echo base_url('sistem/admin/datanomenklatur/store') ?>"
										 enctype="multipart/form-data" novalidate>
											<div class="item form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama Instansi Pusat <span class="required">*</span></label>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
													 data-validate-words="2" name="aplikasi_fungsional" placeholder="" required="required" type="text">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12">Select Custom</label>
												<div class="col-sm-7 col-xs-12">
													<select class="select2_single form-control" name="id_jenis" tabindex="-1">
														<option></option>
														<?php foreach ($jenis as $key) : ?>
														<option value="<?php echo $key->id_jenis ?>">
															<?php echo $key->jenis ?>
														</option>
														<?php endforeach; ?>

													</select>
												</div>
											</div>
											<div class="ln_solid"></div>
											<div class="form-group">
												<div class="col-md-6 col-md-offset-3 col-xs-12">
													<button class="btn btn-primary" data-dismiss="modal">Cancel</button>
													<button id="send" type="submit" class="btn btn-success">Submit</button>
												</div>
											</div>
										</form>
									</div>
									<!-- <div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
									</div> -->
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
						<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
						 width="100%">
							<thead>
								<tr>
									<th>No</th>
									<th>Aplikasi Fungsional</th>
									<th>Jenis</th>
									<th>action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($aa as $key => $value) { ?>
								<tr>
									<td>
										<?php echo ($key + 1) ?>
									</td>
									<td>
										<?php echo $value->aplikasi_fungsional ?>
									</td>
									<td>
										<?php echo $value->id_jenis ?>
									</td>
									<td><button type="">Edit</button>
										<button type="">Delete</button></td>
								</tr>
								<?php 
						} ?>
							</tbody>
						</table>


					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /page content