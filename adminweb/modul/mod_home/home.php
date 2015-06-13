<?php
$aksi="modul/mod_home/aksi_home.php";
switch($_GET['act']){
  // Tampil Menuatas
  default:
    $sql  = mysql_query("SELECT * FROM modul WHERE id_modul='1'");
    $r    = mysql_fetch_array($sql);

    echo "<h2>Edit Home Website</h2>
          <form method=POST enctype='multipart/form-data' action=$aksi?module=home&act=update>
          <input type=hidden name=id value=$r[id_modul]>
          <table>
          <tr><td><img src='../foto/$r[gambar]' width='160' height='160'></td></tr>
         <tr><td>Ganti Foto : <input type=file size=30 name=fupload></td></tr>
         <tr><td><textarea name='isi' style='width: 550px; height: 300px;'>$r[isi_modul]</textarea></td></tr>
         <tr><td><input type=submit value=Update></td></tr>
         </form></table>";
    break;  
  
}
?>
