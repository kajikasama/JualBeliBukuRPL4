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

	$Kode = $_GET['kode'];
	$sql = "delete from tbuser where KodeUser='$Kode'";
	$hapus = mysql_query($sql);
	if($hapus)
	{
		echo
		"<script>
		alert('Data Berhasil Di hapus');
		location.href='master.php#data_user';	
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