<?php
	include "koneksi.php";
	$stok = isset($_GET['stok']) ? $_GET['stok']:"";
	if($stok!="")
	{
		$sql = "select * from tbbuku where Stok='$stok'";
		$hasil = mysql_query($sql);
?>
<select name="stokbuku" id="stokbuku">
	<option value="0">--- Pilih Jumlah Stok ---</option>
	<?php while($gass = mysql_fetch_assoc($hasil)) { ?>
	<option value="<?php echo $gass['Stok']; ?>"><?php echo $gass['Stok']; ?></option>
	<?php } ?>
</select>
<?php
	}
?>