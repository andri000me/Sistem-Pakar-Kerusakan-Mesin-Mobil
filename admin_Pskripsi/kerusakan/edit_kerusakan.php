<?php
error_reporting(0);
include "../config/koneksi.php";
echo "<h2><a  href='?page=edit_kerusakan'><i class='fa fa-edit'></i> Edit Kerusakan</a></h2><hr>";

$id=$_GET['id'];
if ($id=="") {
echo "<script>alert('Pilih dulu data yang akan di-update');</script>";
echo "<meta http-equiv='refresh' content='0; url=?page=kerusakan'>";
} else {

$query=mysql_query("SELECT * FROM solusi WHERE id_solusi=$id");
$hasil=mysql_fetch_array($query);
$id  =$hasil['id_solusi'];

$nama_kerusakan=$hasil['nama_kerusakan'];
$penyebab =$hasil['penyebab'];
$solusi=$hasil['solusi'];
$perawatan=$hasil['perawatan'];


?>

<form method="post" action="?page=act_edit_kerusakan">
<input type="hidden" name="id" value="<?php echo $id; ?>">
<br>
<table class="table table-bordered table-striped table-condensed cf">
<thead class="cf">
<tr><th colspan="2">Edit Solusi : <?php echo $nama_kerusakan; ?></th>
</tr></thead>
<tbody>
<tr><td>Nama Kerusakan</td><td><input type="text" name="nama_kerusakan" value="<?php echo $nama_kerusakan; ?>"></td></tr>
<tr><td>Penyebab</td><td><textarea name="penyebab"><?php echo $penyebab; ?></textarea></td></tr>
<tr><td>Solusi</td><td><textarea name="solusi"><?php echo $solusi; ?></textarea></td></tr>
<tr><td>perawatan</td><td><textarea name="perawatan"><?php echo $perawatan; ?></textarea></td></tr>
<tr><th colspan="2" align="center" >
<input type="submit" value="Simpan">
</th></tr>
</tbody>
</table>
</form>
<?php
}
?>
