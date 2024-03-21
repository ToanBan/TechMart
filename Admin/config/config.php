<?php 
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $database = "web_phone";
    $conn = new mysqli($servername, $username, $password, $database);
    if($conn->connect_error){
        die("failed " . $conn->connect_error);
    }
    
?>