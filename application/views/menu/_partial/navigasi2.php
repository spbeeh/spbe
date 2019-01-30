<body class="index-page sidebar-collapse">
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg bg-primary ">
		<div class="container">
			<div class="navbar-translate">
				<a class="navbar-brand" href="" rel="tooltip" title="SPBE" data-placement="bottom" target="_blank">
					SPBE
				</a>
				<button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navigation" aria-controls="navigation-index" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-bar top-bar"></span>
					<span class="navbar-toggler-bar middle-bar"></span>
					<span class="navbar-toggler-bar bottom-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse justify-content-end" id="navigation"
				data-nav-image="<?php echo base_url('Asset/./assets/img/blurred-image-1.jpg') ?>">
				<ul class="navbar-nav">
					<?php if ($this->session->userdata('role')
					== "Admin") { ?>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url('sistem/admin/dashboard') ?>" onclick="">
							<i class=""></i>
							<p>Admin</p>
						</a>
					</li>
					<?php 
			} ?>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url('menu/dashboard') ?>" onclick="">
							<i class=""></i>
							<p>Beranda</p>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url('menu/form') ?>" onclick="">
							<i class=""></i>
							<p>Isi Kuisioner SPBE</p>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link"
							href="<?php echo site_url('menu/laporan/' . $this->session->userdata('id_user')) ?>"
							onclick="">
							<i class=""></i>
							<p>Laporan</p>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url('logout') ?>" onclick="">
							<i class="now-ui-icons media-1_button-power"></i>
							<p>Keluar</p>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- End Navbar -->