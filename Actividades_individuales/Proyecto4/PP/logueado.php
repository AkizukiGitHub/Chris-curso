<?php
session_start();
if (isset($_POST['btnLogin'])) {
   $u=htmlspecialchars($_POST['usuario']);
   $c=htmlspecialchars($_POST['clave']);
}

include("includes/conexion.php");
include("includes/encabezado.php");
include("includes/menuLogged.php");

$sql = "SELECT usuario, clave FROM usuarios WHERE usuario='$u' AND clave='$c'";

$lastquery = mysqli_query($conexion, $sql);

if (mysqli_num_rows($lastquery) > 0) {
    $_SESSION['usuario'] = $u;
    $_SESSION['clave'] = $c;
    echo "<h1>Bienvenido</h1>";
}else {
    echo "<h1>Usuario o clave incorrectos</h1>";
    header("Location: login.php");
    session_destroy();
}
      
mysqli_close($conexion);

// aqui el menu cambia ahora es el menu logged que muestra el nombre del usuario y ahora muestra servicio pero como ya esta logged no muestra iniciar sesion y login
?>
<!-- Aquí empieza el cuerpo de la página -->

<fieldset id="form1" style="margin-left: 2%;">
    <legend><strong>Solicitud Al Restaurante desde la habitacion: </strong></legend>
        <form action="procesada.php" method="post">
            <label><strong>Desayuno Continental</strong></label>
            <input type="radio" name="menu" value="1">
            <br>
            <label><strong>Desayuno Americano</strong></label>
            <input type="radio" name="menu" value="2">
            <br>
            <label><strong>Desayuno Brunch</strong></label>
            <input type="radio" name="menu" value="3"  checked="checked">
            <br>
            <label><strong>Almuerzo</strong></label>
            <input type="radio" name="menu" value="4">
            <br>
            <label><strong>Cantidad de Personas</strong></label>
            <input type="number" name="cantP" required>
            <br>

            <input type="hidden" name="nombre" value="<?php echo $nombrelogged?>">
            <input type="hidden" name="habitacion" value="<?php echo $habitacionlogged?>">

            <input type="submit" name="submit" value="Enviar">

        </form>
</fieldset>   
<center>
<span style="color: red;"> <strong>Aqui tienes la 4 opciones las junte las 4 porque supongo que pides solo una cosa a la vez, si quieres pedir desayuno y almuerzo serian 2 ordenes distintas y podrias hacerlo desde el mismo cliente</strong></span>
<br>
<span style="color: red;"> <strong>Arriba a la derecha en el menu estaria el nombre del usuario que acaba de ingresar sesion</strong></span>

</center>

<?php
include("includes/pie.php");
?>
