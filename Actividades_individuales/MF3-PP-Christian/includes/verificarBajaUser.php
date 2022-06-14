<?php   
session_start();    // Inicia la sesión
if(isset($_POST["baja"])){ // Si se presionó el botón de borrar usuario
    $nick=htmlspecialchars($_POST["usuario"]); // Se recibe el usuario
    $password=htmlspecialchars($_POST["password"]); // Se recibe la contraseña

    // datos de la session
    $id = $_SESSION["id"]; // Se recibe el id del usuario
    $user = $_SESSION['usuario']; // Se recibe el usuario
    $pass = $_SESSION['password']; // Se recibe la contraseña


    if($nick == $user && $password == $pass){ // Si el usuario y la contraseña son correctos
        include 'BD/conexion.php';
        $sql = "DELETE FROM usuario WHERE id = $id"; // Se elimina el usuario segun el id en la session
        $resultado = mysqli_query($conexion, $sql); // Se ejecuta la consulta
        if($resultado){ // Si se eliminó el usuario
            header('Location:../inicio.php'); // Se redirecciona a la página de inicio
        }else{ // Si no se eliminó el usuario
            echo "<br><h1>Error al borrar usuario</h1>"; // Se muestra un mensaje de error
            header('Location:../inicio.php'); // Se redirecciona a la página de inicio
        }
    }
}
?>