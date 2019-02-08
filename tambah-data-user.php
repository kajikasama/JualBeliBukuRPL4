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
	$Username = $_POST['Username'];
	$Password = $_POST['Password'];
	$NamaLengkap = $_POST['NamaLengkap'];
	$NoTelp = $_POST['NoTelp'];
	$Alamat = $_POST['Alamat'];
	$Email = $_POST['Email'];
	$Level = $_POST['Level'];

	$sql = "insert into tbuser values ('','$Username','$Password','$NamaLengkap','$NoTelp','$Alamat','$Email','$Level')";
	$tambah = mysql_query($sql);
	if($tambah)
	{
		echo
		"<script>
		alert('Data Berhasil Di Simpan');
		location.href='master.php#data_user.php';	
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