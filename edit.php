<?php
    session_start();
    include_once('connection.php');
    if(isset($_POST['edit'])){
        $id = $_POST['id'];
        $nama_pembeli = $_POST['nama_pembeli'];
        $jenis_kereta = $_POST['jenis_kereta'];
        $nama_kereta = $_POST['nama_kereta'];
        $negara = $_POST['negara'];

    $keputusan = mysqli_query($conn, "UPDATE kereta SET nama_pembeli = '$nama_pembeli',jenis_kereta = '$jenis_kereta', nama_kereta= '$nama_kereta', negara= '$negara' WHERE id= $id");
    }
    header('Location:senarai.php');
?>