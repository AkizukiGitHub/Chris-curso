<?php
header("Content-Type: application/json");
$msj = $_GET['msj'];
$msj = str_replace("-", " ", $msj);
$clave = $_GET['clave'];
// $msj = "ARCHIPIELAGO";
// $clave = "ISLA";

$msjCifrado = vigenereCypher($msj, $clave);

function vigenereCypher($msj, $clave){
    $lm = strlen($msj);
    $lc = strlen($clave);
    $msjCifrado = "";

    if ($lc < $lm) {
        $r = $lm - $lc;
        $clave .= substr($msj, 0, $r);
    }

    for ($i = 0; $i < $lm; $i++) {
        $letra = substr($msj, $i, 1);
        if ($letra == " ") {
            $msjCifrado .= $letra;
            continue;
        }
        $letraClave = substr($clave, $i, 1);
        $letraCifrada = (ord($letra) + ord($letraClave)) % 26 + 65;
        if ($letraCifrada > 90) {
            $letraCifrada -= 26;
        }
        $msjCifrado .= chr($letraCifrada);
    }
    return $msjCifrado;
}

$mensaj = "El mensaje encriptado es $msjCifrado";
$status = 200;

respuesta($status, $mensaj, $msjCifrado);
function respuesta($status, $mensaje, $msjENC)
{
    header("HTTP/1.1 $status $mensaje");
    $response['status'] = $status;
    $response['mensaje'] = $mensaje;
    $response['datos'] = $msjENC;

    $json_response = json_encode($response);
    echo $json_response;
}

?>