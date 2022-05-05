<!-- FORMULARIO -->
<form action="" method="POST">
<input type="text" name="var1" placeholder="Introduce la nota 1">
<input type="text" name="var2" placeholder="Introduce la nota 2">
<input type="text" name="var3" placeholder="Introduce la nota 3">
<input type="submit" name="submit">
</form>
<?php
if(isset($_POST["submit"])){
//Captura las variables que ingresamos por el formulario
    $var1=$_POST["var1"];
    $var2=$_POST["var2"];
    $var3=$_POST["var3"];

$url="http://localhost/Proyecto5/web_service/aServicio.php?var1=$var1&var2=$var2&var3=$var3";



$data = json_decode( file_get_contents("$url"), true );

echo $data['mensaje'] . "<br>";
echo $data['datos'];

}

?>