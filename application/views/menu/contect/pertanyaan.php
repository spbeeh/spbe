<div class="wrapper">
	<?php $id = $this->session->userdata('id_user');
$this->db->select('*')
	->from('aplikasi_fungsional')
	->join('jenis', 'aplikasi_fungsional.id_jenis = jenis.id_jenis')
	->JOIN('master', 'aplikasi_fungsional.id_aplikasi_fungsional=master.id_nama_aplikasi', 'left')
	->WHERE('master.id_user', $id);

$query = $this->db->get(); ?>
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
									<h1 class="nav-link">Nomenklatur</h1>
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
												action="<?php echo site_url('sistem/admin/isinm/store') ?>"
												enctype="multipart/form-data">
												<?php if (isset($query) != $id) { ?>
												<?php foreach ($jawab as $key => $value) { ?>
												<tr>
													<th scope="row">
														<?php echo ($key + 1) ?>
													</th>
													<td style="text-align:left;">
														<?php echo $value->id_nama_aplikasi ?>
													</td>
													<td>
													 <?php echo $value->aplikasi_fungsional ?>
														<input type="hidden" name="id_nama_aplikasi"
															value="<?php echo $value->id_aplikasi_fungsional ?>">
														<input type="hidden" name="id_user[]"
															value="<?php echo $this->session->userdata('id_user') ?>">

													</td>
													<td>
														<div class="form-check form-check-radio">
															<select name="jawab[]">
																<option value=""></option>
																<option value="Ada">Ada</option>
																<option value="Tidak">Tidak</option>
															</select>
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
												<?php 
										} ?>
												<tr>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td>

														<?php if (isset($query) == $id) { ?>
														<button type="button" class="btn btn-animate">Kembali</button>
														<button type="submit" class="btn btn-primary">submit</button>

														<?php 
												} else { ?>
														<?php 
												} ?>
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
