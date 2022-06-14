<?php
session_start();    //inicio de sesion
 
if(isset($_POST["registrar"])){    // esperando al botón
    $nick=htmlspecialchars($_POST["usuario"]);  //recibir datos
    $pass=htmlspecialchars($_POST["clave"]);    //recibir datos
    $email=htmlspecialchars($_POST["email"]);   //recibir datos
    $nombre=htmlspecialchars($_POST["nombre"]); //recibir datos
    $apellido=htmlspecialchars($_POST["apellidos"]);    //recibir datos

       // Conecta con la BD
    include '../BD/conexion.php';

    // sql para insertar un registro
        $sql = "INSERT INTO usuario VALUES ( null, '$nick', '$pass', '$email', '$nombre', '$apellido');"; //sql para insertar un registro
        echo $sql; // imprime el sql
        
        if (mysqli_query($conexion, $sql)) { // si se ejecuta la consulta
            mysqli_close($conexion); //cierra la conexión con la BD
            header('Location:../../login.php'); //redirige a la pagina de inicio de sesion
        } else {    // si no se ejecuta la consulta
            echo "Error inténtelo más tarde: " . mysqli_error($conexion);session_destroy(); //muestra el error
            mysqli_close($conexion); //cierra la conexión con la BD
            header('Location:../../index.php'); //redirige a la pagina de inicio
        } // cierra el if
} // cierra el if
?>

