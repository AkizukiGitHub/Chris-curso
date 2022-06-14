<?php 
    session_start();    // Inicia la sesión

    if(isset($_POST["cambiar"])){ // Si se presionó el botón cambiar clave
        $nick=htmlspecialchars($_POST["usuario"]); // Se recibe el usuario
        $password=htmlspecialchars($_POST["password"]); // Se recibe la contraseña
        $password2=htmlspecialchars($_POST["password2"]); // Se recibe la contraseña nueva

        // datos de la session
        $id = $_SESSION["id"];  // Se recibe el id del usuario
        $user = $_SESSION['usuario']; // Se recibe el usuario
        $pass = $_SESSION['password']; // Se recibe la contraseña
        if($nick == $user && $password == $pass){ // Si el usuario y la contraseña son correctos
            include 'BD/conexion.php'; 
            $sql = "UPDATE usuario SET pass = '$password2' WHERE id = $id"; // Se actualiza la contraseña
            $resultado = mysqli_query($conexion, $sql); // Se ejecuta la consulta
            if($resultado){ // Si se actualizó la contraseña
                echo "<br><h1>Contraseña cambiada correctamente</h1>"; // Se muestra un mensaje de éxito
                header('Location:../inicio.php'); // Se redirecciona a la página de inicio
            }else{
                echo "<br><h1>Error al cambiar contraseña</h1>"; // Se muestra un mensaje de error
                header('Location:../inicio.php'); // Se redirecciona a la página de inicio
            }
        }
    }

?>