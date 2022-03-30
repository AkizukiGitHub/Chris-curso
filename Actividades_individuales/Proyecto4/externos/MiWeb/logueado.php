<?php
session_start();
// var_dump($_POST["usuario"],$_POST["clave"]);
echo "<br>";
// var_dump($_SESSION["usuario"]);
echo "<br>";
$encontre=false;
   foreach($_SESSION["usuario"] as $x){
         if (($_POST["usuario"]==$x[0])&&($_POST["clave"]==$x[1])){
            echo "Bienvenido!!!";
            $encontre=true;
            break;
         }
      }
      if(!$encontre){
         echo "vete por donde has venido!!!";
      }
      


include("includes/encabezado.php");
include("includes/menu.php");
?>
<!-- Aquí empieza el cuerpo de la página -->
   

<?php
include("includes/pie.php");
?>
