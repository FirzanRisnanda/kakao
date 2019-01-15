<link rel="icon" type="image/png" href="../images/logo.png">
      <h2>Daftar Gejala Tanaman Kakao</h2>
      <p>[ <a href="index.php?page=tambah_gejala">Tambah Data</a> ] </p>
      <table width="500px" border="1">
         <tr style="background:#ccc">
            <th width="10%">ID GEJALA</th>
            <th width="60%">GEJALA</th>
            <th width="30">Aksi</th>
         </tr>
         <?php
         $sql   = "SELECT * FROM Gejala ";
         $hasil = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");
         
         while($data = mysql_fetch_assoc($hasil)){
         ?>
            <tr>
               <td align="center"><?php echo $data['idGejala']; ?></td>
               <td><?php echo $data['Gejala']; ?></td>
               <td>
                  <a href="index.php?page=detail_gejala&id=<?php echo $data['idGejala']; ?>">
                     Detail
                  </a>
                  <a href="index.php?page=edit_gejala&id=<?php echo $data['idGejala']; ?>">
                     Ubah
                  </a>
                  <a href="index.php?page=hapus_gejala&id=<?php echo $data['idGejala']; ?>" 
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