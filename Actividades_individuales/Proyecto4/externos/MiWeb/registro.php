<?php
session_start();
include("includes/encabezado.php");
include("includes/menu.php");
?>

<form action="login.php" method="post" class="row g-3">
        <label>Usuario</label><input type="text" name="usuario" required>
        <label>clave</label><input type="text" name="clave" required>
        <input type="submit" name="btn1">
</form>

<?php
        include("includes/pie.php");
?>
