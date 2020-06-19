<?php

	include "koneksi.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Data</title>
	<style >
		body{background: aqua;}
	</style>
</head>
<body>
<table width="40%" align="center" border="1">
	<tr>
		<td colspan="5"><h3><center>Data Alumni Pramuka</center></h3>
			<a href="tambah.php"><center>Tambah Data</center></a></td>
	</tr>
	<tr>
		<th>No.</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Telepon</th>
		<th>Opsi</th>
	</tr>
		<?php 
			$no = 1;
			$qry = mysqli_query($koneksi,"SELECT * FROM data");
			while($data=mysqli_fetch_array($qry)){
		 ?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $data['nama']; ?></td>
		<td><?php echo $data['alamat']; ?></td>
		<td><?php echo $data['telepon']; ?></td>
		<td>
			<a onclick="return confirm('Yakin untuk menghapus?')" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>
			<a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
		</td>
	</tr>
<?php } ?>
</table>
<center>
<a href="logout.php">Keluar</a>
</center>
</body>
</html>