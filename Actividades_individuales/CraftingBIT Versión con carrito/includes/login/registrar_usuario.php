<?php
session_start();
 
if(isset($_POST["registrar"])){    // esperando al botón
    $nick=htmlspecialchars($_POST["usuario"]);
    $pass=htmlspecialchars($_POST["clave"]);
    $email=htmlspecialchars($_POST["email"]);
    $nombre=htmlspecialchars($_POST["nombre"]);
    $apellido=htmlspecialchars($_POST["apellidos"]);
    // $direccion="";
    // $telefono="";
    // $cp="";

       // Conecta con la BD
    include '../BD/conexion.php';

    // sql para insertar un registro
        $sql = "INSERT INTO usuario VALUES ( null, '$nick', '$pass', '$email', '$nombre', '$apellido');";
        echo $sql;
        // printf("Conjunto de caracteres inicial: %s\n", mysqli_character_set_name($conexion));
        
        if (mysqli_query($conexion, $sql)) {
            mysqli_close($conexion); //cierra la conexión con la BD
            header('Location:../../login.php');
        } else {
            echo "Error inténtelo más tarde: " . mysqli_error($conexion);session_destroy(); 
            mysqli_close($conexion);
            header('Location:../../index.php');
        }
 
}

?>

