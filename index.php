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

    <div class="info">
		<article class="article clearfix">
			<div class="col_100_slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
						  <img src="images/satu.jpg" />
						  <p class="flex-caption"></p>
						</li>
						<li>
						  <img src="images/dua.jpg" /></a>
						  <p class="flex-caption"></p>
						</li>
						<li>
						  <img src="images/tiga.jpg" />
						</li>
						<li>
						  <img src="images/empat.jpg" />
						</li>
					</ul>
				</div>
				
			</div>
			<div class="clearfix"></div>
		</article>
	
		<article class="article clearfix">
			<div class="col_100">
				<h1>Selamat Datang Di Aplikasi Diagnosa Penyakit Tanaman Kakao</h1>
			</div>
		</article>
		
    </div>
    
    <footer class="footer clearfix">
		<div class="article">
		<br />
			<div align="center">Copyright&copy; Pakar Kakao 2019. All Right Reserved.</div>
		</div>
    </footer>

  </div>
</body>
</html>