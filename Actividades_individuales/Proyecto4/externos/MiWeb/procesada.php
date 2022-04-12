<?php
session_start();
include("includes/encabezado.php");
include("includes/menuPresupuesto.php");
?>
<?php
if (isset($_POST["submit"])) {
    $nombre = $_POST["nombre"];
    $habitacion = $_POST["habitacion"];
    echo "<h2>Se ha hecho la solicitud a la habitacion: " .$habitacion."</h2> <h3>Se le carga el total a la misma a nombre de ".$nombre ."  </h3>";
};
?>

<h3><?php include("includes/calculoOrden.php");?></h3>
<?php
include("includes/pie.php");
?>