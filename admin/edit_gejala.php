<html>
<head>
<link rel="icon" type="image/png" href="../images/logo.png">
<title>Ubah Data Gejala</title>
</head>
<body>
<?php
include("../config/koneksi.php");
$sql = "SELECT * FROM Gejala ";
$sql.= "WHERE idGejala = ".$_GET['id'];
$hasil = mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
$data = mysql_fetch_assoc($hasil);
?>
<h2>Ubah Data Gejala</h2>

<?php
	if (isset($_POST['txtID']))
	{
		$sql = "UPDATE Gejala SET ";
		$sql.= "Gejala='".$_POST['txtgejala']."'";
		$sql.= "WHERE idGejala = ".$_POST['txtID'];
		mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
		echo "Data berhasil diubah.";
		header('location:index.php?page=tampil_gejala');
	}
	else
	{
?>
<form action="index.php?page=edit_gejala&id=<?php echo $_GET['id']?>" method="post">
Gejala :&nbsp;
<input type="text" name="txtgejala" value="<?php echo $data['Gejala'];?>" />
<br />
<input type="hidden" name="txtID" value="<?php echo $data['idGejala'];?>" />
<input type="submit" value="Submit" />
</form>

	<?php
		}
	?>
<p>[ <a href="index.php?page=tampil_gejala">Tampil Data</a> ] </p>
</body>
</html>