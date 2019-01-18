<?php
include "config/koneksi.php";

$dlpenyakit = $_POST['Gejala'];
echo json_encode($dlpenyakit);
?>
<table class="table table-bordered">
            <thead>
              <tr>
          
				<th class="align-left">ID Rule</th>
                <th class="align-left">ID Gejala</th>
                <th class="align-left">ID penyakit</th>
				<th class="align-left">Probabilitas gejala</th>
              </tr>
			  </thead>
</table>			  
<?php
foreach($dlpenyakit as $ddata){
	$sql   = "SELECT * FROM rule where idGejala=$ddata";
	$diagnosaa = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");
	
	foreach(array(mysql_fetch_assoc($diagnosaa)) as $data2){
		$rl = $data2['idPenyakit'];
		echo $rl;

		echo "   =    ";
		$sql = "SELECT * FROM rule where idPenyakit=$rl AND idGejala=$ddata";
		$rulee = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");
		
		// $sql1 = "INSERT INTO jumlah_prob (idPenyakit,Jumlah) SELECT idPenyakit,Probabilitas_gejala FROM rule WHERE idPenyakit=$rl AND idGejala=$ddata ";
		// mysql_query($sql1) or exit("Error query : <b>".$sql1."</b>.");
		
		foreach (array(mysql_fetch_assoc($rulee)) as $data3)
		{
			$probb = $data3['Probabilitas_gejala'];
			echo $probb;
			echo "<br>";
		}
		 
		// $sql1 = "Select probabilitas_penyakit from penyakit where idPenyakit=$rl";
		// $py = mysql_query($sql1) or exit("Error query : <b>".$sql1."</b>");
		// $jml = 1;
		// foreach ($a = 1; $a < $pr; $a++ )
		// {
			// $jml = $jml * $pr;
			// $jmlh = $py * $jml;
			// $jml;
			// echo $jmlh;
		// }
    ?>

    <?php
		 }

	?>
	
	<?php
		 }
		 $sql = "SELECT count(idPenyakit) as juml FROM jumlah_prob GROUP by idPenyakit";
		 $qu = mysql_query($sql);
		 $ct = mysql_fetch_row($qu);
		
		 foreach (mysql_fetch_assoc($qu) as $kb)
		 {
		 $sql1 = "SELECT COUNT(Jumlah) as hitung from jumlah_prob WHERE idPenyakit=$rl";
		 $z = mysql_query($sql1)or exit("Salah Goblok");
		 $x = mysql_fetch_assoc($z);
		 echo $x['hitung'] ;
		 
		 // for ($i1 =0 ;$i1 < $ct ; $i1++)
		 // {
			 // for($j = 0 ; $j <= $x ; $j++){
				 // $sql = "Select Jumlah from jumlah_prob where idPenyakit=$rl";
				 // $hitung = mysql_query($sql) or exit("Error Goblok");
				 // $hasil = 1;
				 // $hasil = $hasil*$hitung;
				 
			 // }
			 // $i1++;
			  // echo $hasil;
		 // }
		 // $i++;
		 }
	?>
	
<!--	rumusan akhir	select s.GejalaPenyakit,p.Penyakit,p.Penanganan, s.Penjelasan  from gejalapenyakit s INNER JOIN penyakit p on s.idPenyakit=p.idPenyakit where s.idPenyakit = 1 -->
	
<!--
      
   

    function hitung_dinamis_1(){
      $this->m_crud->truncate_data('jumlah_prob_final');
      $this->m_crud->truncate_data('jumlah_prob');
      
      //daftar gejala yang dipilih
      echo ' gejala yang dipilih : '.$gejala = implode(",",$this->input->post('gejala'));
      echo "<br><br>";
      $all_diagnosa = $this->model_diagnosa->all_diagnosa_dinamis($gejala);
      
      foreach ($all_diagnosa as $data) {
        $rule = $this->model_diagnosa->rule_dinamis($data['idpenyakit'],$gejala);
        $jumlah_probabilitas= 1;
        
        foreach ($rule as $data1) {
            $probabilitas_gejala = $data1['probabilitas_gejala'];
          
            echo $data1['probabilitas_gejala'];

            // perkalian prob gejala
            $jumlah_probabilitas = $jumlah_probabilitas*$probabilitas_gejala;
            echo ' = '.$jumlah_probabilitas;
            echo "<br>";
          
        }

        $idpenyakit = $this->model_diagnosa->idpenyakit($data['idpenyakit']);
        
        //perkalian prob gejala dengan dan di setiap penyakit
        echo $idpenyakit['probabilitas_penyakit']."x".$jumlah_probabilitas;
        
        // hasil perkalian prob gejala dengan dan di setiap penyakit
        $jum = $idpenyakit['probabilitas_penyakit'] * $jumlah_probabilitas;
        echo " = ".$jum;
        echo "<br><br>";
        echo "<hr>";

        $data = array(
            'idpenyakit' => $data1['idpenyakit'],
            'jumlah' => $jum,
        );
        $this->m_crud->insert_data('jumlah_prob', $data);

        //penjumlahan prob semua penyakit
        $jumlah_perkalian_jumlah_probabilitas = $this->model_diagnosa->jum_prob();
        
   
      }
        echo $jumlah_perkalian_jumlah_probabilitas['jumlah'].'<hr>';
        
        $jumlah_prob = $this->model_diagnosa->jumlah_prob();
        
        foreach ($jumlah_prob as $data2) {
          $jumlah = $data2['jumlah'];
          
          //pembagian setiap penyakit / pencarian hasil akhir di setiap penyakit
          echo "<br>".$jumlah."/".$jumlah_perkalian_jumlah_probabilitas['jumlah'];
          
          //hasil pembagian setiap penyakit / pencarian hasil akhir di setiap penyakit
          $jumlah_final = $jumlah / $jumlah_perkalian_jumlah_probabilitas['jumlah']; 
          echo " = ".$jumlah_final;
          $data = array(
              'idpenyakit' => $data2['idpenyakit'],
              'jumlah' => $jumlah_final,
          );
          $this->m_crud->insert_data('jumlah_prob_final', $data);

        }

        $max_prob = $this->model_diagnosa->max_prob();
        echo "<hr>";

        // memilih nilai terbesar dari perhitungan
        echo $max_prob['jumlah'];
        echo json_encode($max_prob);
        
        // hasil diagnosa penyakit
        $hasil = $this->model_diagnosa->hasil($max_prob['idpenyakit']);
        echo "<br>".$hasil['penyakit'];
        echo json_encode($hasil);
    } 
}
