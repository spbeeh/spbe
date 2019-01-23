<!DOCTYPE html>
<html>
<head>
	<title>tes</title>
</head>
<body>

	<h1 align="center">REPORT</h1>

	<br>
	<br>
	<table border="0" align="center">
		<tr>
			<td>NAMA INSTANSI PUSAT/PEMERINTAH DAERAH</td>
			<td>:</td>
			<td>Malang </td>
		</tr>

		<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>NAMA PENANGGUNG JAWAB (SUPERVISOR)</td>
			<td>:</td>
			<td>SasMin</td>
			<td></td>
			<td></td>
			<td>NAMA OPERATOR</td>
			<TD>:</TD>
			<td>Supri</td>
		</tr>
		<tr>
			<td>NIP</td>
			<td>:</td>
			<td>123123123123123</td>
			<td></td>
			<td></td>
			<td>NIP</td>
			<TD>:</TD>
			<td>1432564125643165243</td>
		</tr>
		<tr>
			<td>JABATAN</td>
			<td>:</td>
			<td>Ketua</td>
			<td></td>
			<td></td>
			<td>JABATAN</td>
			<TD>:</TD>
			<td>Ketua</td>
		</tr>
	</table>
	<br>
	<hr>
	<table align="center" >
		<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr bgcolor="cyan">
			<td> no</td>
			<td> aplikasi fungsional</td>
			<td> ada/tidak ada</td>
			<td> nama aplikasi</td>
			<td> unit kerja/perangkat daerah pengelola</td>
			<td> status</td>
		</tr>
		<?php foreach ($MASTER as $key => $no) { ?>
			<tr bgcolor="cyan">
				<td><?php echo ($key + 1) ?></td>
				<td><?php echo $no->NAMA_APLIKASI ?></td>
				<td><?php echo $no->JAWAB ?></td>
				<td><?php echo $no->NAMA_APLIKASI ?></td>
				<td><?php echo $no->UNIT_KERJA ?></td>
				<td><?php if (isset($no->ID_NAMA_APLIKASI) && isset($no->ID_USER) !== null) {
								echo "sudah";
							} else {
								echo "belum";
							}
							?>
			</td>
		</tr>
	<?php 
} ?>

</table>


<br>
<hr>
<a href="<?php echo base_url('tes/halaman2') ?>">halaman 2</a>
</body>
</html>