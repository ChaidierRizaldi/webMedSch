<?php
include('koneksi.php');

if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$login = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username' AND password = '$password'");
	$checkAuth = mysqli_num_rows($login);

	if ($checkAuth > 0) {
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		header("location:index.php");
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>MedSch - Login</title>
	<link rel="stylesheet" type="text/css" href="dist/css/login.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<img class="wave-left" src="dist/img/wave-logo.png">
	<img class="wave-right" src="dist/img/wave-right.png" style="margin-top: -10px; position: absolute">
	<img class="logo" style="height: 125px; margin-top: 90px; margin-left:200px" src="dist/img/logo-web.png">
	<div class="judul" style="margin-top: 120px; margin-left:200px">
		<h1>Medical Schedule</h1>
	</div>
	<div class="penjelasan-medsch" style="margin-top: 100px; margin-left:200px">
		<h3>merupakan sebuah aplikasi yang dibuat dengan tujuan memudahkan mahasiswa </br>
			Fakultas Kedokteran UII dalam memantau jadwal kuliah yang sedang berlangsung.</h3>
	</div>

	<div class="container">
		<div class="login-content" style="margin-top: 30px;">
			<form action="login.php" method="POST">
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
					<div class="div">
						<h5 style="margin-top: 0px;">Username</h5>
						<input name="username" type="text" class="input">
					</div>
				</div>
				<div class="input-div pass">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div>
					<div class="div">
						<h5 style="margin-top: 0px;">Password</h5>
						<input name="password" type="password" class="input">
					</div>
				</div>
				<input href="index.php" name="login" type="submit" class="btn">
			</form>
		</div>
	</div>
	<script type="text/javascript" src="dist/js/login.js"></script>
</body>

</html>