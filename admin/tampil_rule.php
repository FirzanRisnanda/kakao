<link rel="icon" type="image/png" href="../images/logo.png">
      <h2>Daftar Rule</h2>
      <p>[ <a href="index.php?page=tambah_rule">Tambah Data</a> ] </p>
      <table width="700px" border="1">
         <tr style="background:#ccc">
            <th >ID Rule</th>
            <th >ID Gejala</th>
            <th >ID Penyakit</th>
            <th >Probabilitas Gejala</th>
            <th >Aksi</th>
         </tr>
         <?php
         
         
         
         $sql   = "SELECT * FROM Rule";
         $hasil = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");
         
         while($data = mysql_fetch_assoc($hasil)){
         ?>
            <tr>
               <td align="center"><?php echo $data['idRule']; ?></td>
               <td><?php echo $data['idGejala']; ?></td>
               <td><?php echo $data['idPenyakit']; ?></td>
               <td><?php echo $data['Probabilitas_gejala']; ?></td>
               <td>
                  <a href="index.php?page=detail_rule&id=<?php echo $data['idRule']; ?>">
                     Detail
                  </a>
                  <a href="index.php?page=edit_rule&id=<?php echo $data['idRule']; ?>">
                     Ubah
                  </a>
                  <a href="index.php?page=hapus_rule&id=<?php echo $data['idRule']; ?>" 
                     onClick="return cekHapus();">
                     Hapus
                  </a>
               </td>
            </tr>
         <?php
         }
         
         ?>
      </table>
      <script language="JavaScript">
      function cekHapus(){
         if(confirm("Yakin ingin menghapus data ini?")){
            return true;
         } else {
            return false;
         }
      }
   </script>
   