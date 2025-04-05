<?php
	// notif eror
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	// koneksi ke database
	$conn = mysqli_connect("localhost", "root", "root", "phpdasar");

	// ambil data dari tabel mahasiswa
	$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

	// ambil data (fetch) mahasiswa dari objek result
	// mysqli_fetch_row() // mengembalikan array numerik
	// mysqli_fetch_assoc() // mengembalikan array associative
	// mysqli_fetch_array() // mengembalikan ke2 nya
	// mysqli_fetch_object() // 

	// untuk me looping data dari database
	// while ( $mhs = mysqli_fetch_assoc($result) ) {
	// 	var_dump($mhs);
	// };
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
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
		<?php $i = 1 ?>
		<?php while ( $row = mysqli_fetch_assoc($result) ) : ?>
		<tr>
			<td><?= $i; ?></td>
			<td>
				<a href="">ubah</a> |
				<a href="">hapus</a>
			</td>
			<td><img src="../img/<?= $row["gambar"] ?>" alt="" width="80px"></td>
			<td><?= $row["nrp"] ?></td>
			<td><?= $row["nama"] ?></td>
			<td><?= $row["email"] ?></td>
			<td><?= $row["jurusan"] ?></td>
		</tr>
		<?php $i++ ?>
		<?php endwhile ?>
	</table>

</body>
</html>