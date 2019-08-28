<?php

include "admin_Pskripsi/config/koneksi.php";//memanggil file koneksi_db.php

echo"<h2><a  href='?page=view_histori'><i class='icon-book'></i> Histori Konsultasi</a></h2><hr>";





$id=$_GET['id'];
if ($id=="") {
echo "<script>alert('Pilih dulu data yang akan dilihat');</script>";
echo "<meta http-equiv='refresh' content='0; url=?page=histori'>";
} else {

$query= mysql_query("select a.nama as nama, a.kelamin as kelamin, a.alamat as alamat, 
	   a.pekerjaan as pekerjaan, b.nama_kerusakan as nama_kerusakan,  b.penyebab as penyebab, b.solusi as solusi, b.perawatan as perawatan,
	   c.tanggal as tanggal, c.id_ahd as id_ahd
	   from tamu a, solusi b, menganalisa c , memiliki d where a.id_tamu = c.id_tamu and b.id_solusi=d.id_solusi and d.id_kd=c.id_kd  order by c.id_ahd desc limit 1");
	  
?>

<form method='post' action='diagnosa/cetak.php'>
<br><table class="table table-bordered table-striped table-condensed cf">
    <thead class="cf">
    
    <tbody>
<?php


while ($hasil=mysql_fetch_array($query)) {

echo "<tr>
	  <th>Tanggal </th>
	  <td>$hasil[tanggal]</td>
	  </tr><tr>
	  <th>Nama </th>
	  <td>$hasil[nama]</td>
	  </tr>
	  <tr>
	  <th>Jenis Kelamin</th>
	  <td>$hasil[kelamin]</td>
	  </tr>
	  <tr>
	  <th>Alamat </th>
	  <td>$hasil[alamat]</td>
	  </tr>
	  <tr>
	  <th>Pekerjaan </th>
	  <td>$hasil[pekerjaan]</td>
	  </tr>
	  <tr>
	  <th>Nama Kerusakan</th>
	  <td>$hasil[nama_kerusakan]</td>
	  </tr>
	  <tr>
	  <th>Penyebab </th>
	  <td>$hasil[penyebab]</td>
	  </tr>
	  <tr>
	  <tr>
	  <th>Solusi </th>
	  <td>$hasil[solusi]</td>
	  </tr>
	  <tr>
	  <th>Perawatan </th>
	  <td>$hasil[perawatan]</td>
	  </tr>
	  <td>
	  <button class='btn btn-theme' type='submit'   onclick='self.history.back()' title='Kembali ke '>Back</button>
	  </td>
	  <td>
	  <input type='hidden' name='id' value='$id'>
	  <button class='btn btn-theme' type='submit'>Print</button>
	  </td></tr>";

}
echo'
</thead> </tbody></table></form>';
	
}

?>