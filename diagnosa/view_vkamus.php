<?php
error_reporting(0);
include "admin_Pskripsi/config/koneksi.php";//memanggil file koneksi_db.php

echo"<h2><a  href='?page=kamus'><i class='icon-book'></i> Data Kamus</a></h2><hr>";





$id=$_GET['id'];
if ($id=="") {
echo "<script>alert('Pilih dulu data yang akan di-update');</script>";
echo "<meta http-equiv='refresh' content='0; url=?page=kamus'>";
} else {

$query=mysql_query("SELECT * FROM kamus WHERE id_kamus=$id");

?>

<br><table class="table table-bordered table-striped table-condensed cf">
    <thead class="cf">

    <tbody>
<?php

while ($hasil=mysql_fetch_array($query)) {

echo "<tr>
	  <th>Nama </th>
	  <td>$hasil[nama]</td>
	  </tr>
	  <tr>
	  <th>Gambar</th>
	  <td><img src='admin_Pskripsi/gambar/$hasil[gambar]'></td>
	  </tr>
	  <tr>
	  <th>Keterangan </th>
	  <td>$hasil[ket]</td>
	  </tr>
	  <tr>
	  <td>
	  <button class='btn btn-theme' type='submit'   onclick='self.history.back()' title='Kembali ke Menu Kamus'>Back</button>
	  </td></tr>";

}
echo'
</thead> </tbody></table>';


}

?>
