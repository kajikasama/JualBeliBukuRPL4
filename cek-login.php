<?php
	include "koneksi.php";

	$Username = $_POST['Username'];
	$Password = $_POST['Password'];

	$sql = "select * from tbuser where Username='$Username' and Password='$Password'";
	$query = mysql_query($sql);
	$data = mysql_num_rows($query);
	if($data > 0)
	{
		$data2 = mysql_fetch_assoc($query);
		session_start();
		$_SESSION['user'] = $data2['NamaLengkap'];
		echo 
		"
			<script>
				location.href='home.php';
			</script>
		";	
	}
	else
	{
		echo 
		"<script>
			alert('Login Gagal !!');
			location.href='index.php';
		</script>";
	}
?>
