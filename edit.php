<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<a href="index.php">Lihat Semua Data</a>

	<br/>
	<h3>Edit data</h3>

	<?php
    require_once 'config/koneksi.php';
    $d=$_GET['d'];
    $con=mysqli_query($koneksi, "SELECT*FROM mhs where nim='$d'");
    while ($data =mysqli_fetch_array($con)) {
    ?>
	<form action="config/update.php" method="post">
		<table>
			<tr>
				<td>Nama</td>
				<td>
					<input type="text" name="nama" value="<?php echo $data['nama'] ?>">
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="nim" value="<?php echo $data['nim'] ?>"></td>
			</tr>
			<tr>
				<td>Ipk</td>
				<td><input type="text" name="ipk" value="<?php echo $data['ipk'] ?>"></td>
			</tr>
      <tr>
				<td>Smt</td>
				<td><input type="text" name="smt" value="<?php echo $data['smt'] ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
	<?php } ?>
</body>
</html>
