<?php
error_reporting(0);
include "../config/koneksi.php";
echo "<h2><a  href='?page=edit_user'><i class='fa fa-edit'></i> Edit Admin</a></h2><hr>";


$id=$_GET['id'];
if ($id=="") {
echo "<script>alert('Pilih dulu data yang akan di-update');</script>";
echo "<meta http-equiv='refresh' content='0; url=?page=user'>";
} else {

$query=mysql_query("SELECT * FROM admin WHERE id_admin=$id");
$hasil=mysql_fetch_array($query);
$id  =$hasil['id_admin'];
$user=$hasil['username'];
$pass=$hasil['password'];

?>

<form method="post" action="?page=act_edit_user">
<input type="hidden" name="id" value="<?php echo $id; ?>">
<table class="table table-bordered table-striped table-condensed cf">
<thead class="cf">
<tr><th colspan="2">Edit Admin : <?php echo $user; ?></th></tr>
</thead>
<tbody>
<tr><td class="pinggir-data">Username</td><td class="pinggir-data"><input type="text" name="user" value="<?php echo $user; ?>"></td></tr>
<tr><td class="pinggir-data">Password</td><td class="pinggir-data"><input type="password" name="pass" value="<?php echo $pass; ?>"></td></tr>
<tr><th colspan="2" align="center" >
<input type="submit" value="Simpan">
</th></tr>
</tbody>
</table>
</form>
<?php
}
?>
