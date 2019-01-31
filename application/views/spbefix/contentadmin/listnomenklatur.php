<!-- page content -->
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
						<button type="button" class="btn btn-primary" data-toggle="modal"
							data-target="#tambahuser"><span class="fa fa-plus"></span>&nbsp;&nbsp;Tambah data</button>
						<div id="tambahuser" class="modal fade" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Tambah data</h4>
									</div>
									<div class="modal-body">
										<form class="form-horizontal form-label-left" method="post"
											action="<?php echo base_url('sistem/admin/datanomenklatur/store') ?>"
											enctype="multipart/form-data" novalidate>
											<div class="item form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">
													Aplikasi Fungsional <span class="required"></span></label>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<input id="name" class="form-control col-md-7 col-xs-12"
														data-validate-length-range="6" data-validate-words="2"
														name="aplikasi_fungsional" placeholder="" required="required"
														type="text">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis
												</label>
												<div class="col-sm-7 col-xs-12">
													<select class="select2_single form-control" name="id_jenis"
														tabindex="-1">
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

						<table id="datatable-responsive" class="table table-striped dt-responsive nowrap"
							cellspacing="0" width="100%">
							<thead>
								<tr>
									<th rowspan=2>No</th>
									<th rowspan=2>Aplikasi Fungsional</th>
									<th rowspan=2>Jenis</th>
									<th colspan="2">action</th>
								</tr>
								<tr style="display:none">
									<th></th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($aa as $ke1y => $value) { ?>
								<tr>
									<td>
										<?php echo ($ke1y + 1) ?>
									</td>
									<td>
										<?php echo $value->aplikasi_fungsional ?>
									</td>
									<td>
										<?php foreach ($jenis as $key) :
										if ($value->id_jenis == $key->id_jenis) {
										echo $key->jenis;
									}
									endforeach; ?>
									</td>
									<td>
										<table>
											<tr>
												<td><button type="button" class="btn btn-primary btn-sm"
														data-toggle="modal"
														data-target="#editdata<?php echo $ke1y + 1 ?>"><span><i
																class="fa fa-edit"></i></span> </button>
													<div id="editdata<?php echo $ke1y + 1 ?>" class="modal fade"
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
																		action="<?php echo base_url('sistem/admin/datanomenklatur/edit/' . $value->id_aplikasi_fungsional) ?>"
																		enctype="multipart/form-data" novalidate>
																		<div>
																			<input type="hidden"
																				name="id_aplikasi_fungsional"
																				value="<?php echo $value->id_aplikasi_fungsional ?>">
																		</div>
																		<div class="item form-group">
																			<label
																				class="control-label col-md-3 col-sm-3 col-xs-12"
																				for="name">Nama
																				Instansi Pusat <span
																					class="required"></span></label>
																			<div class="col-md-6 col-sm-6 col-xs-12">
																				<input id="name"
																					class="form-control col-md-7 col-xs-12"
																					data-validate-length-range="6"
																					data-validate-words="2"
																					name="aplikasi_fungsional"
																					placeholder="" required="required"
																					type="text"
																					value="<?php echo $value->aplikasi_fungsional ?>">
																			</div>
																		</div>
																		<div class="form-group">
																			<label
																				class="control-label col-md-3 col-sm-3 col-xs-12">Select
																				Custom</label>
																			<div class="col-sm-7 col-xs-12">
																				<select
																					class="select2_single form-control"
																					name="id_jenis" tabindex="-1">
																					<?php foreach ($jenis as $key) : ?>
																					<?php if ($value->id_jenis == $key->id_jenis) { ?>
																					<option
																						value="<?php echo $key->id_jenis ?>"
																						selected>
																						<?php echo $key->jenis ?>
																					</option>
																					<?php	
																			} else { ?>
																					<option
																						value="<?php echo $key->id_jenis ?>">
																						<?php echo $key->jenis ?>
																					</option>
																					<?php	
																			} ?>
																					<?php endforeach; ?>
																				</select>
																			</div>
																		</div>
																		<div class="ln_solid"></div>
																		<div class="form-group">
																			<div class="form-group">
																				<div
																					class="col-md-6 col-md-offset-3 col-xs-12">
																					<button type="submit"
																						class="btn btn-primary"
																						data-dismiss="modal">Cancel</button>
																					<button id="send" type="submit"
																						class="btn btn-success"
																						data-dismiss="modal">Submit</button>
																				</div>
																			</div>
																		</div>
																	</form>
																</div>
															</div>
														</div>
													</div>
												</td>
												<td>
													<button type="button" class="btn btn-danger" data-toggle="modal"
														data-target="#delete<?php echo ($ke1y + 1) ?>"><span><i
																class="fa fa-trash-o"></i></span></button>

													<div id="delete<?php echo ($ke1y + 1) ?>" class="modal fade "
														tabindex="-1" role="dialog" aria-hidden="true">

														<div class="modal-dialog modal-sm">
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close"
																		data-dismiss="modal" aria-label="Close"><span
																			aria-hidden="true">×</span>
																	</button>
																	<h4 class="modal-title" id="myModalLabel2"
																		align="center">
																		Peringatan</h4>
																</div>
																<div class="modal-body">
																	<p align="center">yakin ingin
																		dihapus?
																		<?php echo $value->id_aplikasi_fungsional ?>
																	</p>
																</div>
																<div class="modal-footer">
																	<center>
																		<table>
																			<tr>
																				<td>
																					<form method="post"
																						action="<?php echo base_url('sistem/admin/datanomenklatur/delete/' . $value->id_aplikasi_fungsional) ?>">
																						<button type="submit"
																							class="btn btn-danger">Ya</button>
																					</form>
																				</td>

																				<td><button type="button"
																						class="btn btn-primary"
																						data-dismiss="modal">Tidak</button>
																				</td>
																			</tr>
																		</table>
																</div>
															</div>
														</div>
													</div>
													<!-- <form method="post"
														action="<?php echo base_url('sistem/admin/datanomenklatur/delete/' . $value->id_aplikasi_fungsional) ?>">
														<button type="submit" class="btn btn-danger btn-sm"><span><i
																	class="fa fa-trash-o"></i></span></button>
													</form> -->
												</td>
											</tr>
										</table>
									</td>

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