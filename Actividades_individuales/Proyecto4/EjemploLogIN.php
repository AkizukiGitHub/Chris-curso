<?php
// phpinfo() --> Muestra la información de php.ini
//Se crea la sesión.
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Login</title>
</head>
<body>

<form action="" method="POST">
<input type="text" name="usuario">
<input type="text" name="clave">
<input type="submit" name="ingresar">

</form>


<?php
var_dump($_SESSION);
//Si la sesión ya está iniciada, se incrementa el valor.
if (empty($_SESSION["usuario"])){
$_SESSION["usuario"]="Aday";
$_SESSION["clave"]="1234";
}
//Pero, si es la primera vez que se crea la sesión, se inicializa la variable.
// else{
// // --$_SESSION["nVisitas"];
// }
var_dump($_SESSION);
if (($_POST["usuario"]==$_SESSION["usuario"]) && ($_POST["clave"]==$_SESSION["clave"])){

echo "Bienvenido!!!";
}else{

echo "<h2>Usario y/o contraseña incorrecta</h2>";
}


//Al llegara 10 sesiones, se destruye la sesión.
// if($_SESSION['nVisitas']==10){
// session_destroy();
// }


?>

</body>