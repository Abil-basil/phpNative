<?php
require 'functions.php';

if ( isset($_POST["login"]) ) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	// cek di database
	$result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");


	// cek username
	if ( isset($result) ) {

		// cek password
		$row = mysqli_fetch_assoc($result);

		if ( password_verify($password, $row["password"]) ) {
			header("Location: index.php");
			exit;
		}
	}

	$error = true;
}
?>

<!-- ahay 213 -->
<!-- agus 123 -->


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
				<button type="submit" name="login">Login!</button>
			</li>
		</ul>

	</form>

</body>
</html>