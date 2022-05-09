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
    $msjCopy = "dpggff-xjui-njml";
    $msjArraySorted = sortByLegth($msjCopy);
    $msjArraySorted = array_reverse($msjArraySorted);
    $certeza = 0;
    $certezaNecesaria = ceil(count($msjArraySorted)*0.5);
    $rotCorrecta;
    $validoOInvalido = false;
    //me falta array reverse
 

    print_r($msjArraySorted);
    $coincidencia = false;

    foreach($msjArraySorted as $key => $value) {
        if ($validoOInvalido == true) {
        }
        else 
        {
            for ($i = 1; $i == 25 || $coincidencia == true || $validoOInvalido == true; $i++) 
            {
                $msjDecifrado = descifrar($value, $i);
                $resultado = mysqli_query($conexion, "SELECT * FROM palabras WHERE palabra = '$msjDecifrado';");
                if (mysqli_num_rows($resultado) > 0) 
                {
                    $certeza++;
                    $coincidencia = true;
                    $validoOInvalido = validateCoincidence($msjArraySorted,$i ,$key,$certeza,$certezaNecesaria);
                    $rotCorrecta = $i;
                    if($validoOInvalido == false){
                        $coincidencia = false;
                    }
                }
            }
        }
    }
    $msjDecifrado = descifrar($msj,$rotCorrecta);
    respuesta(200, "El mensaje descifrado es $msjDecifrado y tenia una rotacion de $rotCorrecta", $msjDecifrado);

    function validateCoincidence($msjArraySorted,$rot,$key,$certeza,$certezaNecesaria){ 
        $validoOInvalido = false;
        if ($certeza >= $certezaNecesaria) {
            $validoOInvalido = true;
        }
        else {
            $key = $key+1;
            for ($i = $key; $i < strlen($msjArraySorted[$key]); $i++) {
                $letra = substr($msjArraySorted[$key], $i, 1);
                $letra = ord($letra);
                $letra = $letra - $rot;
                if ($letra < 97) {
                    $letra = ($letra - 96) + 122;
                }
                $letra = chr($letra);
                $msjArraySorted[$key] = substr_replace($msjArraySorted[$key], $letra, $i, 1);
            }
            include 'includes/conexion.php';
            $resultado = mysqli_query($conexion, "SELECT * FROM palabras WHERE palabra = '$msjArraySorted[$key]';");
            if (mysqli_num_rows($resultado) > 0) {
                $key++;
                validateCoincidence($msjArraySorted[$key], $i,$key,$certeza,$certezaNecesaria);
                
            }
        }
        return $validoOInvalido;
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