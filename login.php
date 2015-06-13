<?php
include "config/koneksi.php";

$qry=mysql_query("SELECT * FROM tbl_user WHERE username='$_POST[username]' AND password='$_POST[password]' AND statusaktif='Y'");
$jumpa=mysql_num_rows($qry);
$r=mysql_fetch_array($qry);

if ($jumpa > 0) {
	session_start();
	$_SESSION[username]= $r[username];
	$_SESSION[password]= $r[password];
	$_SESSION[iduser]= $r[id_user];
	header('location:index.php?hal=peraturan');
}
else {
	echo '<script language="javascript">
	alert("Userid atau Password Yang anda Masukkan Salah atau Acount Sudah Diblokir");
	window.location="index.php";
	</script>';
	exit();
}
?>