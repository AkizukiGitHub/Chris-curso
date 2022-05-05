<?php
header("Content-Type:application/json");
    $msj = $_GET['msj'];
    $rot = $_GET['rot'];
    $msj = str_replace("-", " ", $msj);
    // aqui vuelvo a reemplazar los guiones a los espacios que son realmente

    function descifrar($msj,$rot){
        // for que recorre todo el mensaje separandolo en letras 
        for ($i=0; $i < strlen($msj); $i++) { 
            $letra = substr($msj, $i, 1);
            // si se encuentra un espacio se salta la vuelta
            if ($letra == " ") {
                continue; 
            }
            // se convierte la letra a un numero se le aplica la rotacion y se vuelve a convertir a letra
            $letra = ord($letra);
            $letra = $letra - $rot;
            // si la letra es menor a 97 se le resta 96 para obtener el por cuanto se paso de la a y se suma 122 para que inice otra vez desde z
            if ($letra < 97) {
                $letra = ($letra - 96) + 122;
            }
            $letra = chr($letra);
            // se reemplaza la letra en el mensaje
            $msj = substr_replace($msj, $letra, $i, 1);
        }
        return $msj;
    }

$msjDEC = descifrar($msj,$rot);
    respuesta(200, "El mensaje descifrado es $msjDEC", $msjDEC);

    function respuesta($status, $mensaje, $msjDEC)
    {
        header("HTTP/1.1 $status $mensaje");
        $response['status'] = $status;
        $response['mensaje'] = $mensaje;
        $response['datos'] = $msjDEC;

        $json_response = json_encode($response);
        echo $json_response;
    }
?>