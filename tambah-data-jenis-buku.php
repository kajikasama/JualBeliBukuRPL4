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
	$NamaJenis =  htmlspecialchars($_POST['NamaJenis']);
	$Keterangan = htmlspecialchars($_POST['Keterangan']);

	$sql = "insert into tbjenisbuku values ('','$NamaJenis','$Keterangan')";
	$tambah = mysql_query($sql);
	if($tambah)
	{
		echo
		"<script>
		alert('Data Berhasil Di Simpan');
		location.href='master.php#data_jenisbuku';	
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