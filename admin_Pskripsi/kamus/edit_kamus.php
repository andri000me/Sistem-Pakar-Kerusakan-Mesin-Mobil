<?php
error_reporting(0);
include "../config/koneksi.php";
echo "<h2><a  href='?page=edit_kerusakan'><i class='fa fa-edit'></i> Edit Kerusakan</a></h2><hr>";

$id=$_GET['id'];
if ($id=="") {
echo "<script>alert('Pilih dulu data yang akan di-update');</script>";
echo "<meta http-equiv='refresh' content='0; url=?page=kamus'>";
} else {

$query=mysql_query("SELECT * FROM kamus WHERE id_kamus=$id");
$hasil=mysql_fetch_array($query);
$id  =$hasil['id_kamus'];
$nama=$hasil['nama'];
$gambar =$hasil['gambar'];
$keterangan=$hasil['ket'];


?>

<form method="post" action="?page=act_edit_kamus" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $id; ?>">
<br>
<table class="table table-bordered table-striped table-condensed cf">
<thead class="cf">
<tr><th colspan="2">Edit kamus : <?php echo $nama; ?></th>
</tr></thead>
<tbody>
<tr><td>Nama </td><td><input type="text" name="nama" value="<?php echo $nama; ?>"></td></tr>
<tr><td>Upload Gambar</td><td><input type="file" name="fupload" size="80">Nama File : <?php echo $gambar;?>, Kosongkan bila 
		File tidak diubah.</td>
	<input type="hidden" name="idh" value="<?php echo $id;?>"></tr>
<tr><td>Keterangan</td><td><textarea name="ket"><?php echo $keterangan; ?></textarea></td></tr>
<tr><th colspan="2" align="center" >
<input type="submit" value="Simpan">
</th></tr>
</tbody>
</table>
</form>
<?php
}
?>
