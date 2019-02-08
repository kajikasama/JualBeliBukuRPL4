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
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width,  initial-scale=1.0" />
	<title>Jual Beli Buku RPL 4</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/font-awesome.css">
</head>

<body class="scrollspy" id="homes">
	<!-- navbar -->
	<div class="navbar-fixed">
		<ul id="dropdown1" class="dropdown-content">
			<li><a href="#" class="purple-text darken-4 center">
					<?php
					$nama = $_SESSION['user'];
					echo $nama;
					?>
				</a></li>
			<li><a href="profile.php" class="orange-text darken-4 center">Management User</a></li>
			<li class="divider"></li>
			<li><a href="logout.php" class="red-text darken-2 center">Logout</a></li>
		</ul>
		<ul id="dropdown2" class="dropdown-content">
			<li><a href="#" class="purple-text darken-4 center">
					<?php
					$nama = $_SESSION['user'];
					echo $nama;
					?>
				</a></li>
			<li><a href="profile.php" class="orange-text darken-4 center">Management User</a></li>
			<li class="divider"></li>
			<li><a href="logout.php" class="red-text darken-2 center">Logout</a></li>
		</ul>
		<nav class="purple lighten-2">
			<div class="container">
				<div class="nav-wrapper">
					<a href="home.php" class="brand-logo">Jual Buku RPL 4</a>
					<a href="#" data-target="mobile-navas" class="sidenav-trigger"><i class="material-icons">menu</i></a>
					<ul class="right hide-on-med-and-down">
						<li><a href="#abouts">About Us</a></li>
						<li><a href="catalog.php">Catalog</a></li>
						<li><a href="master.php">Master Data</a></li>
						<li><a href="transaksi_data.php">Transaksi Data</a></li>
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
		<li class="purple lighten-2 white-text"><a class="dropdown-trigger" href="#" data-target="dropdown2"><i class="icon-user white-text"></i>
				<?php
				$nama = $_SESSION['user'];
				echo "<p class='white-text'>$nama</p>"?>
			</a></li>
		<li><a href="#abouts">About Us</a></li>
		<li><a href="catalog.php">Catalog</a></li>
		<li><a href="master.php">Master Data</a></li>
		<li><a href="transaksi_data.php">Transaksi Data</a></li>
	</ul>
	<div class="parallax-container parah">
		<div class="parallax">
			<!-- <img src="img/1.jpg"> -->
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
					<div class="container photo">
						<?php
							$sql = "select * from tbuser where NamaLengkap='$nama'";
							$query = mysql_query($sql);
							$data = mysql_fetch_assoc($query);

							if($data["Level"] == "Admin")
							{
								echo"<img src='img/icon/adminv2.png'>";
							}
							else
							{
								echo"<img src='img/icon/kasir.png'>";
							}
							echo"<a class='blue-text' href='ubah_data_profile.php?kode=".$data["KodeUser"]."'>&nbsp;&nbsp;&nbsp;&nbsp;Edit Profile </a>";
						?>
						<h4 style="letter-spacing: 5px;" class="purple-text lighten-2 thin">Hello ,
							<?php
						echo $data["NamaLengkap"];
						?>
						</h4>
						<br>
						<h6 class="">Kode User : <b>
								<?php echo $data["KodeUser"]; ?></b></h6>
						<h6 class="">Username : <b>
								<?php echo $data["Username"]; ?></b></h6>
						<h6>No Telp :
							<?php echo"<b>".$data["Telp"]."</b>"; ?>
						</h6>
						<h6>Alamat :
							<?php echo"<b>".$data["Alamat"]."</b>"; ?>
						</h6>
						<br>
						<h6>Email :
							<?php echo"<b>".$data["Email"]."</b>"; ?>
						</h6>
						<h6 class="">Level :
							<?php
							if($data["Level"] == "Admin")
							{
								echo "<b class='blue-text'>".$data["Level"]."</b>";
							}
							else
							{
								echo "<b class='red-text'>".$data["Level"]."</b>";
							}
						?>
						</h6>
					</div>
				</div>
				<div class="col m5 offset-m1 s12 fak white lighten-4">
					<h5 class="grey-blue-text darken-4 lighten left-align">
						Goals :
					</h5>
					<h6 class="grey-blue-text darken-4 lighten">
						No Information Given
					</h6><br><br>
					<button class="indigo btn waves-effect waves-light" type="submit" name="action">Create Goals
						<i class="material-icons right">add</i>
					</button>
				</div>
				<div class="col m5 offset-m1 s12 fak white lighten-4 jarak2">
					<h5 class="grey-blue-text darken-4 left-align">
						Shopping Cart Items :
					</h5>
					<h6 class="grey-blue-text darken-4 lighten">
						Unavailable
					</h6><br>
					<button class="indigo btn waves-effect waves-light light-green darken-1" type="submit" name="action">Add Shopping
						Cart
						<i class="material-icons right">add_shopping_cart</i>
					</button>
				</div>
				<div class="col m8 s12 offset-m2 fak white lighten-4">
					<!-- <h5 class="grey-blue-text darken-3">Recent Activity :</h5> <-->

				</div>
			</div>
		</div>
		</div>
	</section>
	<footer class="purple lighten-1 white-text center">
		<p class="flow-text">Jual Buku RPL 4 Copyright &copy; 2018 Author &amp; Creator Agus Chandra</p>
	</footer>
	<!-- 1920 x 1280 -->
	<!--JavaScript at end of body for optimized loading-->
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/script-login.js"></script>
</body>

</html>