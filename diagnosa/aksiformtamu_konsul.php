<?php
error_reporting(0);
include "library/koneksi.php";

$nama = $_POST['nama'];
$kelamin = $_POST['kelamin'];
$alamat = $_POST['alamat'];
$pekerjaan =$_POST['pekerjaan'];
$username =$_POST['username'];
$password =$_POST['password'];
$NOIP = $_SERVER['REMOTE_ADDR'];

If ($nama==""&&$kelamin==""&&$alamat=""&&$pekerjaan="") {
echo"<script>alert('maaf anda harus mengisi kolom yang masih kosong atau belum terisi!!!!')</script>";
echo "<meta http-equiv='refresh' content='0; url=formtamu_konsul.php'>";
}else{

	
$q=mysql_query("insert into tamu values('','$username','$password','$nama','$kelamin','$alamat','$pekerjaan','$NOIP')")or die ("Gagal Masuk".mysql_error());
if ($q) {
			
			echo "<meta http-equiv='refresh' content='0; url=?page=konsul'>";
		} else {
			echo "<script>alert('Transaksi GAGAL...');</script>";
			echo "<meta http-equiv='refresh' content='0; url=?page=formtamu_konsul'>";
		}
		}
	

?>
