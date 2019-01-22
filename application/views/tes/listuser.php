<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>

<body>
	<a href="<?php echo base_url('coba/new_form') ?>">new jenis</a> <br>
	<a href="<?php echo base_url('coba/pertanyaan') ?>">list pertanyaan</a> <br>
	<a href="<?php echo base_url('coba/master') ?> ">master</a> <br>
	<a href="<?php echo base_url('coba/form') ?>"> form user</a>
	<hr>

	<table>
		<tr bgcolor="aqua">
			<td>No</td>
			<td>Nama instansi</td>
			<td>Nama Penanggungjawab</td>
			<td>nip pj</td>
			<td>jabatan</td>
			<td>nama operator</td>
			<td>nip op</td>
			<td>jabatan op</td>
		</tr>
		<?php foreach ($user as $key => $value) { ?>
		# code...
		<tr>
			<td>
				<?php echo $key + 1 ?>
			</td>
			<td>
				<?php echo $value->namainstansipusat ?>
			</td>
			<td>
				<?php echo $value->nama_penanggungjawab ?>
			</td>
			<td>
				<?php echo $value->nip_pj ?>
			</td>
			<td>
				<?php echo $value->jabatan_pj ?>
			</td>
			<td>
				<?php echo $value->nama_operator ?>
			</td>
			<td>
				<?php echo $value->nip_op ?>
			</td>
			<td>
				<?php echo $value->jabatan_op ?>
			</td>
		</tr>

		<?php 
} ?>
	</table>
</body>

</html>