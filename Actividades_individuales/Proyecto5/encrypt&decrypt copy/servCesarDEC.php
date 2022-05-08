<?php
header("Content-Type:application/json");
    $msj = $_GET['msj'];
    $msjCopy = $_GET['msj'];
    $msj = str_replace("-", " ", $msj);
    include 'includes/conexion.php';
    // aqui vuelvo a reemplazar los guiones a los espacios que son realmente

    //separar las palabras que llegan las palabras empiezan por un caracter y terminan por la posicion anterior a -
    //luego con esa palabra le doy una rotacion y a envio a descifrar 
    // luego con ese mensaje descifrado se coompara con la base de datos y si hay resultado se va a la siguiente palabra
    $msjCopy = "cafe-con-leche";
    $msjArraySorted = sortByLegth($msjCopy);


    print_r($msjArraySorted);
    $coincidencia;

    foreach($msjArraySorted as $key => $value) {
        for ($i = 1; $i = 25 || $coincidencia == true; $i++) {
            $msjDecifrado = descifrar($value, $i);
            $resultado = mysqli_query($conexion, "SELECT * FROM palabras WHERE palabra = '$msjDecifrado'");
            if (mysqli_num_rows($resultado) > 0) {
                $coincidencia = true;
                validateCoincidence($msjDecifrado, $i,$key);
            }
            
            
        }
    }

    function validateCoincidence($msjDecifrado,$rot,$key) {
        $key = $key+1;
        for ($i = $key; $i < strlen($msjDecifrado); $i++) {
            $letra = substr($msjDecifrado[$key], $i, 1);
            $letra = ord($letra);
            $letra = $letra - $rot;
            if ($letra < 97) {
                $letra = ($letra - 96) + 122;
            }
            $letra = chr($letra);
            $msj = substr_replace($msjDecifrado, $letra, $i, 1);

        }
        $resultado = mysqli_query($conexion, "SELECT * FROM palabras WHERE palabra = '$msjDecifrado'");
        if (mysqli_num_rows($resultado) > 0) {
            $coincidencia = true;
            validateCoincidence($msjDecifrado, $i,$key);
        }
        return $msj;
    }
    function sortByLegth($msj){
        $msjArray = toArray($msj);
        usort($msjArray, function($a, $b) {
            return strlen($a) - strlen($b);
        });
        return $msjArray;
    }
    function toArray($msj) {
        $array = explode("-", $msj);
        var_dump($array);
        return $array;
    }


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

// $msjDEC = descifrar($msj,$rot);
//     respuesta(200, "El mensaje descifrado es $msjDEC", $msjDEC);

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