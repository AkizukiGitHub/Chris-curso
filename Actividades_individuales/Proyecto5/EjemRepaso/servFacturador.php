<?php
header("Content-Type: text/html; charset=utf-8");
$cantC = $_GET["cantC"];
$precioMenu = $_GET["menu"];
$descuento = 1;
$cantC = 100;
$precioMenu = 12.50;


if ($cantC>=100 && $cantC<150) {
    $descuento=0.1;
}elseif ($cantC>=150) {
    $descuento=0.2;
}elseif ($cantC<100) {
    $descuento=1;
};




function aplicaDesc($total,$descuento){
    return $total-=$total*$descuento;
};//funcion para obtener la diferencia y restarla al Total 
function aplicaServ($total){
    return $total*=1.15;
};//funcion para aplicar el 15% de servicios
function aplicaIGIC($total){
    return $total*=1.07;
};//función para aplicar el igic

function createTable($cantC,$precioMenu,$descuento){
    $tabla="<table border='1'>";
    $tabla.="<tr><th>Cantidad de comensales</th><th>Precio de Menu</th><th>Total</th><th>Descuento</th><th>Servicios</th><th>IGIC</th><th>Total a pagar</th></tr>";
    $total = $cantC*$precioMenu;
    $descDiff = (aplicaDesc($total,$descuento))-$total;
    $totalDesc = $total-$descDiff;
    $descDiff = round($descDiff,2);
    $servDiff = (aplicaServ($totalDesc))-$totalDesc;
    $totalServ = aplicaServ($totalDesc);
    $IGICDiff = (aplicaIGIC($totalServ))-$totalServ;
    $totalIGIC = aplicaIGIC($totalServ);
    if ($descuento==0.1) {
        
        $tabla.="<tr><td>$cantC</td><td>$precioMenu</td><td>$total</td><td>$descDiff</td><td>$servDiff</td><td>$IGICDiff</td><td>$totalIGIC</td></tr>";
    }elseif ($descuento==0.2) {
        
        $tabla.="<tr><td>$cantC</td><td>$precioMenu</td><td>$total</td><td>$descDiff</td><td>$servDiff</td><td>$IGICDiff</td><td>$totalIGIC</td></tr>";
    }
    elseif ($descuento==1) {
        
        $tabla.="<tr><td>$cantC</td><td>$precioMenu</td><td>$total</td><td>0%</td><td>$descDiff</td><td>$servDiff</td><td>$totalIGIC</td></tr>";
    };
    $tabla.="</table>";
    return $tabla;
};

$mensaje = "Tabla creada correctamente";
$status = 200;
$tabla = createTable($cantC,$precioMenu,$descuento);

respuesta($status, $mensaje, $tabla);
function respuesta($status, $mensaje, $tabla)
{
    header("HTTP/1.1 $status $mensaje");
    $response['status'] = $status;
    $response['mensaje'] = $mensaje;
    $response['tabla'] = $tabla;
    
    $json_response = json_encode($response);
    echo $json_response;
}

?>