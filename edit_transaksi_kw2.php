<?php
  session_start();
  if(empty($_SESSION['user']))
  {
  echo "
  <script>
  location.href='index.php';
  </script>
  ";}
  include "koneksi.php";
  $KodeTransaksi = $_POST["KodeTransaksi"];
  $NoTransaksi = $_POST["NoTransaksi"];
  $KodeBuku = $_POST["KodeBuku"];
  $KodeUser = $_POST["KodeUser"];
  $Jumlah = $_POST["Jumlah"];
  $TotalBayar = $_POST["TotalBayar"];
  $TglTransaksi = $_POST["TglTransaksi"];
  $Status = $_POST["Status"];

  $sql = "update tbjualbuku set 
  KodeJualBuku='$KodeTransaksi',
  NoTransaksi='$NoTransaksi',
  KodeBuku='$KodeBuku',
  KodeUser='$KodeUser',
  Jumlah='$Jumlah',
  TotalBayar='$TotalBayar',
  TglTransaksi='$TglTransaksi',
  Status='$Status' where KodeJualBuku='$KodeTransaksi'";
  $edit = mysql_query($sql);
  if($edit)
  {
    echo
    "<script>
    alert('Data Berhasil Di Ubah');
    location.href='transaksi.php';	
    </script>";
  } 
  else 
  {
    echo
    "<script>
    alert('Data Gagal Di Ubah');
    location.href='table_transaksi_data.php';	
    </script>";
  }
?>