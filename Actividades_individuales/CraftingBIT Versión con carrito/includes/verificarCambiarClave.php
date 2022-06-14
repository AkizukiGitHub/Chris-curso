<?php 
    session_start();

    if(isset($_POST["cambiar"])){
        $nick=htmlspecialchars($_POST["usuario"]);
        $password=htmlspecialchars($_POST["password"]);
        $password2=htmlspecialchars($_POST["password2"]);
        $id = $_SESSION["id"];
        $user = $_SESSION['usuario'];
        $pass = $_SESSION['password'];
        if($nick == $user && $password == $pass){
            include 'BD/conexion.php';
            $sql = "UPDATE usuario SET pass = '$password2' WHERE id = $id";
            $resultado = mysqli_query($conexion, $sql);
            if($resultado){
                echo "<br><h1>Contraseña cambiada correctamente</h1>";
                header('Location:../inicio.php');
            }else{
                echo "<br><h1>Error al cambiar contraseña</h1>";
                header('Location:../inicio.php');
            }
        }
    }

?>