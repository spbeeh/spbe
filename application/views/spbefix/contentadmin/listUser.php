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
						<h2>Data User<small>
								<font color="green">

								</font>
							</small></h2>
						<div class="clearfix"></div>
					</div>
					<div class="row">
						<div class="x_content">
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahdata"
								data-placement="top" title=""><span><i class="fa fa-plus"></i></span>&nbsp;&nbsp;Tambah
								Data</button>

							<div id="tambahdata" class="modal fade " tabindex="-1" role="dialog" aria-hidden="true">

								<div class="modal-dialog modal-form">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"
												aria-label="Close"><span aria-hidden="true">×</span>
											</button>
											<h4 class="modal-title" id="myModalLabel2" align="center">
												Peringatan</h4>
										</div>
										<div class="modal-body">
											<?php echo form_open('login/register', ''); ?>
											<div class="form-horizontal form-label-left">
												<div class="form-group">
													<label class="control-label col-md-3" for="first-name">Nama Instansi
														Pusat
														<span class="required">*</span>
													</label>
													<div class="col-md-7">
														<input type="text" name="namainstansipusat" id="first-name2"
															required="required" class="form-control col-md-7 col-xs-12">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3"
														for="nama_penanggungjawab">Nama
														Penanggung jawab
														<span class="required">*</span>
													</label>
													<div class="col-md-7">
														<input type="text" id="last-name2" name="nama_penanggungjawab"
															required="required" class="form-control col-md-7 col-xs-12">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3" for="nip_pj">NIP
														<span class="required">*</span>
													</label>
													<div class="col-md-7">
														<input type="text" id="last-name2" name="nip_pj"
															required="required" class="form-control col-md-7 col-xs-12">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3" for="password">Password
														<span class="required">*</span>
													</label>
													<div class="col-md-7">
														<input type="password" id="last-name2" name="password"
															required="required" class="form-control col-md-7 col-xs-12">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3" for="jabatan_pj">Jabatan
														<span class="required">*</span>
													</label>
													<div class="col-md-7">
														<input type="text" id="last-name2" name="jabatan_pj"
															required="required" class="form-control col-md-7 col-xs-12">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3" for="nama_operator">Nama
														Operator
														<span class="required">*</span>
													</label>
													<div class="col-md-7">
														<input type="text" id="last-name2" name="nama_operator"
															required="required" class="form-control col-md-7 col-xs-12">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3" for="nip_op">NIP
														<span class="required">*</span>
													</label>
													<div class="col-md-7">
														<input type="text" id="last-name2" name="nip_op"
															required="required" class="form-control col-md-7 col-xs-12">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3" for="jabatan_op">Jabatan
														<span class="required">*</span>
													</label>
													<div class="col-md-7">
														<input type="text" id="last-name2" name="jabatan_op"
															required="required" class="form-control col-md-7 col-xs-12">
													</div>
												</div>
											</div>
											<!-- <div class="form-group">
												<label class="control-label col-md-3" for="Role">
													Role <span class="required">*</span>
												</label>
												<div class="col-md-7">
													<select class="select2_single form-control" name="role"
														required="required">
														<option></option>
														<option value="Admin"> Admin </option>
														<option value="User"> User </option>
													</select>
												</div>
											</div> -->
											<div class="form-group">
												<label class="control-label col-md-3" for="Role">
													Role <span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<div id="gender" class="btn-group" data-toggle="buttons">
														<label class="btn btn-default" data-toggle-class="btn-primary"
															data-toggle-passive-class="btn-default">
															<input type="radio" name="role" value="Admin"> &nbsp;
															Admin
															&nbsp;
														</label>
														<label class="btn btn-default" data-toggle-class="btn-primary"
															data-toggle-passive-class="btn-default">
															<input type="radio" name="role" value="User"> User
														</label>
													</div>
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<center>
												<table>
													<tr>
														<td>

															<button id="send" type="submit"
																class="btn btn-success">Submit</button>

														</td>
														<td>
															<button type="reset" class="btn btn-primary"
																data-dismiss="modal">Tidak</button>
														</td>
													</tr>
												</table>
										</div>
										<?php echo form_close(); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<table id="datatable-responsive" class="table table-striped dt-responsive nowrap" cellspacing="0"
						width="100%">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Instansi Pusat</th>
								<th>Penanggung Jawab</th>
								<th>NIP penanggung jawab</th>
								<th>Jabatan penanggung jawab</th>
								<!-- <th>Nama Operator</th>
									<th>NIP operator</th>
									<th>Jabatan operator</th> -->
								<th>Role</th>
								<!-- <th>pas</th> -->
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
								<!-- <td><?php echo $value->nama_operator ?></td>
										<td><?php echo $value->nip_op ?></td>
										<td><?php echo $value->jabatan_op ?></td> -->
								<td><?php echo $value->role ?></td>
								<!-- <td><?php //echo $value->password ?></td> -->
								<td>
									<table>
										<tr>
											<td>
												<form method="post"
													action="<?php echo site_url('sistem/admin/datauser/report/' . $value->id_user) ?>">
													<button type="submit" class="btn btn-warning btn-sm"
														data-toggle="tooltip" data-placement="top"
														title="Lihat"><span><i class="fa fa-eye"></i></span></button>
												</form>
											</td>
											<td>
												<button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
													data-target="#delete<?php echo $key + 1 ?>" data-placement="top"
													title="Hapus"><span><i class="fa fa-trash-o"></i></span></button>

												<div id="delete<?php echo $key + 1 ?>" class="modal fade " tabindex="-1"
													role="dialog" aria-hidden="true">

													<div class="modal-dialog modal-sm">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal"
																	aria-label="Close"><span aria-hidden="true">×</span>
																</button>
																<h4 class="modal-title" id="myModalLabel2"
																	align="center">
																	Peringatan</h4>
															</div>
															<div class="modal-body">
																<p align="center">Yakin ingin
																	dihapus?
																	<br><?php echo $value->nama_penanggungjawab ?>
																</p>
															</div>
															<div class="modal-footer">
																<center>
																	<table>
																		<tr>
																			<td>
																				<form method="post"
																					action="<?php echo site_url('sistem/admin/datauser/destroy/' . $value->id_user) ?>">
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
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div> <!-- /page content -->