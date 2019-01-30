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
									<h2>Nomenklatur <small></small></h2>
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
									<form method="post" action="<?php echo base_url('') ?>"
										enctype="multipart/data-form">
										<table class="table table-hover">
											<thead>
												<tr>
													<th></th>
													<th></th>
													<th></th>
												</tr>
											</thead>
											<tbody>
												<?php foreach ($tampil as $key => $value) { ?>
												<tr>
													<td><?php echo $value->id_jenis_pertanyaan_umum ?></td>
													<td><?php echo $value->pertanyaan_umum ?></td>
													<td><?php if ($value->jenisinput == "File") { ?>
														<input type="file" name="" value="">

														<?php 
												} else { ?>
														<textarea id="message" required="required" class="form-control"
															name="message"
															style="margin: 0px -5.5px 0px 0px; width: 100%; height: 140px; resize: none;"></textarea>
														<?php 
												} ?>
													</td>

												</tr>
												<?php 
										} ?>
												<tr>
													<td></td>
													<td>
													</td>
													<td>
														<button type="button" class="btn btn-animate">batal</button>
														<button type="submit" class="btn btn-success">submit</button>
													</td>
												</tr>
											</tbody>
										</table>
									</form>
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