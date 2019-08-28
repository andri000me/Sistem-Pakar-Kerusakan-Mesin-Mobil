<?php
include "library/koneksi.php"; //memanggil file koneksi_db.php


echo"<h2><a  href='?page=histori'><i class='icon-list-alt'></i> Data Histori</a></h2><hr>";


?>
<br>
<table class="table table-bordered table-striped table-condensed cf">
<thead class="cf">
<tr><th>No</th>
	<th>Nama</th>
	<th>Tanggal Kunjung</th>
	<th>Aksi</th>
	</tr></thead><tbody>
 
<?php

$query1="SELECT a.nama AS nama, c.tanggal AS tanggal,c.id_tamu as id_ahd FROM tamu a, menganalisa c
WHERE a.id_tamu = c.id_tamu ";
 
 
if(isset($_POST['qcari'])){
  $qcari=$_POST['qcari'];
  $query1="SELECT a.nama AS nama, c.tanggal AS tanggal,c.id_ahd as id_ahd FROM tamu a, menganalisa c
WHERE a.id_tamu = c.id_tamu and  c.tanggal like '%$qcari%' ";
}
 
$result=mysql_query($query1) or die(mysql_error());
$no=1; //penomoran 
while($rows=mysql_fetch_object($result)){
      ?>
      <tr>
        <td><?php echo $no
        ?></td>
        <td><?php    echo $rows -> nama;?></td>
        <td><?php    echo $rows -> tanggal;?></td>
		
		<?php
 echo"</td>
	  <td><a href='?page=view_histori&id=$rows->id_ahd'>Lihat</a></td>
	  </tr>";
      
      
$no++;
}?>	
	</tbody>
    </table>  
	<button class="btn btn-theme" type="submit"   onclick='self.history.back()' title='Kembali ke '>Back</button>