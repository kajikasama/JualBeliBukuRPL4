<!DOCTYPE html>
<html>
	<head>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="css/material-font.css" rel="stylesheet">
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" href="css/style-login.css">
		<link rel="stylesheet" href="css/font-awesome.css">
		<title>Login Andrean Salvato Websites</title>
	</head>
	<body>
		<section class="pembuka" id="pembuka">
			<div class="container">
				<h3 class="light white-text lighten-2 center">Register Here</h3>
				<div class="row">
					<div class="col m8 offset-m2 s12">
						<div class="center card-panel">
							<i class="sante large material-icons lime-text">assignment_ind</i>
							<form action="cek-register.php" method="post">
								<div class="input-field">
									<i class="material-icons prefix">accessibility</i>
									<input type="text" name="name" id="name" required class="validate">
									<label for="name">Nama</label>
									<span class="helper-text" data-error="harus di isi" data-success=""></span>
								</div>
								<div class="input-field">
									<i class="material-icons prefix">account_circle</i>
									<input type="text" name="user" id="user" required class="validate">
									<label for="user">Username</label>
									<span class="helper-text" data-error="harus di isi" data-success=""></span>
								</div>
								<div class="input-field">
									<i class="material-icons prefix">vpn_key</i>
									<input type="password" name="pass" id="password" required class="validate">
									<label for="password">Password</label>
									<span class="helper-text" data-error="harus di isi" data-success=""></span>
								</div>
								<div class="input-field">
									<i class="material-icons prefix">email</i>
									<input class="validate" type="email" name="email" id="email" required class="validate">
									<label for="email">E-mail</label>
									<span class="helper-text" data-error="wrong" data-success="right"></span>
								</div>
								<div class="input-field">
									<i class="material-icons prefix">local_phone</i>
									<input type="text" name="notelp" id="notelp" required class="validate">
									<label for="notelp">No Telp</label>
								</div>
								<div class="row">
									<div class="input-field col s6 offset-s1">
										<label>
											<input value="laki-laki" name="jeniskelamin" type="radio" checked />
											<span>Laki-Laki</span>
										</label>
									</div>
									<div class="input-field col s4 offset-s1">
										<label>
											<input value="perempuan" name="jeniskelamin" type="radio" />
											<span>Perempuan</span>
										</label>
									</div>
								</div>
								<div class="input-field">
									<button type="submit" class="btn green darken-2">
									Register
									</button>
									<a href="login.php" class="btn red darken-1">
										Back To Login
									</a>
									<br><br>
									<a href="index.php">Back To Home Pages</a>
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