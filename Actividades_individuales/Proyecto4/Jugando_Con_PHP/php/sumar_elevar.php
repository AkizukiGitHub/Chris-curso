<!-- Leer dos números, si el primero es mayor sumar, si el segundo es el mayor elevar al cuadrado cada número y sumarlos -->
<?php
if (isset($_POST["submit"])){
    if (!empty($_POST["num01"]) && !empty($_POST["num02"])){
        $num1 = $_POST["num01"];
        $num2 = $_POST["num02"];
        if ($num1 > $num2){
            echo "<script>document.getElementById('p01').innerHTML='El primer numero es mayor y la suma de ambos es ".($num1+$num2)."'; </script>";
        };
    };
};
?>