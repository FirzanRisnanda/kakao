<html>
	<head>
	<link rel="icon" type="image/png" href="../images/logo.png">
		<title>Tambah Data Gejala</title>
	</head>
<body>

	<?php
	include("../config/koneksi.php");

	if (isset($_POST['txtGejala']))
	{

		$sql = "INSERT INTO gejala(gejala) ";
		$sql.= "VALUES ('".$_POST['txtGejala']."')";
		mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
		echo "Data berhasil ditambahkan.";
	}

	else
	{

	?>

	<form action="tambah_Gejala.php" method="post">
		Gejala : <textarea name="txtGejala"></textarea>
		<br />
		<input type="submit" value="Submit" />
	</form>

	<?php
		}
	?>

	<p>[ <a href="index.php?page=tampil_Gejala">Tampil Data</a> ] </p>
</body>
</html>