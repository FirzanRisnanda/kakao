<?php
session_start();
include "../config/koneksi.php";
//include "library.php";
//print_r($_SESSION);
if(empty($_SESSION['namauser']) ) {
//echo "blum ada";
header('location:login.php');
exit;
}
?>


<html>
<head>
<link rel="icon" type="image/png" href="../images/logo.png">
<title>Admin Pakar Kakao</title>
<link href="asset/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="satu">
    <div id="satu_con">
        <div id="satu_a">
            <span class="satu_aa">Selamat Datang Administrator</span>
        </div>
        <div id="satu_b">
            <ul>
                <li><a href="index.php" class="pilih">Home</a></li>
                <li><a href="index.php?page=tampil_gejala">Gejala</a>
                <li><a href="index.php?page=tampil_penyakit">Penyakit</a>
                <li><a href="index.php?page=tampil_rule">Rule</a>
                <li><a href="index.php?page=tampil_admin">Admin</a>
                <li><a href="index.php?page=logout">Logout</a>
                    
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="dua">
    <div id="dua_con">
        <div id="dua_a">
            <div id="dua_aa">

            </div>
            <div id="dua_ac">
                
            </div>
            <div id="dua_ab">
                <?php
                if (isset($_GET['page']))
                {

                    if ($_GET['page'] == "")
                        {
                            include ("home.php");
                        }
                    else
                        {
                            include ($_GET['page'].".php");
                        }
                }
                else
                {
                    include ("home.php");
                }
                ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>

