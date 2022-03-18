<?php
session_start();
include("includes/encabezado.php");
include("includes/menu.php");
?>
<?php
if (isset($_POST["submit"])) {
    $nombre = $_SESSION["usuario"];
    echo "<h2>Este seria su presupuesto $nombre </h2>";
    $descuento=1;
    $total=0;
    $precioFinal=0;

    $cantC = $_POST["cantC"];
    if ($cantC>100) {
        $descuento=1.1;
    }elseif ($cantC>150) {
        $descuento=1.2;
    }
    switch ($_POST["radio"]) {
        case 1:
            $precioFinal=aplicaIGIC(aplicaServ(aplicaDesc(12.50*$cantC,$descuento)));
            break;
        case 2:
            $precioFinal=aplicaIGIC(aplicaServ(aplicaDesc(14*$cantC,$descuento)));
            break;
        case 3:
            $precioFinal=aplicaIGIC(aplicaServ(aplicaDesc(16.75*$cantC,$descuento)));
             break;        
    }

    function aplicaDesc($total,$descuento){
        return $total-=$total*$descuento;
    }
    function aplicaServ($total){
        return $total*=1.15;
    }
    function aplicaIGIC($total){
        return $total*=1.07;
    }
}
?>


<?php
include("includes/pie.php");
?>