<?php
error_reporting(0);
// Define relative path from this script to mPDF
$nama_dokumen='Hasil diagnosa kerusakan'; //Beri nama file PDF hasil.
define('_MPDF_PATH','../MPDF57/');
include(_MPDF_PATH . "mpdf.php");
$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document
//Beginning Buffer to save PHP variables and HTML tags
ob_start();
?>
<!--sekarang Tinggal Codeing seperti biasanya. HTML, CSS, PHP tidak
masalah.-->
<!--CONTOH Code START-->
<?php
//KONEKSI
$host="localhost"; //isi dengan host anda. contoh "localhost"
$user="root"; //isi dengan username mysql anda. contoh "root"
$password=''; //isi dengan password mysql anda. jika tidak ada, biarkan kosong.
$database="sispakdb";//isi nama database dengan tepat.
mysql_connect($host,$user,$password);
mysql_select_db($database);

$id=$_POST['id'];
$z= mysql_query("select a.nama as nama, a.kelamin as kelamin, a.alamat as alamat,
	   a.pekerjaan as pekerjaan, b.nama_kerusakan as nama_kerusakan,  b.penyebab as penyebab, b.solusi as solusi, b.perawatan as perawatan, c.tanggal as tanggal
	   from tamu a, solusi b, menganalisa c, memiliki d where a.id_tamu = c.id_tamu and b.id_solusi=d.id_solusi and d.id_kd=c.id_kd and c.id_ahd=$id order by c.id_ahd ");


$q = mysql_fetch_array($z);
?>
<img  src='../img/d.png' width='700px' height='120px' >
<hr style="height:5px ;background: rgb(0,0,0);color:rgb(0,0,0);" />
<p align='center'>Hasil Diagnosa Kerusakan Sepeda Motor Honda CBR Type 150R Lokal</p>
<br>
<table class="table table-striped table-bordered">
<thead>
<tbody>
<tr>
<td>Tanggal Kunjung</td>
<td><?php   echo $q['tanggal'];?></td>
</tr>
<tr>
<td> Nama </td>
<td><?php echo $q['nama']; ?></td>
</tr>
<tr>
<td> Kelamin</td>
<td><?php echo $q['kelamin']; ?></td>
</tr>
<tr>
<td> Alamat</td>
<td> <?php echo $q['alamat']; ?></td>
</tr>
<tr>
<td> Pekerjaan</td>
<td> <?php echo $q['pekerjaan']; ?> </td>
</tr>
<tr>
<td> Penyakit</td>
<td><?php echo $q['nama_kerusakan']; ?></td>
</tr>
<tr>
<td> Penyebab</td>
<td><?php echo $q['penyebab']; ?></td>
</tr>
<tr>
<td> Solusi</td>
<td><?php echo $q['solusi']; ?></td>
</tr>
<tr>
<td> Perawatan</td>
<td><?php echo $q['perawatan']; ?></td>
</tr>
</thead>
</tbody>
</table>

<?php
$html = ob_get_contents(); //Proses untuk mengambil hasil dari OB..
ob_end_clean();
//Here convert the encode for UTF-8, if you prefer the ISO-8859-1 just change for $mpdf->WriteHTML($html);
$stylesheet = file_get_contents('../admin_Pskripsi/config/style.css');
$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output($nama_dokumen.".pdf" ,'I');
exit;
?>
