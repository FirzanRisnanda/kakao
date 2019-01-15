<html>
	<head>
	<link rel="icon" type="image/png" href="../images/logo.png">
		<title>Tambah Data Gejala</title>
	</head>
<body>

	<?php
	include("../config/koneksi.php");

	if (isset($_POST['txtProbabilitas_gejala']))
	{

		$sql = "INSERT INTO rule(idGejala,idPenyakit,Probabilitas_gejala) ";
		$sql.= "VALUES ('".$_POST['txtidGejala']."','".$_POST['txtidPenyakit']."','".$_POST['txtProbabilitas_gejala']."')";
		mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
		echo "Data berhasil ditambahkan.";

	}

	else
	{

	?>

	<form action="tambah_rule.php" method="post">
	
	ID Gejala :&nbsp;
	<input type="text" name="txtidGejala"  />
	<br />

	ID 	Penyakit :&nbsp;
	<input type="text" name="txtidPenyakit" />
	<br />	

	Probabilitas Gejala : <textarea name="txtProbabilitas_gejala"></textarea>
	<br />
		<input type="submit" value="Submit" />
	</form>

	<?php
		}
	?>

	<p>[ <a href="index.php?page=tampil_rule">Tampil Data</a> ] </p>
</body>
</html>