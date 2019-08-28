<?php
echo"<h2><a  href='?page=input_kamus'><i class='fa fa-plus'></i> Tambah Kamus</a></h2><hr>";

$pinjam			= date("d-m-Y");
$tuju_hari		= mktime(0,0,0,date("n"),date("j")+7,date("Y"));
$kembali		= date("d-m-Y", $tuju_hari);

?>

<form method="post" enctype="multipart/form-data" action="?page=act_input_kamus">
<br>
<table class="table table-bordered table-striped table-condensed cf">
<thead class="cf">
<tr><th colspan="2">Kamus</th></tr>
</thead>
<tbody>
<tr><td>Nama </td>
	<td><input type="text" name="nama" size="40"></input></td></tr>
<tr><td>Gambar</td>
	<td><input type="file" name="fupload" size="80"></input></td></tr>
<tr><td>Keterangan</td>
	<td><textarea name="ket"></textarea></td></tr>
</tbody>

<thead class="cf">
<tr><th colspan="2" align="center"> 
<button class="btn btn-theme" type="submit" >Tambah</button>
</th></tr>
</thead>
</table>
</form>
