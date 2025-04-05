<?php
session_start();


if ( !isset($_SESSION['login']) ) {
	header("Location: login.php");
	exit;
}

// untuk menyambungkan ke halaman "functions.php"
require 'functions.php';


// notif eror
error_reporting(E_ALL);
ini_set('display_errors', 1);

$mahasiswa = query("SELECT * FROM mahasiswa");


// jika tombol cari d tekan 
if ( isset($_POST["cari"]) ) {
	$mahasiswa = cari($_POST["keyword"]);
} 

$id = $_COOKIE["id"];

$result = mysqli_query($conn, "SELECT username FROM users WHERE id = $id");
$username = mysqli_fetch_assoc($result);


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		img {
			width: 100px;
			height: auto;
		}
	</style>
</head>
<body>
	<a href="logout.php">logout</a>
	<h1>daftar mahasiswa</h1>
	<h3>hello <?= $username["username"]; ?></h3>
	<a href="tambah.php">tambah data mahasiswa</a>

	<form action="" method="post">
		<input type="text" name="keyword" size="35" autofocus autocomplete="off" placeholder="carii mahasiswa">
		<button type="submit" name="cari">cari mahasiswa</button>
	</form>
	<br>
	
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>no.</th>
			<th>aksi</th>
			<th>gambar</th>
			<th>nama</th>
			<th>nrp</th>
			<th>email</th>
			<th>jurusan</th>
		</tr>
		<?php $i = 1; ?>
		<?php foreach ($mahasiswa as $row) : ?>
		<tr>
			<td><?= $i; ?></td>
			<td>
				<a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
				<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?!')">hapus</a>
			</td>
			<td><img src="../img/<?= $row["gambar"] ?>" alt="" width="80px"></td>
			<td><?= $row["nrp"] ?></td>
			<td><?= $row["nama"] ?></td>
			<td><?= $row["email"] ?></td>
			<td><?= $row["jurusan"] ?></td>
		</tr>
		<?php $i++; ?>
		<?php endforeach; ?>
	</table>
	<form action="" method="post">
		<button type="submit" name="logout">logout</button>
	</form>
	

</body>
</html>