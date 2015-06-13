<?php
$aksi="modul/mod_pengaturanujian/aksi_pengaturanujian.php";
switch($_GET['act']){
  // Tampil Menuatas
  default:
    $sql  = mysql_query("SELECT * FROM tbl_pengaturan_ujian");
    $r    = mysql_fetch_array($sql);

    echo "<h2>Pengaturan Tes</h2>
          <form method=POST enctype='multipart/form-data' action=$aksi?module=pengaturanujian&act=update>
          <input type=hidden name=id value=$r[id]>
          <table>
         <tr><td>Nama Ujian </td><td>: <input type=text size=30 name=nama_ujian value='$r[nama_ujian]'></td></tr>
         <tr><td>Waktu Pengerjaan</td><td> : <input type=text size=30 name=waktu value='$r[waktu]'></td></tr>
         <tr><td>Nilai Minimum</td><td> : <input type=text size=30 name=nilai_min value='$r[nilai_min]'></td></tr>
		 <tr><td>Peraturan</td><td> : <textarea name='peraturan' style='width: 450px; height: 350px;'>$r[peraturan]</textarea></td></tr>
         <tr><td><input type=submit value=Update></td></tr>
         </form></table>";
    break;  
  
}
?>
