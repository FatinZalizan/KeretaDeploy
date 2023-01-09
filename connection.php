<?php
// membuat connection dengan db
$conn = new mysqli('localhost','root','','keretadeploy');

// jika gagal membuat sambungan dengan db
if($conn->connect_error){
    die("Database cannot find:". $conn->connect_error);
}

?>