<?php
include "koneksi.php";
// name
// user
// pass
// email
// notelp
$name = $_POST['name'];
$jeniskel = $_POST['jeniskelamin'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$notelp = $_POST['notelp'];
$simpan = mysqli_query
($konek,"insert into orang values 
	('','$name','$jeniskel','$user','$pass','$email','$notelp','-','client')");
	if($simpan)
	{
		echo"
		<script>
		alert('Registrasi Berhasil');
		location.href='login.php';
		</script>
		";
	}
	else
	{
		echo"
		<script>
		alert('Registrasi Gagal Coba Ulang Lagi');
		location.href='register.php';
		</script>
		";
	}
?>