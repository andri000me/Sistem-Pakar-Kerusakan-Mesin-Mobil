<?php
error_reporting(0);
include "../config/koneksi.php"; //memanggil file koneksi_db.php
include "../config/fungsi.php";
include "../config/class_paging.php";
echo"<h2><a  href='?page=kerusakan'><i class='fa fa-list-alt'></i> Data Kerusakan</a></h2><hr>";


$p      = new Paging;
$batas  = 10;
$posisi = $p->cariPosisi($batas);


$query=mysql_query("SELECT * from solusi order by id_solusi desc LIMIT $posisi,$batas");
?>

<form method="post" action="?page=input_kerusakan">
<br><table class="table table-bordered table-striped table-condensed cf">
    <thead class="cf">
    <tr>
	<th>No</th>
	<th>Nama Kerusakan</th>
	<th>Penyebab</th>
	<th>Solusi </th>
  <th>Perawatan </th>
	<th colspan='2'>Action</th>
	</tr>
	</thead>
    <tbody>
<?php
$no=$posisi+1;;
while ($hasil=mysql_fetch_array($query)) {

echo "<tr>
	  <td>$no</td>
	  <td>$hasil[nama_kerusakan]</td>
	  <td>$hasil[penyebab]</td>
	  <td>$hasil[solusi]</td>
	  <td>$hasil[perawatan]</td>
	  <td><a href='?page=edit_kerusakan&id=$hasil[id_solusi]'> <i class='fa fa-edit'></i></a></td>
	  <td><a href='?page=hapus_kerusakan&id=$hasil[id_solusi]' onclick='return confirm(\"Anda yakin ingin menghapus data ini ?\")'> <i class='fa fa-trash-o'></i></a></td>
	  </tr>";
$no++;
}
echo'<thead class="cf">
<tr><th colspan="7" align="center">
<button class="btn btn-theme" type="submit" >Tambah</button>
</th></tr>
</thead> </tbody></table>';
	$jmldata = mysql_num_rows(mysql_query("SELECT * FROM solusi"));
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

echo "<div id=paging>Hal: $linkHalaman</div><br>";


?>
