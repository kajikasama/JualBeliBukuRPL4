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
	$KodeJenis = $_POST['KodeJenis'];
	$NamaJenis = $_POST['NamaJenis'];
	$Keterangan = $_POST['Keterangan'];

	$sql = "update tbjenisbuku set 
	KodeJenis='$KodeJenis',
	NamaJenis='$NamaJenis',
	Keterangan='$Keterangan'
	where KodeJenis='$KodeJenis'";
	$edit = mysql_query($sql);
	if($edit)
	{
		echo
		"<script>
		alert('Data Berhasil Di Ubah');
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