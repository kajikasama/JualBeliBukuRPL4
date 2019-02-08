<?php
  include "koneksi.php";
    $sql = "select * from tbbuku where KodeBuku = ".$_GET["KodeBuku"]."";
    $query = mysql_query($sql);
    $baris = mysql_num_rows($query);
    if($baris > 0)
    {
      echo'<select name="JumlahBuku" id="stok2" required>';
        while($data = mysql_fetch_assoc($query)){ 
          if($data['Stok'] == 0 || empty($data['Stok']))
          {
            echo"<br><input id='totalbayar' type='text' name='TotalBayar' value='000' /></td>";
          }
          else
          {
            echo '<option value="" selected>- Pilih Jumlah Stok Buku -</option>';
              for($i = 1 ; $i<= $data['Stok'];$i++)
            {
              
             echo "<option value='$i'>$i</option>";
            }
            echo'</select>';
            echo"<br><td><input id='totalbayar' type='text' name='TotalBayar' value=".$data["Harga"]." /></td>";
          }
          
        }
        
        // echo'<input type="text" name="NamaKasir" readonly value=""';
    }
// echo '<option value="">Stok Habis </option>';





// if(isset($_POST["KodeBukus"]) && !empty($_POST["KodeBukus"])){
// $sql = "select * from tbbuku where KodeBuku = ".$_POST["KodeBuku"]."";
// $query = mysql_query($sql);
// $baris = mysql_num_rows($query);
// if($baris > 0)
// {
// while($data = mysql_fetch_assoc($query)){
// echo "<input value=".$data[" Harga"]." type='text' id='harga' name='TotalBayar'>";

// }
// }
// else {
// echo "<input value='0000' type='text' id='harga' name='TotalBayar'>";
// }
// }
?>