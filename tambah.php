<?php

	include "koneksi.php";
?>


<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
	<form method="post">
		<input type="text" name="nama" placeholder="Nama">
		<br>
		<textarea name="alamat" placeholder="Alamat"></textarea>
		<br>
		<input type="text" name="telepon" placeholder="Telepon">
		<br>
		<input type="submit" name="simpan" value="Simpan">
		<a href="index.php">Batal</a>
	</form>
	<?php
		if(isset($_POST['simpan'])) {
			$nama = $_POST['nama'];
			$alamat = $_POST['alamat'];
			$telepon = $_POST['telepon'];
			$tambah = mysqli_query($koneksi,"INSERT INTO data(
				nama,alamat,telepon)VALUES('$nama','$alamat','$telepon')");
			if ($tambah) {
				?>
				<script type="text/javascript">
					alert('Tambah data berhasil ');
					document.location.href="index.php";
				</script>
				<?php 
			}else {
				echo "Gagal menambahkan data";
			}
		}
	?>
<a href="logout.php">Keluar</a>
</body>
</html>