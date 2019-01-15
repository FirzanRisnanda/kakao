<html>
<head>
<link rel="icon" type="image/png" href="../images/logo.png">
<title>Ubah Data Admin</title>
</head>
<body>
<?php
include("../config/koneksi.php");
$sql = "SELECT * FROM Admin ";
$sql.= "WHERE idAdmin = ".$_GET['id'];
$hasil = mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
$data = mysql_fetch_assoc($hasil);
?>
<h2>Ubah Data Admin</h2>

<?php
	if (isset($_POST['txtID']))
	{
		$sql = "UPDATE Admin SET ";
		$sql.= "Username='".$_POST['txtUsername']."',Password='".$_POST['txtPassword']."'";
		$sql.= "WHERE idAdmin =".$_POST['txtID'];
		mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
		echo "Data berhasil diubah.";
		header('location:index.php?page=tampil_admin');
	}
	else
	{
?>
<form action="index.php?page=edit_admin&id=<?php echo $_GET['id']?>" method="post">

<input type="hidden" name="txtID" value="<?php echo $data['idAdmin'];?>" />
Username :
<input type="text" name="txtUsername" value="<?php echo $data['Username'];?>" />
<br />

Password :&nbsp;
<input type="text" name="txtPassword" value="<?php echo $data['Password'];?>" />
<br />

<input type="submit" value="Submit" />
</form>

	<?php
		}
	?>
<p>[ <a href="index.php?page=tampil_admin">Tampil Data</a> ] </p>
</body>
</html>