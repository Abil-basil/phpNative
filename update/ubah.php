<?php
require 'functions.php';

// ambil id
$id = $_GET["id"];

// query
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


// cek apakah tombol submit sudah di tekan
if ( isset($_POST["submit"]) ) { 

	if ( ubah($_POST, $id) > 0) {
		echo "
			<script>
				alert('data berhasil di ubah!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal di ubah!');
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
	<title>ubah data mahasiswa</title>
</head>
<body>
	<h1>ubah data mahasiswa</h1>

	<form action="" method="post">
		<input type="hidden" name="id">
		<ul>
			<li>
				<label for="nama">nama :</label>
				<input type="text" name="nama" id="nama" value="<?= $mhs["nama"]; ?>">
			</li>
			<li>
				<label for="nrp">nrp :</label>
				<input type="text" name="nrp" id="nrp" required value="<?= $mhs["nrp"]; ?>">
			</li>
			<li>
				<label for="email">email :</label>
				<input type="text" name="email" id="email" value="<?= $mhs["email"]; ?>">
			</li>
			<li>
				<label for="jurusan">jurusan :</label>
				<input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"]; ?>">
			</li>
			<li>
				<label for="gambar">gambar :</label>
				<input type="text" name="gambar" id="gambar" value="<?= $mhs["gambar"]; ?>">
			</li>
			<li>
				<button type="submit" name="submit">ubah data</button>
			</li>
		</ul>
	</form>
</body>
</html>