<?php
echo"<h2><a  href='?page=input_kerusakan'><i class='fa fa-plus'></i> Tambah Kerusakan</a></h2><hr>";

$pinjam			= date("d-m-Y");
$tuju_hari		= mktime(0,0,0,date("n"),date("j")+7,date("Y"));
$kembali		= date("d-m-Y", $tuju_hari);
?>

<form method="post" action="?page=act_input_kerusakan">
<br>
<table class="table table-bordered table-striped table-condensed cf">
<thead class="cf">
<tr><th colspan="2">Solusi</th></tr>
</thead>
<tbody>
<tr><td>Nama Kerusakan</td>
	<td><input type="text" name="nama_kerusakan" size="40"></td></tr>
<tr><td>Penyebab</td>
	<td><textarea name="penyebab"></textarea></td></tr>
<tr><td>Solusi</td>
	<td><textarea name="solusi"></textarea></td></tr>
<tr><td>Perawatan</td>
	<td><textarea name="perawatan"></textarea></td></tr>
</tbody>

<thead class="cf">
<tr><th colspan="2" align="center"> 
<button class="btn btn-theme" type="submit" >Tambah</button>
</th></tr>
</thead>
</table>
</form>
