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
						<h2>List Data Pertanyaan Umum<small></small></h2>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<button type="button" class="btn btn-primary" data-toggle="modal"
							data-target="#tambahuser"><span class="fa fa-plus"></span>
							&nbsp;Tambah data</button>
						<div id="tambahuser" class="modal fade" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Tambah data</h4>
									</div>
									<div class="modal-body">
										<form class="form-horizontal form-label-left"
											action="<?php echo base_url('sistem/admin/datapertanyaanumum/store') ?>"
											method="post" enctype="multipart/form-data" novalidate>
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12">Select
													Custom</label>
												<div class="col-sm-7 col-xs-12">
													<select name="id_jenis_pertanyaan_umum"
														class="select2_single form-control" tabindex="-1">
														<option></option>
														<?php foreach ($jenisumum as $key) : ?>
														<option value="<?php echo $key->id_jenis_pertanyaan_umum ?>">
															<?php echo $key->jenis_pertanyaan_umum ?>
														</option>
														<?php endforeach; ?>

													</select>
												</div>
											</div>
											<div class="item form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">
													Pertanyaan Umum <span class="required"></span></label>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<textarea id="name" class="form-control col-md-7 col-xs-12"
														data-validate-length-range="6" data-validate-words="2"
														name="pertanyaan_umum" placeholder="" required="required"
														type="text"></textarea>
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
						<table id="datatable" class="table table-striped table-bordered"
							cellspacing="0" width="100%">
							<thead>
								<tr>
									<th rowspan = 2>No</th>
									<th rowspan = 2>Pertanyaan umum</th>
									<th rowspan = 2>Khusus</th>
									<th colspan ="2" >action</th>
								</tr>
								<tr style="display:none">
									<th></th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($pertanyaanumum as $key => $value) : ?>
								<tr>
									<td><?php echo ($key + 1) ?></td>
									<td><?php echo $value->pertanyaan_umum ?></td>
									<td>
									<?php foreach ($jenisumum as $ke1y) :
										if ($value->id_jenis_pertanyaan_umum == $ke1y->id_jenis_pertanyaan_umum) {
										echo $ke1y->jenis_pertanyaan_umum;
									}
								endforeach; ?>
									</td>
									<td>
										<table>
											<tr>
												<td><button type="button" class="btn btn-primary" data-toggle="modal"
																	data-target="#editdata<?php echo $key + 1 ?>">Edit</button>
													<div id="editdata<?php echo $key + 1 ?>" class="modal fade"
														role="dialog">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close"
																		data-dismiss="modal">&times;</button>
																	<h4 class="modal-title">Edit Data</h4>
																</div>
																<div class="modal-body">
																	<form class="form-horizontal form-label-left"
																		method="post"
																		action="<?php echo base_url('sistem/admin/datapertanyaanumum/edit/' . $value->id_pertanyaan_umum) ?>"
																		enctype="multipart/form-data" novalidate>
																		<div>
																			<input type="hidden"
																				name="id_pertanyaan_umum"
																				value="<?php echo $value->id_pertanyaan_umum ?>">
																		</div>
																		<div class="form-group">
																			<label
																				class="control-label col-md-3 col-sm-3 col-xs-12">Select
																				Custom</label>
																			<div class="col-sm-7 col-xs-12">
																				<select
																					class="select2_single form-control"
																					name="id_jenis_pertanyaan_umum" tabindex="-1">
																					<?php foreach ($jenisumum as $key) : ?>
																					<?php if ($value->id_jenis_pertanyaan_umum == $key->id_jenis_pertanyaan_umum) { ?>
																					<option
																						value="<?php echo $key->id_jenis_pertanyaan_umum ?>"
																						selected>
																						<?php echo $key->jenis_pertanyaan_umum ?>
																					</option>
																					<?php	
																			} else { ?>
																					<option
																						value="<?php echo $key->id_jenis_pertanyaan_umum ?>">
																						<?php echo $key->jenis_pertanyaan_umum ?>
																					</option>
																					<?php	
																			} ?>
																					<?php endforeach; ?>
																				</select>
																			</div>
																		</div>
																		<div class="item form-group">
																			<label
																				class="control-label col-md-3 col-sm-3 col-xs-12"
																				for="name">Pertanyaan Umum  <span
																					class="required"></span></label>
																			<div class="col-md-6 col-sm-6 col-xs-12">
																				<textarea id="name" class="form-control col-md-7 col-xs-12"
																					data-validate-length-range="6" data-validate-words="2"
																					name="pertanyaan_umum" required="required"
																					type="text" ><?php echo $value->pertanyaan_umum ?></textarea>
																			</div>
																		</div>
																		
																		<div class="ln_solid"></div>
																		<div class="form-group">
																		<div class="form-group">
																			<div class="col-md-6 col-md-offset-3 col-xs-12">
																				<button type="submit" class="btn btn-primary"
																					data-dismiss="modal">Cancel</button>
																				<button id="send" type="submit"
																					class="btn btn-success">Submit</button>
																			</div>
																		</div>
																		</div>
																	</form>
																</div>
															</div>
														</div>
													</div>
												</td>
												
											</tr>
										</table>
									</td>
									<td>
										<form method="post"
											action="<?php echo base_url('sistem/admin/datapertanyaanumum/delete/' . $value->id_pertanyaan_umum) ?>">
											<button type="submit" class="btn btn-danger">Delete</button>
										</form>
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
<!-- /page content -->