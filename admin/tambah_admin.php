<html>
	<head>
	<link rel="icon" type="image/png" href="../images/logo.png">
		<title>Tambah Data Admin</title>
	</head>
<body>

	<?php
	include("../config/koneksi.php");

	if (isset($_POST['txtUsername']))
	{

		$passwd = md5($_POST['txtPassword']);
		$sql = "INSERT INTO admin (Username,Password) ";
		$sql.= "VALUES ('".$_POST['txtUsername']."','$passwd')";
		mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
		echo "Data berhasil ditambahkan.";
	}

	else
	{

	?>

	<form action="tambah_admin.php" method="post">
		Username : &nbsp;<input type="text" name="txtUsername" />
		<br />
		Password : <textarea name="txtPassword"></textarea>
		<br />
		<input type="submit" value="Submit" />
	</form>

	<?php
		}
	?>

	<p>[ <a href="index.php?page=tampil_admin">Tampil Data</a> ] </p>
</body>
</html>