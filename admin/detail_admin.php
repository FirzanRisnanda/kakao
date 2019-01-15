<link rel="icon" type="image/png" href="../images/logo.png">
<?php
include("../config/koneksi.php");
$sql   = "SELECT * FROM Admin WHERE idAdmin = ".$_GET['id'];
$hasil = mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
$data  = mysql_fetch_assoc($hasil);
echo "ID Admin : ".$data['idAdmin'];
echo "<br />";
echo "Username: ".$data['Username'];
echo "<br />";
echo "Password: ".$data['Password'];
echo "<br />";
?>

 <p>[ <a href="index.php?page=tampil_admin">Tampil Data</a> ] </p>