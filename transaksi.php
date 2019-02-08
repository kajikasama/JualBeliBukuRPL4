<?php
include "koneksi.php";
session_start();
if(empty($_SESSION['user']))
{
echo "
<script>
alert('Maaf Anda Tidak Boleh Masuk Ke Halaman Ini');
location.href='home.php';
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
  <title>Jual Buku RPL 4 :: Master Data</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/font-awesome.css">
</head>

<body class="scrollspy" id="homes">
  <!-- navbar -->
  <div class="navbar-fixed">
    <ul id="dropdown1" class="dropdown-content">
      <li><a href="#" class="white-text purple darken-1 center">
          <?php
          $nama = $_SESSION['user'];
          echo $nama;
          ?>
        </a>
      </li>
      <li class="divider"></li>
      <li><a href="profile.php" class="orange-text darken-4 center">Management User</a></li>
      <!-- <li><a href="home.php" class="blue-text darken-4 center">Ke Halaman Utama</a></li> -->
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
      <li class="divider"></li>
      <li><a href="profile.php" class="orange-text darken-4 center">Management User</a></li>
      <!-- <li><a href="home.php" class="blue-text darken-4 center">Kembali Ke Halaman Utama</a></li> -->
      <li class="divider"></li>
      <li><a href="logout.php" class="red-text darken-2 center">Logout</a></li>
    </ul>
    <ul id="masterdata" class="dropdown-content">
      <!-- <li><a href="master.php" class="indigo-text darken-1 center">Master Data</a></li> -->
      <li><a href="input_data_user.php" class="blue-text darken-4 center">Input Data User</a></li>
      <li class="divider"></li>
      <li><a href="input_data_buku.php" class="green-text darken-2 center">Input Data Buku</a></li>
      <li><a href="input_data_jenis_buku.php" class="red-text darken-2 center">Input Data Jenis Buku</a></li>
    </ul>
    <ul id="masterdatas" class="dropdown-content">
      <!-- <li><a href="master.php" class="indigo-text darken-1 center">Master Data</a></li> -->
      <li><a href="#" class="white-text blue darken-1 center">
          <!-- <i class="material-icons">mode_edit</i> -->Input Data</a></li>
      <!-- <li class="divider"></li>
      <li class="divider"></li> -->
      <li><a href="input_data_user.php" class="blue-text darken-4 center">Data User</a></li>
      <li><a href="input_data_buku.php" class="green-text darken-2 center">Data Buku</a></li>
      <li><a href="input_data_jenis_buku.php" class="red-text darken-2 center">Data Jenis Buku</a></li>
    </ul>
    <ul id="masterdata2" class="dropdown-content">
      <li><a href="master.php#data_user" class="blue-text darken-4 center">Lihat Data User</a></li>
      <li><a href="master.php#data_buku" class="green-text darken-4 center">Lihat Data Buku</a></li>
      <li><a href="master.php#data_jenisbuku" class="red-text darken-4 center">Lihat Data Jenis Buku</a></li>
    </ul>
    <ul id="masterdata2s" class="dropdown-content">
      <li><a href="#" class="white-text indigo darken-1 center">
          <!-- <i class="material-icons">assessment</i> -->Master Data</a></li>
      <li class="divider"></li>
      <li><a href="master.php#data_user" class="blue-text darken-1 center">Data User</a></li>
      <li><a href="master.php#data_buku" class="green-text darken-4 center">Data Buku</a></li>
      <li><a href="master.php#data_jenisbuku" class="red-text darken-2 center">Data Jenis Buku</a></li>
    </ul>
    <nav class="deep-purple accent-2">
      <div class="container">
        <div class="nav-wrapper">
          <a href="index.php" class="brand-logo">Jual Buku RPL 4</a>
          <a href="#" data-target="mobile-navas" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a class="dropdown-trigger" data-target="masterdata2s" href="master.php">Master Data</a></li>
            <li><a class="dropdown-trigger" data-target="masterdatas" href="master.php">&nbsp;Input Data&nbsp;</a></li>
            <li><a href="laporan.php">Laporan</a></li>
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
    <li class="blue lighten-2 white-text"><a class="dropdown-pencet" href="#" data-target="dropdown2"><i class="icon-user white-text"></i>
        <?php
      $nama = $_SESSION['user'];
      echo "<p class='white-text'>$nama</p>"?>
      </a></li>
    <li><a class="dropdown-pencet" data-target="masterdata2" href="master.php">Master Data</a></li>
    <li><a class="dropdown-pencet" data-target="masterdata" href="master.php">Input Data</a></li>
    <li><a href="laporan.php">Laporan</a></li>
    <li><a href="transaksi.php">Transaksi Data</a></li>
  </ul>
  <!-- ini slider -->
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="img/transaksi.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>Transaksi Data</h3>
          <h5 class="light white-text text-lighten-2">Tempat Transaksi Buku Mana Yang Di Beli</h5>
          <a href="#data_user" class="waves-effect waves-light btn-large deep-purple accent-3 lighten-1">Lihat
            Tabel
            Transaksi</a>
          <a href="input_transaksi_buku.php" class="waves-effect waves-light btn-large deep-purple accent-2  lighten-1">Input
            Transaksi</a>
          <!-- <a href="#data_jenisbuku" class="waves-effect waves-light btn-large red lighten-1">Lihat Data Jenis Buku</a> -->
        </div>
      </li>
    </ul>
  </div>
  <!-- about us -->
  <section class="data_user grey lighten-5 scrollspy" id="data_user">
    <div class="container">
      <div class="row">
        <h3 class="light center deep-purple-text darken-2">Data Transaksi </h3>
      </div>
    </div>
  </section>
  <section class="data-user white lighten-5 scrollspy" id="about">
    <div class="row">
      <div class="container">
        <div class="col m8 s12">
          <h6>
            <a href="home.php">Home</a> /
            <a class="purple-text" href="catalog_buku.php">Catalog</a> /
            <a class="deep-purple-text" href="transaksi.php">Transaksi Buku</a>
          </h6>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col m4 offset-m8 s12 center">
        <a href="input_transaksi_buku.php" class="btn-floating btn-large waves-effect waves-light deep-purple"><i class="material-icons">add</i></a>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col m12 m12">
          <table class="striped responsive-table">
            <thead class="deep-purple-text">
              <tr class="deep-purple accent-2 white-text">
                <!-- <th style="text-align: center;">Kode Jual Buku</th> -->
                <th style="text-align: center;">Judul Buku</th>
                <!-- <th>Password</a></th> -->
                <th>Nama Kasir</th>
                <!-- <th>No Telp</a></th> -->
                <th>Harga Jual (Rp)</th>
                <th>Jumlah Pcs</th>
                <!-- <th>Email</a></th> -->
                <th>Total Bayar (Rp)</th>
                <th>Tgl Transaksi</th>
                <th>Status</th>
                <th>Actions</a></th>
              </tr>
            </thead>
            <tbody class="deep-purple-text lighten-2">
              <?php
              $sql = "select tbbuku.*,tbjualbuku.* from tbjualbuku inner join tbbuku on tbjualbuku.KodeBuku = tbbuku.KodeBuku where NoTransaksi='' ";
              $query = mysql_query($sql);
              if(mysql_num_rows($query) > 0)
              {
              while($data = mysql_fetch_assoc($query))
              {
                $format = date('d-F-Y', strtotime($data['TglTransaksi']));
                $bukulah = $data["KodeBuku"];
                $sql2 = "select * from tbbuku where KodeBuku='$bukulah'";
                $query2 = mysql_query($sql2);
                while($data2 = mysql_fetch_assoc($query2))
                {
                $usernya = $data["KodeUser"];
                $sql3 = "select * from tbuser where KodeUser='$usernya'";
                $query3 = mysql_query($sql3);
                while($data3 = mysql_fetch_assoc($query3))
                {
                  echo "
                  <tr>
                    <!-- <td>".$data["KodeJualBuku"]."</td> -->
                    <td>".$data2["JudulBuku"]."</td>
                    <td>".$data3["NamaLengkap"]."</td>
                    <td style='text-align:center'>".number_format($data["Harga"],0,",",".")."</td>
                    <td style='text-align:center'>".$data["Jumlah"]."</td>
                    <td style='text-align:center'>".number_format($data["TotalBayar"],0,",",".")."</td>
                    <td>".$format."</td>
                    <td>".$data["Status"]."</td>
                    <td style='text-align:center'><a href='transaksi_hapus.php?kode=".$data["KodeJualBuku"]."'><i class='material-icons prefix deep-purple-text '>delete_forever</i></a></td>
                  </tr>";
                }
                  }
                }
              }
              else
              {
              echo '<tr><td style="text-align:center" colspan="8">Tidak Ada Data Transaksi Manapun </td></tr>';
              }
              ?>
            </tbody>
          </table>
          <a href="nota.php" class="btn deep-purple darken-3">Cetak Nota</a>
        </div>
      </div>
    </div>
  </section>
  <!-- master buku -->

  <footer class="deep-purple accent-2 white-text center">
    <p class="flow-text">
      Copyright &copy; 2018 Agus Chandra || Jual Buku RPL 4
    </p>
  </footer>
  <!-- 1920 x 1280 -->
  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <script type="text/javascript" src="js/script-login.js"></script>
</body>

</html>