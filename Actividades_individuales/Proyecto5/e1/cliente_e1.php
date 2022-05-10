<!-- FORMULARIO -->
<form action="" method="POST">
<input type="text" name="palabra" placeholder="Introduce la palabra a cifrar">
<input type="text" name="clave" placeholder="numero de cifrado">
<input type="submit" name="btn1" value="cifrar">
<input type="submit" name="btn2" value="descifrar">
</form>
<?php
if(isset($_POST["btn1"])){
//Captura las variables que ingresamos por el formulario
    $var1=$_POST["palabra"];    
    $var2=$_POST["clave"];
   

$url="http://localhost/Servicios/e1/Servicio_cifrar_e1.php?palabra=$var1&clave=$var2";

$data = json_decode( file_get_contents("$url"), true );

echo $data['mensaje'] . "<br>";
echo $data['datos'];

}


if(isset($_POST["btn2"])){
    //Captura las variables que ingresamos por el formulario
        $var1=$_POST["palabra"];    
        $var2=$_POST["clave"];
       
    
    $url="http://localhost/Servicios/e1/Servicio_des_e1.php?palabra=$var1&clave=$var2";
    
    $data = json_decode( file_get_contents("$url"), true );
    
    echo $data['mensaje'] . "<br>";
    echo $data['datos'];
    
}

?>