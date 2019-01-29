<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="<?php base_url('sistem/admin/dashboard') ?>" class=""><i class=""></i>
							<span></span></a>
					</div>

					<div class="clearfix"></div>

					<!-- menu profile quick info -->
					<div class="profile clearfix">
						<!-- <div class="profile_pic">
							<img src="" alt="ini logo" class="img-circle profile_img">
						</div> -->
						<div class="profile_info">
							<span>Welcome,</span>
							<h2><?php echo $this->session->userdata('namainstansipusat'); ?></h2>
						</div>
					</div>
					<!-- /menu profile quick info -->

					<br />

					<!-- sidebar menu -->
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
							<h3>General</h3>
							<ul class="nav side-menu">
								<li><a href="<?php echo base_url('sistem/admin/dashboard') ?>"><i
											class="fa fa-home"></i> Dashboard <span class=""></span></a>
									<!-- <ul class="nav child_menu">
										<li><a href="<?php echo base_url('sistem/admin/dashboard') ?>">Dashboard</a>
										</li>
									</ul> -->
								</li>
								<li><a><i class="fa fa-edit"></i> Evaluasi <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="<?php echo base_url('sistem/admin/kuisonerumum') ?>">Kuisioner
												Umum</a></li>
										<!-- <li><a href="<?php echo base_url('sistem/admin/nomenklatur') ?>">Nomenklatur</a>
										</li> -->
									</ul>
								</li>
								<li><a><i class="fa fa-desktop"></i> List User <span
											class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="<?php echo base_url('sistem/admin/datauser') ?>">Data User</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-table"></i> Data Pertanyaan <span
											class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="<?php echo base_url('sistem/admin/datanomenklatur') ?>">list
												nomenklatur</a></li>
										<li><a href="<?php echo base_url('sistem/admin/datapertanyaanumum') ?>">list
												pertanyaan umum</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
					<!-- /sidebar menu -->

					<!-- /menu footer buttons -->
					<div class="sidebar-footer hidden-small">
						<a data-toggle="tooltip" data-placement="top" title="">
							<i class="fa fa-bars"></i>
						</a>
						<a data-toggle="tooltip" data-placement="top" title="">
							<i class="fa fa-bars"></i>
						</a>
						<a data-toggle="tooltip" data-placement="top" title="">
							<i class="fa fa-bars"></i>
						</a>
						<a data-toggle="tooltip" data-placement="top" title="">
							<i class="fa fa-bars"></i>
						</a>
					</div>
					<!-- /menu footer buttons -->
				</div>
			</div>

			<!-- top navigation -->
			<div class="top_nav">
				<div class="nav_menu">
					<nav>
						<div class="nav toggle">
							<a id="menu_toggle"><i class="fa fa-bars"></i></a>
						</div>

						<ul class="nav navbar-nav navbar-right">
							<li class="">
								<a href="<?php echo base_url('logout') ?>" class="user-profile dropdown-toggle"
									data-toggle="" aria-expanded="false">
									<?php echo $this->session->userdata('nip_pj'); ?>
									<span class=" fa fa-sign-out"></span>
								</a>
							</li>
							<li><a href="<?php echo base_url('menu/dashboard') ?>" class="user-profile dropdown-toggle"
									data-toggle="" aria-expanded="false">Front end</a></li>
						</ul>
					</nav>
				</div>
			</div>
			<!-- /top navigation -->