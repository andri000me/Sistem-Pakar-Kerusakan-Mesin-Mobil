<?php
include "../config/koneksi.php"; //memanggil file koneksi_db.php
include "../config/config.php"; //memanggil file fungsi.php
include "../config/fungsi.php"; //memanggil file fungsi.php

$id	  = $_POST['id'];
$user = $_POST['user'];
$pass = $_POST['pass'];

if ($id=="") {
echo "<script>alert('Pilih dulu data yang akan di-update');</script>";
echo "<meta http-equiv='refresh' content='0; url=?page=user'>";
} else {

If ($user==""&&$pass=="") {
Echo "Pengisian form belum benar. Ulangi lagi";
echo "<meta http-equiv='refresh' content='0; url=?page=edit_user&id=$id'>";
} else {
$query = mysql_query("UPDATE admin SET username='$user', password='$pass' WHERE id_admin='$id'");

If ($query) {
Echo  "<script>alert('Data Anda Berhasil di Update ');</script>";
Echo "<meta http-equiv='refresh' content='0; url=?page=user'>";
} else {
Echo "Data anda gagal diupdate. Ulangi sekali lagi";
echo "<meta http-equiv='refresh' content='0; url=?page=edit_user&id=$id'>";
}
}
}

?>
