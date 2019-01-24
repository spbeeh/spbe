<!-- page content -->
<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3><small></small></h3>
			</div>

			<div class="title_right">
				<div class="col-md-5 col-sm-5 col-xs-12 form-group">
				</div>
			</div>
		</div>

		<div class="clearfix"></div>

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Responsive example<small>Users</small></h2>
						<div class="clearfix"></div>
					</div>
					<div class="row">
						<div class="x_content">
							<button type="button" class="btn btn-primary" data-toggle="modal"
								data-target="#tambahuser"><span class="fa fa-plus"></span>Tambah
								User</button>
							<div id="tambahuser" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Tambah user</h4>
										</div>
										<div class="modal-body">
											<form class="form-horizontal form-label-left"
												action="<?php echo base_url('sistem/admin/datauser/store') ?>"
												method="post" enctype="multipart/form-data" novalidate>
												<div class="item form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12"
														for="name">Nama Instansi Pusat <span
															class="required">*</span></label>
													<div class="col-md-6 col-sm-6 col-xs-12">
														<input id="name" class="form-control col-md-7 col-xs-12"
															data-validate-length-range="6" data-validate-words="2"
															name="namainstansipusat"
															placeholder="both name(s) e.g Jon Doe" required="required"
															type="text">
													</div>
												</div>
												<div class="item form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12"
														for="email">Penanggung Jawab <span
															class="required">*</span></label>
													<div class="col-md-6 col-sm-6 col-xs-12">
														<input type="text" id="" name="nama_penanggungjawab"
															required="required" class="form-control col-md-7 col-xs-12">
													</div>
												</div>
												<div class="item form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12"
														for="email">NIP Penanggung jawab <span
															class="required">*</span></label>
													<div class="col-md-6 col-sm-6 col-xs-12">
														<input type="text" id="email2" name="nip_pj"
															data-validate-linked="email" required="required"
															class="form-control col-md-7 col-xs-12">
													</div>
												</div>
												<div class="item form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12"
														for="number">Jabatan <span class="required">*</span></label>
													<div class="col-md-6 col-sm-6 col-xs-12">
														<input type="text" id="number" name="jabatan_pj"
															required="required" data-validate-minmax="10,100"
															class="form-control col-md-7 col-xs-12">
													</div>
												</div>
												<div class="item form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12"
														for="website">Nama Operator <span
															class="required">*</span></label>
													<div class="col-md-6 col-sm-6 col-xs-12">
														<input type="text" id="website" name="nama_operator"
															required="required" placeholder="www.website.com"
															class="form-control col-md-7 col-xs-12">
													</div>
												</div>
												<div class="item form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12"
														for="occupation">NIP Operator <span
															class="required">*</span></label>
													<div class="col-md-6 col-sm-6 col-xs-12">
														<input id="occupation" type="text" name="nip_op"
															data-validate-length-range="5,20"
															class="optional form-control col-md-7 col-xs-12">
													</div>
												</div>
												<div class="item form-group">
													<label for="password" class="control-label col-md-3">Jabatan
														Operator</label>
													<div class="col-md-6 col-sm-6 col-xs-12">
														<input id="password" type="text" name="jabatan_op"
															data-validate-length="6,8"
															class="form-control col-md-7 col-xs-12" required="required">
													</div>
												</div>
												<div class="ln_solid"></div>
												<div class="form-group">
													<div class="col-md-6 col-md-offset-3 col-xs-12">
														<button type="submit" class="btn btn-primary"
															data-dismiss="modal">Cancel</button>
														<button id="send" type="submit"
															class="btn btn-success">Submit</button>
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
							<table id="datatable-responsive"
								class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
								width="100%">
								<table id="datatable-responsive"
									class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
									width="100%">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama Instansi Pusat</th>
											<th>Penanggung Jawab</th>
											<th>NIP penanggung jawab</th>
											<th>Jabatan penanggung jawab</th>
											<th>Nama Operator</th>
											<th>NIP operator</th>
											<th>Jabatan operator</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($user as $key => $value) : ?>
										<tr>
											<td><?php echo ($key + 1) ?></td>
											<td><?php echo $value->namainstansipusat ?></td>
											<td><?php echo $value->nama_penanggungjawab ?></td>
											<td><?php echo $value->nip_pj ?></td>
											<td><?php echo $value->jabatan_pj ?></td>
											<td><?php echo $value->nama_operator ?></td>
											<td><?php echo $value->nip_op ?></td>
											<td><?php echo $value->jabatan_op ?></td>
											<td>
												<table>
													<tr>
														<td><button type="">preview</button></td>
														<td><button type="">edit</button></td>
														<td></td>
													</tr>
												</table>
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
</div> <!-- /page content -->

</div>
</div>
</div>