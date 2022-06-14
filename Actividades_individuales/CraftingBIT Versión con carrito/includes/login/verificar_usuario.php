<?php   
session_start();

if(isset($_POST["login"])){

    $nick=htmlspecialchars($_POST["usuario"]);
    $pass=htmlspecialchars($_POST["clave"]);
    // Conecta con la BD
    include '../BD/conexion.php';
    // sql para consultar una tabla (según tu BD)
    $sql = "SELECT id, nick, pass FROM usuario where nick='$nick' and pass='$pass' ";
    $resultado = mysqli_query($conexion, $sql);  
    
    if (mysqli_num_rows($resultado) > 0) {
      // Salida de datos para cada fila
      $row = mysqli_fetch_assoc($resultado);
      $_SESSION["id"]=$row["id"];
      $_SESSION["usuario"]=$nick;
      $_SESSION["password"]=$pass;
      echo "<br><h1>Bienvenido: $nick</h1>";
      header('Location:../../tutoriales.php');
    } else {
        echo "<br><h1>Usuario o contraseña incorrecta</h1>";
        header('Location:../../inicio.php');  
        session_destroy();
    } 
    
    mysqli_close($conexion);
 
 }

?>