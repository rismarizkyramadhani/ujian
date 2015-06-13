<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>UJIAN ONLINE, TES ONLINE - JOGJALAB.COM</title>
    <meta name="description" content="Aplikasi ujian online" />
    <meta name="keywords" content="ujian online, tes online, ujian siswa, ujian mahasiswa" />

	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8" />
	<meta http-equiv="Content-Style-Type" content="text/css" />

	<link href="images/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="images/header.css" rel="stylesheet" type="text/css" media="all" />
	<link href="images/footer.css" rel="stylesheet" type="text/css" media="all" />
    <link href="images/home.css" rel="stylesheet" type="text/css" media="all" />
    
            
</head>

<body class="home link1">
    <div id="page">
	<div id="body_header">
		<div id="top_header">
	<div id="logo" style="height:50px ">
		&nbsp;
	</div>
</div>
<div class="nav">
<ul class="menu">
<li><a href="./">HOME</a></li>
<li><a href="?hal=panduan"><img src="images/new.png" /> PANDUAN</a></li>
<li><a href="?hal=ujian"><img src="images/tick.png" /> UJIAN</a></li>
<li><a href="?hal=hasil_ujian"><img src="images/staryellow.png" /> LIHAT HASIL</a></li>
</ul>
</div>
<style type="text/css">
.nav {
	border-bottom:2px solid #6f924f;
	border-left:1px solid #CCCCCC;border-right:1px solid #CCCCCC;
	background-color:#FFFFFF;height:40px;
	border-bottom:2px solid #6f924f;
}

ul.menu {
	list-style:none;
	/*background-color:#6f924f;*/
	background-color:#FFFFFF;
	height:40px;
	/*border-bottom:2px solid #6f924f;*/
	margin-top:0;margin-bottom:0;margin-right:-2px;
	/*border-left:1px solid #CCCCCC;
	border-right:1px solid #CCCCCC;*/
	padding:0px 4px 0px 10px;
	/*width:886px;*/
	float:right;
}
.menu li {
	float:left;
	position:relative;
	margin-right:2px;
	text-align:center;
	height:31px;
	border:1px solid #CCCCCC;border-bottom-width:0;
	background:url(images/nav_bg.gif) repeat-x;
	line-height:24px;
	margin-top:8px;
	
}
.menu li img {
	margin-top:-4px;
}
.menu li.last-item {margin:0}
.menu li a {display:inline-block;width:120px;font-size:14px;padding:4px 0 4px;color:#333333;text-decoration:none}
.menu li a.active, .menu li a:hover {color:#0f0f0f;box-shadow:0 -2px 6px -2px #6f924f;}
</style>	
		<div class="clear"></div>
		<div class="clear"></div>
	</div>


    <div id="body_content">
		<table width="100%"  border="0" cellspacing="0" cellpadding="0">
		  <tr>
			<td valign="top">		
		
		<div id="slider_menu">
		<h2 class="title">PESERTA</h2>
		<form name="form_login" method="post" action="login.php">
				<p style="padding:5px ">Selamat datang,<br> 6789 <br><input name="cmd_logout" type="button" value="Logout" class="cmd_login" onclick="location.href='logout.php';"></p>				</form>
		</div>
		<div style="clear:both "></div>
						<div id="slider_menu"><h2 class="title"> Menu Peserta </h2>
		<ul>
		<li><a href="?hal=ujian">Ujian</a></li>
		<li><a href="?hal=hasil_ujian">Hasil Ujian</a></li>
		<li><a href="?hal=ubah_password">Ubah Password</a></li>
		</ul>
        </div>
		<div style="clear:both "></div>
				</td>
			<td valign="top" width="660">
<script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>
<script type="text/javascript" src="js/thickbox.js"></script>
<link rel="stylesheet" href="js/thickbox.css" type="text/css" media="screen" />

	<div style="font-family:Arial;font-size:12px;padding:12px ">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
		  <tr>
			<td>
				<table width="340" border="0" cellspacing="4" cellpadding="0" class="tabel_reg">
				  <tr>
					<td width="100">ID Peserta</td>
					<td>: 6789</td>
				  </tr>
				  <tr>
					<td>Nama </td>
					<td>: 6789</td>
				  </tr>
				</table>
			</td>
			<td width="150">
				<table width="140" border="0" cellspacing="4" cellpadding="0" class="tabel_reg">
				  <tr>
					<td align="center" bgcolor="#CCCCCC"><strong>SOAL</strong></td>
				  </tr>
				  <tr>
					<td align="center"><span style="font-size:18px">1 / 5</span> </td>
				  </tr>
				</table>
			</td>
			<td width="140">
				<table width="140" border="0" cellspacing="4" cellpadding="0" class="tabel_reg">
				  <tr>
					<td align="center" bgcolor="#CCCCCC"><strong>WAKTU TERSISA</strong></td>
				  </tr>
				  <tr>
					<td align="center"><span style="font-size:18px"><span id="menit"></span>:<span id="detik"></span></span> </td>
				  </tr>
				</table>
			</td>
		  </tr>
		</table>
		<br />
		
	<form action="" method="post">
	<input name="txt_id" type="hidden" value="6">
	<input name="txt_no" type="hidden" value="1">
	<table width="100%" border="0" cellspacing="4" cellpadding="0" class="tabel_reg">
	  <tr>
		<td width="40" valign="top">1.</td>
		<td valign="top">
			Allah Akbar adalah lagu kebangsaan dari negara<br>
			<table width="100%"  border="0" cellspacing="0" cellpadding="0" class="tabel_transparan">
			  <tr><td width="40" valign="top">A. <input name="txt_jawaban" type="radio" value="a" ></td><td valign="top">Libya</td></tr>
			  <tr><td width="20" valign="top">B. <input name="txt_jawaban" type="radio" value="b" ></td><td valign="top">Saudi Arabia</td></tr>
			  <tr><td width="20" valign="top">C. <input name="txt_jawaban" type="radio" value="c" ></td><td valign="top">Afghanistan</td></tr>
			  <tr><td width="20" valign="top">D. <input name="txt_jawaban" type="radio" value="d" ></td><td valign="top">Suriah</td></tr>
			</table>
			
		</td>
	  </tr>
	</table><br><input name="cmd_prev" type="submit" value="&laquo; Sebelumnya"  disabled> <input name="cmd_next" type="submit" value="Berikutnya &raquo;"  > <input name="cmd_selesai" type="submit" value="Selesai" style="float:right">
	</form>

	<br><br>
		<center>
	<strong>HASIL JAWABAN</strong><br /><br />
		<table width="200" border="0" cellspacing="4" cellpadding="0" class="tabel_reg">
		  <tr>
			<td align="center" width="60">No</td>
			<td align="center">Jawaban</td>
		  </tr>
		  <tr><td align="center"><a href="?hal=lembar_soal&amp;no=1">1</a></td><td align="center">-</td></tr><tr><td align="center"><a href="?hal=lembar_soal&amp;no=2">2</a></td><td align="center">-</td></tr><tr><td align="center"><a href="?hal=lembar_soal&amp;no=3">3</a></td><td align="center">-</td></tr><tr><td align="center"><a href="?hal=lembar_soal&amp;no=4">4</a></td><td align="center">-</td></tr><tr><td align="center"><a href="?hal=lembar_soal&amp;no=5">5</a></td><td align="center">-</td></tr>		</table>
	</center>
</div>
	<script> 
	<!-- 
	// 
	 var detik=20;
	 var menit=57;
	 //document.counter.d2.value='30' 
	
	function display()
	{ 
		if (menit==0&&detik==0) {
			alert('Waktu habis, klik OK untuk melihat hasil ujian anda.');
			location.href="?hal=hasil_ujian";
		}
	
	 if (detik<=0){ 
		detik=60;
		menit-=1;
	 } 
	 if (menit<=-1){ 
		detik=0;
		menit+=1;
	 } 
	 else 
		detik-=1 
		
		detik="" + detik
		menit="" + menit
		var pad = "00"
		document.getElementById("menit").innerHTML=pad.substring(0, pad.length - menit.length) + menit;
		document.getElementById("detik").innerHTML=pad.substring(0, pad.length - detik.length) + detik;
		//document.counter.d2.value=menit;
		//document.counter.d3.value=detik;
		setTimeout("display()",1000) 
	} 
	display() 
	--> 
	</script>
</td>
		  </tr>
		</table>

		<div style="position:relative;float:right;width:660px; "></div>
		<div style="position:relative;float:left; "></div>
		
    </div>
    
<div id="body_footer">
    <div id="footer_links">
<a href="./">Halaman Depan</a> &nbsp;|&nbsp; <a href="?hal=login_admin">Administrator</a>    
    <br/>
    &copy; 2012 Jogjalab.
    </div>
	<div class="clear"></div></div>

    </div>
</body>
</html>
