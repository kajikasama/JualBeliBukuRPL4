<?php
//   if($query)
//   {
//     echo "
//   <script>
//   location.href='tampil_data_buku.php';
//   </script>
//   ";
//   }
// }
// else
// {
//   echo "
// <script>
// location.href='data_buku.php';
// </script>
// ";
// }
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
$katakunci = $_POST['katakunci'];
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
  <title>Master RPL 4 :: Data Buku</title>
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
      <li><a href="home.php" class="blue-text darken-4 center">Ke Halaman Utama</a></li>
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
      <li><a href="home.php" class="blue-text darken-4 center">Kembali Ke Halaman Utama</a></li>
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
      <li><a class="white-text indigo darken-1 center">
          <!-- <i class="material-icons">assessment</i> -->Master Data</a></li>
      <li class="divider"></li>
      <li><a href="master.php#data_user" class="blue-text darken-1 center">Data User</a></li>
      <li><a href="master.php#data_buku" class="green-text darken-4 center">Data Buku</a></li>
      <li><a href="master.php#data_jenisbuku" class="red-text darken-2 center">Data Jenis Buku</a></li>
    </ul>
    <nav class="blue lighten-2">
      <div class="container">
        <div class="nav-wrapper">
          <a href="master.php" class="brand-logo">Master Data</a>
          <a href="#" data-target="mobile-navas" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a class="dropdown-trigger" data-target="masterdata2s" href="master.php">Master Data</a></li>
            <li><a class="dropdown-trigger" data-target="masterdatas" href="master.php">&nbsp;Input Data&nbsp;</a></li>
            <li><a href="laporan.php">Laporan</a></li>
            <li><a href="product.php">Transaksi Data</a></li>
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
    <li><a href="product.php">Transaksi Data</a></li>
  </ul>
  <div class="parallax-container parah">
    <div class="parallax">
      <!-- <img src="img/1.jpg"> -->
      <img src='img/buku5.jpg'>
    </div>
  </div>
  <section class="grey lighten-5" id="input_data_user">
    <div class="container">
      <div class="row">
        <div class="col m12 s12">
          <h3 class="light center green-text darken-2">
            Form Input Data Buku
          </h3>
          <hr style="border: 3px #61E55B solid">
        </div>
      </div>
    </div>
  </section>
  <section class="input_data_user white lighten-4" id="input_data_user">
    <div class="container">
      <div class="row">
        <div class="col m8 s12">
          <h6>
            <a href="home.php">Home</a> /
            <a class="indigo-text" href="master.php">Master Data</a> /
            <a class="green-text" href="data_buku.php">Data ; Buku</a>
          </h6>
          <br><br>
        </div>
      </div>

    </div>
  </section>
  <section class="grey lighten-5" id="input_data_user">
    <div class="container">
      <div class="row">
        <form action="cari_data_buku.php" method="post">
          <div class="col m8 offset-m2 s12">
            <div class="input-field col m8 offset-m2 s12">
              <i class="material-icons prefix blue-text">search</i>
              <input placeholder="Kata Kunci ..." id="first_name" name="katakunci" type="text" autofocus autocomplete="off"
                class="validate">
              <label for="first_name" class="blue-text">Pencarian</label>
              <button class="right btn waves-effect waves-light blue lighten-1" type="submit" name="cari">Cari
              </button>
            </div>
            <div class="col m8 s12">
              <h6>Pencarian Data Dengan Kata Kunci "
                <?php echo $katakunci; ?>"</h6>
            </div>
          </div>
        </form>
      </div>
      <div class="row">
        <div class="col m8 m12">
          <table class="striped responsive-table">
            <thead class="green-text">
              <tr>
                <th style="text-align: center;">Kode Buku</a></th>
                <th style='text-align: center;'>Kode Jenis</a></th>
                <th>Judul Buku</a></th>
                <!-- <th>Pengarang</a></th>
              <th>Penerbit</a></th> -->
                <th>Harga</a></th>
                <th>Stok</a></th>
                <th>Tahun Buku</a></th>
                <!-- <th>Keterangan</a></th> -->
                <th colspan="2">Actions</a></th>
              </tr>
            </thead>
            <!-- pagination -->
            <!-- konfigurasi -->
            <?php
          // $jumllahdataperhalaman = 3;
          // $query2 = "select * from tbbuku";
          // $jalan = mysql_query($query2);
          // $jumlahdata = mysql_num_rows($jalan);
          // $jumlhaperhalaman = ceil($jumlahdata / $jumllahdataperhalaman);
          // // var_dump($jumlhaperhalaman);
          // $halamanaktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
          // $awaldata = ($jumllahdataperhalaman * $halamanaktif) - $jumllahdataperhalaman;
          ?>
            <tbody class="green-text lighten-2">
              <?php
            // $sql = "select * from tbbuku limit $awaldata , $jumllahdataperhalaman";
            // $query = mysql_query($sql);
            
            $sql = "select * from tbbuku 
            where JudulBuku like '%$katakunci%' or
            KodeJenis like '%$katakunci%' or
            Pengarang like '%$katakunci%' or
            Harga like '%$katakunci%' or
            Penerbit like '%$katakunci%' or
            Stok like '%$katakunci%' or
            TahunBuku like '%$katakunci%'";
            $query = mysql_query($sql);
            if(mysql_num_rows($query) > 0)
            {
            while($data = mysql_fetch_array($query))
            {
            echo "
            <tr>
              <td style='text-align:center'>".$data["KodeBuku"]."</td>
              <td style='text-align: center;'>".$data["KodeJenis"]."</td>
              <td>".$data["JudulBuku"]."</td>
              <!-- <td>".$data["Pengarang"]."</td> -->
              <!-- <td>".$data["Penerbit"]."</td> -->
              <td>Rp. ".$data["Harga"]."</td>
              <td>".$data["Stok"]."</td>
              <td>".$data["TahunBuku"]."</td>
              <!-- <td>".$data["Keterangan"]."</td> -->
              <td><a href='ubah_data_buku.php?kode=".$data["KodeBuku"]."'><i class='material-icons prefix green-text'>mode_edit</i></a></td>
              <td><a href='hapus-data-buku.php?kode=".$data["KodeBuku"]."'><i class='material-icons prefix green-text'>delete_forever</i></a></td>
            </tr>";
            }
            }
            else
            {
            echo '<tr><td colspan="9">Data Tidak Di Temukan</td></tr>';
            }
            ?>
            </tbody>
          </table>
        </div>
        <br><br>
      </div>
    </div>
  </section>
  <footer class="blue lighten-1 white-text center">
    <p class="flow-text">
      Copyright &copy; 2018 Agus Chandra || Jual Buku RPL 4
    </p>
  </footer>
  <!-- 1920 x 1280 -->
  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <script type="text/javascript" src="js/script-login.js"></script>
  <script src="ajaxkw2.js"></script>
</body>

</html>