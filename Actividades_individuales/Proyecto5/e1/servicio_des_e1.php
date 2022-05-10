<?php
header("Content-Type:application/json");
//Aquí van las variables
$var1 = $_GET['palabra'];
$var2 = (int)$_GET['clave'];
$var1 = "KBOD";
$var2 = 3;


function descifrar($palabra, $clave)
{
    $palabra = strtoupper($palabra); //Convierte un string a mayúsculas
    $tamano = strlen($palabra); //Cuenta la cantidad de caracterees de string
    $resultado = "";
    for ($pos = 0; $pos < $tamano; $pos++) {
        $aux = $palabra[$pos];
        for ($i = 65; $i <= 90; $i++) {
            $letra = $i; //Convierte numero en caracter ASCII
            if ($aux == chr($letra)) {
                $letra = $letra - $clave; //Le restamos el desplazamiento
                if ($letra < 65) { //Revisamos que no se pasa de la A
                    $z = (($letra + 90) - 65); //Si se pasa lo devolvemos al final más el desplazamiento hecho
                    $resultado = $resultado . chr($z); //Convertimos el caracter
                    break;
                } else {
                    $resultado = $resultado . chr($letra);
                    break;
                }
            }
        }
    }
    return $resultado;
}

$datos = descifrar($var1, $var2);

respuesta(200, "El descifrado es $datos", $datos);

// De aquí para abajo no hace falta cambiar nada
function respuesta($status, $mensaje, $datos)
{
    header("HTTP/1.1 $status $mensaje");
    $response['status'] = $status;
    $response['mensaje'] = $mensaje;
    $response['datos'] = $datos;

    $json_response = json_encode($response);
    echo $json_response;
}
