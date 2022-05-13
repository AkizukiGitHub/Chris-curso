<?php
session_start();
 
if(isset($_POST["registrar"])){    // esperando al botón
   
    $e=htmlspecialchars($_POST["email"]);
    $p=htmlspecialchars($_POST["pass"]);
    $coste = 10;
    $options = ['cost' => $coste];


    $inicio = microtime(true);
    $p1 = password_hash($p, PASSWORD_BCRYPT, ['cost' => $coste]);
    $fin = microtime(true);
    $tiempo = $fin - $inicio;
    echo "<br>Tiempo de ejecución: $tiempo segundos";

          // Conecta con la BD
    include 'conexion.php';

    // sql para insertar un registro
        $sql = "INSERT INTO usuario VALUES ( null, '$e', '$p1')";
        echo $sql;
        printf("Conjunto de caracteres inicial: %s\n", mysqli_character_set_name($conexion));
        
        if (mysqli_query($conexion, $sql)) {
            header('Location:../inicio.php');
        } else {
            echo "Error inténtelo más tarde: " . mysqli_error($conexion);session_destroy(); 
            header('Location:../inicio.php');
        }
 
}

?>