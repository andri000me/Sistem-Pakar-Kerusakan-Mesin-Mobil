<?php
error_reporting(0);
include "../config/koneksi.php";
echo "<h2><a  href='?page=edit_kerusakan'><i class='fa fa-edit'></i> Edit Kerusakan</a></h2><hr>";

$id=$_GET['id'];
if ($id=="") {
echo "<script>alert('Pilih dulu data yang akan di-update');</script>";
echo "<meta http-equiv='refresh' content='0; url=?page=rule_diagnosa'>";
} else {

$query=mysql_query("SELECT * FROM konsul_diagnosa WHERE id_kd=$id");
$hasil=mysql_fetch_array($query);

$id=$hasil['id_kd'];
$gk=$hasil['gejala_dan_kerusakan'];
$bila_benar =$hasil['bila_benar'];
$bila_salah=$hasil['bila_salah'];
$mulai =$hasil['mulai'];
$selesai=$hasil['selesai'];


?>

<form method="post" action="?page=act_edit_rule_diagnosa">
<input type="hidden" name="id" value="<?php echo $id; ?>">
<br>
<table class="table table-bordered table-striped table-condensed cf">
<thead class="cf">
<tr><th colspan="2">Edit Rule Diagnosa </th>
</tr></thead>
<tbody>
<tr><td>Pertanyaan Konsultasi</td><td><input type="text" name="gk" value="<?php echo $gk; ?>"></td></tr>
<tr><td>Bila Benar</td><td><input type="text" name="bila_benar" value="<?php echo $bila_benar; ?>"></td></tr>
<tr><td>Bila Salah</td><td><input type="text" name="bila_salah" value="<?php echo $bila_salah; ?>"></td></tr>
<tr><td>Mulai</td><td><input type="text" name="mulai" value="<?php echo $mulai; ?>"></td></tr>
<tr><td>Selesai</td><td><input type="text" name="selesai" value="<?php echo $selesai; ?>"></td></tr>
<tr><th colspan="2" align="center" >
<input type="submit" value="Simpan">
</th></tr>
</tbody>
</table>
</form>
<?php
}
?>
