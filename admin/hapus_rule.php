<?php
include("../config/koneksi.php");
$sql = "DELETE FROM rule WHERE idRule = ".$_GET['id'];
mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
echo "Data berhasil dihapus.";
?>

<p>[ <a href="index.php?page=tampil_rule">Tampil Data</a> ] </p>