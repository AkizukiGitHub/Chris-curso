<?php
session_start();
// if(isset($_POST["enviar"])){

    $u=htmlspecialchars($_POST["email"]);
    $c=htmlspecialchars($_POST["pass"]);
    $u="JavierBCRYPT_COSTE15@correo.es";
    $c="123456789";


    // Conecta con la BD
    include 'conexion.php';

    // sql para consultar una tabla (según tu BD)
      $sql = "SELECT email, pass FROM usuario where email='$u'";
      $resultado = mysqli_query($conexion, $sql);  
      $cHash;
      $cHash = mysqli_fetch_assoc($resultado);

      
    if ($valido = password_verify($c,$cHash["pass"])) {
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
 
//  }


?>