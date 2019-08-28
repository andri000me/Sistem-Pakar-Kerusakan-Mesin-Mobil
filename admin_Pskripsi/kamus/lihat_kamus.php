<?php
error_reporting(0);
include "../config/koneksi.php"; //memanggil file koneksi_db.php
include "../config/fungsi.php";
include "../config/class_paging.php";
echo"<h2><a  href='?page=kamus'><i class='fa fa-list-alt'></i> Data Kamus</a></h2><hr>";


$p      = new Paging;
$batas  = 2;
$posisi = $p->cariPosisi($batas);


$query=mysql_query("SELECT * from kamus order by id_kamus desc LIMIT $posisi,$batas");

?>

<form method="post" action="?page=input_kamus">
<br><table class="table table-bordered table-striped table-condensed cf">
    <thead class="cf">
    <tr>
	<th>No</th>
	<th>Nama </th>
	<th>Gambar</th>
	<th>Keterangan </th>
	<th colspan='2'>Action</th>
	</tr>
	</thead>
    <tbody>
<?php
$no=$posisi+1;;
while ($hasil=mysql_fetch_array($query)) {

echo "<tr>
	  <td>$no</td>
	  <td>$hasil[nama]</td>
	  <td><img src='../gambar/$hasil[gambar]'></td>
	  <td>$hasil[ket]</td>
	  <td><a href='?page=edit_kamus&id=$hasil[id_kamus]'> <i class='fa fa-edit'></i></a></td>
	  <td><a href='?page=hapus_kamus&id=$hasil[id_kamus]' onclick='return confirm(\"Anda yakin ingin menghapus data ini ?\")'> <i class='fa fa-trash-o'></i></a></td>
	  </tr>";
$no++;
}
echo'<thead class="cf">
<tr><th colspan="7" align="center">
<button class="btn btn-theme" type="submit" >Tambah</button>
</th></tr>
</thead> </tbody></table>';
	$jmldata = mysql_num_rows(mysql_query("SELECT * FROM kamus"));
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

echo "<div id=paging>Hal: $linkHalaman</div><br>";


?>
