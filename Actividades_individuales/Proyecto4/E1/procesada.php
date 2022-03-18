<?php
session_start();
include("includes/encabezado.php");
include("includes/menu.php");
?>
<?php
if (isset($_POST["submit"])) {
    $nombre = $_SESSION["usuario"];
    echo "<h2>Este seria su presupuesto $nombre </h2>";
};
?>

<?php
include("includes/calculoOrden.php");
?>
<?php
include("includes/pie.php");
?>