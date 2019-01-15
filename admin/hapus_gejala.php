<?php
include("../config/koneksi.php");
$sql = "DELETE FROM gejala WHERE idGejala = ".$_GET['id'];
mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
echo "Data berhasil dihapus.";
?>

<p>[ <a href="index.php?page=tampil_gejala">Tampil Data</a> ] </p>