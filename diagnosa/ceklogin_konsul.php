<?php
error_reporting(0);
include "library/koneksi.php";
$pass=$_POST['password'];

$login=mysql_query("SELECT * FROM tamu WHERE username='$_POST[username]' AND password='$pass' ");
$ketemu=mysql_num_rows($login);
$r=mysql_fetch_array($login);

// Apabila username dan password ditemukan
if ($ketemu > 0){
  session_start();
  ("namauser");
  ("passuser");
  ("leveluser");
  ("namalengkap");

  $_SESSION[namauser]     = $r[username];
  $_SESSION[passuser]     = $r[password];
  $_SESSION[leveluser]    = $r[level];
  $_SESSION[namalengkap]    = $r[username];
  
  echo "<meta http-equiv='refresh' content='0; url=?page=solving_konsul&idtanya=2'>";
}
else{
  echo "<link href=../config/adminstyle.css rel=stylesheet type=text/css>";
  echo "<center>LOGIN GAGAL! <br> 
        Username atau Password Anda tidak benar.<br>
        Atau account Anda sedang diblokir.<br>";
  echo "<a href='?page=konsul'><b>ULANGI LAGI</b></a></center>";
}
?>
