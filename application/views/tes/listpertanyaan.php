<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>

<body>
	<a href="<?php echo base_url('coba') ?>">list jenis</a> <br>
	<a href="<?php echo base_url('coba/newFormPertanyaan') ?>">new Form aplikasi</a>
	<hr>
	<table>
		<tr>
			<td>No</td>
			<td>Aplikasi Fungsional</td>
			<td>Je</td>
		</tr>
		<?php foreach ($aplikasi_fungsional as $key => $value) { ?>
		# code...
		<tr>
			<td>
				<?php echo $key + 1 ?>
			</td>
			<td>
				<?php echo $value->aplikasi_fungsional ?>
			</td>
			<td>
				<?php echo $value->id_jenis ?>
			</td>
		</tr>
		<?php 
} ?>
	</table>
</body>

</html>