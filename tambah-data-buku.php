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
	$JenisBuku = $_POST['JenisBuku'];
	$JudulBuku = $_POST['JudulBuku'];
	$Pengarang = $_POST['Pengarang'];
	$Penerbit = $_POST['Penerbit'];
	$Harga = $_POST['Harga'];
	$Stok = $_POST['Stok'];
	$TahunBuku = $_POST['TahunBuku'];
	$Keterangan = $_POST['Keterangan'];

	$sql = "insert into tbbuku values ('','$JenisBuku','$JudulBuku','$Pengarang','$Penerbit','$Harga','$Stok','$TahunBuku','$Keterangan','-')";
	$tambah = mysql_query($sql);
	if($tambah)
	{
		echo
		"<script>
		alert('Data Berhasil Di Simpan');
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