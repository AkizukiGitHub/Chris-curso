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
    // creo la variable donde se guardara todo el mensaje cifrado y otras de longitud del mensaje y la clave

    if ($lc < $lm) {
        $r = $lm - $lc;
        $clave .= substr($msj, 0, $r);
    }
    // este if se encarga de concatenar la clave si es menor que el mensaje en longitud

    for ($i = 0; $i < $lm; $i++) {
        $letra = substr($msj, $i, 1);
        // voy separando el mensaje en letras
        if ($letra == " " or $letra == "," or $letra == ".") {
            // este if se salta ciertos caracteres que podrian estar presentes en un parrafo
            $msjCifrado .= $letra;
            continue;
            // concateno la letra para el msjdescifrado
        }
        $letraClave = substr($clave, $i, 1);
        $letraCifrada = (ord($letra) + ord($letraClave)) % 26 + 65;
        // para cifrar uso la formula para obtener la posicion usando el modulo basado en el rango de caracteres
        // y uso ascii en vez de un array por comonidad ademas de sumarle 65 para que inicie en A
        if ($letraCifrada > 90) {
            $letraCifrada -= 26;
            // este if se encarga de coompensar si se pasa del rango
        }
        // se concatena la letra cifrada al mensaje
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