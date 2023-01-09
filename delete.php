<?php 
    include_once('connection.php');
    $id = $_GET['id'];
    $query = mysqli_query($conn, "DELETE FROM kereta WHERE id ='$id' ");

    header('Location: senarai.php');
?>