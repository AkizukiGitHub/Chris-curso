<?php
session_start();
include("includes/conexion.php");
$sql = "INSERT INTO usuarios (usuario, clave, numHabitacion) VALUES ('$_POST[usuario]', '$_POST[clave]', '$_POST[Nhabitacion]')";

if (mysqli_query($conexion, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);

include("includes/encabezado.php");
include("includes/menuBase.php");


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