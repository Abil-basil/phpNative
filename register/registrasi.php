<?php
require 'functions.php';

if ( isset($_POST["register"]) ) {

	if ( register($_POST) > 0) {
		echo "<script>
				alert('user di tambahkan')
			</script>";
	} else {
		echo "<script>
				alert('user gagal di tambahkan')
			</script>";
	}

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>halaman registrai</title>
	<style>
		label {
			display: block;
		}
	</style>
</head>
<body>
	<h2>halaman registrasi</h2>

	<form action="" method="post">
		
		<ul type="none" >
		 	<li>
				<label for="username">username :</label>
				<input type="text" name="username" id="username" autocomplete="off">
			</li>
			<li>
				<label for="password">password :</label>
				<input type="password" name="password" id="password">
			</li>
			<li>
				<label for="password2">konfirm password :</label>
				<input type="password" name="password2" id="password2">
			</li>
			<li>
				<button type="submit" name="register" > daftar </button>
			</li>
		</ul>

	</form>
</body>
</html>