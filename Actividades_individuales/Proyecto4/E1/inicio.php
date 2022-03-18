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
include("includes/encabezado.php");
include("includes/menu.php");
?>
<form action="procesar.php" method="post" name="form1">
<label>nombre:</label><input type="text" name="nombre" required>
<label>contraseña:</label><input type="password" name="pass" required>
<input type="submit" name="btn1" value="Registro">
</form>

<?php
include("includes/pie.php");
?>