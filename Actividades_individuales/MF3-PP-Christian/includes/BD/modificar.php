<?php
// 1. Conecta con la BD
    include 'conexion.php';

/* 2. sql para modificar un registro
$nick=htmlspecialchars($_POST['nick']);
$email=htmlspecialchars($_POST['email']);
$clave=htmlspecialchars($_POST['clave']);
Ejemplo: 
$id=12;
$sql = "UPDATE `usuario` SET `nick`='$nick',`email`='$email',`clave`='$clave' WHERE `id`='$id';";
*/
$sql ="";
if (mysqli_query($conexion, $sql)) {
  echo "Usuario modificado con éxtito";
} else {
  echo "Error modificando usuario: " . mysqli_error($conexion);
}

//3. cierra la conexión con la BD
mysqli_close($conexion);
?>
