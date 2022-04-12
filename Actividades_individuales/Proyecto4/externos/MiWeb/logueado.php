<?php
session_start();
$encontre=false;
// verificacion de si el usuario esta en la sesion y creo variable nombre y habitacion logged para usarlo 
// mas adelante en mensajes facilmente desde la pagina
   foreach($_SESSION["usuario"] as $x){
         if (($_POST["usuario"]==$x[0])&&($_POST["clave"]==$x[1])){
            $nombrelogged=$x[0];
            $habitacionlogged=$x[2];
            $encontre=true;
            break;
         }
      }
      if(!$encontre){
         var_dump($x);
         echo "vete por donde has venido!!!";
      }
      
include("includes/encabezado.php");
include("includes/menuLogged.php");
// aqui el menu cambia ahora es el menu logged que muestra el nombre del usuario y ahora muestra servicio pero como ya esta logged no muestra iniciar sesion y login
?>
<!-- Aquí empieza el cuerpo de la página -->

<fieldset id="form1" style="margin-left: 2%;">
    <legend><strong>Solicitud Al Restaurante desde la habitacion: <?php echo $habitacionlogged?></strong></legend>
        <form action="procesada.php" method="post">
            <label><strong>Desayuno Continental</strong></label>
            <input type="radio" name="menu" value="1">
            <br>
            <label><strong>Desayuno Americano</strong></label>
            <input type="radio" name="menu" value="2">
            <br>
            <label><strong>Desayuno Brunch</strong></label>
            <input type="radio" name="menu" value="3"  checked="checked">
            <br>
            <label><strong>Almuerzo</strong></label>
            <input type="radio" name="menu" value="4">
            <br>
            <label><strong>Cantidad de Personas</strong></label>
            <input type="number" name="cantP" required>
            <br>

            <input type="hidden" name="nombre" value="<?php echo $nombrelogged?>">
            <input type="hidden" name="habitacion" value="<?php echo $habitacionlogged?>">

            <input type="submit" name="submit" value="Enviar">

        </form>
</fieldset>   
<center>
<span style="color: red;"> <strong>Aqui tienes la 4 opciones las junte las 4 porque supongo que pides solo una cosa a la vez, si quieres pedir desayuno y almuerzo serian 2 ordenes distintas y podrias hacerlo desde el mismo cliente</strong></span>
<br>
<span style="color: red;"> <strong>Arriba a la derecha en el menu estaria el nombre del usuario que acaba de ingresar sesion</strong></span>

</center>

<?php
include("includes/pie.php");
?>
