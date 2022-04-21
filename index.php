<html>
<head>
	<title>UTS Soal Nomor 2</title>
</head>
<form method="POST" name="frmpost" action="">
	<table align="center" border="1" cellpadding="0" cellspacing="0">
		<tr align="center"><td><h2><b> Aplikasi Sederhana Pendataan Pasien Covid-19 </b></h2></td></tr>
		<tr>
			<td>
				<table width="450" border="0" cellpadding="0" cellspacing="5" align="center">
					<tr>
						<td>Wilayah</td>
						<td>:</td>
						<td>
							<select name="wilayah">
								<option value=""> ... </option>
								<option value="DKI Jakarta">DKI Jakarta</option>
								<option value="Jawa Barat">Jawa Barat</option>
								<option value="Banten">Banten</option>
								<option value="Jawa Tengah">Jawa Tengah</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Jumlah Positif</td>
						<td>:</td>
						<td><input name="positif" type="text" size="40"></td>
					</tr>
					<tr>
						<td>Jumlah Dirawat</td>
						<td>:</td>
						<td><input name="rawat" type="text" size="40"></td>
					</tr>
					<tr>
						<td>Jumlah Sembuh</td>
						<td>:</td>
						<td><input name="sembuh" type="text" size="40"></td>
					</tr>
					<tr>
						<td>Jumlah Meninggal</td>
						<td>:</td>
						<td><input name="meninggal" type="text" size="40"></td>
					</tr>
					<tr>
						<td>Nama Operator</td>
						<td>:</td>
						<td><input name="nama" type="text" size="40"></td>
					</tr>
					<tr>
						<td>NIM</td>
						<td>:</td>
						<td><input name="nim" type="text" size="40"></td>
					</tr>
					<tr>
						<td colspan="4" align="center"><input type="submit" name="submit" value="simpan"></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</form>
<br>
<br>
<center>
	<?php
	$wilayah = $_POST['wilayah'];
	$positif = $_POST['positif'];
	$rawat = $_POST['rawat'];
	$sembuh = $_POST['sembuh'];
	$meninggal = $_POST['meninggal'];
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];

	echo 'Data Pemantauan Covid-19 Wilayah ' . $_POST['wilayah'];
	echo "<br>";
	date_default_timezone_set('Asia/Jakarta');
	echo 'Per ' . date("d F Y H:i:s");
	echo "<br>";
	echo $_POST['nama'] . ' / ' .  $_POST['nim'];
	echo "<br>";
	?>
	<table align="center" border="1" cellpadding="0" cellspacing="0" width="500">
		<tr>
			<td>Positif</td>
			<td>Dirawat</td>
			<td>Sembuh</td>
			<td>Meninggal</td>
		</tr>
		<tr>
			<td><?php echo $positif;?></td>
			<td><?php echo $rawat;?></td>
			<td><?php echo $sembuh;?></td>
			<td><?php echo $meninggal;?></td>
		</tr>
	</table>
</center>
</html>