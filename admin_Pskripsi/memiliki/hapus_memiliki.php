<?php
include "../config/koneksi.php"; //memanggil file koneksi_db.php
include "../config/config.php"; //memanggil file fungsi.php
include "../config/fungsi.php"; //memanggil file fungsi.php
$id=$_GET['id'];
if ($id=="") {
echo "<script>alert('Pilih dulu data yang akan di-hapus');</script>";
echo "<meta http-equiv='refresh' content='0; url=?page=memiliki'>";
} else {

$query = mysql_query("DELETE FROM memiliki WHERE id_kd='$id'");

If ($query) {
Echo "<script>alert('Data berhasil dihapus')</script>";
echo "<meta http-equiv='refresh' content='0; url=?page=memiliki'>";
} else {
Echo "Data anda gagal dihapus. Ulangi sekali lagi";
echo "<meta http-equiv='refresh' content='0; url=?page=memiliki'>";
}
}
?>
