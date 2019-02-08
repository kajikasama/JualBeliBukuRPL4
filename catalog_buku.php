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
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <nav class="deep-purple accent-2">
      <div class="container">
        <div class="nav-wrapper">
          <a href="home.php" class="brand-logo">Jual Buku RPL 4</a>
          <a href="#" data-target="mobile-navas" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#abouts">About Us</a></li>
            <li><a href="catalog.php">Catalog</a></li>
            <li><a href="master.php">Master Data</a></li>
            <li><a href="transaksi.php">Transaksi Data</a></li>
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
    <li><a href="transaksi.php">Transaksi Data</a></li>
  </ul>
  <!-- ini slider -->
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="img/catalog.jpg">
        <div class="caption center-align">
          <h3>Catalog Buku</h3>
          <h5 class="light white-text text-lighten-2">Tempat Dimana Buku Di Jual Dengan Harga Yang Terjangkau</h5>
          <a href="#contact" class="waves-effect waves-light btn-large deep-purple accent-2 lighten-1">Read More!</a>
        </div>
      </li>
      <li>
        <img src="img/jualbuku/4.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3>Catalog Buku</h3>
          <h5 class="light white-text text-lighten-2">Tersedia Buku-Buku Lainnya Seperti Buku Kitab Suci, Pasal UUD
            1945 , Dan Lain Sebagainnya</h5>
          <a href="#contact" class="waves-effect waves-light btn-large deep-purple accent-2 lighten-1">Read More !</a>
        </div>
      </li>
      <li>
        <img src="img/jualbuku/5.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3>Katalog Buku</h3>
          <h5 class="light white-text text-lighten-2">Beli Buku Dengan Dengan Minimal Belanja Rp.100.000 Gratis 1 Buku
            Tulis </h5>
          <a href="#contact" class="waves-effect waves-light btn-large deep-purple accent-2 lighten-1">Read More !</a>
        </div>
      </li>
    </ul>
  </div>
  <!-- about us -->
  <section class="about scrollspy" id="about">
    <div class="container">
      <div class="row">
        <h3 class="light deep-purple-text darken-2"> Halaman Catalog Buku</h3>
      </div>
    </div>
  </section>
  <section class="halaman grey lighten-2 scrollspy" id="about">
    <div class="container">
      <div class="row">
        <div class="col s12 m12">
          <h6>
            <a href="home.php">Home</a> /
            <a href="catalog-buku.php">Catalog Buku</a>
          </h6>
        </div>
      </div>
      <div class="row">
        <?php 

          $sql2 = "select * from tbbuku order by KodeBuku";
          $query2 = mysql_query($sql2);
          if(mysql_num_rows($query2) > 0)
          {
            while($hasil2 = mysql_fetch_assoc($query2))
            {

          ?>
        <div class="col s12 m3">
          <div class="card">
            <div class="card-image">
              <?php
                if($hasil2['NamaGambar'] == "-")
                {
                  echo"<img src='img/catalogbuku/blum.jpg' />";
                } 
                else
                {
                  echo"<img src='img/catalogbuku/".$hasil2['NamaGambar']."' />";
                }
                ?>
              <!-- <img src="img/catalogbuku/cover1.jpg"> -->
              <span class="card-title"></span>
            </div>
            <div class="card-content">
              <?php echo"<p>".$hasil2['JudulBuku']."</p>"; ?>
              <!-- <p>Harry Potter and the half blood prince</p> -->
              <br>
              <!-- <p class="thin" style="text-decoration: line-through;">Rp. 85.000,00</p> -->
              <?php echo"<h6>Rp. ".$hasil2['Harga'].",00</h6>"; ?>
              <!-- <h6>Rp.70.000,00</h6> -->
              <?php
                if($hasil2['Stok'] == 0 )
                {
                  echo"<h6>Stok Habis</h6>
                  </div>
                  <div class='card-action center'>
                  <a href='contact.php' class='btn waves-effect red accent-2 white-text'>Request Buku</a>
                  </div>
                  ";
                }
                else
                {
                  echo"<h6>Stok Tersedia</h6>
                  </div>
                  <div class='card-action center'>
                  <a href='master.php' class='btn waves-effect deep-purple accent-2 white-text'>Lihat Lebih</a>
                  </div>
                  ";
                }
              ?>

            </div>
          </div>
          <?php
             }
          }

          ?>
          <!-- <div class="col s12 m3">
            <div class="card">
              <div class="card-image">
                <img src="img/catalogbuku/cover1.jpg">
                <span class="card-title"></span>
              </div>
              <div class="card-content">
                <p>Harry Potter and the half blood prince</p>
                <br>
                <p class="thin" style="text-decoration: line-through;">Rp. 85.000,00</p>
                <h6>Rp.70.000,00</h6>
              </div>
              <div class="card-action center">
                <a href="master.php" class="btn waves-effect green accent-3 white-text">Lihat Lebih</a>
              </div>
            </div>
          </div>
          <div class="col s12 m3">
            <div class="card">
              <div class="card-image">
                <img src="img/catalogbuku/cover1.jpg">
                <span class="card-title"></span>
              </div>
              <div class="card-content">
                <p>Harry Potter and the half blood prince</p>
                <br>
                <p class="thin" style="text-decoration: line-through;">Rp. 85.000,00</p>
                <h6>Rp.70.000,00</h6>
              </div>
              <div class="card-action center">
                <a href="master.php" class="btn waves-effect green accent-3 white-text">Lihat Lebih</a>
              </div>
            </div>
          </div>
          <div class="col s12 m3">
            <div class="card">
              <div class="card-image">
                <img src="img/catalogbuku/cover1.jpg">
                <span class="card-title"></span>
              </div>
              <div class="card-content">
                <p>Harry Potter and the half blood prince</p>
                <br>
                <p class="thin" style="text-decoration: line-through;">Rp. 85.000,00</p>
                <h6>Rp.70.000,00</h6>
              </div>
              <div class="card-action center">
                <a href="master.php" class="btn waves-effect green accent-3 white-text">Lihat Lebih</a>
              </div>
            </div>
          </div>
          <div class="col s12 m3">
            <div class="card">
              <div class="card-image">
                <img src="img/catalogbuku/cover1.jpg">
                <span class="card-title"></span>
              </div>
              <div class="card-content">
                <p>Harry Potter and the half blood prince</p>
                <br>
                <p class="thin" style="text-decoration: line-through;">Rp. 85.000,00</p>
                <h6>Rp.70.000,00</h6>
              </div>
              <div class="card-action center">
                <a href="master.php" class="btn waves-effect green accent-3 white-text">Lihat Lebih</a>
              </div>
            </div>
          </div>
          <div class="col s12 m3">
            <div class="card">
              <div class="card-image">
                <img src="img/catalogbuku/cover2.jpg">
                <span class="card-title"></span>
              </div>
              <div class="card-content">
                <p>Touhou ; Bohemian Archive in Japanese Red</p>
                <br>
                <p class="thin" style="text-decoration: line-through;">Rp. 70.000,00</p>
                <h6>Rp.65.000,00</h6>
              </div>
              <div class="card-action">
                <a href="master.php" class="btn waves-effect green accent-3 white-text">Lihat Lebih</a>
              </div>
            </div>
          </div>
          <div class="col s12 m3">
            <div class="card">
              <div class="card-image">
                <img src="img/catalogbuku/cover2.jpg">
                <span class="card-title"></span>
              </div>
              <div class="card-content">
                <p>Touhou ; Bohemian Archive in Japanese Red</p>
                <br>
                <p class="thin" style="text-decoration: line-through;">Rp. 70.000,00</p>
                <h6>Rp.65.000,00</h6>
              </div>
              <div class="card-action">
                <a href="master.php" class="btn waves-effect green accent-3 white-text">Lihat Lebih</a>
              </div>
            </div>
          </div>
          <div class="col s12 m3">
            <div class="card">
              <div class="card-image">
                <img src="img/catalogbuku/cover2.jpg">
                <span class="card-title"></span>
              </div>
              <div class="card-content">
                <p>Touhou ; Bohemian Archive in Japanese Red</p>
                <br>
                <p class="thin" style="text-decoration: line-through;">Rp. 70.000,00</p>
                <h6>Rp.65.000,00</h6>
              </div>
              <div class="card-action">
                <a href="master.php" class="btn waves-effect green accent-3 white-text">Lihat Lebih</a>
              </div>
            </div>
          </div>
          <div class="col s12 m3">
            <div class="card">
              <div class="card-image">
                <img src="img/catalogbuku/cover2.jpg">
                <span class="card-title"></span>
              </div>
              <div class="card-content">
                <p>Touhou ; Bohemian Archive in Japanese Red</p>
                <br>
                <p class="thin" style="text-decoration: line-through;">Rp. 70.000,00</p>
                <h6>Rp.65.000,00</h6>
              </div>
              <div class="card-action">
                <a href="master.php" class="btn waves-effect green accent-3 white-text">Lihat Lebih</a>
              </div>
            </div> -->
          <!--  </div> -->
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
          <p>Jual Beli Buku RPL 4 Adalah Sebuah Website Yang Dimana Melayani Pembelian Buku Dan Penjualan Buku Baru
            Maupun Bekas Secara Online Dengan Harga Yang Terjangkau</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim soluta quia aliquid ullam voluptatum magni
            fuga similique, minima deserunt temporibus facilis, non quos et hic iure veniam voluptas delectus
            reiciendis, cum odit amet laborum! Sed ad perspiciatis error repellendus, dolore!</p>
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
  <footer class="deep-purple accent-3 white-text center">
    <p class="flow-text">Jual Buku RPL 4 Copyright &copy; 2018 Author &amp; Creator Agus Chandra</p>
  </footer>
  <!-- 1920 x 1280 -->
  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <script type="text/javascript" src="js/script-login.js"></script>
</body>

</html>