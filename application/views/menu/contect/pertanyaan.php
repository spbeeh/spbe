<div class="wrapper">
	<?php $id = $this->session->userdata('id_user'); ?>
	<div class="">
		<div class="container">
			<div class="row">
				<div class="col-md-auto ml-auto col-xl-auto mr-auto">
					<!-- <p class="category">Tabs with Background on Card</p> -->
					<!-- Tabs with Background on Card -->
					<div class="card">
						<div class="card-header">
							<ul class="nav nav-tabs nav-tabs-neutral justify-content-center" role="tablist"
							data-background-color="orange">
							<li class="nav-item">
								<h1 class="nav-link">Nomen Klatur</h1>
							</li>
						</ul>
					</div>
					<div class="card-body">
						<!-- Tab panes -->
						<div class="tab-content text-center">
							<div class="tab-pane active" id="home1" role="tabpanel">
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
										<form method="POST"
										action="<?php echo base_url('sistem/admin/isinm/store') ?>"
										enctype="multipart/form-data">
										<?php foreach ($tampil as $key => $value) { ?>
											<tr>
												<th scope="row">
													<?php echo ($key + 1) ?>
												</th>
												<td>
													<?php echo $value->aplikasi_fungsional ?>
													<input type="hidden" name="id_nama_aplikasi"
													value="<?php echo $value->id_aplikasi_fungsional ?>">
													<input type="hidden" name="id_user"
													value="<?php echo $this->session->userdata('id_user') ?>">
												</td>
												<td>
													<div class="form-check form-check-radio">
														<label class="form-check-label">
															<input class="form-check-input" type="radio"
															name="jawab"
															id="exampleRadios<?php echo ($key + 1) ?>"
															value="Ada">
															<span class="form-check-sign"></span>
															Ada
														</label>

														<label class="form-check-label">
															<input class="form-check-input" type="radio"
															name="jawab"
															id="exampleRadios<?php echo ($key + 1) ?>"
															value="Tidak Ada">
															<span class="form-check-sign"></span>
															Tidak Ada
														</label>
													</div>
													
													</td>
													<td>
														<input id="ke<?php echo ($key + 1) ?> " class="form-control"
														type="text" name="nama_aplikasi[]"
														placeholder="Nama Aplikasi">
													</td>
													<td>
														<input id="ke<?php echo ($key + 1) ?> " class="form-control"
														type="text" name="unit_kerja[]" placeholder="Unit Kerja">
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
													<button type="button" class="btn btn-animate">Kembali</button>
													<button type="submit" class="btn btn-primary">submit</button>
												</td>
											</tr>


										</form>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!-- End Tabs on plain Card -->
			</div>
		</div>
		<div class="separator separator-primary"></div>

	</div>
</div>
</div>
<footer class="footer footer-default">
	<div class="container">
		<nav>
			<ul>
				<li>
					<a href="https://www.creative-tim.com">
						Creative Tim
					</a>
				</li>
				<li>
					<a href="http://presentation.creative-tim.com">
						About Us
					</a>
				</li>
				<li>
					<a href="http://blog.creative-tim.com">
						Blog
					</a>
				</li>
			</ul>
		</nav>
		<div class="copyright" id="copyright">
			&copy;
			<script>
				document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
			</script>, Designed by
			<a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
			<a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
		</div>
	</div>
</footer>
</div>