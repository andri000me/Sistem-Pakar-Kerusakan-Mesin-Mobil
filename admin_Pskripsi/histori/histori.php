<?php

include "../config/koneksi.php";
include "../config/fungsi.php";
include "../config/class_paging.php";
echo"<h2><a  href='?page=histori'><i class='fa fa-list-alt'></i> Histori Konsultasi</a></h2><hr>";

$p      = new Paging;
$batas  = 10;
$posisi = $p->cariPosisi($batas);


$query= mysql_query("SELECT a.nama AS nama, b.nama_kerusakan AS kerusakan, c.tanggal AS tanggal
FROM tamu a, solusi b, menganalisa c, memiliki d
WHERE a.id_tamu = c.id_tamu
AND b.id_solusi = d.id_solusi
AND d.id_kd = c.id_kd order by c.id_ahd DESC  limit $posisi,$batas");
	   

?>
<form method="post" action="?page=caridata_histori"> 
<table><tr><td><input type='text' name='qcari'> <button class="btn btn-theme" type="submit" >Cari</button></td></tr></table>
</form>
<br><table class="table table-bordered table-striped table-condensed cf">
    <thead class="cf">
    <tr>
	<th>No</th>
	<th>Nama </th>
	<th>Kerusakan </th>
	<th>Tanggal Kunjung</th>
	</tr>
	</thead>
    <tbody>
<?php
$no=$posisi+1;;
while ($hasil=mysql_fetch_array($query)) {

echo "<tr>
	  <td>$no</td>
	  <td>$hasil[nama]</td>
	  <td>$hasil[kerusakan]</td>
	  <td>$hasil[tanggal]</td>
	  </tr>";
$no++;
}
echo'</tbody></table>';
	$jmldata = mysql_num_rows(mysql_query("SELECT * FROM menganalisa"));
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

echo "<div id=paging>Hal: $linkHalaman</div><br>";
?>

