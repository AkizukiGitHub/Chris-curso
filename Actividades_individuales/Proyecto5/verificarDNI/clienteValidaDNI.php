<form action="" method="POST">
<input type="text" name="DNI" placeholder="Introduce el DNI">
<input type="submit" name="submit">
</form>
<?php
if(isset($_POST["submit"])){
//Captura las variables que ingresamos por el formulario
    $DNI=$_POST["DNI"];


$url="http://localhost/Proyecto5/verificarDNI/servicioValidaDNI.php?DNI=$DNI";


    

$data = json_decode( file_get_contents("$url"), true );

echo $data['mensaje'];

}

?>