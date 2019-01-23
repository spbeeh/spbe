<-- page content -->
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
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Responsive example<small>Users</small></h2>
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
											<form class="form-horizontal form-label-left" novalidate>

												<div class="item form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama Instansi Pusat <span class="required">*</span></label>
													<div class="col-md-6 col-sm-6 col-xs-12">
														<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"
														 data-validate-words="2" name="name" placeholder="both name(s) e.g Jon Doe" required="required" type="text">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12">Select Custom</label>
													<div class="col-sm-7 col-xs-12">
														<select class="select2_single form-control" tabindex="-1">
															<option></option>
															<option value="AK">Alaska</option>
														</select>
													</div>
												</div>
												<div class="ln_solid"></div>
												<div class="form-group">
													<div class="col-md-6 col-md-offset-3 col-xs-12">
														<button type="submit" class="btn btn-primary" data-dismiss="modal">Cancel</button>
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
								</tbody>
							</table>


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /page content