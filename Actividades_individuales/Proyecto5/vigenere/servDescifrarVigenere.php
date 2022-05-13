<?php
header("Content-Type: application/json");
$msj = $_GET['msj'];
$msj = str_replace("-", " ", $msj);
$clave = $_GET['clave'];
// $msj = "PGWA GZY UVPBUAZIF";
// $clave = "ISLA";
// este servicio resive mensaje cifrado y la clave, si la clave es de menor tamaño
// que el mensaje se empezara a usar el mensaje antes de cifrar como clave

$msjDescifrado = vigenereCypher($msj, $clave);

function vigenereCypher($msj, $clave){
    $lm = strlen($msj);
    $msjDescifrado = "";
    // creo la variable donde se guardara todo el mensaje descifrado y otra de longitud

    for ($i = 0; $i < $lm; $i++) {
        $letra = substr($msj, $i, 1);
        // voy separando el mensaje en letras
        if ($letra == " " or $letra == "," or $letra == ".") {
            // este if se salta ciertos caracteres que podrian estar presentes en un parrafo
            $clave .= $letra;
            $msjDescifrado .= $letra;
            continue;
            // concateno la letra para la clave y el msjdescifrado
        }
        $letraClave = substr($clave, $i, 1);
        // obtengo la letra de la clave 
        $letraDescifrada = (ord($letra) - ord($letraClave)) % 26 + 65;
        // para decifrar uso la formula para obtener la posicion usando el modulo basado en el rango de caracteres
        // y uso ascii en vez de un array por comonidad ademas de sumarle 65 para que inicie en A
        if ($letraDescifrada < 65) {
            $letraDescifrada += 26;
            // este if se encarga de coompensar si se pasa del rango
        }
        // se concatena la letra a la clave y la letra descifrada al mensaje
        $clave .= chr($letra);
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