<form action="" method="POST">
<input type="text" name="nombre" placeholder="Introduzca su nombre">
<input type="text" name="DNI" placeholder="Introduce el DNI">
<input type="submit" name="submit">
</form>
<!-- formulario que envia en psot para recogerloluego con un isset y enviarlo con un get al servicio -->
<?php
if(isset($_POST["submit"])){
//Captura las variables que ingresamos por el formulario
    $DNI=$_POST["DNI"];

// pasamos la variable a una variable con la URL
$url="http://localhost/MF2-UF3-PP-CHRISTIAN/servValidaDNI.php?DNI=$DNI";

// se llama al servicio pasandole la variable con la URL y en formato json
$data = json_decode( file_get_contents("$url"), true );
// se recoge lo que se lleva de la respuesta del servicio decodificado del formato json

// hago un echo del mensaje para ver si es valido o no
echo $data['mensaje'];

}
?>