<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   ="";
    $conn = mysqli_connect($host, $user, $pass, $db);
    if(!$conn){
        die("Error in database connection". mysqli_connect_error());
    }
?>