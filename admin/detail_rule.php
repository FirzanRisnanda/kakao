<link rel="icon" type="image/png" href="../images/logo.png">
<?php
include("../config/koneksi.php");
$sql   = "SELECT * FROM rule WHERE idRule = ".$_GET['id'];
$hasil = mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
$data  = mysql_fetch_assoc($hasil);
echo "ID Rule : ".$data['idRule'];
echo "<br />";
echo "ID Gejala : ".$data['idGejala'];
echo "<br />";
echo "ID Penyakit : ".$data['idpenyakit'];
echo "<br />";
echo "Probabilitas Gejala : ".$data['Probabilitas_gejala'];
echo "<br />";
?>

 <p>[ <a href="tampil_penyakit">Tampil Data</a> ] </p>