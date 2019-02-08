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
	$KodeUser = $_POST['KodeUser'];
	$Username = $_POST['Username'];
	$Password = $_POST['Password'];
	$NamaLengkap = $_POST['NamaLengkap'];
	$NoTelp = $_POST['NoTelp'];
	$Alamat = $_POST['Alamat'];
	$Email = $_POST['Email'];
	$Level = $_POST['Level'];

	$sql = "update tbuser set 
	Username='$Username',
	Password='$Password',
	NamaLengkap='$NamaLengkap',
	Telp='$NoTelp',
	Alamat='$Alamat',
	Email='$Email',
	Level='$Level'
	where KodeUser='$KodeUser'";
	$edit = mysql_query($sql);
	if($edit)
	{
		echo
		"<script>
		alert('Data Berhasil Di Ubah');
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