<?php
error_reporting(0);
include "../config/koneksi.php"; //memanggil file koneksi_db.php
include "../config/fungsi.php";
include "../config/class_paging.php";
echo"<h2><a  href='?page=memiliki'><i class='fa fa-list-alt'></i> Data Relasi</a></h2><hr>";


$p      = new Paging;
$batas  = 10;
$posisi = $p->cariPosisi($batas);


$query=mysql_query("SELECT * from memiliki order by id_kd desc LIMIT $posisi,$batas");

?>

<form method="post" action="?page=input_memiliki">
<br><table class="table table-bordered table-striped table-condensed cf">
    <thead class="cf">
    <tr>
	<th>No</th>
	<th>Id Kd </th>
	<th>Id_Solusi</th>
	<th colspan='2'>Action</th>
	</tr>
	</thead>
    <tbody>
<?php
$no=$posisi+1;;
while ($hasil=mysql_fetch_array($query)) {

echo "<tr>
	  <td>$no</td>
	  <td>$hasil[id_kd]</td>
	  <td>$hasil[id_solusi]</td>
	  <td><a href='?page=edit_memiliki&id=$hasil[id_kd]'> <i class='fa fa-edit'></i></a></td>
	  <td><a href='?page=hapus_memiliki&id=$hasil[id_kd]' onclick='return confirm(\"Anda yakin ingin menghapus data ini ?\")'> <i class='fa fa-trash-o'></i></a></td>
	  </tr>";
$no++;
}
echo'<thead class="cf">
<tr><th colspan="7" align="center">
<button class="btn btn-theme" type="submit" >Tambah</button>
</th></tr>
</thead> </tbody></table>';
	$jmldata = mysql_num_rows(mysql_query("SELECT * FROM memiliki"));
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

echo "<div id=paging>Hal: $linkHalaman</div><br>";



?>
