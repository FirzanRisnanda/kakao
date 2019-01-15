<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link href="favicon.ico" rel="shortcut icon">
	<!-- CSS dasar -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/custom.css">
	<!-- end CSS dasar -->
  
	<!-- FlexSlider -->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/touchTouch.css" />
	  
	<script type="text/javascript">
		$(window).load(function() {
		  $('.flexslider').flexslider();
		});
	</script>
	<!-- end FlexSlider -->
	<!-- untuk gallery -->
	<script src="js/touchTouch/touchTouch.jquery.js"></script>
	<script src="js/touchTouch/script.js"></script>
	<link rel="icon" type="image/png" href="images/logo.png">
	<title>pakar kakao</title>  
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>

<body>
  <div class="container">
    <header class="header clearfix">
		<div class="article clearfix">
			<div class="col_100 clearfix">
				<div class="logo"><img src="images/logo.png" /></div>
			</div>
		</div>
    </header>
	<div class="hero clearfix">
		<div class="col_100">
			<ul id="nav">
	           	<li><a href="index.php">Home</a></li>
				<li><a href="Diagnosa.php">Diagnosa</a></li>
	            <li><a href="info.php">Info</a>
	            <li><a href="saran.php">Saran</a>
				<li><a href="About.php">About</a>
				<li><a href="Help.php">Help</a>
	            <li><a href="admin/login.php">Login</a></li>
	        </ul>
		</div>
		<div class="clearfix"></div>
	</div>
	
	<article class="article clearfix">
			<div class="col_100">
				<h1>Saran</h1>
				<p>
				 Berikut saran untuk tanaman kakao yang terserang hama dan penyakit :
				</p>
		<table class="table table-bordered">
              <tr>
                <th class="align-left">No</th>
				<th class="align-left">Penyakit</th>
                <th class="align-left">Penanganan</th>
              </tr>
         <?php
         include("config/koneksi.php");
         $sql   = "SELECT * FROM Penyakit";
         $hasil = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");
         
         while($data = mysql_fetch_assoc($hasil)){
         ?>
            <tr>
               <td align="center"><?php echo $data['idPenyakit']; ?></td>
               <td><?php echo $data['Penyakit']; ?></td>
               <td><?php echo $data['Penanganan']; ?></td>               
            </tr>
         <?php
         }
         
         ?>
      </table>
			</div>
		</article>
    
    <footer class="footer clearfix">
		<div class="article">
		<br />
			<div align="center">Copyright&copy; Pakar Kakao 2019. All Right Reserved.</div>
		</div>
    </footer>

  </div>
</body>
</html>