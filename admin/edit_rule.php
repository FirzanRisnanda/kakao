<html>
<head>
<link rel="icon" type="image/png" href="../images/logo.png">
<title>Ubah Data Penyakit</title>
</head>
<body>
<?php
include("../config/koneksi.php");
$sql = "SELECT * FROM rule ";
$sql.= "WHERE idRule = ".$_GET['id'];
$hasil = mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
$data = mysql_fetch_assoc($hasil);
?>
<h2>Ubah Data Rule</h2>

<?php
	if (isset($_POST['txtID']))
	{
		$sql = "UPDATE rule SET ";
		$sql.= "Rule='".$_POST['txtRule']."',idGejala='".$_POST['txtidGejala']."',idPenyakit='".$_POST['txtidPenyakit']."',Probabilitas_gejala='".$_POST['txtProbabilitas_gejala']."'";
		$sql.= "WHERE idrule = ".$_POST['txtrule'];
		mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
		echo "Data berhasil diubah.";
		header('location:index.php?page=tampil_rule');
	}
	else
	{
?>
<form action="edit_rule.php?id=<?php echo $_GET['id'] ?>" method="post">
<input type="hidden" name="txtID" value="<?php echo $data['idRule'];?>" />
<br/>
	ID Gejala :&nbsp;
	<input type="text" name="txtidGejala" value="<?php echo $data['idGejala'];?>"  />
	<br/>

	ID 	Penyakit :&nbsp;
	<input type="text" name="txtidPenyakit value="value="<?php echo $data['idPenyakit'];?>" />
	<br/>	
	
	Probabilitas gejala :&nbsp;
	<input type="text" name="Probabilitas_gejala" value="<?php echo $data['Probabilitas_gejala'];?>" />
	<br/>

<input type="submit" value="Submit" />
</form>

	<?php
		}
	?>
<p>[ <a href="index.php?page=tampil_rule">Tampil Data</a> ] </p>
</body>
</html>