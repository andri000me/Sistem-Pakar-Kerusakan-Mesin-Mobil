<?php
include "../config/koneksi.php"; //memanggil file koneksi_db.php
include "../config/config.php"; //memanggil file fungsi.php
include "../config/fungsi.php"; //memanggil file fungsi.php


$user = $_POST['user'];
$pass = $_POST['pass'];


If ($user==""&&$pass=="") {
Echo "Pengisian form belum benar. Ulangi lagi";
echo "<meta http-equiv='refresh' content='0; url=?page=user'>";
} else {
$query = mysql_query("INSERT INTO admin VALUES ('', '$user', '$pass')");

If ($query) {

Echo "<meta http-equiv='refresh' content='0; url=?page=user'>";
} else {
Echo "Data anda gagal dimasukkan. Ulangi sekali lagi";
echo "<meta http-equiv='refresh' content='0; url=?page=user'>";
}
}
?>
