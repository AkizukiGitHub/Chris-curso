<?php
session_start();
// aqui si esta creado sesion se hace un push si no esta creado se crea y añade el usuario en ambos casos
if($_POST){
if (empty($_SESSION["usuario"])){
    	$_SESSION["usuario"]=[[$_POST["usuario"],$_POST["clave"],$_POST["Nhabitacion"]]];
}else{
    array_push($_SESSION["usuario"],[$_POST["usuario"], $_POST["clave"],$_POST["Nhabitacion"]]);
}
print_r($_SESSION["usuario"]);
echo "Aqui te imprimo los datos del loggin para tenerlos a mano";
// esto es para que lo puedas ver al revisar no seria parte de la pagina 
}
include("includes/encabezado.php");
include("includes/menuBase.php");
// encabezados y menu aqui se usa el menu base que es el que tiene el inicio el registro el login pero no los servicios
?>
?>
<form action="logueado.php" method="post">
        <label>Usuario</label><input type="text" name="usuario" required>
        <label>clave</label><input type="text" name="clave" required>
        <input type="submit" name="btn1">
</form>
<!-- formulario con los datos pedidos antes y que se guardaron en la sesion -->
<center>
<span style="color: red;"> <strong>Aqui solamente puedes iniciar sesion con los datos registrados, lo verifica desde la session</strong></span>
</center>

<?php
include("includes/pie.php");
?>
z