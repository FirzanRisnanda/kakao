<link rel="icon" type="image/png" href="../images/logo.png">
      <h2>Daftar Penyakit Tanaman Kakao</h2>
      <p>[ <a href="index.php?page=tambah_penyakit">Tambah Data</a> ] </p>
      <table width="700px" border="1">
         <tr style="background:#ccc">
            <th width="10%">ID Penyakit</th>
            <th width="20%">Penyakit</th>
            <th width="40%">Penanganan</th>
            <th width="10%">Probabilitas</th>
            <th width="20%">Aksi</th>
            
         </tr>
         <?php
         
         
         
         $sql   = "SELECT * FROM Penyakit";
         $hasil = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");
         
         while($data = mysql_fetch_assoc($hasil)){
         ?>
            <tr>
               <td align="center"><?php echo $data['idPenyakit']; ?></td>
               <td><?php echo $data['Penyakit']; ?></td>
               <td><?php echo $data['Penanganan']; ?></td>
               <td><?php echo $data['Probabilitas_penyakit']; ?></td>               
               <td>
                  <a href="index.php?page=detail_penyakit&id=<?php echo $data['idPenyakit']; ?>">
                     Detail
                  </a>
                  <a href="index.php?page=edit_penyakit&id=<?php echo $data['idPenyakit']; ?>">
                     Ubah
                  </a>
                  <a href="index.php?page=hapus_penyakit&id=<?php echo $data['idPenyakit']; ?>" 
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
   