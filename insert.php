<?php
    session_start();
    include_once('connection.php');
    if(isset($_POST['submit'])){
        $nama_pembeli = $_POST['nama_pembeli'];
        $jenis_kereta = $_POST['jenis_kereta'];
        $nama_kereta = $_POST['nama_kereta'];
        $negara = $_POST['negara'];

    $keputusan = mysqli_query($conn, "INSERT INTO kereta(nama_pembeli,jenis_kereta, nama_kereta, negara) VALUES ('$nama_pembeli','$jenis_kereta', '$nama_kereta', '$negara')");
    }
    header('Location:senarai.php');
?>