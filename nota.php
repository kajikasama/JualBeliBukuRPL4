<?php
  include "koneksi.php";
  $kode = $_GET["kode"];
  $sql = "select * from tbjualbuku where KodeJualBuku='$kode'";
  $query = mysql_query($sql);
  $data = mysql_fetch_assoc($query);
  $KodeTransaksi = $data["KodeJualBuku"];
  $NoTransaksi = $data["NoTransaksi"];
  $KodeBuku = $data["KodeBuku"];
  $KodeUser = $data["KodeUser"];
  $Jumlah = $data["Jumlah"];
  $TotalBayar = $data["TotalBayar"];
  $TglTransaksi = $data["TglTransaksi"];
  $Status = $data["Status"];
  $sql2 = "select * from tbbuku where KodeBuku='$KodeBuku'";
  $query2 = mysql_query($sql2);
  $data2 = mysql_fetch_assoc($query2);
  $JudulBuku = $data2["JudulBuku"];
  $Pengarang = $data2["Pengarang"];
  $Tahun = $data2["TahunBuku"];
  $Harga = $data2["Harga"];
  $sql3 = "select * from tbuser where KodeUser='$KodeUser'";
  $query3 = mysql_query($sql3);
  $data3 = mysql_fetch_assoc($query3);
  $NamaLengkap = $data3["NamaLengkap"];
?>

<head>
  <link rel="stylesheet" href="style.css">
</head>
<form method="post" action="">
  <table style="font-family: Courier New">
    <tr>
      <td>
        <h3 style="font-family: Courier New">NOTA TRANSAKSI</h3>
      </td>
    </tr>
    <tr>
      <td>KodeJualBuku</td>
      <td>:</td>
      <td>
        <?php echo $KodeTransaksi; ?>
      </td>
    </tr>
    <!--  -->
    <tr>
      <td>No Transaksi</td>
      <td>:</td>
      <td>
        <?php echo $NoTransaksi; ?>
      </td>
      <td></td>
    </tr>
    <tr>
      <td colspan="3">
      </td>
    </tr>
    <tr>
      <td>Spesifikasi Buku :</td>
    </tr>
    <tr class="tersembunyi">
      <td>Kode Buku</td>
      <td>:</td>
      <td>
        <?php echo $KodeBuku; ?>
        <!-- <a href="#">Cari Buku</a> -->
      </td>
    </tr>
    <tr>
      <td>Judul Buku</td>
      <td>:</td>
      <td>
        <?php echo $JudulBuku; ?>
      </td>
    </tr>
    <tr>
      <td>Pengarang</td>
      <td>:</td>
      <td>
        <?php echo $Pengarang; ?>
      </td>
    </tr>
    <tr>
      <td>Tahun Buku</td>
      <td>:</td>
      <td>
        <?php echo $Tahun; ?>
      </td>
    </tr>
    <tr>
      <td>Harga Per Buku</td>
      <td>:</td>
      <td>Rp.
        <?php echo $Harga; ?>
      </td>
    </tr>
    <tr>
      <td>Kode User</td>
      <td>:</td>
      <td>
        <?php echo $KodeUser; ?>
        <!-- <a href="#">Cari User</a> -->
      </td>
    </tr>
    <tr>
      <td>Nama Kasir</td>
      <td>:</td>
      <td>
        <?php echo $NamaLengkap; ?>
        <!-- <a href="#">Cari User</a> -->
      </td>
    </tr>
    <tr>
      <td>Jumlah Buku</td>
      <td>:</td>
      <td>
        <?php echo $Jumlah; ?>
      </td>
    </tr>
    <tr>
      <td>Total Bayar</td>
      <td>:</td>
      <td>Rp.
        <?php echo $TotalBayar; ?>
      </td>
    </tr>
    <tr>
      <td>Tgl Transaksi</td>
      <td>:</td>
      <td>
        <?php
          $format = date('d F Y', strtotime($data['TglTransaksi']));
          echo $format; ?>
      </td>
    </tr>
    <tr>
      <td>Status</td>
      <td>:</td>
      <td>
        <?php echo $Status; ?>
      </td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td>
      </td>
    </tr>
  </table>
</form>