<?php
echo"<h2><a  href='#'><i class='icon-question-sign'></i>Form Registrasi Konsultasi</a></h2><hr>";
?>

<form action='?page=aksiformtamu_konsul' method="post">
  <table>
    <tr>
      <td>Nama</td>
      <td>
        <input type="text" name="nama" >
      </td>
    </tr>
    <tr>
      <td>Kelamin</td>
      <td>
        <input type="radio" name="kelamin" value="Pria" checked>Pria
        <input type="radio" name="kelamin" value="Wanita">Wanita
      </td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td>
        <textarea name="alamat"></textarea>
      </td>
    </tr>
    <tr>
      <td width="76">Pekerjaan</td>
      <td width="312">
        <input name="pekerjaan" type="text"  size="35" maxlength="60">
      </td>
    </tr>
    <tr>
      <td width="76">Username</td>
      <td width="312">
        <input name="username" type="text"  size="35" maxlength="60">
      </td>
    </tr>
    <tr>
      <td width="76">Password</td>
      <td width="312">
        <input name="password" type="password"  size="35" maxlength="60">
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
        <input type="submit"  class="btn btn-danger" name="Submit" value="Daftar">
      </td>
    </tr>
  </table>
</form>
