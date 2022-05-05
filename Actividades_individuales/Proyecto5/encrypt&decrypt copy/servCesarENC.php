<?php
header("Content-Type:application/json");
    $msj = $_GET['msj'];
    $rot = $_GET['rot'];
    $msj = str_replace("-", " ", $msj);
    // aqui vuelvo a reemplazar los guiones a los espacios que son realmente
    function encryptar($msj,$rot){
        // for que recorre todo el mensaje separandolo en letras
        for ($i=0; $i < strlen($msj); $i++) { 
            $letra = substr($msj, $i, 1);
            // si se encuentra un espacio se salta la vuelta
            if ($letra == " ") {
                continue; 
            }
            // se convierte la letra a un numero se le aplica la rotacion y se vuelve a convertir a letra
            $letra = ord($letra);
            $letra = $letra + $rot;
            // si la letra es mayor a 122 se le resta 122 para obtener el por cuanto se paso de la z y se suma 96 para que inice otra vez desde A
            if ($letra > 122) {
                $letra = ($letra - 123) + 97;
            }
            $letra = chr($letra);
            // se reemplaza la letra en el mensaje
            $msj = substr_replace($msj, $letra, $i, 1);
        }
        return $msj;
    }

$msjENC = encryptar($msj,$rot);
    respuesta(200, "El mensaje encriptado es $msjENC", $msjENC);

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