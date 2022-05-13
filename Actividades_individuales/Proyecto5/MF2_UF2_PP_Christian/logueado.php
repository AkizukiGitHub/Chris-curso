<?php
    $titulo="página de inicio que solo ven los usuarios logueados";
    include("includes/encabezado.php");
    //include("includes/menu.php");
?>
<h1>Bienvenido</h1>

    <form action="includes/consultar.php" method="post">
        <input type="submit"  value="Mostrar usuarios Santa Cruz" name="mostar_usuarios">
    </form>


<?php
    include("includes/pie.php");
?>
