<?php
$result=mysql_query("select * from tbl_soal WHERE aktif='Y'");
$hitung=mysql_num_rows($result);
		 $qry=mysql_query("SELECT * FROM tbl_pengaturan_ujian");
		 $r=mysql_fetch_array($qry);
 		 
		echo "
		<h3 align='center'>$r[nama_ujian]</h3><br/>
		Waktu Pengerjaan : $r[waktu] menit<br/>
		Jumlah Soal : $hitung<br/>
		<p/>
		<h2>PERATURAN</h2><br/>
		$r[peraturan]<br/>
		";
?>
<script>
 function cekForm() {
	if (!document.fValidate.agree.checked) {
				alert("Anda belum menyetujui!");
				return false;
			} else {
				location.href="?hal=soal";
			}
		}
</script>
<FORM name="fValidate">
<input type="checkbox" name="agree" id="agree" value="1"> Saya Mengerti dan Siap Untuk Mengikuti Tes<br/><br/>
          <div style='text-align:center;'><input type="button" name="button-ok" value="MULAI TES" onclick="cekForm()"></div>
</FORM>
