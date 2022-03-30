<?php
session_start();
// var_dump($_SESSION);
if($_POST){
if (empty($_SESSION["usuario"])){
	// $_SESSION["usuario"][]=array($_POST["usuario"],$_POST["clave"]); opción 1
    	$_SESSION["usuario"]=[[$_POST["usuario"],$_POST["clave"]]]; // opción 2
    // $_SESSION["usuario"]=[array($_POST["usuario"],$_POST["clave"])]; opción 3
}else{
    array_push($_SESSION["usuario"],[$_POST["usuario"], $_POST["clave"]]);
}
print_r($_SESSION["usuario"]);
}
include("includes/encabezado.php");
include("includes/menu.php");
?>
<form action="logueado.php" method="post">
        <label>Usuario</label><input type="text" name="usuario" require>
        <label>clave</label><input type="text" name="clave" require>
        <input type="submit" name="btn1">
</form>

<?php
include("includes/pie.php");
?>
