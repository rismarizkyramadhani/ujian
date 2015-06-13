<?php
	include "config/koneksi.php";
	$qry=mysql_query("SELECT * FROM tbl_user WHERE id_user='$_SESSION[iduser]'");
	$t=mysql_fetch_array($qry);
?>
<form name="form1" method="post" action="index.php?hal=register&act=proses">
  <table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <th colspan="2" align="center">My Profil</th>
    </tr>
    <tr>
      <td>Nama</td>
      <td><input name="nama" type="text" id="nama" size="40" value="<?php echo $t['nama'] ; ?>" required/></td>
    </tr>
    <tr>
      <td>Tgl Lahir </td>
      <td><input name="tgl_lahir" type="text" id="tgl_lahir" size="40" value="<?php echo $t['tgl_lahir'] ; ?>"required/></td>
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
      <td><input name="nama_ayah" type="text" id="nama_ayah" size="40" value="<?php echo $t['nama_ayah'] ; ?>"required/></td>
    </tr>
    <tr>
      <td>Nama Ibu </td>
      <td><input name="nama_ibu" type="text" id="nama_ibu" value="<?php echo $t['nama_ibu'] ; ?>"required/></td>
    </tr>
    <tr>
      <td>Pekerjaan Ayah</td>
      <td><input name="pekerjaan_ayah" type="text" id="pekerjaan_ayah" value="<?php echo $t['pekerjaan_ayah'] ; ?>" required/></td>
    </tr>
    <tr>
      <td>Pekerjaan Ibu </td>
      <td><input name="pekerjaan_ibu" type="text" id="pekerjaan_ibu" value="<?php echo $t['pekerjaan_ibu'] ; ?>"required/></td>
    </tr>
    <tr>
      <td>Sekolah Asal </td>
      <td><input name="sekolah_asal" type="text" id="sekolah_asal" value="<?php echo $t['asal_sekolah'] ; ?>"required/></td>
    </tr>
    <tr>
      <td>Telp</td>
      <td><input name="telp" type="text" id="telp" value="<?php echo $t['telp'] ; ?>" required/></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td><textarea name="alamat" cols="30" rows="4" id="alamat"><?php echo $t['alamat'] ; ?></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Update" onclick="return confirm('Apakah Anda yakin Ingin Mengubah Data Anda')"></td>
    </tr>
  </table>
</form>
