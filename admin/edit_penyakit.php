<html>
<head>
<link rel="icon" type="image/png" href="../images/logo.png">
<title>Ubah Data Gejala</title>
</head>
<body>
<?php
include("../config/koneksi.php");
$sql = "SELECT * FROM Penyakit ";
$sql.= "WHERE idPenyakit = ".$_GET['id'];
$hasil = mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
$data = mysql_fetch_assoc($hasil);
?>
<h2>Ubah Data Penyakit</h2>

<?php
	if (isset($_POST['txtID']))
	{
		$sql = "UPDATE Penyakit SET ";
		$sql.= "Penyakit='".$_POST['txtPenyakit']."',Penanganan='".$_POST['txtPenanganan']."',Probabilitas_penyakit='".$_POST['txtProbabilitas_penyakit']."'";
		$sql.= "WHERE idPenyakit =".$_POST['txtID'];
		mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
		echo "Data berhasil diubah.";
		header('location:index.php?page=tampil_penyakit');
	}
	else
	{
?>
<form action="index.php?page=edit_penyakit&id=<?php echo $_GET['id']?>" method="post">

<input type="hidden" name="txtID" value="<?php echo $data['idPenyakit'];?>" />
<br/>
Penyakit :
<input type="text" name="txtPenyakit" value="<?php echo $data['Penyakit'];?>" />
<br/>

Penanganan :&nbsp;
<input type="text" name="txtPenanganan" value="<?php echo $data['Penanganan'];?>" />
<br/>

Probabilitas Penyakit :&nbsp;
<input type="text" name="txtProbabilitas_penyakit"value="<?php echo $data['Probabilitas_penyakit'];?>" />
<br/>

<input type="submit" value="Submit" />
</form>

	<?php
		}
	?>
<p>[ <a href="index.php?page=tampil_penyakit">Tampil Data</a> ] </p>
</body>
</html>