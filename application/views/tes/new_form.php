<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>

<body>
	<?php if ($this->session->flashdata('success')) { ?>
	<div>
		<?php $this->session->flashdata('success'); ?>
	</div>
	<?php 
} ?>
	<hr>
	<form action="<?php echo base_url('coba/tambahdata') ?>" method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td>jenis</td>
				<td><input type="text" name="jenis" placeholder="Jenis"></td>
				<div>
					<?php echo form_error('Jenis') ?>
				</div>
			</tr>
			<tr>
				<td></td>
				<td>
					<input class="btn btn-success" type="submit" name="btn" value="Save" />
				</td>
			</tr>
		</table>
	</form>
	<hr>
	<a rel="stylesheet" href="<?php echo base_url('coba') ?>">back</a>
</body>

</html>