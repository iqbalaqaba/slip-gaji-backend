<!DOCTYPE html>
<html>
<head>
	<title> Edit </title>
</head>
<body>

<?php foreach ($crud as $row) {?>

<form action="<?php echo base_url(). 'dashboard/index/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>gaji pokok</td>
				<td>
					<input type="hidden" name="id_user" value="<?php echo $row->id_user ?>">
					<input type="text" name="gaji_pokok" value="<?php echo $row->gaji_pokok ?>">
				</td>
			</tr>
			<tr>
				<td>tunjangan jabatan</td>
				<td><input type="text" name="tunj_jabatan" value="<?php echo $row->tunj_jabatan ?>"></td>
			</tr>
			<tr>
				<td>tunjangan pulsa</td>
				<td><input type="text" name="tunj_pulsa" value="<?php echo $row->tunj_pulsa ?>"></td>
			</tr>
			<tr>
				<td>BPJS Kesehatan</td>
				<td><input type="text" name="bpjs_kes" value="<?php echo $row->tunj_jabatan ?>"></td>
			</tr>
			<tr>
				<td>BPJS ketenagakerjaan</td>
				<td><input type="text" name="bpjs_ker" value="<?php echo $row->tunj_jabatan ?>"></td>
			</tr>
			<tr>
				<td>Kelebihan Telefon</td>
				<td><input type="text" name="kelebihan_telf" value="<?php echo $row->tunj_jabatan ?>"></td>
			</tr>
			<tr>
				<td>Pinjaman</td>
				<td><input type="text" name="pinjaman" value="<?php echo $row->tunj_jabatan ?>"></td>
			</tr>
			<tr>
				<td>Ganti Rugi</td>
				<td><input type="text" name="ganti_rugi" value="<?php echo $row->tunj_jabatan ?>"></td>
			</tr>

			<tr>
				<td>
					<input type="submit" name="submit" value="submit">
				</td>
			</tr>
		</table>
	</form>	

<?php } ?>


</body>
</html>