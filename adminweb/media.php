<?php
session_start();

if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=index.php><b>LOGIN</b></a></center>";
}
else{
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
        <head>
                <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
				<script type="text/javascript" src="../nicEdit.js"></script>
				<script type="text/javascript">
					bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
				</script>
				</script>
                <title>Jurusan Teknik Informatika</title>
				<link href="style.css" type="text/css" rel="stylesheet">
                <style type="text/css">
<!--


img {
border: none;
}

    #tabs1 {
      float:left;
	width: 900px;
     background:#292929;
      font-size:80%;
      line-height:normal;
          border-bottom:2px solid #6B7885;
		  color:#fff;
      }
    #tabs1 ul {
          margin:0;
          padding:0px 10px 0 50px;
          list-style:none;
      }
    #tabs1 li {
      display:inline;
      margin:0;
      padding:0;
      }
    #tabs1 a {
      float:left;
      background:url("tableft1.gif") no-repeat left top;
      margin:0;
      padding:0 0 0 4px;
      text-decoration:none;
	  border-right:1px solid #6B7885;
      }
    #tabs1 a span {
      float:left;
      display:block;
      background:url("tabright1.gif") no-repeat right top;
      padding:5px 15px 4px 6px;
      color:#fff;
      }
    /* Commented Backslash Hack hides rule from IE5-Mac \*/
    #tabs1 a span {float:none;}
    /* End IE5-Mac hack */
    #tabs a:hover span {
      color:#627EB7;
	  
      }
    #tabs1 a:hover {
      background-position:0% -42px;
	  background:#6B7885;
	  
      }
    #tabs1 a:hover span {
      background-position:100% -42px;
	  color:#000000;
      }

      #tabs1 #current a {
              background-position:0% -42px;
      }
      #tabs1 #current a span {
              background-position:100% -42px;
      }
-->
</style>
        </head>
        <body>
<div id="header"> <img src="../images/delpi.png" width="900" height="110" /> </div>


  <div id="content">
       <div id="tabs1">
                      <ul>
                        <!-- CSS Tabs -->
                        <li><a href="media.php?module=home"><span>Home</span></a></li>
                        <li><a href="media.php?module=soal"><span>Kelola Soal</span></a></li>
                        <li><a href="media.php?module=pengaturanujian"><span>Pengaturan Tes Ujian</span></a></li>
                        <li><a href="media.php?module=panduan"><span>Panduan</span></a></li>
                        <li><a href="media.php?module=users"><span>Daftar User</span></a></li>
                        <li><a href="media.php?module=profil"><span>Profil</span></a></li>
                        <li><a href="media.php?module=hasilujian"><span>Hasil Tes Ujian</span></a></li>
                        <li><a href="logout.php"><span>Logout</span></a></li>
                      </ul>
    </div><br />
	<div align="center"><?php include "content.php"; ?></div><br />
		
	<div id="footer">
	<div align="center"><i>Copyright © 2015 by Jurusan Teknik Informatika. All Rights Reserved</i><br></div>
	</div>
  </div>

</body>
</html>
<?php } ?>
