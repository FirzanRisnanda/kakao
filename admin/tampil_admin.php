      <link rel="icon" type="image/png" href="../images/logo.png">
      <h2>Daftar Admin</h2>
      <p>[ <a href="index.php?page=tambah_admin">Tambah Data</a> ] </p>
      <table width="700px" border="1">
         <tr style="background:#ccc">
            <th width="10%">ID ADMIN</th>
            <th width="30%">USERNAME</th>
            <th width="30%">PASSWORD</th>
            <th width="30">AKSI</th>
         </tr>
         <?php
         
         
         
         $sql   = "SELECT * FROM Admin ";
         $hasil = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");
         
         while($data = mysql_fetch_assoc($hasil)){
         ?>
            <tr>
               <td align="center"><?php echo $data['idAdmin']; ?></td>
               <td><?php echo $data['Username']; ?></td>
               <td><?php echo $data['Password']; ?></td>
               <td>
                  <a href="index.php?page=detail_admin&id=<?php echo $data['idAdmin']; ?>">
                     Detail
                  </a>
                  <a href="index.php?page=edit_admin&id=<?php echo $data['idAdmin']; ?>">
                     Ubah
                  </a>
                  <a href="index.php?page=hapus_admin&id=<?php echo $data['idAdmin']; ?>" 
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