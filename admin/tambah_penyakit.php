<html>
	<head>
	<link rel="icon" type="image/png" href="../images/logo.png">
		<title>Tambah Data Penyakit</title>
	</head>
<body>

	<?php
	include("../config/koneksi.php");

	if (isset($_POST['txtPenyakit']))
	{

		$sql = "INSERT INTO penyakit(Penyakit, Penanganan, Probabilitas_penyakit) ";
		$sql.= "VALUES ('".$_POST['txtPenyakit']."','".$_POST['txtPenanganan']."','".$_POST['txtProbabilitas_penyakit']."')";
		mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
		echo "Data berhasil ditambahkan.";
	}

	else
	{

	?>

	<form action="tambah_penyakit.php" method="post">
		Penyakit :<textarea name="txtPenyakit" /></textarea>
		<br />
		Penanganan :<textarea name="txtPenanganan" /></textarea> 
		<br />
		Probabilitas_penyakit : <textarea name="txtProbabilitas_penyakit"></textarea>
		<br />
		<input type="submit" value="Submit" />
	</form>

	<?php
		}
	?>

	<p>[ <a href="index.php?page=tampil_penyakit">Tampil Data</a> ] </p>
</body>
</html>