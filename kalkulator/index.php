<?php


if ( isset($_POST['hitung']) ) {
	$angka1 = $_POST['angka1'];
	$angka2 = $_POST['angka2'];
	$operasi = $_POST['aritmatika'];
	$hasil;

	switch ($operasi) {
		case 'tambah':
			$hasil = $angka1 + $angka2; 
			break;
		case 'kurang':
			$hasil = $angka1 - $angka2;
			break;
		case 'kali':
			$hasil = $angka1 * $angka2;
			break;
		case 'bagi':
			$hasil = $angka1 / $angka2;
			break;
	}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>kalkulator sederhana</title>
</head>
<body>


	<form action="" method="post">
		
		<ul>
			<li>
				<label for="angka1">masukan angka ke 1 :</label>
				<input type="text" name="angka1" id="angka1">
			</li>
			<li>
				<label for="angka2">masukan angka ke 2 :</label>
				<input type="text" name="angka2" id="angka2">
			</li>
			<li>
				<label for="aritmatika">pilih bilangan aritmatika</label>
				<select name="aritmatika" id="aritmatika">
					<option value="tambah">tambah</option>
					<option value="kurang">kurang</option>
					<option value="kali">kali</option>
					<option value="bagi">bagi</option>
				</select>
			</li>
			<li>
				<button type="submit" name="hitung">hitung</button>
			</li>
			<li>
				<label for="hasil">hasil = </label>
				<input type="text" value="<?= $hasil; ?>" disabled id="hasil">
			</li>
		</ul>

	</form>
	
</body>
</html>