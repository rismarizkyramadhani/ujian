<?php
ob_start();
session_start();
error_reporting(0);

include "config/fungsi_kalender.php";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/mos-style.css"> <!--pemanggilan file css-->
</head>
<body>
<div id="wrapper">
<div id="header"></div>
	<div id="menu">
			<div id="menutop">
			<ul>
			  <li><a href="index.php">Home</a></li>
			  <li><a href="index.php?hal=profil">Profil</a></li>
			<?php
			
			if (!empty($_SESSION[username])) {
			 echo ' <li><a href="index.php?hal=soal">Soal</a></li>
			  <li><a href="logout.php">Logout</a></li>
			 ';
			}else {
			echo '
			  <li><a href="index.php?hal=register">Pendaftaran</a></li>
			';
			
			}
			?>
			</ul>	
			</div>
	</div>
	<div id="leftBar"><?php include "sidebar.php";?></div>
	<div id="rightContent">
	 <?php include "content.php"; ?>
	</div>
<div class="clear"></div>
<div id="footer"></div>
</div>
<div id="textfooter">CopyRight&copy;Jurusan Teknik Informatika @2015</div>

</body>
</html>