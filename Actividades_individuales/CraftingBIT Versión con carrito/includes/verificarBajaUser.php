<?php   
session_start();
echo "<br><h1>entre</h1>";
if(isset($_POST["baja"])){
    echo "<br><h1>entre if post login</h1>";
    $nick=htmlspecialchars($_POST["usuario"]);
    echo "<br><h1>$nick</h1>";
    $password=htmlspecialchars($_POST["password"]);
    echo "<br><h1>$password</h1>";

    $id = $_SESSION["id"];
    echo "<br><h1>$id</h1>";
    $user = $_SESSION['usuario'];
    echo "<br><h1>$user</h1>";
    $pass = $_SESSION['password'];
    echo "<br><h1>$pass</h1>";


    if($nick == $user && $password == $pass){
        echo "<br><h1>entre if nick y pass</h1>";
        // delete the user
        include 'BD/conexion.php';
        $sql = "DELETE FROM usuario WHERE id = $id";
        $resultado = mysqli_query($conexion, $sql);
        if($resultado){
            echo "<br><h1>Usuario borrado correctamente</h1>";
            header('Location:../inicio.php');
        }else{
            echo "<br><h1>Error al borrar usuario</h1>";
            header('Location:../inicio.php');
        }
    }
}
?>