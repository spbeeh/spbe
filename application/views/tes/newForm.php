<!DOCTYPE html>
<html lang="en">

<head>
	<title></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/style.css" rel="stylesheet">
</head>

<body>
	<form action="<?php echo base_url('coba/pertanyaantambah') ?>" method=" post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>aplikasi fungsional</td>
				<td>
					<input type="text" name="aplikasi_fungsional" placeholder="aplikasi fungsional">
				</td>
			</tr>
			<tr>
				<td>jenis</td>
				<td>
					<select name="id_jenis">
						<?php foreach ($jenis as $key => $value) { ?>

						<option value="<?php echo $value->id_jenis ?>">
							<?php echo $value->jenis ?>
						</option>
						<?php 
				} ?>
					</select>
				</td>
			</tr>
			<tr>
				<td><input type="submit" name="btn" value="Save"></td>
			</tr>
		</table>
	</form>
	<hr>
	<a href="<?php echo base_url('coba/pertanyaan') ?>">list pertanyaan</a>
</body>

</html>