<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajadores Sueldo</title>
</head>

<body>
    <form action="" method="post">
        <label for="">Nombre</label>
        <input type="text" name="nombre" id="">
        <br>
        <label for="">horas</label>
        <input type="number" name="horas" id="">
        <br>
        <input type="submit" name="enviar" value="Calcular">
    </form>
<?php
    if (isset($_POST["enviar"])) {
        $nombre = $_POST["nombre"];
        $horas = $_POST["horas"];
        $extras = 0;        
        $normal=40*12;

        if ($horas>40) {
            $extras=($horas-40)*15;
        };
        $sueldo = $normal+$extras;

        echo "Su sueldo total es ".$sueldo;
    };
?>

</body>

</html>