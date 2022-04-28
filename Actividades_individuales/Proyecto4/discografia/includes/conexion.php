<?php
$username = "root";
$password = "";
$hostname = "localhost";

//create the connection
$conn = mysqli_connect($hostname, $username, $password);

//validate the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else {
    echo "Connected successfully";
}

//the connection will close when the script is terminated
mysqli_close($conn);

?>

