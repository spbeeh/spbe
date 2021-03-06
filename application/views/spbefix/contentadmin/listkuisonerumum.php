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
											action="<?php echo site_url('sistem/admin/datapertanyaanumum/store') ?>"
											method="post" enctype="multipart/form-data" novalidate>
											<div class="item form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">
													No. Urut <span class="required"></span></label>
												<div class="col-sm-7 col-xs-12">
													<input type="number" required="required" class="form-control"
														name="no_urut" />
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12">pertanyaan
													Khusus</label>
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
												<div class="col-sm-7 col-xs-12">
													<textarea required="required" class="form-control"
														name="pertanyaan_umum"
														style="margin: 0px -5.5px 0px 0px; width: 100%; height: 140px; resize: none;"></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12">Sub
													Pertanyaan</label>
												<div class="col-sm-7 col-xs-12">
													<select name="sub_pertanyaan" class="select2_single form-control"
														tabindex="-1">
														<option>Tidak ada</option>
														<?php foreach ($pertanyaanUtama as $data) : ?>
														<option value="<?php echo $data->id_pertanyaan_umum ?>">
															<?php echo $data->pertanyaan_umum ?>
														</option>
														<?php endforeach; ?>

													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-3" for="Role">
													jenis inputan <span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<div id="gender" class="btn-group" data-toggle="buttons">
														<label class="btn btn-default" data-toggle-class="btn-primary"
															data-toggle-passive-class="btn-default">
															<input type="radio" name="jenisinput" value="File"> &nbsp;
															File
															&nbsp;
														</label>
														<label class="btn btn-default" data-toggle-class="btn-primary"
															data-toggle-passive-class="btn-default">
															<input type="radio" name="jenisinput" value="Text"> Text
														</label>
													</div>
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

								</div>
							</div>
						</div>
						<div class="clearfix"></div>
						<table id="datatable-responsive" class="table table-striped " cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>No</th>
									<th>Pertanyaan umum</th>
									<th>Khusus</th>
									<th>Inputan</th>
									<th>Aksi</th>
								</tr>

							</thead>
							<tbody>
								<?php foreach ($pertanyaanumum as $keys => $value1) : ?>
								<tr>
									<td><?php echo ($keys + 1) ?></td>
									<td><?php echo $value1->pertanyaan_umum ?></td>
									<td>
										<?php foreach ($jenisumum as $ke1y) {
										if ($value1->id_jenis_pertanyaan_umum == $ke1y->id_jenis_pertanyaan_umum) {
											echo $ke1y->jenis_pertanyaan_umum;
										}
									} ?>
									</td>
									<td><?php echo $value1->jenisinput ?></td>
									<td>
										<table>
											<tr>
												<td><button type="button" class="btn btn-primary" data-toggle="modal"
														data-target="#editdata<?php echo $keys + 1 ?>"><span><i
																class="fa fa-edit"></i></span></button>
													<div id="editdata<?php echo $keys + 1 ?>" class="modal fade"
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
																		action="<?php echo site_url('sistem/admin/datapertanyaanumum/edit/' . $value1->id_pertanyaan_umum) ?>"
																		enctype="multipart/form-data" novalidate>
																		<div>
																			<input type="hidden"
																				name="id_pertanyaan_umum"
																				value="<?php echo $value1->id_pertanyaan_umum ?>">
																		</div>
																		<div class="form-group">
																			<label
																				class="control-label col-md-3 col-sm-3 col-xs-12">
																				pertanyaan Khusus</label>
																			<div class="col-sm-7 col-xs-12">
																				<select
																					class="select2_single form-control"
																					name="id_jenis_pertanyaan_umum"
																					tabindex="-1">
																					<?php foreach ($jenisumum as $value => $key) : ?>
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
																				for="name">Pertanyaan Umum <span
																					class="required"></span></label>
																			<div class="col-md-6 col-sm-6 col-xs-12">
																				<textarea required="required"
																					class="form-control"
																					name="pertanyaan_umum"
																					style="margin: 0px -5.5px 0px 0px; width: 100%; height: 140px; resize: none;"
																					value="<?php echo $value1->pertanyaan_umum ?>"><?php echo $value1->pertanyaan_umum ?></textarea>
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
												<td>
													<button type="button" class="btn btn-danger" data-toggle="modal"
														data-target="#delete<?php echo $keys + 1 ?>"><span><i
																class="fa fa-trash-o"></i></span></button>

													<div id="delete<?php echo $keys + 1 ?>" class="modal fade "
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
																	</p>
																</div>
																<div class="modal-footer">
																	<center>
																		<table>
																			<tr>
																				<td>
																					<form method="post"
																						action="<?php echo site_url('sistem/admin/datapertanyaanumum/delete/' . $value1->id_pertanyaan_umum) ?>">
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
												</td>
											</tr>
										</table>
									</td>
									<td></td>
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