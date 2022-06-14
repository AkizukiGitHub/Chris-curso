<?php
// 1. Conecta con la BD
    include 'conexion.php';

// 2. Crea el sql para insertar un registro, recogiendo las variables del formulario
    $nick=htmlspecialchars($_POST['nick']);
    $email=htmlspecialchars($_POST['email']);
    $clave=htmlspecialchars($_POST['clave']);
    $sql = "INSERT INTO `usuario` VALUES (null,'$nick','$email','$clave');";
//3. Ejecuta la consulta
if (mysqli_query($conexion, $sql)) {
  echo "Usuario insertado con éxtito";
} else {
  echo "Error insertando usuario: " . mysqli_error($conexion);
}

//4. cierra la conexión con la BD
  mysqli_close($conexion);
?>
