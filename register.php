<?php
include "config/koneksi.php";
if ($_GET[act]=="proses") {
	$simpan="INSERT INTO tbl_user SET username='$_POST[username]',
									  password='$_POST[password]',
									  nama='$_POST[nama]',
									  tgl_lahir='$_POST[tgl_lahir]',
									  jk='$_POST[jk]',
									  agama='$_POST[agama]',
									  kwgn='$_POST[kwgn]',
									  nama_ayah= '$_POST[nama_ayah]',
									  nama_ibu='$_POST[nama_ibu]',
									  pekerjaan_ayah='$_POST[pekerjaan_ayah]',
									  pekerjaan_ibu='$_POST[pekerjaan_ibu]',
									  sekolah_asal='$_POST[sekolah_asal]',
									  telp='$_POST[telp]',
									  alamat='$_POST[alamat]'";
	mysql_query($simpan);
	echo '<script language="javascript">
	alert("Anda Berhasil Melakukan Registrasi");
	window.location="index.php";
	</script>';
	exit();
}
?>
<form name="form1" method="post" action="index.php?hal=register&act=proses">
  <table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <th colspan="2" align="center">FORM REGISTER</th>
    </tr>
    <tr>
      <td>Username</td>
      <td><input name="username" type="text" id="username" size="30" required/></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input name="password" type="password" id="password" size="30" required/></td>
    </tr>
    <tr>
      <td>Nama</td>
      <td><input name="nama" type="text" id="nama" size="40" required/></td>
    </tr>
    <tr>
      <td>Tgl Lahir </td>
      <td><input name="tgl_lahir" type="text" id="tgl_lahir" size="40" required/></td>
    </tr>
    <tr>
      <td>Jenis Kelamin </td>
      <td><select name="jk" id="jk">
          <option selected>----Pilih----</option>
          <option value="Laki-Laki">Laki-Laki</option>
          <option value="Perempuan">Perempuan</option>
          </select></td>
    </tr>
    <tr>
      <td>Agama</td>
      <td><select name="agama" id="agama">
          <option selected>---Pilih---</option>
          <option value="Islam">Islam</option>
          <option value="Budha">Budha</option>
          <option value="Hindu">Hindu</option>
          <option value="Kristen">Kristen</option>
          <option value="Khatolik">Khatolik</option>
            </select></td>
    </tr>
    <tr>
      <td>Kewarganegaraan</td>
      <td><select name="kwgn" id="kwgn">
          <option selected>---Pilih----</option>
          <option value="Indoensia">Indonesia</option>
          <option value="Asing">Asing</option>
            </select></td>
    </tr>
    <tr>
      <td>Nama Ayah </td>
      <td><input name="nama_ayah" type="text" id="nama_ayah" size="40" required/></td>
    </tr>
    <tr>
      <td>Nama Ibu </td>
      <td><input name="nama_ibu" type="text" id="nama_ibu" required/></td>
    </tr>
    <tr>
      <td>Pekerjaan Ayah</td>
      <td><input name="pekerjaan_ayah" type="text" id="pekerjaan_ayah" required/></td>
    </tr>
    <tr>
      <td>Pekerjaan Ibu </td>
      <td><input name="pekerjaan_ibu" type="text" id="pekerjaan_ibu" required/></td>
    </tr>
    <tr>
      <td>Sekolah Asal </td>
      <td><input name="sekolah_asal" type="text" id="sekolah_asal" required/></td>
    </tr>
    <tr>
      <td>Telp</td>
      <td><input name="telp" type="text" id="telp" required/></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td><textarea name="alamat" cols="30" rows="4" id="alamat"></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Kirim"></td>
    </tr>
  </table>
</form>
