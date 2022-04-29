<?php
$nombreServidor="localhost";
$nombreUsuario="root";
$pass="";
$nombreBD="ferreteria";

// Crea la Conexión
$conexion = mysqli_connect($nombreServidor, $nombreUsuario, $pass, $nombreBD);

// Verifica la Conexión
if (!$conexion) {
  die("La Conexión ha fallado: " . mysqli_connect_error());
}else{
echo "Conexión exitosa <br>";
}

?>