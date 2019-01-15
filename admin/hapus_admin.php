
<?php
include("../config/koneksi.php");
$sql = "DELETE FROM admin WHERE idAdmin = ".$_GET['id'];
mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
echo "Data berhasil dihapus.";
?>

<p>[ <a href="index.php?page=tampil_admin">Tampil Data</a> ] </p>