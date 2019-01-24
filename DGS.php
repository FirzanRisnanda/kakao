<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link href="favicon.ico" rel="shortcut icon">
	<!-- CSS dasar -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/custom.css">
    <link rel="icon" type="image/png" href="images/logo.png">
	<title>pakar kakao</title> 
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
	            
	        </ul>
		</div>
		<div class="clearfix"></div>
	</div>


    <?php
        include "config/koneksi.php";

        //reset data
        $delprob   = "DELETE FROM jumlah_prob";
        mysql_query($delprob) or exit("Error query: <b>".$sql."</b>.");
        $dekprobakhir   = "DELETE FROM jumlah_prob_akhir";
        mysql_query($dekprobakhir) or exit("Error query: <b>".$sql."</b>.");
        $resetprob = "ALTER TABLE jumlah_prob AUTO_INCREMENT =1";
        mysql_query($resetprob) or exit("Error query: <b>".$sql."</b>.");
        $resetprobakhir = "ALTER TABLE jumlah_prob_akhir AUTO_INCREMENT =1";
        mysql_query($resetprobakhir) or exit("Error query: <b>".$sql."</b>.");

        //get data gejala from user
        $dlpenyakit = $_POST['Gejala'];
 
    ?>
        
    <!--get and show idGejala and idPenyakit-->
    <?php
        foreach($dlpenyakit as $ddata){
            $sqlgetidGejala   = "SELECT * FROM rule where idGejala=$ddata ";
            $getidGejala = mysql_query($sqlgetidGejala) or exit("Error query: <b>".$sql."</b>.");
            while($row = mysql_fetch_assoc($getidGejala)){
                $idgejala1= $row['idGejala'];
                 
                $idpenyakit1 = $row['idPenyakit'];
                
                //make array idPenyakit for distinct
                $idpenyakit2[] = $row['idPenyakit'];

                //Query for get data from rule
                $sqlgetdatajmlProb = "SELECT * From rule 
                                        WHERE idGejala = $idgejala1 and idPenyakit=$idpenyakit1" ;
                $getdatajmlProb = mysql_query($sqlgetdatajmlProb) or exit("Error query: <b>".$sql."</b>.");           
                while ($row = mysql_fetch_assoc($getdatajmlProb)){
                    $idpenyakitProb = $row['idPenyakit'];
                    $jumlahProb = $row['Probabilitas_gejala'];
                    //Query insert data idPenyakit and jumlahProb from rule to jumlah_prob
                    $sqlinsertdatajmlProb = "INSERT INTO jumlah_prob (idPenyakit, Jumlah) values ('$idpenyakitProb','$jumlahProb')";
                    mysql_query($sqlinsertdatajmlProb) or exit("Error query : <b>".$sql."</b>."); 
                } 
            }      
        }
    ?>
    
    <?php
    //Make new array from idPenyakit = Distinct
        echo"<br>";
        $imidPenyakit = implode(",",$idpenyakit2);
        $exidPenyakit = explode(",",$imidPenyakit);
        $dataPenyakitsort = array_unique($exidPenyakit);
        $sort = sort($dataPenyakitsort);
        for($x = 0; $x < count($dataPenyakitsort); $x++) {
            $newdata = $dataPenyakitsort[$x];
            $newidPenyakit[] = $dataPenyakitsort[$x];
            
            $sqlidprobPenyakit = "SELECT * FROM penyakit where idPenyakit=$newdata";
            $idprobPenyakit = mysql_query($sqlidprobPenyakit) or exit("Error query : <b>".$sql."</b>."); 
            while($row = mysql_fetch_assoc($idprobPenyakit)){
            $getprobPenyakit[] = $row['Probabilitas_penyakit'];
            }
        }
    ?>
    <?php
        //get multiply data from propbabilitas_penyakit * probabilitas_gejala
        $sqlhtgdatajmlProb = "SELECT idPenyakit, EXP(SUM(log(Jumlah))) as Jumlah_Probabilitas
            FROM jumlah_prob GROUP by idPenyakit";
        $htgdatajmlProb = mysql_query($sqlhtgdatajmlProb) or exit("Error query : <b>".$sql."</b>.");          
        while($row = mysql_fetch_assoc($htgdatajmlProb)){
            $jmlProb[] =  $row['Jumlah_Probabilitas'] .";";
        }
    -   
        //make data array
        $improbPenyakit = implode(",",$getprobPenyakit);
        $exprobPenyakit = explode(",",$improbPenyakit);
        $improbtot = implode(",",$jmlProb);
        $exprobtot = explode(",",$improbtot);
        //hitung total Prop masing-masing penyakit
        for($i=0; $i < count($exprobPenyakit); $i++){
            $hasil[$i] = $exprobPenyakit[$i] * $exprobtot[$i];     
        }
       
        $imhasi = implode(",",$newidPenyakit);
        $exhasi = explode(",",$imhasi);
        $imhasil = implode(",",$hasil);
        $exhasil = explode(",",$imhasil);
        $hehe = array_combine($exhasi,$exhasil);
        //print_r($hehe);
        foreach($hehe as $key=>$value){
            $sqlinsertidPenyakit = "INSERT INTO jumlah_prob_akhir (idPenyakit,Jumlah) 
                                        VALUES ('$key','$value') ";
            mysql_query($sqlinsertidPenyakit) or exit("Error query : <b>".$sql."</b>."); 
        }
    ?>
<table class="table table-bordered">
<tr>
<th>Jenis Penyakit</th>
<th>Penanganan</th>
</tr>
    <?php 
        $sqlpenyakit = "SELECT a.idPenyakit, a.Penyakit, a.Penanganan, Min(b.Jumlah) 
        FROM penyakit as a
        JOIN jumlah_prob_akhir AS b 
        ON a.idPenyakit = b.idPenyakit";
        $penyakit = mysql_query($sqlpenyakit) or exit("Error query : <b>".$sql."</b>."); 
        while($row = mysql_fetch_assoc($penyakit)){
       ?><tr> 
			<td><?php echo $row['Penyakit'];?></td> 
			<td><?php echo $row['Penanganan'];?></td>
        </tr>
		<?php 
		}
     ?>
     </table>      
    </br>
    <button>
        <a href = "Diagnosa.php">
            Exit
        </a>
    </button>

    <footer class="footer clearfix">
		<div class="article">
	    	<br />
			<div align="center">Copyright&copy; Pakar Kakao 2019. All Right Reserved.</div>
		</div>
    </footer>
</body>
</html>
