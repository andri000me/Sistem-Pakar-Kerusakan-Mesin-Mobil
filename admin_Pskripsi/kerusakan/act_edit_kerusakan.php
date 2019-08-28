<?php
include "../config/koneksi.php"; //memanggil file koneksi_db.php
include "../config/config.php"; //memanggil file fungsi.php
include "../config/fungsi.php"; //memanggil file fungsi.php

$id  =$_POST['id'];

$nama_kerusakan	= isset($_POST['nama_kerusakan']) ? $_POST['nama_kerusakan'] : "";
$penyebab		= isset($_POST['penyebab']) ? $_POST['penyebab'] : "";
$solusi			= isset($_POST['solusi']) ? $_POST['solusi'] : "";
$perawatan			= isset($_POST['perawatan']) ? $_POST['perawatan'] : "";

if ($id=="") {
echo "<script>alert('Pilih dulu data yang akan di-update');</script>";
echo "<meta http-equiv='refresh' content='0; url=?page=kerusakan'>";
} else {

If ($nama_kerusakan==""||$penyebab==""||$solusi==""||$perawatan=="") {
Echo "Pengisian form belum benar. Ulangi lagi";
echo "<meta http-equiv='refresh' content='0; url=?page=edit_kerusakan&id=$id'>";
} else {
$query = mysql_query("UPDATE solusi SET  nama_kerusakan='$nama_kerusakan', penyebab='$penyebab', solusi='$solusi', perawatan='$perawatan'  WHERE id_solusi='$id'");

If ($query) {
Echo  "<script>alert('Data Anda Berhasil di Update ');</script>";
Echo "<meta http-equiv='refresh' content='0; url=?page=kerusakan'>";
} else {
Echo "Data anda gagal diupdate. Ulangi sekali lagi";
echo "<meta http-equiv='refresh' content='0; url=?page=edit_kerusakan&id=$id'>";
}
}
}

?>
