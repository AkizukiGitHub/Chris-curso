<?php
header("Content-Type:application/json");
//Aquí van las variables
    $var1 = $_GET['palabra'];
    $var2 = $_GET['clave'];
   
    function cifrar($palabra,$clave){
        $palabra = strtoupper($palabra); //Convierte un string a mayúsculas
        $tamano = strlen($palabra); //Cuenta la cantidad de caracterees de string
        $resultado="";
        for ($pos=0; $pos < $tamano ; $pos++) {
        $aux = $palabra[$pos];
        for ($i=65;$i<=90;$i++) {
        $letra = chr($i); //Convierte numero en caracter ASCII
        if ($aux == $letra){
        $i = $i + $clave; //Le sumamos el desplazamiento
        if ($i>90){ //Revisamos que no se pasa de la Z
        $z= (($i-90)+65); //Si se pasa lo devolvemos al principio más el desplazamiento hecho
        $resultado =$resultado.chr($z); //Convertimos el caracter
        }
        else{
        $resultado =$resultado. chr($i);
        }
        }
        }
        }
        return $resultado;
        }

    $datos=cifrar($var1,$var2);

    respuesta(200, "El cifrado es $datos", $datos);

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