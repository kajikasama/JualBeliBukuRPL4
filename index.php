<?php
	include "koneksi.php";
	session_start();
	error_reporting();
	if(isset($_SESSION['user']))
	{
		echo "
<script>
location.href='home.php';
</script>
";
	}
?>
<!DOCTYPE html>
<html>

<head>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/material-font.css" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/style-login.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<title>Jual Buku RPL 4 :: Login</title>
</head>

<body>
	<section class="pembuka" id="pembuka">
		<div class="container">
			<h3 class="light white-text lighten-1 center">Jual Buku RPL 4 Login</h3>
			<div class="row">
				<div class="col m8 offset-m2 s12">
					<div class="center card-panel">
						<i class="sante large material-icons purple-text lighten-3">people</i>
						<form action="cek-login.php" method="post">
							<div class="input-field">
								<input autocomplete="none" type="text" name="Username" id="name" required>
								<label for="name">Username</label>
							</div>
							<div class="input-field">
								<input type="password" name="Password" id="password">
								<label for="password">Password</label>
							</div>
							<button type="submit" class="btn purple lighten-1">
								Login
							</button>
							<button type="reset" class="btn red lighten-1">
								Hapus
							</button>
							<!-- <a href="register.php" class="btn red darken-1">
									REGISTER
								</a> -->
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body>

</html>