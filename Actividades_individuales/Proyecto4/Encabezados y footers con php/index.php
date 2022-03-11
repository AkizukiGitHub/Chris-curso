<!-- Busca una de tus páginas web, coloca el menú y el footer dentro de páginas  php diferentes que llames de todas tus páginas para facilitar los cambios posteriores.

Coloca en el cuerpo de la página algunos de los ejercicios que hemos realizado, como por ejemplo el mayor de 3 números, el palíndromo y otro de tu elección. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/act.css">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="">Introduce el Primer numero= </label>
        <input type="number" name="num01" /><br>
        <label for="">Introduce el Segundo numero= </label>
        <input type="number" name="num02" /><br>
        <label for="">Introduce el Tercer numero= </label>
        <input type="number" name="num03" /><br>
        <input type="submit" name="submit" value="Mayor">
    </form>
    <?php
    if (isset($_POST["submit"])) {
        if (empty($_POST["num01"]) && (empty($_POST["num02"]) && empty($_POST["num03"]))) {
            $a; //Valor inicial
            $b;
            $c;
            $Ra; //Resultados de cada variable despues de coomparar
            $Rb;
            $Rc;

            $a = $_POST["num01"];
            $b = $_POST["num02"];
            $c = $_POST["num03"];

            $Ra = $a > $b && $a > $c;
            $Rb = $b > $a && $b > $c;
            $Rc = $c > $a && $c > $b;

            if ($Ra == true) {
                echo "A es la variable mayor, con un valor de " . $a;
            } else if ($Rb == true) {
                echo "B es la variable mayor, con un valor de " . $b;
            } elseif ($Rc == true) {
                echo "C es la variable mayor, con un valor de " . $c;
            } else {
                echo "No hay un numero unico que sea mayor";
            }
        } else {
            echo "Rellene todos los campos para coomprobar cual es mayor";
        };
    }

    ?>
    <?php include("php/footer.php"); ?>
</body>

</html>