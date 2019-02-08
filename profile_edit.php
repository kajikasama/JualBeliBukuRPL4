<?php
include "koneksi.php";
session_start();
if(empty($_SESSION['user']))
{
echo "
<script>
location.href='index.php';
</script>
";
}
?>
<!DOCTYPE html>
<html>
	<head>
		<!--Import Google Icon Font-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="css/material-font.css" rel="stylesheet">
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Andrean Corparation Programming</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/font-awesome.css">
	</head>
	<body class="scrollspy" id="homes">
		<!-- navbar -->
		<div class="navbar-fixed">
			<ul id="dropdown1" class="dropdown-content">
				<li><a href="profile.php">Profile</a></li>
				<li><a href="validation.php">Validation</a></li>
				<li><a href="statistic.php">Statistic</a></li>
				<li class="divider"></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
			<nav class="indigo darken-1">
				<div class="container">
					<div class="nav-wrapper">
						<a href="index2.php#homes" class="brand-logo">AGP</a>
						<a href="#" data-target="mobile-navas" class="sidenav-trigger"><i class="material-icons">menu</i></a>
						<ul class="right hide-on-med-and-down">
							<li><a href="index2.php#about">About Us</a></li>
							<li><a href="index2.php#clients">Client</a></li>
							<li><a href="index2.php#services">Services</a></li>
							<li><a href="index2.php#portfolio">Portfolio</a></li>
							<li><a href="index2.php#contact">Contact Us</a></li>
							<li><a href="product.php">Other Product</a></li>
							<li><a class="dropdown-trigger" href="#" data-target="dropdown1">
								<i class="icon-user"></i>&nbsp;&nbsp;
								<?php
								$nama = $_SESSION['user'];
								echo $nama?>
							</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<ul class="sidenav" id="mobile-navas">
			<li class="indigo darken-1 white-text"><a href="login.php"><i class="icon-user"></i>
				<?php
				$nama = $_SESSION['user'];
				echo $nama?>
			</a></li>
			<li><a href="index2.php#about">About Us</a></li>
			<li><a href="index2.php#clients">Client</a></li>
			<li><a href="index2.php#services">Services</a></li>
			<li><a href="index2.php#portfolio">Portfolio</a></li>
			<li><a href="index2.php#contact">Contact Us</a></li>
			<li><a href="product.php">Other Product</a></li>
		</ul>
		<div class="parallax-container parah">
			<div class="parallax"><!-- <img src="img/1.jpg"> -->
			<?php
				$no =  rand(1,3);
				if($no == 1)
				{
					echo "<img src='img/slide/1.jpg'>";
				}
				if($no == 2)
				{
					echo "<img src='img/slide/7s.jpg'>";
				}
				if($no == 3)
						{
					echo "<img src='img/slide/8s.jpg'>";
				}
			?>
		</div>
	</div>
	<section class="informasi">
		<div class="container-fluid">
			<div class="row">
				<div class="col m4 offset-m1 s12 jarak1 fak white lighten-4">
					<div class="container">
						<p class="center">
							<!-- <i class="sante2 large material-icons indigo-text darken-1">
							account_circle
							</i> -->
							<img src="img/icon/icon4.png" alt="">
							<h6 class=" indigo-grey-text darken-2 left "><b>Product id :
							<?php
							include "koneksi.php";
							$sql = mysqli_query($konek,
							"select * from orang where nama='$nama'");
							while($hasil = mysqli_fetch_array($sql))
							{
								$id = $hasil[0];
								$email = $hasil[4];
								$notelp = $hasil[5];
								$message = $hasil[6];
							}
							$id = $id + 1483;
							echo $id;
							?>
							</b></h6>
							<h6 class=" indigo-text darken-1 right"><a href="#" class="indigo-text darken-1">Edit Profile</a></h6>
							<h4 class="light grey-blue-text darken-2 left">Welcome,
							<?php
							$nama = $_SESSION['user'];
							echo $nama
							?>
							</h4>
							<h6 class=" indigo-grey-text darken-2 left"><i class="sante3 material-icons grey-blue-text darken-1 kebawah">mail</i>
							&nbsp;&nbsp;
							<?php
								echo $email;
							?>
							</h6>
							<h6 class=" indigo-grey-text darken-2 left"><i class="sante3 material-icons grey-blue-text darken-1 kebawah">local_phone</i>
							&nbsp;&nbsp;
							<?php
								echo "$notelp &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
							?>
							</h6>
						</p>
						<h6 class=" indigo-grey-text darken-2 left"><i class="sante3 material-icons grey-blue-text darken-1">message</i>
						&nbsp;&nbsp;
						<?php
							if($message == "-")
							{
								echo "No Information Given &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br>";
							}
							else
							{
								echo "$message";
							}
						?>
						</h6>
						<a href="logout.php" class="left btn red darken-1 bawah">
							Logout
						</a>
					</div>
				</div>
				<div class="col m5 offset-m1 s12 fak white lighten-4">
					<h5 class="blue-grey-text darken-4 lighten left-align">
					Goals :
					</h5>
					<h6 class="blue-grey-text darken-4 lighten">
					No Information Given
					</h6><br><br>
					<button class="indigo btn waves-effect waves-light" type="submit" name="action">Create Goals
					<i class="material-icons right">add</i>
					</button>
				</div>
				<div class="col m5 offset-m1 s12 fak white lighten-4 jarak2">
					<h5 class="blue-grey-text darken-4 lighten left-align">
					Shopping Cart Items :
					</h5>
					<h6 class="blue-grey-text darken-4 lighten">
					Unavailable
					</h6><br>
					<button class="indigo btn waves-effect waves-light light-green darken-1" type="submit" name="action">Add Shopping Cart
					<i class="material-icons right">add_shopping_cart</i>
					</button>
				</div>
				<div class="col m8 s12 offset-m2 fak white lighten-4">
					
				</div>
			</div>
		</div>
	</div>
</section>
<footer class="indigo darken-1 white-text center">
	<div class="container">
		<div class="col m12">
			<h6 class="">Andrean Corpation Copyright &copy; 2018 Author &amp; Creator Agus Chandra</h6>
			<p class="white-text lighten">Main Domain : <a href="http://guschandra.epizy.com">guschandra.epizy.com</a></p>
		</div>
	</div>
</footer>
<!-- 1920 x 1280 -->
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/script-login.js"></script>
</body>
</html>