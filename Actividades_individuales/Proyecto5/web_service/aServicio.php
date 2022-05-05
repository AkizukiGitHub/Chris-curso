<?php
header("Content-Type:application/json");
//Aquí van las variables
    $var1 = $_GET['var1'];
    $var2 = $_GET['var2'];
    $var3 = $_GET['var3'];

    function loquehacelservicio($var1,$var2,$var3)
    {
        $resultado=($var1+$var2+$var3)/3;

        return $resultado;
    }

    $datos=loquehacelservicio($var1,$var2,$var3);

    respuesta(200, "El promedio es $datos", $datos);

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
 
?>
