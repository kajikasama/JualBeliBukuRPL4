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
    $nama = $_SESSION['user'];
    $kodenya = "select * from tbuser where NamaLengkap='$nama'";
    $sql0 = mysql_query($kodenya);
    $data0 = mysql_fetch_assoc($sql0);
    $dapatkode = $data0["KodeUser"];
    // $sql0 = "select * from tbuser where NamaLengkap='$nama'";
    // $query0 = mysql_query($sql0);
    // $data0 = mysql_fetch_assoc($query);
    // $sql = "select max(KodeBuku) as maxbuku from tbbuku";
    // $query = mysql_query($sql);
    // $data = mysql_fetch_array($query);
    // $kdbarang = $data["maxbuku"];
    $JudulBuku = $_POST['JudulBuku'];
    // $NamaKasir = $_POST['NamaKasir'];
    $JumlahBuku = $_POST['JumlahBuku'];
    $TglTransaksi = $_POST['TglTransaksi'];

    $notransaksi = '';

    // JudulBuku
    // NamaKasir
    // StokBuku
    // TglTransaksi
    $sql2 = "select * from tbbuku where KodeBuku='$JudulBuku'";
    $query2 = mysql_query($sql2);
    $data2 = mysql_fetch_assoc($query2);
    $banyakstok =  $JumlahBuku;
    $setoknya =  $data2["Stok"];
    $hargastok =  $data2["Harga"];
    // $sisastok = $banyakstok - 1;    
    $TotalHarga = $hargastok * $banyakstok;

    $sql3 = "insert into tbjualbuku values ('','$notransaksi','$JudulBuku','$dapatkode','$JumlahBuku','$TotalHarga','$TglTransaksi','Belum')";
    $tambah = mysql_query($sql3);
    if($tambah)
    {
		echo
		"<script>
		alert('Data Berhasil Di Simpan');
		location.href='transaksi_data_kw2.php';	
        </script>";
        $sisastok = $setoknya - $JumlahBuku;
        $sql4 = "update tbbuku set
        Stok='$sisastok'
        where KodeBuku='$JudulBuku'";
        $updatenya = mysql_query($sql4);
        if($updatenya)
        {
            echo
            "<script>
            alert('Data Berhasil Di Ubah');
            location.href='transaksi_data_kw2.php';	
            </script>";
        }
        else {
            echo
            "<script>
            alert('Data Berhasil Di Ubah');	
            </script>";
        }
        // $sql4 = "update tbbuku set
	    // Stok='$TotalHarga'
        // where KodeBuku='$nama'";
        // $edit = mysql_query($sql4);
        // if($edit)
        // {
        //     echo
		//     "<script>
		//     alert('Data Berhasil Di Ubah');
		//     location.href='master.php#data_buku';	
		//     </script>";
        // }
        // else {
        //     echo
		//     "<script>
		//     alert('Data Gagal Di Simpan');
		//     </script>";
        // }
	}
	else
	{
		echo
		"<script>
		alert('Data Gagal Di Simpan');
		</script>";
    }
    


?>