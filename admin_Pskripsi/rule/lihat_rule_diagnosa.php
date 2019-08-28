<?php
error_reporting(0);
include "../config/koneksi.php"; //memanggil file koneksi_db.php
include "../config/fungsi.php";
include "../config/class_paging.php";
echo"<h2><a  href='?page=rule_diagnosa'><i class='fa fa-list-alt'></i> Data Rule Diagnosa</a></h2><hr>";


$p      = new Paging;
$batas  = 10;
$posisi = $p->cariPosisi($batas);


$query=mysql_query("SELECT * from konsul_diagnosa order by id_kd  LIMIT $posisi,$batas");
?>
<form method="post" action="?page=input_rule_diagnosa">
<br>
<br><table class="table table-bordered table-striped table-condensed cf">
    <thead class="cf">
    <tr>
	<th>No</th>
	<th>Id KD</th>
	<th>Rule Gejala dan Kerusakan</th>
	<th>Bila Benar</th>
	<th>Bila Salah </th>
	<th>Mulai</th>
	<th>Selesai </th>
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
	  <td>$hasil[gejala_dan_kerusakan]</td>
	  <td>$hasil[bila_benar]</td>
	  <td>$hasil[bila_salah]</td>
	  <td>$hasil[mulai]</td>
	  <td>$hasil[selesai]</td>
	  <td><a href='?page=edit_rule_diagnosa&id=$hasil[id_kd]'> <i class='fa fa-edit'></i></a></td>
	  <td><a href='?page=hapus_rule_diagnosa&id=$hasil[id_kd]' onclick='return confirm(\"Anda yakin ingin menghapus data ini ?\")'> <i class='fa fa-trash-o'></i></a></td>
	  </tr>";
$no++;
}
echo' <thead class="cf">
<tr><th colspan="9" align="center">
<button class="btn btn-theme" type="submit" >Tambah</button>
</th></tr>
</thead></tbody></table>
</form>';
	$jmldata = mysql_num_rows(mysql_query("SELECT * FROM konsul_diagnosa"));
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

echo "<div id=paging>Hal: $linkHalaman</div><br>";

?>
