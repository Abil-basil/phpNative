<?php
require 'functions.php';

// cek apakah tombol submit sudah di tekan
if ( isset($_POST["submit"]) ) { 

	if ( tambah($_POST) > 0) {
		echo "
			<script>
				alert('data berhasil di tambahkan!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal di tambahkan!');
				document.location.href = 'index.php';
			</script>
		";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>tambah data mahasiswa</title>
</head>
<body>
	<h1>tambah data mahasiswa</h1>
	<a href="index.php">kembali ke table</a>

	<form action="" method="post">
		<ul>
			<li>
				<label for="nama">nama :</label>
				<input type="text" name="nama" id="nama">
			</li>
			<li>
				<label for="nrp">nrp :</label>
				<input type="text" name="nrp" id="nrp" required>
			</li>
			<li>
				<label for="email">email :</label>
				<input type="text" name="email" id="email">
			</li>
			<li>
				<label for="jurusan">jurusan :</label>
				<input type="text" name="jurusan" id="jurusan">
			</li>
			<li>
				<label for="gambar">gambar :</label>
				<input type="text" name="gambar" id="gambar">
			</li>
			<li>
				<button type="submit" name="submit">tambah data</button>
			</li>
		</ul>
	</form>
</body>
</html>