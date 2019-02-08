<?php
session_start();
if(empty($_SESSION['user']))
{
echo "
<script>
location.href='index.php';
</script>
";
}
include "koneksi.php";
$nama_account = $_SESSION['user'];
$tambah1 = mysqli_query($konek, 
"select * from orang where nama='$nama_account'");
while($badah = mysqli_fetch_array($tambah1))
{
	$id_orang = $badah[0];
}
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$tambah2 = mysqli_query
($konek, "insert into contact values ('','$id_orang','$name','$email','$phone','$message')");
	if($tambah2)
	{
		echo
		"
		<script>
			alert('data berhasil di simpan');
			location.href='index2.php';
		</script>
		";
	}
	else
	{
		echo"data gagal tersimpan";
	}
?>