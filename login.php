<?php
	session_start();
	include "koneksi.php"
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<style >
		body{margin:200px 500px; background: aqua;}
	</style>
</head>
<body>
	<center>
	<form method="post">
		<h3>Selamat Datang, Silahkan Login</h3>
	<table>
		<label>Username :</label>
		<input type="text" name="fusername"><br>
		<br>
		<label>Password :</label>
		<input type="password" name="fpassword">
		<br>
		<button type="submit" name="fmasuk">Login</button>
	</table>
	</form>

	<?php
		if(isset($_POST['fmasuk'])) {
			$username = $_POST['fusername'];
			$password = $_POST['fpassword'];
			$qry = mysqli_query($koneksi,"SELECT * FROM tab_login WHERE username = '$username' AND password = md5('$password')");
			$cek = mysqli_num_rows($qry);
			if ($cek==1) {
				$_SESSION['userweb']=$username;
				header ("location:index.php");
				exit;
			}
			else {
				echo "Maaf username dan password anda salah!!";
			}
		}
	?>
	</center>
</body>
</html>