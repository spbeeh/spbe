    <!DOCTYPE html>
<html>
<head>
	<?php $this->load->view("spbe/_partial/head.php") ?>
</head>
<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<?php $this->load->view("spbe/_partial/sidebar.php") ?>

			<!-- top navigation -->
			<?php $this->load->view("spbe/_partial/topnav.php") ?>
			<!-- /top navigation -->

			<!-- page content -->
			<div class="right_col" role="main">
				<div class="page-title">
      <div class="title_left">
        <h3>Kuisioner Umum :  </h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">

            <!-- Smart Wizard -->            
            <div id="wizard" class="form_wizard wizard_horizontal">
              <ul class="wizard_steps">
              	<?php foreach ($nomor as $nomor): ?>
              	<li>
                  <a href="#step-<?php echo $nomor->nomor; ?> ">
                    <span class="step_no"><?php echo $nomor->nomor; ?></span>
                    <span class="step_descr">
                      Step <?php echo $nomor->nomor; ?><br />
                    </span>
                  </a>
                </li>
              	<?php endforeach ?>
              </ul>

            <?php foreach ($pertanyaan as $pertanyaan): ?>
            <div id="step-<?php echo $pertanyaan->nomor; ?>">
		        <div class="row">
		            <div class="col-md-12 col-sm-12 col-xs-12">
		        	    <div class="x_panel">
		            	    <div class="x_title">
						     	<font size="4"><?php echo $pertanyaan->khusus; ?></font>
		                    	<div class="clearfix"></div>
		                  	</div>
		                    <div class="x_content">
		                    <br/>
		                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
		                    <font size="4"><?php echo $pertanyaan->pertanyaan; ?><br></font>
		                      <div class="form-group">
		                       <textarea id="message" required="required" class="form-control" name="message" style="margin: 0px -5.5px 0px 0px; width: 100%; height: 140px; resize: none;" readonly><?php echo $pertanyaan->pertanyaan ?></textarea>
		                      </div>
		                    </form>
		                  </div>
		                </div>
		            </div>
		        </div>
      		</div>
			<?php endforeach ?>
            
<!-- End SmartWizard Content -->
<!-- Tabs -->
	</div>
</div>
			</div>
			<!-- /page content -->

			<!-- footer content -->
			<?php $this->load->view("spbe/_partial/footer.php") ?>
			<!-- /footer content -->
		</div>
	</div>

	<!-- Script -->
	<?php $this->load->view("spbe/_partial/js.php") ?>
</body>
</html>
