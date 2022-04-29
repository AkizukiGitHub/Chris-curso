<?php
    $titulo="página de inicio que solo ven los usuarios logueados";
    include("includes/encabezado.php");
    //include("includes/menu.php");
?>
<h1>Bienvenido</h1>
    <form action="includes/consultar.php" method="post">
        <label>Consulta</label><input type="text" name="email">
        <input type="submit" name="consultar">
    </form>

    <form action="includes/mostrar_usuarios_registrados.php" method="post">
        <input type="submit"  value="Mostrar usuarios registrados" name="mostar_usuarios">
    </form>


<?php
    include("includes/pie.php");
?>
