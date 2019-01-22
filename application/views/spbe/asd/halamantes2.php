<!DOCTYPE html>
<html>
<head>
	<title>tes2</title>
</head>
<body>
	<form action="" method="">
	<div>
		<span>
			<label for="apps"> nama instansi pusat : </label>
			<input id="sisi1" type="text" name="apps" class="form-control sisi1" placeholder="">
		</span>	
	</div>	
	<div>
		<span>
			<label for="apps"> nama penanggung jawab : </label>
			<input id="sisi1" type="text" name="apps" class="form-control sisi1" placeholder="">
		</span>	
	</div>
	<div>
		<span>
			<label for="apps"> nip : </label>
			<input id="sisi1" type="text" name="apps" class="form-control sisi1" placeholder="">
		</span>	
	</div>
	<div>
		<span>
			<label for="apps"> jabatan : </label>
			<input id="sisi1" type="text" name="apps" class="form-control sisi1" placeholder="">
		</span>	
	</div>
	<div>
		<span>
			<label for="apps"> nama operator : </label>
			<input id="sisi1" type="text" name="apps" class="form-control sisi1" placeholder="">
		</span>	
	</div>
	<div>
		<span>
			<label for="apps"> nip : </label>
			<input id="sisi1" type="text" name="apps" class="form-control sisi1" placeholder="">
		</span>	
	</div>
	<div>
		<span>
			<label for="apps"> jabatan : </label>
			<input id="sisi1" type="text" name="apps" class="form-control sisi1" placeholder="">
		</span>	
	</div>
	<div>
		<span>
			<label for="apps"> password : </label>
			<input id="sisi1" type="password" name="apps" class="form-control sisi1" placeholder="">
		</span>	
	</div>
	</form>
	<hr>
	<table border="1">
	<tr>
		<td>nomor</td>
		<td>nama instansi</td>
		<td>nama penanggungjawab</td>
		<td>nip</td>
		<td>jabatan</td>
		<td>nama operator</td>
		<td>nip</td>
		<td>jabatan</td>
		<td>password</td>
	</tr>
	<?php foreach ($USER as $key => $no) { ?>
	<tr>
		<td><?php echo ($key + 1) ?></td>
		<td><?php echo $no->NAMAINSTANSIPUSAT ?></td>
		<td><?php echo $no->NAMA_PENANGGUNGJAWAB ?></td>
		<td><?php echo $no->NIP_PJ ?></td>
		<td><?php echo $no->JABATAN_PJ ?></td>
		<td><?php echo $no->NAMA_OPERATOR ?></td>
		<td><?php echo $no->NIP_OP ?></td>
		<td><?php echo $no->JABATAN_OP ?></td>
		<td><?php echo $no->PASSWORD ?></td>
	</tr> <?php 
					} ?>
</table >
	<hr >
	<a href = "<?php echo base_url('tes') ?>" > halaman 1 </a>
	<a href="<?php echo base_url('tes/halaman3') ?>">halaman 3</a>
	</body >
	</html >