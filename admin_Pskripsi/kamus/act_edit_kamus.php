<?php
include "../config/koneksi.php"; //memanggil file koneksi_db.php
include "../config/config.php"; //memanggil file fungsi.php
include "../config/fungsi.php"; //memanggil file fungsi.php
include "../config/fungsi_thumb.php";


$id          = $_POST['idh'];
$nama	= ($_POST['nama']) ;
$ket		= ($_POST['ket']) ;

$lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(1,99);
  $nama_file_unik = $acak.$nama_file; 

 

 // Apabila gambar tidak diganti
  if (empty($lokasi_file)){
    $qt= mysql_query("UPDATE kamus SET nama      = '$nama',
								  ket  = '$ket'  
                             WHERE id_kamus  = '$id'");
  }
  else{
    UploadImage($nama_file_unik);
     $qt = mysql_query("UPDATE kamus SET nama      = '$nama',
								  gambar      = '$nama_file_unik',
									ket  = '$ket'
                             WHERE id_kamus   = '$id'");
  
		if ($qt) {
			echo "<script>alert('Proses BERHASIL...');</script>";
			echo "<meta http-equiv='refresh' content='0; url=?page=kamus'>";
		} else {
			echo "<script>alert('Proses GAGAL...');</script>";
			echo "<meta http-equiv='refresh' content='0; url=?page=kamus'>";
		}
		}
	
?>
