<?php
error_reporting(0);
include "../config/koneksi.php";
echo "<h2><a  href='?page=edit_memiliki'><i class='fa fa-edit'></i> Edit Relasi Memiliki</a></h2><hr>";

$id=$_GET['id'];
if ($id=="") {
echo "<script>alert('Pilih dulu data yang akan di-update');</script>";
echo "<meta http-equiv='refresh' content='0; url=?page=memiliki'>";
} else {

$query=mysql_query("SELECT * FROM memilii WHERE id_kd=$id");
$hasil=mysql_fetch_array($query);

$id_kd=$hasil['id_kd'];
$id_solusi =$hasil['id_solusi'];



?>

<form method="post" action="?page=act_edit_memiliki" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $id; ?>">
<br>
<table class="table table-bordered table-striped table-condensed cf">
<thead class="cf">
<tr><th colspan="2">Edit Relasi Memiliki </th>
</tr></thead>
<tbody>
<tr><td>Id Kd </td><td><input type="text" name="id_kd" value="<?php echo $id_kd; ?>"></td></tr>
<tr><td>Id Solusi </td><td><input type="text" name="id_solusi" value="<?php echo $id_solusi; ?>"></td></tr>
<tr><th colspan="2" align="center" >
<input type="submit" value="Simpan">
</th></tr>
</tbody>
</table>
</form>
<?php
}
?>
