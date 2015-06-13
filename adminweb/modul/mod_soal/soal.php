<script language="JavaScript">
function bukajendela(url) {
 window.open(url, "window_baru", "width=800,height=500,left=120,top=10,resizable=1,scrollbars=1");
}
</script>

<?php
session_start('act');
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul soal, Anda harus login terlebih dahulu <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
$aksi="modul/mod_soal/aksi_soal.php";
switch($_GET['act']){
  // Tampil Soal
  default:
    echo "<h2>Soal</h2>";
	// Tombol Tambah Soal
	echo "<div style='text-align:left;padding-left:30px;'>
          <input type=button value='Tambah Soal' 
          onclick=\"window.location.href='?module=soal&act=tambahsoal';\">";
	//Form Pencarian Data
	echo "<div style='text-align:right;padding-right:30px;'>
         <form method='POST' action=?module=soal&act=carisoal>
		 <input type=text name='cari' placeholder='Masukkan Pertanyaan' list='auto' size=40 required/> <input type=submit value='Cari'>";
		echo"<datalist id='auto'>";
		 $qry=mysql_query("SELECT * FROM tbl_soal");
		 while ($t=mysql_fetch_array($qry)) {
		 	echo "<option value='$t[soal]'>";
		 }
	echo"</datalist></form>
		  </div>";
	//Tampil Data Soal	  
     echo" <table>
          <tr><th>no</th><th>Pertanyaan</th><th>Status</th><th>aksi</th><th>View</th><th>Status</th></tr>"; 
    $tampil=mysql_query("SELECT * FROM tbl_soal ORDER BY id_soal DESC");
    $no=1;
    while ($r=mysql_fetch_array($tampil)){
	  $soal=substr($r['soal'],0,78);
       echo "<tr><td>$no</td>
             <td>$soal..</td>
			 <td align='center'>$r[aktif]</td>
             <td>
			  <a href=?module=soal&act=editsoal&id=$r[id_soal]><img src='images/1.png' title='Edit Data'></a> | 
			  <a href=$aksi?module=soal&act=hapus&id=$r[id_soal]><img src='images/2.png' title='Hapus Data'></a></td>
			  <td> <a href='#' onclick=\"bukajendela('zoom.php?id=$r[id_soal]')\"><img src='images/3.gif' title='View'></a></td>";
				if ($r['aktif']=="Y") {
					echo"<td><input type=button value='Non Aktifkan' onclick=\"window.location.href='$aksi?module=soal&act=nonaktif&id=$r[id_soal]';\"></td>";

				}else {
					echo"<td align='center'><input type=button value='Aktifkan' onclick=\"window.location.href='$aksi?module=soal&act=aktif&id=$r[id_soal]';\"></td>";
				}
			  
        echo"   </td>
		</tr>";
      $no++;
    }
    echo "</table>";
    break;
  
  // Form Tambah Soal
  case "tambahsoal":
    echo "<h2>Tambah Soal</h2>
          <form method=POST action='$aksi?module=soal&act=input' enctype='multipart/form-data'>
          <table>
		  <tr><td>Pertanyaan</td><td> : <textarea name='soal' style='width: 500px; height: 100px;'></textarea></td></tr>
          <tr><td>Gambar</td>      <td> : <input type=file name='fupload' size=40> 
                                          <br>Tipe gambar harus JPG/JPEG dan ukuran lebar maks: 400 px</td></tr>
          <tr><td>Jawaban A</td><td> : <input type=text name='a' size=80 required/></td></tr>
          <tr><td>Jawaban B</td><td> : <input type=text name='b' size=80 required/></td></tr>
          <tr><td>Jawaban C</td><td> : <input type=text name='c' size=80 required/></td></tr>
          <tr><td>Jawaban D</td><td> : <input type=text name='d' size=80 required/></td></tr>
		  <tr><td>Kunci Jawaban</td><td> : <select name='knc_jawaban'>
		  									<option value='a'>A</option>
											<option value='b'>B</option>
											<option value='c'>C</option>
											<option value='d'>D</option>
											</select></td></tr>
          <tr><td colspan=2><input type=submit name=submit value=Simpan>
                            <input type=button value=Batal onclick=self.history.back()></td></tr>
          </table></form>";
     break;
  
  // Form Edit Soal  
  case "editsoal":
    $edit=mysql_query("SELECT * FROM tbl_soal WHERE id_soal='$_GET[id]'");
    $r=mysql_fetch_array($edit);

    echo "<h2>Edit Soal</h2>
          <form method=POST action=$aksi?module=soal&act=update enctype='multipart/form-data'>
          <input type=hidden name=id value='$r[id_soal]'>
          <table>
		  <tr><td>Pertanyaan</td><td> : <textarea name='soal' style='width: 500px; height: 100px;' required/>$r[soal]</textarea></td></tr>
          <tr><td>Gambar</td>       <td> :  ";
          if ($r[gambar]!=''){
              echo "<img src='../foto/$r[gambar]'>";  
          }
    echo "</td></tr>
          <tr><td>Ganti Gambar</td>    <td> :<input type=file name='fupload' size=40> </td></tr>
          <tr><td>Jawaban A</td><td> : <input type=text name='a' value='$r[a]' size=80 required/></td></tr>
          <tr><td>Jawaban B</td><td> : <input type=text name='b' value='$r[b]' size=80 required/></td></tr>
          <tr><td>Jawaban C</td><td> : <input type=text name='c' value='$r[c]' size=80 required/></td></tr>
          <tr><td>Jawaban D</td><td> : <input type=text name='d' value='$r[d]' size=80 required/></td></tr>
		  <tr><td>Kunci Jawaban</td><td> : <select name='knc_jawaban'>
		  									<option value='a'>A</option>
											<option value='b'>B</option>
											<option value='c'>C</option>
											<option value='d'>D</option>
											</select></td></tr>
          <tr><td colspan=2><input type=submit name=submit value=Simpan>
                            <input type=button value=Batal onclick=self.history.back()></td></tr>
          </table></form>";
    break;  
	
	case "viewsoal":
		$view=mysql_query("SELECT * FROM tbl_soal WHERE id_soal='$_GET[id]'");
		$t=mysql_fetch_array($view);
		echo "<h2>Soal :</h2>
		$t[soal]</br>";
          if ($t[gambar]!=''){
              echo "<img src='../foto/$t[gambar]'>";  
          }
		echo"<h2>Jawaban :</h2>
		a. $t[a] </br>
		b. $t[b] </br>
		c. $t[c] </br>
		d. $t[d] </br>";
	break;
	
	case "carisoal":
	     echo"<h2>Berikut adalah  Hasil Pencarian Yang ditemukan</h2>
		 <table>
          <tr><th>no</th><th>Pertanyaan</th><th>Status</th><th>aksi</th><th>Status</th><th>View</th></tr>"; 
    $tampil=mysql_query("SELECT * FROM tbl_soal WHERE soal LIKE '%$_POST[cari]%'");
    $no=1;
    while ($r=mysql_fetch_array($tampil)){
       echo "<tr><td>$no</td>
             <td>$r[soal]</td>
			 <td align='center'>$r[aktif]</td>
             <td>
			  <a href=?module=soal&act=editsoal&id=$r[id_soal]>Edit</a>|
			  <a href=$aksi?module=soal&act=hapus&id=$r[id_soal]><img src='images/2.png' title='Hapus Data'></a></td>";
				if ($r[aktif]=="Y") {
					echo"<td><input type=button value='Non Aktifkan' onclick=\"window.location.href='$aksi?module=soal&act=nonaktif&id=$r[id_soal]';\"></td>";

				}else {
					echo"<td align='center'><input type=button value='Aktifkan' onclick=\"window.location.href='$aksi?module=soal&act=aktif&id=$r[id_soal]';\"></td>";
				}
			  
        echo"   </td>
		<td><a href=?module=soal&act=viewsoal&id=$r[id_soal]><img src='images/3.gif' title='View'></a></a></td>

		</tr>";
      $no++;
    }
    echo "</table>";
    break;

	
	}
}
?>
