<?php
  include "koneksi.php";
  if(isset($_POST["KodeBuku"]) && !empty($_POST["KodeBuku"])){
    $sql = "select * from tbbuku where KodeBuku = ".$_POST["KodeBuku"]."";
    $query = mysql_query($sql);
    $baris = mysql_num_rows($query);
    if($baris > 0)
    {
      echo'<p class="deep-purple-text">Jumlah Stok</p>';
    // echo'<i class="material-icons prefix deep-purple-text">view_list</i>';
      echo'<select class="browser-default validate" name="JumlahBuku" id="stok" required>';
        while($data = mysql_fetch_assoc($query)){ 
          if($data['Stok'] == 0 || empty($data['Stok']))
          {
            echo '<option value="">- Stok Habis -</option>';
          }
          else
          {
            echo '<option value="" selected>- Pilih Jumlah Stok Buku -</option>';
              for($i = 1 ; $i<= $data['Stok'];$i++)
            {
             echo "<option value='$i'>$i</option>";
            }
          }
          echo'</select>';
          echo'<label for="first_name4" class="deep-purple-text">Jumlah Buku</label>';
          echo"<input readonly type='text' name='TotalBayar' value=".$data["Harga"]." />";
        }
        
        // echo'<input type="text" name="NamaKasir" readonly value=""';
    }
else {
echo '<option value="">Stok Habis </option>';
    }
}





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