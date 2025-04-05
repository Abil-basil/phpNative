<?php
session_start();
$_SESSION['regist'] = true;

if ( isset($_SESSION['login']) ) {
	header("Location: index.php");
	exit;
}
require 'functions.php';

if ( isset($_POST["login"]) ) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	// cek di database
	$result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

	// cek username
	if ( mysqli_num_rows($result) === 1 ) {

		// cek password
		$row = mysqli_fetch_assoc($result);

		if ( password_verify($password, $row["password"]) ) {
			$_SESSION['login'] = true;
			header("Location: index.php");
			exit;
		}
	}

	$error = true;
}
?>

<!-- ahay 213 -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>halaman login</title>
</head>
<body>
	
	<h1>Halaman Login</h1>
	<?php if ( isset($error) ) : ?>
		<p style="color: red; font-style: italic;" >username / password yang anda masukan salah</p>
	<?php endif ?>


	<form action="" method="post">
		
		<ul>
			<li>
				<label for="username">username :</label>
				<input type="text" name="username" id="username">
			</li>
			<li>
				<label for="password">password :</label>
				<input type="password" name="password" id="password">
			</li>
			<li>
				<button type="submit" name="login">Login!</button> <br>
				<a href="registrasi.php">belum punya akun?</a>
			</li>
		</ul>

	</form>

</body>
</html>