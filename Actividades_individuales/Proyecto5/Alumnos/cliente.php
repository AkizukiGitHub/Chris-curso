<?php
if (isset($_POST["list"]))
{
    $name = urlencode($_POST["pupil"]);
    $list = $_POST["list"];

    $url = "http://localhost/Proyectos-2/Alumnos/service.php?name=$name&list=$list";

    $data = json_decode(file_get_contents("$url"), true);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente Contador de Repeticiones.</title>
</head>
<body>
    <h1>Verificaremos si un Estudiante Merece ser Premiado según su Asistencia a Clases</h1>
    <br>
    <form action="" method="post">
        <label><input type="text" name="pupil"> Nombre del Alumno</label>
        <br><br>
        <label><input type="text" name="list"> Cadena de Asistencias</label>
        <br><br>
        <input type="submit" value="Verificar">
    </form>
    <br>
    <?php
    if (isset($_POST["list"]))
    {
        if ($data["status"] == 200)
        {
            echo "<h3 style='color: blue;'>" . $data["message"] . " - " . $data["data"] . "</h3>";
        }
        else
        {
            echo "<h3 style='color: red;'>" . $data["message"] . " - " . $data["data"] . "</h3>";
        }
    }
    ?>
</body>
</html>