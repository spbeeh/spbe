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
<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
action="<?php echo base_url(); ?>/">
<?php foreach ($pertanyaanUtama as $data) { ?>
	<div id="step-1">
	<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="x_panel">
	<div class="x_title">
	<font size="4">
	<?php echo $data->no_urut . ". " . $data->pertanyaan_umum; ?>
	</font>
	<div class="clearfix"></div>
	</div>
	<div class="x_content">
	<br />
	<?php 
	if (count($controller->getSubPertanyaan($data->id_pertanyaan_umum)) > 0) {
		//Sub Pertanyaan
		foreach ($controller->getSubPertanyaan($data->id_pertanyaan_umum) as $sub) { ?>
			<font size="4"><?php echo $sub->pertanyaan_umum ?><br>
			</font>
			
			<?php 
			if ($sub->jenisinput == "File") {
				?>
				<div class="form-group">
				<!-- <input type="file" name="jawab" class="form-control"  /> -->
				<!-- <a href="<?php //base_url('sistem/admin/kuisonerumum/download/'.$jawaban->getById($id,$sub->id_pertanyaan_umum)->jawab);?>"></a> -->
					<embed src="<?php echo site_url('tmp/'.$jawaban->getById($id, $sub->id_pertanyaan_umum)->jawab); ?>" type="application/pdf" width="50%" height="300px" />
				</div>
				<?php 
			} else {
				?>
				<div class="form-group">
				<textarea required="required" class="form-control"
				name="jawab"
				style="margin: 0px -5.5px 0px 0px; width: 100%; height: 140px; resize: none;" readonly><?php echo $jawaban->getById($id,$sub->id_pertanyaan_umum)->jawab;?></textarea>
				</div>
				<?php	
			}
			?>
			<?php 
		}
	} else {
		?>
		<?php 
		if ($data->jenisinput == "File") {
			?>
			<div class="form-group">
			<!-- <a href="<?php //base_url('sistem/admin/kuisonerumum/download/'.$jawaban->getById($id,$data->id_pertanyaan_umum)->jawab);?>">data</a> -->
				<embed src="<?php echo site_url('tmp/'.$jawaban->getById($id, $data->id_pertanyaan_umum)->jawab); ?>" type="application/pdf" width="50%" height="300px"/>
			</div>
			<?php 
		} else {
			?>
			<div class="form-group">
			<textarea required="required" class="form-control"
			name="jawab"
			style="margin: 0px -5.5px 0px 0px; width: 100%; height: 140px; resize: none;" readonly><?php echo $jawaban->getById($id,$data->id_pertanyaan_umum)->jawab;?></textarea>
			</div>
			<?php	
		}
		?>
		<?php 
	}
	?>
	</div>
	</div>
	</div>
	</div>
	</div>
	<?php 
} ?>
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