<?php
// 1. Conecta con la BD
    include 'conexion.php';

/* 2. Crea la consulta sql para borrar uno o más registros. Ejemplo:
  $id=15;
  $sql = "DELETE FROM `usuario` WHERE `id`='$id';";*/
  $sql="";
  
if (mysqli_query($conexion, $sql)) {
  echo "Usuario borrado con éxtito";
} else {
  echo "Error borrando usuario: " . mysqli_error($conexion);
}

//3. cierra la conexión con la BD
mysqli_close($conexion);
?>
