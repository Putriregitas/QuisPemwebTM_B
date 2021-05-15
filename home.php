<?php
	session_start();
 
	if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
		header('index.php');
		exit();
	}
	include('koneksi.php');
	$query=mysqli_query($koneksi,"select * from pengguna where id='".$_SESSION['id']."'");
	$row=mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
</head>
<body>
	<h2>Login Berhasil</h2>
	<?php 
    echo ("Selamat datang !"); ?>
	<br>
	<button><a  href="logout.php">Logout</a></button>
</body>
</html>