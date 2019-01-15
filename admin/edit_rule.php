<html>
<head>
<link rel="icon" type="image/png" href="../images/logo.png">
<title>Ubah Data Penyakit</title>
</head>
<body>
<?php
include("../config/koneksi.php");
$sql = "SELECT * FROM Penyakit ";
$sql.= "WHERE idpenyakit = ".$_GET['id'];
$hasil = mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
$data = mysql_fetch_assoc($hasil);
?>
<h2>Ubah Data Penyakit</h2>

<?php
	if (isset($_POST['txtID']))
	{
		$sql = "UPDATE penyakit SET ";
		$sql.= "penyakit='".$_POST['txtPenyakit'].;
		$sql.= "WHERE idPenyakit = ".$_POST['txtPenyakit'];
		mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
		echo "Data berhasil diubah.";
	}
	else
	{
?>
<form action="edit_penyakit.php?id=<?php echo $_GET['id'] ?>" method="post">
Penyakit :&nbsp;
<input type="text" name="txtPenyakit" value="<?php echo $data['penyakit'];
?>" />
Penanganan :&nbsp;
<input type="text" name="txtPenyakit" value="<?php echo $data['penyakit'];
?>" />
Probabilitas penyakit :&nbsp;
<input type="text" name="txtPenyakit" value="<?php echo $data['penyakit'];
?>" />
<br />
<input type="hidden" name="txtID" value="<?php echo $data['id'];
?>" />
<input type="submit" value="Submit" />
</form>

	<?php
		}
	?>
<p>[ <a href="tampil_gejala.php">Tampil Data</a> ] </p>
</body>
</html>