<?php
echo"<h2><a  href='?page=input_rule_diagnosa'><i class='fa fa-plus'></i> Tambah Rule Diagnosa</a></h2><hr>";


?>

<form method="post" action="?page=act_input_rule_diagnosa">
<br>
<table class="table table-bordered table-striped table-condensed cf">
<thead class="cf">
<tr><th colspan="2">Rule Diagnosa</th></tr>
</thead>
<tbody>
<tr><td>Gejala dan Kerusakan </td>
	<td><input type="text" name="gk" size="40"></td></tr>
<tr><td>Bila Benar</td>
	<td><input type="text" name="bila_benar" size="40"></td></tr>
<tr><td>Bila Salah</td>
	<td><input type="text" name="bila_salah" size="40"</td></tr>
<tr><td>Mulai</td>
	<td><input type="text" name="mulai" size="40"</td></tr>
<tr><td>Selesai</td>
	<td><input type="text" name="selesai" size="40"></td></tr>
</tbody>

<thead class="cf">
<tr><th colspan="2" align="center"> 
<button class="btn btn-theme" type="submit" >Tambah</button>
</th></tr>
</thead>
</table>
</form>
