<?php
echo"<h2><a  href='?page=input_memiliki'><i class='fa fa-plus'></i> Tambah Relasi</a></h2><hr>";

?>

<form method="post" enctype="multipart/form-data" action="?page=act_input_memiliki">
<br>
<table class="table table-bordered table-striped table-condensed cf">
<thead class="cf">
<tr><th colspan="2">Relasi Memiliki</th></tr>
</thead>
<tbody>
<tr><td>Id Kd </td>
	<td><input type="text" name="id_kd" size="40"></input></td></tr>
<tr><td>Id Solusi</td>
	<td><input type="text" name="id_solusi" size="40"></input></td></tr>
</tbody>

<thead class="cf">
<tr><th colspan="2" align="center">
<button class="btn btn-theme" type="submit" >Tambah</button>
</th></tr>
</thead>
</table>
</form>
