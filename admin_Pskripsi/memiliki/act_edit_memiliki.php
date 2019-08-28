<?php
include "../config/koneksi.php"; //memanggil file koneksi_db.php
include "../config/config.php"; //memanggil file fungsi.php
include "../config/fungsi.php"; //memanggil file fungsi.php
include "../config/fungsi_thumb.php";


$id          = $_POST['id'];
$id_kd	= ($_POST['id_kd']) ;
$id_solusi		= ($_POST['id_solusi']) ;


    $qt= mysql_query("UPDATE memiliki SET id_kd      = '$id_kd',
								  id_solusi  = '$id_solusi'  
                             WHERE id_kd  = '$id'");
 
		if ($qt) {
			echo "<script>alert('Proses BERHASIL...');</script>";
			echo "<meta http-equiv='refresh' content='0; url=?page=memiliki'>";
		} else {
			echo "<script>alert('Proses GAGAL...');</script>";
			echo "<meta http-equiv='refresh' content='0; url=?page=memiliki'>";
		}
		}
	
?>
