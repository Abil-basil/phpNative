<?php
// untuk menyambungkan ke halaman "functions.php"
require 'functions.php';

// notif eror
error_reporting(E_ALL);
ini_set('display_errors', 1);

$mahasiswa = query("SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>daftar mahasiswa</h1>
	<a href="tambah.php">tambah data mahasiswa</a>
	
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

</body>
</html>