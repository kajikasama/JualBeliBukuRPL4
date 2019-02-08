<?php
	include "koneksi.php";
session_start();
if(empty($_SESSION['user']))
{
echo "
<script>
location.href='index.php';
</script>
";}
	$KodeBuku = $_POST['KodeBuku'];
	$KodeJenis = $_POST['JenisBuku'];
	$JudulBuku = $_POST['JudulBuku'];
	$Pengarang = $_POST['Pengarang'];
	$Penerbit = $_POST['Penerbit'];
	$Harga = $_POST['Harga'];
	$Stok = $_POST['Stok'];
	$TahunBuku = $_POST['TahunBuku'];
	$Keterangan = $_POST['Keterangan'];

	$sql = "update tbbuku set
	KodeBuku='$KodeBuku', 
	KodeJenis='$KodeJenis',
	JudulBuku='$JudulBuku',
	Pengarang='$Pengarang',
	Penerbit='$Penerbit',
	Harga='$Harga',
	Stok='$Stok',
	TahunBuku='$TahunBuku',
	Keterangan='$Keterangan'
	where KodeBuku='$KodeBuku'";
	$edit = mysql_query($sql);
	if($edit)
	{
		echo
		"<script>
		alert('Data Berhasil Di Ubah');
		location.href='master.php#data_buku';	
		</script>";
	}
	else
	{
		echo
		"<script>
		alert('Data Gagal Di Simpan');
		</script>";
	}
?>