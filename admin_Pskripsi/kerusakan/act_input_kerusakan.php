<?php
include "../config/koneksi.php";


$nama_kerusakan	= isset($_POST['nama_kerusakan']) ? $_POST['nama_kerusakan'] : "";
$penyebab		= isset($_POST['penyebab']) ? $_POST['penyebab'] : "";
$solusi			= isset($_POST['solusi']) ? $_POST['solusi'] : "";
$perawatan			= isset($_POST['perawatan']) ? $_POST['perawatan'] : "";


if ($nama_kerusakan==""||$penyebab==""||$solusi==""||$perawatan==""){
echo "<script>alert('Isilah form isian dengan lengkap')</script>";
echo "<meta http-equiv='refresh' content='0; url=?page=input_kerusakan'>";
} else {
$qt	= mysql_query("INSERT INTO solusi VALUES ('', '$nama_kerusakan', '$penyebab', '$solusi','$perawatan')") or die ("Gagal Masuk".mysql_error());;

		if ($qt) {
			echo "<script>alert('Proses BERHASIL...');</script>";
			echo "<meta http-equiv='refresh' content='0; url=?page=kerusakan'>";
		} else {
			echo "<script>alert('Proses GAGAL...');</script>";
			echo "<meta http-equiv='refresh' content='0; url=?page=kerusakan'>";
		}
		}
	

?>
