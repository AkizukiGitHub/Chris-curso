<!-- 
Crea una web que de respuesta al siguiente supuesto: Una empresa de catering tiene un formulario para presentar presupuestos a sus clientes, en el recoge:

Nombre, apellidos, dni, email y teléfono del cliente. 
Luego le da a elegir entre tres menús diferentes: 
Menú 1: 12,50 euros por persona
Menú 2: 14 euros por persona
Menú 3: 16,75 euros por persona
Además le solicita el número de comensales y proporciona un descuento del 10% por encima de 100 personas y uno del 20% para mas de 150 personas.
Por último presenta un presupuesto que incluye un coste del 15% por el servicio de camareros y un IGIC del 7% con el total del evento.
Crea al menos 2 páginas una de inicio y  una de contacto con la dirección de la empresa y demás datos que consideres oportunos.

Recuerda hacer uso del include y las sesiones 
-->
<?php
session_start();
include("includes/encabezado.php");
include("includes/menu.php");
if (isset($_POST["btn1"])) {
    $nombre = $_POST["nombre"];
    $_SESSION["usuario"]=$nombre;
    echo "<h2>Le damos la bienvenida $nombre </h2>";
}
?>
<fieldset style="margin-left: 2%;">
    <legend><strong>Datos del Cliente</strong></legend>
        <form action="" method="post">
            <label><strong>Nombre</strong></label>
            <input type="text" name="nom" required>
            <br>
            <label><strong>Apellidos</strong></label>
            <input type="text" name="ape" required>
            <br>
            <label><strong>DNI</strong></label>
            <input type="text" name="DNI" required>
            <br>
            <label><strong>Correo</strong></label>
            <input type="text" name="correo" required>
            <br>
            <label><strong>Telefono</strong></label>
            <input type="text" name="tlf" required>
        </form>
    <input type="button" value="Registrar" onclick="mostrar()">
</fieldset>
<fieldset id="form2" style="visibility: hidden; margin-left: 2%;">
    <legend><strong>Solicitud de Presupuesto</strong></legend>
        <form action="procesada.php" method="post" display="hidden">
            <label><strong>Menu 1</strong></label>
            <input type="radio" name="menu" value="1">
            <br>
            <label><strong>Menu 2</strong></label>
            <input type="radio" name="menu" value="2">
            <br>
            <label><strong>Menu 3</strong></label>
            <input type="radio" name="menu" value="3"  checked="checked">
            <br>
            <label><strong>Cantidad de comensales</strong></label>
            <input type="number" name="cantC" required>
            <br>
            <input type="submit" name="submit" value="Enviar">
        </form>
</fieldset>
<p id="p01"></p>
<?php
include("includes/calculoOrden.php")
?>
<?php
include("includes/pie.php");
?>