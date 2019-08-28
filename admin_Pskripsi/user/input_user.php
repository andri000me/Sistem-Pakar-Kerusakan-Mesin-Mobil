<?php echo "<h2><a  href='?page=input_user'><i class='fa fa-plus'></i> Tambah Admin </a></h2><hr>";
 ?>

<form method="post" action="?page=act_input_user">
<br>
<table class="table table-bordered table-striped table-condensed cf">
<thead class="cf">
<tr><th colspan="2" align='center' >Tambah Admin</th></tr>
</thead>
<tbody>
<tr><td class="pinggir-data">Username</td><td class="pinggir-data"><input type="text" name="user"></td></tr>
<tr><td class="pinggir-data">Password</td><td class="pinggir-data"><input type="password" name="pass"></td></tr>

<tr><th colspan="2" align="center" >
<button class="btn btn-theme" type="submit" >Daftar</button>
</th></tr>
</tbody>
</table>
</form>
