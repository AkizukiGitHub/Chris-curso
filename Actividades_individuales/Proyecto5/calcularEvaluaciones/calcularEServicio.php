<?php
header("Content-Type: aplication/json");
// Servicio para calcular las notas de un alumno: (E1+E2)/2 esto es el 30% y el 70% se calcula: PO 20% + PP 80%. Cliente que envíe las notas
    $varE1 = $_GET['E1'];
    $varE2 = $_GET['E2'];
    $varPO = $_GET['PO'];
    $varPP = $_GET['PP'];

// (E1+E2)/2 esto es el 30% y el 70% se calcula: PO 20% + PP 80%
function calcularEvaluaciones($varE1, $varE2, $varPO, $varPP){
    $resultadoParteE = (($varE1 + $varE2)/2)*0.3;
    $resultadoParteP = ($varPO*0.2 + $varPP*0.8);
    $resultadoFinal = $resultadoParteE + $resultadoParteP;
    return $resultadoFinal;
}

$resultadoFinal=calcularEvaluaciones($varE1, $varE2, $varPO, $varPP);

// respuesta(200, "Tu nota es $resultadoFinal", $resultadoFinal);

function respuesta($status, $mensaje, $resultadoFinal){
    header("HTTP/1.1 $status $mensaje");
    $response['status'] = $status;
    $response['mensaje'] = $mensaje;
    $response['$resultadoFinal'] = $resultadoFinal;

    $json_response = json_encode($response);
    echo $json_response;
}
?>