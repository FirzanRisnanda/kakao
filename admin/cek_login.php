<?php
include "../config/koneksi.php";
$pass=md5($_POST['password']);
$sql="select * from Admin where Username='$_POST[username]' and Password='$pass'";

$login=mysql_query($sql);
$ketemu=mysql_num_rows($login);
$r=mysql_fetch_array($login);

//apabila username ketemu
if($ketemu > 0) {
	session_start() ; 
	
	//isi dari variabel session
	$_SESSION[namauser]=$r['Username'];
	$_SESSION[passuser]=$r['Password'];
	$_SESSION[leveluser]=$r['level'];
	header('location:index.php?'); 
	}
else {
	echo "<link href=../config/adminstyle.css rel=stylesheet type=text/css>";
  	echo "<center>Login gagal! username & password tidak benar<br>";
  	echo "<a href=index.php><b>ULANGI LAGI</b></a></center>"; }
?>
