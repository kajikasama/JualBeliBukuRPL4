<?php
  include "koneksi.php";
	$kode = $_GET["kode"];
	$sql2 = "select * from tbjualbuku where KodeJualBuku='$kode'";
	$query2 = mysql_query($sql2);
	$data2 = mysql_fetch_assoc($query2);
	$kodebuku = $data2["KodeBuku"];
	$sql3 = "select * from tbbuku where KodeBuku='$kodebuku'";
	$query3 = mysql_query($sql3);
	$data3 = mysql_fetch_assoc($query3);
	$stok = $data3["Stok"];
	$jumlah = $data2["Jumlah"];
	$sql = "delete from tbjualbuku where KodeJualBuku='$kode'";
  $hapus = mysql_query($sql);
	if($hapus)
	{
		echo
		"<script>
		alert('Data Berhasil Di hapus');
		location.href='table_transaksi_data.php';	
		</script>";
		$hasil = $stok + $jumlah;
		$akhir = "update tbbuku set Stok='$hasil' where KodeBuku='$kodebuku'";
		$update2 = mysql_query($akhir);
		if($update)
		{
			echo
			"<script>
			alert('Data Berhasil Di hapus');
			location.href='table_transaksi_data.php';	
			</script>";
		}
		else 
		{
			echo
			"<script>
			alert('Data GAGAL Di Ubah');	
			</script>";
		}
	}
	else
	{
		echo
		"<script>
		alert('Data Gagal Di Simpan');
		</script>";
	}
?>