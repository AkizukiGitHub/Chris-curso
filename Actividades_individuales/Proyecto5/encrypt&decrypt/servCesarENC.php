<?php
header("Content-Type:application/json");
    $msj = $_GET['msj'];
    $rot = $_GET['rot'];

    function encryptar($msj,$rot){
        for ($i=0; $i < strlen($msj); $i++) { 
            $letra = substr($msj, $i, 1);
            $letra = ord($letra);
            $letra = $letra + $rot;
            $letra = chr($letra);
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



