<?php
header("Content-Type:application/json");
    $msj = $_GET['msj'];
    $rot = $_GET['rot'];

    function descifrar($msj,$rot){
        for ($i=0; $i < strlen($msj); $i++) { 
            $letra = substr($msj, $i, 1);
            $letra = ord($letra);
            $letra = $letra - $rot;
            $letra = chr($letra);
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



