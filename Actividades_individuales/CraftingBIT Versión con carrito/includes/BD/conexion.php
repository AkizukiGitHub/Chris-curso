<?php
// Usar constantes en lugar de variables: 
// Sintaxis: define(NOMBRE, Valor, case-insensitive) case-insensitive por defecto es false
    $nombreServidor = "localhost";
    $nombreUsuario = "root";
    $password = "";
    $nombreBD = "craftingbit";
 
  //1. Crea la Conexión
  $conexion = mysqli_connect($nombreServidor, $nombreUsuario, $password, $nombreBD);

  //2. Verifica la Conexión
  if (!$conexion) {
    die("La Conexión ha fallado: " . mysqli_connect_errno());
  }else{
  // echo "Conexión exitosa <br>";
}
  //PD:La conexión se cerrará automáticamente cuando finalice el script. 
  //Para cerrar la conexión antes, se usa: mysqli_close($conexion);
  
?>