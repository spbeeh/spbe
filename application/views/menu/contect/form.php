<div class="wrapper">

	<div class="">
		<div class="container">
			<div class="row">
				<div class="col-md-10 ml-auto col-xl-6 mr-auto">
					<!-- <p class="category">Tabs with Background on Card</p> -->
					<!-- Tabs with Background on Card -->
					<div class="card">
						<div class="card-header">
							<ul class="nav nav-tabs nav-tabs-neutral justify-content-center" role="tablist"
								data-background-color="orange">
								<li class="nav-item">
									<h1 class="nav-link">Pertanyaan
										Umum</h1>
								</li>
							</ul>
						</div>
						<div class="card-body">
							<!-- Tab panes -->
							<div class="tab-content text-center">
								<div class="tab-pane active" id="home1" role="tabpanel">
									<p>Evaluasi Umum</p>
									<form method="post"
										action="<?php echo base_url('menu/hal1/' . $this->session->userdata('id_user')) ?>">
										<button class="btn btn-primary pull-right">
											<font color="white">Buka</font>
										</button>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- End Tabs on plain Card -->
				</div>
				<div class="col-md-10 ml-auto col-xl-6 mr-auto">
					<!-- <p class="category">Tabs with Background on Card</p> -->
					<!-- Tabs with Background on Card -->
					<div class="card">
						<div class="card-header">
							<ul class="nav nav-tabs nav-tabs-neutral justify-content-center"
								data-background-color="orange">
								<li class="nav-item">
									<h1 class="nav-link">Evaluasi
										Aplikasi</h1>
								</li>
							</ul>
						</div>
						<div class="card-body">
							<!-- Tab panes -->
							<div class="tab-content text-center">
								<div class="tab-pane active" id="home1">
									<p>Evaluasi aplikasi yang dipergunakan untuk melaksanakan manajemen internal
										birokrasi dan pelayanan publik</p>
									<form method="post"
										action="<?php echo base_url('menu/hal2/' . $this->session->userdata('id_user')) ?>">
										<button class="btn btn-primary pull-right">
											<font color="white">Buka</font>
										</button>
									</form>
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
<footer class="footer footer-default fixed-bottom">
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