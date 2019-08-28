<?php
include "../config/koneksi.php"; //memanggil file koneksi_db.php


echo"<h2><a  href='?page=histori'><i class='icon-list-alt'></i> Data Histori</a></h2><hr>";


?>
<br>
<table class="table table-bordered table-striped table-condensed cf">
<thead class="cf">
<tr><th>No</th>
	<th>Nama</th>
	<th>Kerusakan</th>
	<th>Tanggal Kunjung</th>
	</tr></thead><tbody>
 
<?php

$query1="SELECT a.nama AS nama,b.nama_kerusakan as kerusakan, c.tanggal AS tanggal FROM tamu a,solusi b, menganalisa c, memiliki d
WHERE a.id_tamu = c.id_tamu and b.id_solusi=d.id_solusi  and d.id_kd=c.id_kd  ";
 
 
if(isset($_POST['qcari'])){
  $qcari=$_POST['qcari'];
  $query1="SELECT a.nama AS nama,b.nama_kerusakan as kerusakan, c.tanggal AS tanggal FROM tamu a,solusi b, menganalisa c, memiliki d
WHERE a.id_tamu = c.id_tamu and b.id_solusi=d.id_solusi  and d.id_kd=c.id_kd and c.tanggal like '%$qcari%'   ";
}
 
$result=mysql_query($query1) or die(mysql_error());
$no=1; //penomoran 
while($rows=mysql_fetch_object($result)){
      ?>
      <tr>
        <td><?php echo $no
        ?></td>
        <td><?php    echo $rows -> nama;?></td>
		<td><?php    echo $rows -> kerusakan;?></td>
        <td><?php    echo $rows -> tanggal;?></td></tr>
		
		<?php
 
      
      
$no++;
}?>	
	</tbody>
    </table>  
	<button class="btn btn-theme" type="submit"   onclick='self.history.back()' title='Kembali ke '>Back</button>