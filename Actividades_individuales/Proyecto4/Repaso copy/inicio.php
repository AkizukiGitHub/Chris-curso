<?php
    $titulo="página de inicio de repaso con titulo personalizado";
    include("includes/encabezado.php");
    //include("includes/menu.php");
?>
<h1>Login</h1>
<form action="includes/verificar_usuario.php" method="POST">
    <label>Email</label><input type="text" name="email">
    <label>Contraseña</label><input type="text" name="pass">
    <input type="submit" name='enviar'>
</form>

<?php
    include("includes/pie.php");
?>
