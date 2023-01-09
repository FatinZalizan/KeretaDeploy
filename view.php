<?php 
 
      include('connection.php'); 
        if(isset($_GET['view'])){ 
        $id= $_GET['view']; 
        $query = "SELECT * FROM kereta WHERE id={'id'}";  
        $result = mysqli_query($conn,$query); 
 
    $i= 1; 
 
      while($row = mysqli_fetch_assoc($result)){ 
          $id = $row['id']; 
          $nama_pembeli = $row['nama_pembeli'];
          $jenis_kereta = $row['jenis_kereta']; 
          $nama_kereta = $row['nama_kereta']; 
          $negara = $row['negara']; 

    echo  "<tr>"; 
    echo  "<th scope='row'>$i</th>"; 
    echo  "<td>$nama_pembeli</td>"; 
    echo  "<td>$jenis_kereta</td>"; 
    echo  "<td>$nama_kereta</td>"; 
    echo  "<td>$negara</td>"; 
    echo  "</tr>"; 
    $i++; 
      } 
    } 
?>