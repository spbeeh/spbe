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
			<div class="row">
				<div class="x_content">
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="x_title">
									<h2>Nomenklatur<small></small></h2>
									<ul class="nav navbar-right panel_toolbox">
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
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>No</th>
												<th>Evaluasi</th>
												<th></th>
												<th></th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<!-- <form method="POST"
												action="<?php echo base_url('sistem/admin/isinm/store') ?>"
												enctype="multipart/form-data"> -->
											<?php foreach ($tampil as $key => $value) { ?>
											<tr>
												<th scope="row"><?php echo ($key + 1) ?></th>
												<td><?php echo $value->aplikasi_fungsional ?></td>
												<td>
													<div class="btn-group" data-toggle="buttons">
														<?php if (isset($value->id_user) == $this->session->userdata('id_user')) { ?>
														<label class="ada<?php echo ($key + 1) ?> btn btn-default">
															<input type="radio" name="jawab"
																value="<?php echo $value->jawab ?>" disabled>
															&nbsp;<?php echo $value->jawab ?>&nbsp;
														</label>
														<?php 
												} else { ?>
														<label class="ada<?php echo ($key + 1) ?> btn btn-default">
															<input type="radio" name="jawab" value="-" disabled>
															&nbsp;-&nbsp;
														</label>
														<?php	
												} ?>
													</div>
												</td>
												<td>
													<input class="form-control" type="text" name="nama_aplikasi"
														placeholder="Nama Aplikasi"
														value="<?php echo $value->nama_aplikasi ?>" disabled>
												</td>
												<td>
													<input class="form-control" type="text" name="unit_kerja"
														placeholder="Unit Kerja"
														value="<?php echo $value->nama_aplikasi ?>" disabled>
												</td>
											</tr>
											<?php

									} ?>
											<tr>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td>
													<!-- <td><button type="" class="btn btn-animate">Kembali</button><button
															type="submit" class="btn btn-primary">submit</button> -->
												</td>
											</tr>
											<!-- </form> -->
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
<!-- /page content