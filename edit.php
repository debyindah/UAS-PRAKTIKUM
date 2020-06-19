<?php

	include "koneksi.php";
	$id = $_GET['id'];
	$qe = mysqli_query($koneksi,"SELECT * FROM data WHERE id='$id'");
	$data = mysqli_fetch_array($qe);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
	<form method="post">
		<input type="text" name="nama" value="<?php echo $data['nama']?>" >
		<br>
		<textarea name="alamat" ><?php echo $data['alamat']?></textarea>
		<br>
		<input type="text" name="telepon" value="<?php echo $data['telepon']?>">
		<br>
		<input type="submit" name="edit" value="Edit">
		<a href="index.php">Batal</a>
	</form>
	<?php
		if(isset($_POST['edit'])) {
			$nama = $_POST['nama'];
			$alamat = $_POST['alamat'];
			$telepon = $_POST['telepon'];
			$tambah = mysqli_query($koneksi,"UPDATE data SET nama='$nama',alamat='$alamat',telepon='$telepon' WHERE id='$id'");
			if ($tambah) {
			?>
			<script type="text/javascript">
				alert('Edit data berhasil ');
				document.location.href="index.php";
			</script>
			<?php 

			}else {
				echo "Gagal edit data";

			}
		}
	?>
	<a href="logout.php">Keluar</a>
</body>
</html>
