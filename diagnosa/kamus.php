<?php
error_reporting(0);
include "admin_Pskripsi/config/koneksi.php"; //memanggil file koneksi_db.php
include "admin_Pskripsi/config/fungsi.php";
include "admin_Pskripsi/config/class_paging.php";
echo"<h2><a  href=''><i class='icon-book'></i> Data Kamus</a></h2><hr>";


$p      = new Paging;
$batas  = 10;
$posisi = $p->cariPosisi($batas);


$query=mysql_query("SELECT * from kamus order by id_kamus  LIMIT $posisi,$batas");
?>


<br><table class="table table-bordered table-striped table-condensed cf">
    <thead class="cf">
    <tr>
	<th>No</th>
	<th>Nama </th>
	<th>Aksi</a></th>
	</tr>
	</thead>
    <tbody>
<?php
$no=$posisi+1;;
while ($hasil=mysql_fetch_array($query)) {

echo "<tr>
	  <td>$no</td>
	  <td>$hasil[nama]</td>
	  <td><a href='?page=view_vkamus&id=$hasil[id_kamus]'>Lihat</a></td>
	  </tr>";
$no++;
}
echo' </tbody></table>';
	$jmldata = mysql_num_rows(mysql_query("SELECT * FROM kamus"));
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

echo "<div id=paging>Hal: $linkHalaman</div><br>";


?>
