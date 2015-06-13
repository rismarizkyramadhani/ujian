<?php
include "config/koneksi.php";

if ($_GET[hal]=="soal") {
	include "soal.php";
}
elseif ($_GET[hal]=="peraturan") {
	include "peraturan.php";
}
elseif ($_GET[hal]=="register") {
	include "register.php";
}
elseif ($_GET[hal]=="formlogin") {
	include "formlogin.php";
}
elseif ($_GET[hal]=="jawaban") {
	include "jawaban.php";
}
elseif ($_GET[hal]=="profiluser") {
	include "profiluser.php";
}
elseif ($_GET[hal]=="profil") {
	$sql  = mysql_query("SELECT * FROM modul WHERE id_modul='2'");
    $r    = mysql_fetch_array($sql);
	
	echo "<div style='text-align:center'><img src='foto/$r[gambar]' width='260' height='260' align='center'></div>";
	echo "$r[isi_modul]";

}
elseif ($_GET[hal]=="panduan") {
	$sql  = mysql_query("SELECT * FROM modul WHERE id_modul='3'");
    $r    = mysql_fetch_array($sql);
	
	echo "<div align='center'><img src='foto/$r[gambar]' width='160' height='160'></div>";
	echo "$r[isi_modul]";

}
//Home
else {
	$sql  = mysql_query("SELECT * FROM modul WHERE id_modul='1'");
    $r    = mysql_fetch_array($sql);
	
	echo "<img src='foto/$r[gambar]' width='160' height='160' align='left'>";
	echo "$r[isi_modul]";
}
?>