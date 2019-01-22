<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>SPBE</span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic">
        <img src="<?php echo base_url();?>../../../gentelella/production/images/img.jpg" alt="..." class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Welcome</span>
        <h2>Admin</h2>
      </div>
    </div>
    <!-- /menu profile quick info -->
    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>SPBE</h3>
        <ul class="nav side-menu">
          <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
             <!--  <li><a href="index.html">Dashboard</a></li> -->
              <li><a href="<?php echo site_url('spbe/dashboard') ?>">Dashboard</a></li>
              <li><a href="<?php echo site_url('spbe/dashboard2') ?>">Dashboard2</a></li>
              <!-- <li><a href="<?php echo base_url();?>../../../gentelella/production/index3.html">Dashboard3</a></li> -->
            </ul>
          </li>
          <li><a><i class="fa fa-edit"></i> Evaluasi <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="<?php echo site_url('spbe/kuisumum') ?>">Kuisioner Umum</a></li>
              <li><a href="<?php echo site_url('spbe/nomenklatur') ?>">Nomenklatur</a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-edit"></i> List User <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="<?php echo site_url('spbe/datauser') ?>">Data User</a></li>
            </ul>
          </li>
        </div>
      </div>
      <!-- /sidebar menu -->

      <!-- /menu footer buttons -->
      <div class="sidebar-footer hidden-small">
        <a data-toggle="tooltip" data-placement="top" title="Settings">
          <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
          <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Lock">
          <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
          <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>
      </div>
      <!-- /menu footer buttons -->
    </div>
  </div>