<link rel="icon" type="image/png" href="../images/logo.png">
<?php
include("../config/koneksi.php");
$sql = "SELECT * FROM Gejala WHERE idGejala = ".$_GET['id'];
$hasil = mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
$data = mysql_fetch_assoc($hasil);

echo "ID Gejala :".$data['idGejala'];
echo "<br />";
echo "Gejala :".$data['Gejala'];

?>

<p>[ <a href="index.php?page=tampil_gejala">Tampil Data</a> ]</p>