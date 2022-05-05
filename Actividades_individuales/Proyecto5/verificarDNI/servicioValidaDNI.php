<?php
header("Content-Type:aplication/json");

    $varDNI = $_GET['DNI'];

function validateDNI($varDNI){
    $letra = substr($varDNI, -1);
    $numeros = substr($varDNI, 0, -1);
    if (strlen($numeros) == 8){
        $modulo = $numeros % 23;
        $letras = "TRWAGMYFPDXBNJZSQVHLCKE";
        $letraCalculada = substr($letras, $modulo, 1);
        if ($letra == $letraCalculada){
            return true;
        }
    }
    return false;
}

$ValidoOInvalido = validateDNI($varDNI);

if ($ValidoOInvalido){
    $mensaje = "DNI válido";
    $status = 200;
} else {
    $mensaje = "DNI inválido";
    $status = 300;
}

respuesta($status, $mensaje, $ValidoOInvalido);
function respuesta($status, $mensaje, $ValidoOInvalido)
{
    header("HTTP/1.1 $status $mensaje");
    $response['status'] = $status;
    $response['mensaje'] = $mensaje;
    $response['ValidoOInvalido'] = $ValidoOInvalido;

    $json_response = json_encode($response);
    echo $json_response;
}
?>


