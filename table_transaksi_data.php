<?php
  include "koneksi.php";
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Jual Buku RPL 4 :: Table Transaksi</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
  <!-- <script src="main.js"></script> -->
</head>

<body>
  <h1 align="center">TABLE TRANSAKSI DATA (PROTOTYPE)</h1>
  <hr>
  <a href="transaksi_data_kw2.php">Input Transaksi Data</a>
  || <a href="table_transaksi_data.php">Table Transaksi Data</a>
  <br>
  <br>
  <table border="1px" width="100%" align="center">
    <tr align="center">
      <td width="70px">Kode Transaksi</td>
      <td>No Transaksi</td>
      <td colspan="2">Kode Buku</td>
      <td colspan="2">Kode User</td>
      <td>Jumlah Dibeli</td>
      <td>Total Bayar (Rp)</td>
      <td style="color:magenta">Tgl Transaksi</td>
      <td>Status</td>
      <td colspan="2">Action</td>
    </tr>
    <a href='transaksi_data_kw2.php'>Tambah Data Baru</a>
    <br><br>
    <?php
        $sql = "select * from tbjualbuku order by TglTransaksi desc";
        $query = mysql_query($sql);
          if(mysql_num_rows($query) > 0)
              {
              while($data = mysql_fetch_assoc($query))
              {
                $kode = $data["KodeJualBuku"];
                $format = date('d-F-Y', strtotime($data['TglTransaksi']));
                $status = $data["Status"];

              echo "
              <tr align='center'>
                <td style='text-align:center'>".$kode."</td>
                <td>".$data["NoTransaksi"]."</td>
                <td>".$data["KodeBuku"]."</td>
                <td><a href='#'>Lihat Buku</a></td>
                <td>".$data["KodeUser"]."</td>
                <td><a href='#'>Lihat User</a></td>
                <td>".$data["Jumlah"]."</td>
                <td style='padding-right:10px;' align='right'>".number_format($data["TotalBayar"],0,",",".")."</td>
                <td>".$format."</td>
                <td>".$status."</td>
                <td><a href='ubah_transaksi.php?kode=".$kode."'>Edit</a></td>
                <td><a href='hapus-transaksi.php?kode=".$kode."'>Hapus</a></td>
              </tr>";
              }
              }
              else
              {
              echo '<tr><td colspan="8">Data Kosong</td></tr>';
              }
              ?>
    <tr>
      <td align="center" colspan="6">
        Total :
      </td>
      <td align="center">
        <?php $sqltotal = "select sum(Jumlah) as totalbuku from tbjualbuku";
          $totalbuku = mysql_query($sqltotal);
          $datatotal = mysql_fetch_assoc($totalbuku);
          echo "<b>".$datatotal["totalbuku"]."</b>";
        ?>
      </td>
      <td align="right" style="padding-right:10px">
        <?php 
        $sqltotal2 = "select sum(TotalBayar) as totalharga from tbjualbuku";
        $totalharga = mysql_query($sqltotal2);
        $datatotal2 = mysql_fetch_assoc($totalharga);
        // echo "<b>".$datatotal2["totalharga"]."</b>";
        echo"<b>";
        echo number_format($datatotal2["totalharga"],0,",",".");
        echo"</b>";
        ?>
      </td>

    </tr>
  </table>
</body>

</html>