<link rel="icon" type="image/png" href="../images/logo.png">
<?php
include("../config/koneksi.php");
$sql   = "SELECT * FROM Penyakit WHERE idPenyakit = ".$_GET['id'];
$hasil = mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
$data  = mysql_fetch_assoc($hasil);
echo "ID Penyakit : ".$data['idPenyakit'];
echo "<br />";
echo "Penyakit: ".$data['Penyakit'];
echo "<br />";
echo "Penanganan: ".$data['Penanganan'];
echo "<br />";
echo "Probabilitas Penyakit : ".$data['Probabilitas_penyakit'];
echo "<br />";
?>

 <p>[ <a href="index.php?page=tampil_penyakit">Tampil Data</a> ] </p>