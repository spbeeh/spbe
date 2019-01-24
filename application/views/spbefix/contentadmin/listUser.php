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
											<form class="form-horizontal form-label-left" novalidate>

												<div class="item form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12"
														for="name">Nama Instansi Pusat <span
															class="required">*</span></label>
													<div class="col-md-6 col-sm-6 col-xs-12">
														<input id="name" class="form-control col-md-7 col-xs-12"
															data-validate-length-range="6" data-validate-words="2"
															name="name" placeholder="both name(s) e.g Jon Doe"
															required="required" type="text">
													</div>
												</div>
												<div class="item form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12"
														for="email">Penanggung Jawab <span
															class="required">*</span></label>
													<div class="col-md-6 col-sm-6 col-xs-12">
														<input type="text" id="email" name="email" required="required"
															class="form-control col-md-7 col-xs-12">
													</div>
												</div>
												<div class="item form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12"
														for="email">NIP Penanggung jawab <span
															class="required">*</span></label>
													<div class="col-md-6 col-sm-6 col-xs-12">
														<input type="text" id="email2" name="confirm_email"
															data-validate-linked="email" required="required"
															class="form-control col-md-7 col-xs-12">
													</div>
												</div>
												<div class="item form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12"
														for="number">Jabatan <span class="required">*</span></label>
													<div class="col-md-6 col-sm-6 col-xs-12">
														<input type="text" id="number" name="number" required="required"
															data-validate-minmax="10,100"
															class="form-control col-md-7 col-xs-12">
													</div>
												</div>
												<div class="item form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12"
														for="website">Nama Operator <span
															class="required">*</span></label>
													<div class="col-md-6 col-sm-6 col-xs-12">
														<input type="text" id="website" name="website"
															required="required" placeholder="www.website.com"
															class="form-control col-md-7 col-xs-12">
													</div>
												</div>
												<div class="item form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12"
														for="occupation">NIP Operator <span
															class="required">*</span></label>
													<div class="col-md-6 col-sm-6 col-xs-12">
														<input id="occupation" type="text" name="occupation"
															data-validate-length-range="5,20"
															class="optional form-control col-md-7 col-xs-12">
													</div>
												</div>
												<div class="item form-group">
													<label for="password" class="control-label col-md-3">Jabatan
														Operator</label>
													<div class="col-md-6 col-sm-6 col-xs-12">
														<input id="password" type="text" name="password"
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