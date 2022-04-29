<?php
    $titulo="página de registro de repaso con titulo personalizado";
    include("includes/encabezado.php");
    //include("includes/menu.php");
?>
<h1>Registrate</h1>
<form action="includes/registrar_usuario.php" method="POST">
    <label>Email</label><input type="text" name="email">
    <label>Contraseña</label><input type="text" name="pass">
    <input type="submit" name='registrar'>
</form>

<?php
    include("includes/pie.php");
?>
