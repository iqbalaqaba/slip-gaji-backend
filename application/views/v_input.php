<!DOCTYPE html>
<html>
<head>
	<title> Input gaji </title>
</head>
<body>

<center>
	<h1> Input data gaji </h1>
</center>

<center>
<form action="<?php echo base_url().'dashboard/index/proses_input'?>" method="POST">
	<table>
		<tr>
			<td><h5> Masukan username : </h5></td>
			<td><input type="text" name="username" required></td>
		</tr>	
		<tr>
			<td><h5> Masukan password : </h5></td>
			<td><input type="text" name="password" required></td>
		</tr>	
		<tr>
			<td><h5> Masukan nama : </h5></td>
			<td><input type="text" name="nama" required></td>
		</tr>	
		<tr>
			<td><h5> Masukan jabatan : </h5></td>
			<td><input type="text" name="jabatan" required></td>
		</tr>	
		<tr>
			<td><h5> Masukan nik : </h5></td>
			<td><input type="text" name="nik" required></td>
		</tr>
		<tr>
			<td><h5> Masukan departemen : </h5></td>
			<td><input type="text" name="departemen" required></td>
		</tr>
		<tr>
			<td><h5> Masukan level : </h5></td>
			<td><input type="radio" name="level" id="level" value="karyawan"> Karyawan 
			<input type="radio" name="level" id="level" value="manager"> Manager </td>
		</tr>	
		<tr>
			<td>
				<input type="hidden" name="active" value="1">
			</td>
		</tr>
		<tr>
			<td><h5> Masukan gaji pokok : </h5></td>
			<td><input type="text" name="gaji_pokok" required></td>
		</tr>
		<tr>
			<td><h5> Masukan tunjangan jabatan : </h5></td>
			<td><input type="text" name="tunj_jabatan" required></td>
		</tr>	
		<tr>
			<td><h5> Masukan tunjangan pulsa : </h5></td>
			<td><input type="text" name="tunj_pulsa" required></td>
		</tr>	
		<tr>
			<td><h5> Masukan bpjs kesehatan : </h5></td>
			<td><input type="text" name="bpjs_kes" required></td>
		</tr>	
		<tr>
			<td><h5> Masukan bpjs ketenagakerjaan: </h5></td>
			<td><input type="text" name="bpjs_kerja" required></td>
		</tr>	
		<tr>
			<td><h5> Masukan ganti rugi : </h5></td>
			<td><input type="text" name="ganti_rugi" required></td>
		</tr>	
		<tr>
			<td><h5> Masukan kelebihan telefon : </h5></td>
			<td><input type="text" name="kelebihan_telf" required></td>
		</tr>	
		<tr>
			<td><h5> Masukan pinjaman : </h5></td>
			<td><input type="text" name="pinjaman" required></td>
		</tr>	
		<tr>
			<td><input type="submit" value="tambah" required></td>
		</tr>	
	</table>	
</form>
</center>
</body>
</html>