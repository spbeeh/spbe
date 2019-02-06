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
												<th></th>
												<th>Jenis Evaluasi</th>
												<th>Status</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($jenis as $key => $data) { ?>
											<tr>
												<th scope="row"></th>
												<td>
												<?php echo $data->jenis ?>
												</td>
												<td>
													<?php if (isset($data->id_user) == $id) {
													echo "<label class='badge badge-success'>sudah<label>";
												} else {
													echo "<label class='badge badge-danger'>Belum</label>";
												} ?>
												</td>
												<td>
													<form method="post"
														action="<?php echo site_url('menu/hal2/isi/' . $data->id_jenis) ?>">
														<button type="submit" class="btn btn-warning btn-sm"
															data-toggle="tooltip" data-placement="top"
															title="Buka"><span><i
																	class="fa fa-edit"></i></span></button>
													</form>
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
					<!-- End Tabs on plain Card -->
				</div>
			</div>
			<div class="separator separator-primary"></div>

		</div>
	</div>
</div>
<footer class="footer footer-default ">
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
