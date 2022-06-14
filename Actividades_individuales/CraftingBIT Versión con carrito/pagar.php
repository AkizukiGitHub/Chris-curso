<?php
    include("includes/encabezado.php");
    include("includes/menu_logueado.php");
?>
<body>
    
    <p>plataforma de pago</p>
    <form action="" method="POST">
        <input type="submit" value="Cancelar" name="cancelar">
    </form>

</body>

<?php
    include("includes/pie.php");
    if(isset($_POST["cancelar"])){
        unset($_SESSION["pedido"]);
        //aqui debería eliminar el pedido de la base de datos
    }
    ;
?>