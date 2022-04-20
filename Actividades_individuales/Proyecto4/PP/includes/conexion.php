<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel";

    // Create connection
    $conexion = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conexion) {
        die("Connection failed: " . mysqli_connect_error());
    }
        echo "Connected successfully<br>";


?>