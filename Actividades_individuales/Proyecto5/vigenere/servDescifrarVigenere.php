<?php
header("Content-Type: application/json");
$msj = $_GET['msj'];
$msj = str_replace("-", " ", $msj);
$clave = $_GET['clave'];
// $msj = "PGWA GZY UVPBUAZIF";
// $clave = "ISLA";

$msjDescifrado = vigenereCypher($msj, $clave);

function vigenereCypher($msj, $clave){
    $lm = strlen($msj);
    $msjDescifrado = "";

    for ($i = 0; $i < $lm; $i++) {
        $letra = substr($msj, $i, 1);
        if ($letra == " " or $letra == "," or $letra == ".") {
            $clave .= $letra;
            $msjDescifrado .= $letra;
            continue;
        }
        $letraClave = substr($clave, $i, 1);
        $letraDescifrada = (ord($letra) - ord($letraClave)) % 26 + 65;
        if ($letraDescifrada < 65) {
            $letraDescifrada += 26;
        }
        $clave .= chr($letraDescifrada);
        $msjDescifrado .= chr($letraDescifrada);
    }
    return $msjDescifrado;
}

$mensaj = "El mensaje descifrado es $msjDescifrado";
$status = 200;

respuesta($status, $mensaj, $msjDescifrado);
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