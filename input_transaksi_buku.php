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
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Jual Buku RPL 4 :: Input Transaksi Data</title>
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
    <ul>
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
    <nav class="deep-purple accent-2 lighten-2">
      <div class="container">
        <div class="nav-wrapper">
          <a href="home.php" class="brand-logo">Jual Buku RPL 4</a>
          <a href="#" data-target="mobile-navas" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a class="dropdown-trigger" data-target="masterdata2s" href="home.php">Master Data</a></li>
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
          $nama = $_SESSION['user'];      echo "<p class='white-text'>$nama</p>"?>
      </a></li>
    <li><a class="dropdown-pencet" data-target="masterdata2" href="master.php">Master Data</a></li>
    <li><a class="dropdown-pencet" data-target="masterdata" href="master.php">Input Data</a></li>
    <li><a href="laporan.php">Laporan</a></li>
    <li><a href="product.php">Transaksi Data</a></li>
  </ul>
  <div class="parallax-container parah">
    <div class="parallax">
      <!-- <img src="img/1.jpg"> -->
      <img src='img/transaksi.jpg'>
    </div>
  </div>
  <section class="grey lighten-5" id="input_data_user">
    <div class="container">
      <div class="row">
        <div class="col m12 s12">
          <h3 class="light center deep-purple-text darken-2">
            Form Input Transaksi Buku
          </h3>
          <hr style="border: 3px rgb(106, 95, 255) solid">
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
            <a class="indigo-text" href="master.php">Catalog</a> /
            <a class="deep-purple-text" href="input_data_buku.php">Input ; Transaksi Buku</a>
          </h6>
          <br><br>
        </div>
      </div>
      <div class="row">
        <form action="simpan_transaksi_kw2.php" method="post">
          <div class="col m8 offset-m2 s12">
            <div class="input-field col m6 offset-m2 s12">
              <!-- <i class="material-icons prefix deep-purple-text">view_list</i> -->
              <p class="deep-purple-text">Judul Buku</p>
              <select name="JudulBuku" id="JudulBuku" class="browser-default validate" required>
                <option value="" disabled selected>-- Pilih Judul Buku --</option>
                <?php
                    $sql = "select * from tbbuku";
                    $query = mysql_query($sql);
                    if(mysql_num_rows($query) > 0)
                    {
                    while($data = mysql_fetch_assoc($query))
                    {
                    echo
                    "<option value='".$data["KodeBuku"]."'>".$data["JudulBuku"]."</option>";
                    }
                    }
                    ?>
              </select>
              <!-- <label for="first_name4" class="deep-purple-text">Judul Buku</label> -->
            </div>
            <?php $nama = $_SESSION['user']; ?>
            <div class="input-field col m8 offset-m2 s12">
              <!-- <i class="material-icons prefix deep-purple-text">streetview</i> -->
              <input readonly value="<?php echo $nama; ?>" id="first_name2" name="NamaKasir" type="text" required>
              <label for="first_name2" class="deep-purple-text">Nama Kasir</label>
            </div>
            <!-- <div class="input-field col m8 offset-m2 s12">
                  <i class="material-icons prefix deep-purple-text">group</i>
                  <input placeholder="Penerbit Buku" id="first_name3" name="Penerbit" type="text" class="validate" required>
                  <label for="first_name3" class="deep-purple-text">Penerbit</label>
                </div> -->
            <div class="input-field col m6 offset-m2 s12">
              <div id="stok">
                <!-- <i class="material-icons prefix deep-purple-text">view_list</i> -->
                <p class="deep-purple-text">Jumlah Stok</p>
                <select name="JumlahBuku" class="browser-default validate" required>
                  <option value="" disabled selected>-- Pilih Jumlah Buku --</option>
                </select>
                <!-- <label for="first_name4" class="deep-purple-text">Jumlah Buku</label> -->
              </div>
            </div>
            <div class="input-field col m10 offset-m2 s12">
              <!-- <i class="material-icons prefix deep-purple-text">date_range</i> -->
              <input required name="TglTransaksi" type="date" class="" value="<?php echo date('Y-m-d'); ?>" readonly>
              <label for="first_name5" class="deep-purple-text">Tgl Transaksi</label>
            </div>
            <!--   -->
            <div class="input-field col m8 offset-m2 s12">
              <button class="btn waves-effect waves-light deep-purple darken-1" type="submit" name="action">Tambah
                <i class="material-icons right">send</i>
              </button>
              <button class="btn waves-effect waves-light red lighten-1" type="reset" name="action">Hapus
                <i class="material-icons right">clear</i>
              </button>
            </div>
            <div class="input-field col m8 offset-m2 s12">
              <a class="btn waves-effect waves-light deep-purple lighten-1"" href=" transaksi.php"><i class="material-icons left">arrow_back</i>
                Kembali Ke
                Transaksi</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <section class="grey lighten-5" id="input_data_user">
    <div class="container">
      <div class="row">
        <div class="col m12 s12">
          <hr style="border: 3px rgb(106, 95, 255) solid">
        </div>
      </div>
    </div>
  </section>
  <footer class="deep-purple lighten-1 white-text center">
    <p class="flow-text">
      Copyright &copy; 2018 Agus Chandra || Jual Buku RPL 4
    </p>
  </footer>
  <!-- 1920 x 1280 -->
  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      $('#JudulBuku').on('change', function () {
        const StokID = $(this).val();
        if (StokID) {
          $.ajax({
            type: 'POST',
            url: 'data_stok_jumlah.php',
            data: 'KodeBuku=' + StokID,
            success: function (html) {
              $('#stok').html(html);
            }
          });
        } else {
          $('#stok').html(
            '<select name="JumlahBuku" id="stok"><option value="">- Pilih Jumlah Buku -</option></select>');
        }
      });
    });
  </script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <script type="text/javascript" src="js/script-login.js"></script>
</body>

</html>