<!-- Page Content -->
<div class="container">
	<!-- Page Heading/Breadcrumbs -->
	<h1 class="mt-4 mb-3">Jenis Form Evaluasi
		<small></small>
	</h1>

	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="<?php echo site_url('menu/dashboard') ?>">Beranda</a>
		</li>
		<li class="breadcrumb-item active">Jenis Evaluasi Form</li>
	</ol>
	<!-- Image Header -->
	<!-- <img class="img-fluid rounded mb-4" src="http://placehold.it/1200x300" alt=""> -->

	<!-- Marketing Icons Section -->
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_content">

				<!-- Smart Wizard -->

				<div id="wizard" class="form_wizard wizard_horizontal">
<<<<<<< HEAD
					<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
						action="<?php echo site_url('menu/hal1/store') ?>" method="post">
						<input type="hidden" name="user" value="<?php echo $this->session->userdata('id_user'); ?>">
=======
					<?php echo form_open_multipart('menu/hal1/store'); ?>
					<!-- <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
						action="<?php //echo base_url('menu/hal1/store') ?>" method="post" > -->
						<input type="hidden" name="user" value="<?php echo$this->session->userdata('id_user'); ?>">
>>>>>>> fcd27eb83ac5ab2254f8a222f9ba79bb4c266d57
						<?php foreach ($pertanyaanUtama as $data) { ?>
						<div id="step-1">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="x_panel">
										<div class="x_title">
											<font size="4"><?php echo $data->no_urut . ". " . $data->pertanyaan_umum; ?>
											</font>
											<div class="clearfix"></div>
										</div>
										<div class="x_content">
											<br />
											<?php 
										if (count($controller->getSubPertanyaan($data->id_pertanyaan_umum)) > 0) {
												//Sub Pertanyaan
											foreach ($controller->getSubPertanyaan($data->id_pertanyaan_umum) as $sub) { ?>
											<font size="4"><?php echo $sub->pertanyaan_umum ?><br></font>

											<?php 
										if ($sub->jenisinput == "File") {
											?>
											<div class="">
<<<<<<< HEAD
												<input type="hidden" name="jenis[]"
													value="<?php echo $data->jenisinput; ?>">
												<input type="hidden" name="id[]"
													value="<?php echo $data->id_pertanyaan_umum; ?>">
												<input type="file" name="jawab[]" class="btn btn-link btn-primary" />
=======
												<input type="hidden" name="jenis[]" value="<?php echo $data->jenisinput; ?>">
												<input type="hidden" name="id[]" value="<?php echo $sub->id_pertanyaan_umum; ?>">
												<input type="file" name="jawab[]" class="btn btn-link btn-primary"/>
												<input name="jawab[]" type="hidden" value="sub">
>>>>>>> fcd27eb83ac5ab2254f8a222f9ba79bb4c266d57
											</div>
											<?php 
									} else {
										?>
											<div class="form-group">
<<<<<<< HEAD
												<input type="hidden" name="jenis[]"
													value="<?php echo $data->jenisinput; ?>">
												<input type="hidden" name="id[]"
													value="<?php echo $data->id_pertanyaan_umum; ?>">
=======
												<input type="hidden" name="jenis[]" value="<?php echo $data->jenisinput; ?>">
												<input type="hidden" name="id[]" value="<?php echo $sub->id_pertanyaan_umum; ?>">
>>>>>>> fcd27eb83ac5ab2254f8a222f9ba79bb4c266d57
												<textarea required="required" class="form-control" name="jawab[]"
													style="margin: 0px -5.5px 0px 0px; width: 100%; height: 140px; resize: none;"></textarea>
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
<<<<<<< HEAD
											<div class=""><input type="hidden" name="jenis[]"
													value="<?php echo $data->jenisinput; ?>">
												<input type="hidden" name="id[]"
													value="<?php echo $data->id_pertanyaan_umum; ?>">
												<input type="file" name="jawab[]" class="btn btn-link btn-primary" />
=======
											<div class=""><input type="hidden" name="jenis[]" value="<?php echo $data->jenisinput; ?>">
												<input type="hidden" name="id[]" value="<?php echo $data->id_pertanyaan_umum; ?>">
												<input type="file" id="file" name="jawab[]" class="btn btn-link btn-primary" />
												<input name="jawab[]" id="test" type="hidden" value="data">
>>>>>>> fcd27eb83ac5ab2254f8a222f9ba79bb4c266d57
											</div>
											<?php 
									} else {
										?>
											<div class="form-group">
												<input type="hidden" name="jenis[]"
													value="<?php echo $data->jenisinput; ?>">
												<input type="hidden" name="id[]"
													value="<?php echo $data->id_pertanyaan_umum; ?>">
												<textarea required="required" class="form-control" name="jawab[]"
													style="margin: 0px -5.5px 0px 0px; width: 100%; height: 140px; resize: none;"></textarea>
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
<<<<<<< HEAD
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
=======
				<button type="submit" class="btn btn-primary" name="upload">Submit</button>
					<!-- </form> -->
					<?php echo form_close(); ?>
>>>>>>> fcd27eb83ac5ab2254f8a222f9ba79bb4c266d57
					<div>

					</div>

				</div>
			</div>
			<!-- /.row -->
		</div>
	</div>
</div>
<!-- /.container -->