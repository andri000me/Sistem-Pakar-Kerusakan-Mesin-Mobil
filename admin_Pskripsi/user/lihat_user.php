<?php
error_reporting(0);
include "../config/koneksi.php"; //memanggil file koneksi_db.php
include "../config/config.php"; //memanggil file fungsi.php
echo"<h2><a  href='?page=user'><i class='fa fa-list-alt'></i> Admin </a></h2><hr>";


$query=mysql_query("SELECT * FROM admin ORDER BY id_admin");
?>
<br>
<table class="table table-bordered table-striped table-condensed cf">
<thead class="cf">
<tr><th>No</th><th>Nama</th><th colspan='2' align='center'>Action</th></tr>
</thead>
<tbody>
<?php
$no=0;
while ($hasil=mysql_fetch_array($query)) {
$no++;
echo "<tr><td>$no</td>
      <td>$hasil[username]</td>

	  <td><a href='?page=edit_user&id=$hasil[id_admin]'> <i class='fa fa-edit'></i></a></td>
	  <td><a href='?page=act_hapus_user&id=$hasil[id_admin]' onclick='return confirm(\"Anda yakin ingin menghapus data ini ?\")'> <i class='fa fa-trash-o'></i></a></td></tr>";
}
?>
</tbody>
</table>
