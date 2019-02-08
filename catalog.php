<?php
include "koneksi.php";
session_start();
if(empty($_SESSION['user']))
{
echo "
<script>
alert('Anda Tidak Boleh Masuk !!');
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
    <title>Jual Buku RPL 4 :: Store</title>
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
            <a href="#homes" class="brand-logo">Jual Buku RPL 4</a>
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
    <!-- ini slider -->
    <div class="slider">
      <ul class="slides">
        <li>
          <img src="img/jualbuku/3.jpg"> <!-- random image -->
          <div class="caption center-align">
            <h3>This is our big priority in your life</h3>
            <h5 class="light white-text text-lighten-2">May Someone to make happines</h5>
            <a href="#contact" class="waves-effect waves-light btn-large purple lighten-1">Buy A Books</a>
          </div>
        </li>
        <li>
          <img src="img/jualbuku/4.jpg"> <!-- random image -->
          <div class="caption left-align">
            <h3>Make Your Good Mood</h3>
            <h5 class="light white-text text-lighten-2">We know how and what you like</h5>
            <a href="#contact" class="waves-effect waves-light btn-large purple lighten-1">Buy A Books</a>
          </div>
        </li>
        <li>
          <img src="img/jualbuku/5.jpg"> <!-- random image -->
          <div class="caption right-align">
            <h3>Book Is Knowlegde Source</h3>
            <h5 class="light white-text text-lighten-2">Read the book so you can know</h5>
            <a href="#contact" class="waves-effect waves-light btn-large purple lighten-1">Buy A Book</a>
          </div>
        </li>
      </ul>
    </div>
    <!-- about us -->
    <section class="about scrollspy" id="about">
      <div class="container">
        <div class="row">
          <h3 class="light purple-text darken-2"> Halaman Jual Buku X RPL 4 </h3>
        </div>
      </div>
    </section>
    <section class="halaman grey lighten-2 scrollspy" id="about">
      <div class="container">
        <div class="row">
          <div class="col s12 m12">
            <div class="card">
              <div class="card-image">
                <img src="img/catalog.jpg">
                <span class="card-title red darken-2"><b>Catalog Buku</b></span>
              </div>
              <div class="card-content">
                <p>Tempat Melihat Semua Buku Di Jual Dengan Harga Terjangkau</p>
              </div>
              <div class="card-action">
                <a href="catalog_buku.php" class="red-text darken-2">Masuk Ke Halaman Catalog Buku</a>
              </div>
            </div>
          </div>
          <div class="col s12 m6">
            <div class="card">
              <div class="card-image">
                <img src="img/loginnya2.jpg">
                <span class="card-title blue darken-2"><b>Master Data</b></span>
              </div>
              <div class="card-content">
                <p>Tempat Mengolah Data User, Buku, Dan Jenis Buku</p>
              </div>
              <div class="card-action">
                <a href="master.php" class="blue-text darken-2">Masuk Ke Halaman Master Data</a>
              </div>
            </div>
          </div>
          <div class="col s12 m6">
            <div class="card">
              <div class="card-image">
                <img src="img/rawpixel-552390-unsplash2.jpg">
                <span class="card-title green darken-2"><b>Transaksi Data</b></span>
              </div>
              <div class="card-content">
                <p>Tempat Transaksi Buku Mana Yang Di Beli </p>
              </div>
              <div class="card-action">
                <a href="transaksi_data.php" class="green-text darken-2">Masuk Ke Halaman Transaksi Data</a>
              </div>
            </div>
          </div>
          <div class="col s12 m6">
            <div class="card">
              <div class="card-image">
                <img src="img/slide/5s.jpg">
                <span class="card-title purple darken-2"><b>Laporan</b></span>
              </div>
              <div class="card-content">
                <p>Tempat Menginputkan Data Buku (Menambah / Menghapus)</p>
              </div>
              <div class="card-action">
                <a href="laporan.php" class="purple-text darken-2">Masuk Ke Halaman Laporan</a>
              </div>
            </div>
          </div>
          <div class="col s12 m6">
            <div class="card">
              <div class="card-image">
                <img src="img/father.png">
                <span class="card-title orange darken-4"><b>Management User</b></span>
              </div>
              <div class="card-content">
                <p>Tempat Mengatur Identitas User</p>
              </div>
              <div class="card-action">
                <a href="management_user.php" class="orange-text darken-2">Masuk Ke Halaman Management User</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="services  grey lighten-3 scrollspy" id="services">

    </section>
    <section id="abouts" class="portfolio scrollspy">
      <div class="container">
        <h3 class="light center grey-text text-darken-3">About Us</h3>
        <div class="row">
          <div class="col m12 s12">
            <p>Jual Beli Buku RPL 4 Adalah Sebuah Website Yang Dimana Melayani Pembelian Buku Dan Penjualan Buku Baru Maupun Bekas Secara Online Dengan Harga Yang Terjangkau</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim soluta quia aliquid ullam voluptatum magni fuga similique, minima deserunt temporibus facilis, non quos et hic iure veniam voluptas delectus reiciendis, cum odit amet laborum! Sed ad perspiciatis error repellendus, dolore!</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- <section class="contact  grey lighten-3 scrollspy" id="contact">
    <div class="container">
      <h3 class="light grey-text text-darken-3 center">Contact Us</h3>

    </div>
  </div>
</div>
</section> -->
<!--  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus at eveniet, sint aliquam ex officiis, sequi accusantium necessitatibus vero natus cumque. Vel at consequuntur libero minima non modi? Ex, eum! -->
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
	