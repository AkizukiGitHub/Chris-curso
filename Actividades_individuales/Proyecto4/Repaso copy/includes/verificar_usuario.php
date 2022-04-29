<?php
session_start();
if(isset($_POST["enviar"])){

    $u=htmlspecialchars($_POST["email"]);
    $c=htmlspecialchars($_POST["pass"]);

    // Conecta con la BD
    include 'conexion.php';

    // sql para consultar una tabla (según tu BD)
      $sql = "SELECT email, pass FROM usuario where email='$u' and pass='$c' ";
      $resultado = mysqli_query($conexion, $sql);  
    
    if (mysqli_num_rows($resultado) > 0) {
      // Salida de datos para cada fila
      $_SESSION["usuario"]=$u;
      $_SESSION["password"]=$c;
      echo "<br><h1>Bienvenido: $u</h1>";
      header('Location:../logueado.php');
    } else {
        echo "<br><h1>Usuario o contraseña incorrecta</h1>"; 
        session_destroy();
        header('Location:../registro.php');  
       
    } 
    
    mysqli_close($conexion);
 
 }


?>