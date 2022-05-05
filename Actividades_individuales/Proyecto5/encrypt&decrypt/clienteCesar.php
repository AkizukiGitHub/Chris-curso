<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="msj" placeholder="mensaje">
        <input type="number" name="rot" min="-25" max="25" placeholder="rotacion">
        <input type="submit" value="cifrar">
        <input type="submit" value="descifrar">
    </form>

<?php
if(isset($_POST["cifrar"])){
    $msj = $_POST["msj"];
    $rot = $_POST["rot"];
    $url = "http://localhost/Proyecto5/encrypt/servCesarENC.php.php?msj=$msj&rot=$rot";

} elseif(isset($_POST["descifrar"])){
    $msj = $_POST["msj"];
    $rot = $_POST["rot"];
    $url = "http://localhost/Proyecto5/encrypt/servCesarDEC.php.php?msj=$msj&rot=$rot";
}

$data = json_decode( file_get_contents("$url"), true );

echo $data['mensaje'];

?>

</body>
</html>


