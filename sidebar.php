		<?php
		if (empty($_SESSION[username])) {
		?>
		<ul id="listsidebar">
            <div id="kotakjudul">
              <span class="judulhead">Form Login</span>
            </div>
				<form action="login.php" method="post" name="form1" target="_self">
				<div style="padding-left:15px; ">
				<tr>
				  <td>Username </td>
				  <td><input name="username" type="text" id="username"></td>
				</tr>
				<tr>
				  <td>Password</td>
				  <td><input name="password" type="password" id="password"></td>
				</tr>
				<tr>
				  <td>&nbsp;</td>
				  <td><input type="submit" name="Submit" value="Login !" class="button">
				  <input type="reset" name="Submit2" value="Reset" class="button"></td>
				</tr>
				</div>
				</form>
		</ul></br>
		<?php }?>
		<?php
			if (!empty($_SESSION[username])) {
		  ?>
		<ul id="listsidebar">
            <div id="kotakjudul">
              <span class="judulhead">Menu User</span>
            </div>
			<img src="images/people.png" width="57" height="56">
			<ul>
				<li>Welcome	:	<?php echo "$_SESSION[username]"; ?></li>
				<li><img src="images/5.png"><a href="index.php?hal=profiluser">My Profil</a></li>
		<?php
			$cek=mysql_num_rows(mysql_query("SELECT id_user FROM tbl_nilai WHERE id_user='$_SESSION[iduser]'"));
			if ($cek > 0) {
				echo "tes";
			}
		?>
				<li><img src="images/5.png"><a href="logout.php">Logout</a></li>
			</ul>
		</ul><br/>
		<?php } ?>
		<ul id="listsidebar">
            <div id="kotakjudul">
              <span class="judulhead">Main menu</span>
            </div>
			<ul>
			<li><img src="images/5.png"><a href="index.php">Home</a></li>
			<li><img src="images/5.png"><a href="index.php?hal=panduan">Panduan</a></li>
			<li><img src="images/5.png"><a href="index.php?hal=profil">Profil</a></li>
		<?php
			if (empty($_SESSION[username])) {
			echo'<li><img src="images/5.png"><a href="index.php?hal=register">Pendaftaran</a></li>';
			}
		  ?>
			</ul>
		</ul></br>
		<?php
				echo "<div align=center style='margin:0;padding:0;'>";
					$tgl_skrg=date("d");
					$bln_skrg=date("n");
					$thn_skrg=date("Y");
					
					echo buatkalender($tgl_skrg,$bln_skrg,$thn_skrg); 
				echo"</div>";
				?>
				
<style>
.tr_judul {
  font-weight : bold;
  text-align : center;
  background : #FFFF66;
}
.tr_terang {
  text-align : center;
  background : #f0f0f0;
}
.tabel_data {
font-size:12px;
  background : #d0d0d0;
  color : #000000;
}
</style>