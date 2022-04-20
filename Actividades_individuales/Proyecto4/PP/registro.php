<?php
session_start();
include("includes/encabezado.php");
include("includes/menuBase.php");
// encabezados y menu aqui se usa el menu base que es el que tiene el inicio el registro el login pero no los servicios
?>
?>

<form action="login.php" method="post" class="row g-3">
        <label>Usuario</label><input type="text" name="usuario" required>
        <label>clave</label><input type="text" name="clave" required>
        <label>Numero Habitacion</label><input type="text" name="Nhabitacion" required>
        <input type="submit" name="btn1">
</form>
<!-- formulario con los 3 campos que usamos todos estan requeridos -->
        <center>
        <span style="color: red;"> <strong>Aqui indicas los 3 campos del cliente, todos son requeridos</strong></span>
        </center>
<?php
        include("includes/pie.php");
?>
