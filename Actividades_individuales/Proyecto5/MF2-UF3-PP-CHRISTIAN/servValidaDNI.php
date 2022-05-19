<?php
header("Content-Type: application/json");
$DNI = $_GET["DNI"];
$ValidoOInvalido = "";
// resivo unicamente el DNI que es lo que hace falta para validarlo

function validaDNI($DNI){
    $letra = substr($DNI, -1);
    // separo la letra del DNI
    $numeros = substr($DNI, 0, -1);
    // separo los numeros del DNI
    if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen($numeros) == 8) {
        // compruebo que la letra del DNI sea correcta haciendo la formula del DNI con los numeros
        return "DNI correcto";
    }else{
        return "DNI incorrecto";
    };
    // se retorna un string con un mensaje segun si es valido o no
}

$ValidoOInvalido = validaDNI($DNI);
// guardo en una variable el resultado de la funcion


if ($ValidoOInvalido=="DNI correcto"){
    $mensaje = "DNI válido";
    $status = 200;
} elseif ($ValidoOInvalido=="DNI incorrecto"){
    $mensaje = "DNI inválido";
    $status = 200;
}
// usa la variable para crear un mensaje de respuesta

respuesta($status, $mensaje, $ValidoOInvalido);
function respuesta($status, $mensaje, $ValidoOInvalido){	
    header("HTTP/1.1 $status $mensaje");
    $response['status'] = $status;
    $response['mensaje'] = $mensaje;
    $response['ValidoOInvalido'] = $ValidoOInvalido;
    
    $json_response = json_encode($response);
    echo $json_response;
}
// crea una respuesta en formato json para el cliente
?>