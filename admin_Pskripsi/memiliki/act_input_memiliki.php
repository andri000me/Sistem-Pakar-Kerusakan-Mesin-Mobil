<?php
include "../config/koneksi.php";
include "../config/fungsi_thumb.php";


$id_kd	= ($_POST['id_kd']) ;
$id_solusi		= ($_POST['id_solusi']) ;


    $qt= mysql_query("INSERT INTO memiliki 
                            VALUES('$id_kd',
                                   '$id_solusi')");
 
		if ($qt) {
			echo "<script>alert('Proses BERHASIL...');</script>";
			echo "<meta http-equiv='refresh' content='0; url=?page=memiliki'>";
		} else {
			echo "<script>alert('Proses GAGAL...');</script>";
			echo "<meta http-equiv='refresh' content='0; url=?page=memiliki'>";
		}
		
	

?>
