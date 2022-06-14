<?php   
session_start();   //inicio de sesion

if(isset($_POST["login"])){   // esperando al botón

    $nick=htmlspecialchars($_POST["usuario"]); //recibir datos
    $pass=htmlspecialchars($_POST["clave"]); //recibir datos
    // Conecta con la BD
    include '../BD/conexion.php'; //incluye el archivo de conexión
    // sql para consultar una tabla (según tu BD)
    $sql = "SELECT id, nick, pass FROM usuario where nick='$nick' and pass='$pass' "; //sql para consultar el usuario
    $resultado = mysqli_query($conexion, $sql);   //ejecuta la consulta y guarda el resultado en una variable
    
    if (mysqli_num_rows($resultado) > 0) { // si se encuentra el usuario
      // Salida de datos para cada fila
      $row = mysqli_fetch_assoc($resultado); //guarda el resultado en una variable
      $_SESSION["id"]=$row["id"]; //guarda el id en una variable de sesion
      $_SESSION["usuario"]=$nick; //guarda el nick en una variable de sesion
      $_SESSION["password"]=$pass; //guarda el password en una variable de sesion
      echo "<br><h1>Bienvenido: $nick</h1>";
      header('Location:../../tutoriales.php'); //redirige a la pagina de inicio
    } else { // si no se encuentra el usuario
        echo "<br><h1>Usuario o contraseña incorrecta</h1>"; 
        header('Location:../../inicio.php');   //redirige a la pagina de inicio
        session_destroy(); //destruye la sesion
    } 
    
    mysqli_close($conexion); //cierra la conexión con la BD
 }
?>