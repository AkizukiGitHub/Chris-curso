<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
</head>
<body>
    <h1>Inicie sesion aqui.</h1>
    <form action="" method="post">
        <label for="">Usuario</label>
        <input type="text" name="user" required>
        <br>
        <label for="">Contraseña</label>
        <input type="text" name="password" required>
        <br>
        <input type="submit" name="submit" value="Registrarse">
    </form>
<?php
include("php/logInVerificador.php")
?>
</body>
</html>