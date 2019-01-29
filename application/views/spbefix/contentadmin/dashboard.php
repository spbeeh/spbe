<!-- page content -->
<div class="right_col" role="main">
	<!-- top tiles -->
	<div class="row tile_count">
		<!-- <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
			<span class="count_top"><i class="fa fa-user"></i> Total Users</span>
			<div class="count">2500</div>
			<span class="count_bottom"><i class="green">4% </i> From last Week</span>
		</div>
		<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
			<span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>
			<div class="count">123.50</div>
			<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
		</div>
		<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
			<span class="count_top"><i class="fa fa-user"></i> Total Males</span>
			<div class="count green">2,500</div>
			<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
		</div>
		<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
			<span class="count_top"><i class="fa fa-user"></i> Total Females</span>
			<div class="count">4,567</div>
			<span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
		</div> -->
		<!-- <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
			<span class="count_top"><i class="fa fa-user"></i> Total User</span>
			<div class="count"><?php echo count($this->db->get('user')->result()) ?></div>
			 <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i></i></span> -->
		<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<div class="tile-stats">
				<div class="icon"><i class="fa fa-user"></i>
				</div>
				<div class="count"><?php echo count($this->db->get('user')->result()) ?></div>

				<h3>
					<hr>
				</h3>
				<h3>Total user</h3>
			</div>
		</div>
		<!-- <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
			<span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
			<div class="count">7,325</div>
			<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
		</div> -->
	</div>
	<!-- /top tiles -->
	<br />
</div>
</div>
</div>
<!-- /page content -->