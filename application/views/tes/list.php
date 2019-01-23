<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>assadsad</title>
</head>

<body>
	<a href="<?php echo base_url('coba/new_form') ?>">new jenis</a> <br>
	<a href="<?php echo base_url('coba/pertanyaan') ?>">list pertanyaan</a> <br>
	<a href="<?php echo base_url('coba/master') ?> ">master</a>
	<hr>
	<table>
		<tr>
			<td>No</td>
			<td>Jenis</td>
		</tr>
		<?php foreach ($jenis as $key => $value) { ?>
		<tr>
			<td>
				<?php echo $key + 1 ?>
			</td>
			<td>
				<?php echo $value->jenis ?>
			</td>
		</tr>
		<?php 
} ?>
	</table>
</body>

</html>