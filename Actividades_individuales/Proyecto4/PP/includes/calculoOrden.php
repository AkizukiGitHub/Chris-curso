<!-- Luego le da a elegir entre tres menús diferentes: 
Menú 1: 12,50 euros por persona
Menú 2: 14 euros por persona
Menú 3: 16,75 euros por persona
Además le solicita el número de comensales y proporciona un descuento del 10% por encima de 100 personas y uno del 20% para mas de 150 personas.
Por último presenta un presupuesto que incluye un coste del 15% por el servicio de camareros y un IGIC del 7% con el total del evento. -->
<?php
if (isset($_POST["submit"])) {
    //ocurrirá cuando se haya enviado el formulario 
    $precioFinal = 0;
    //esto es el total con los servicios e igic 
    $cantP = $_POST["cantP"];
    //cantC es la cantidad de Personas dada en el formulario 


    function aplicaServ($total)
    {
        return $total *= 1.10;
    }; //funcion para aplicar el 10% de servicios
    function aplicaIGIC($total)
    {
        return $total *= 1.07;
    }; //función para aplicar el igic 

    switch ($_POST["menu"]) {
        case 1:
            $precioFinal = aplicaIGIC(aplicaServ((10 * $cantP)));
            break;
        case 2:
            $precioFinal = aplicaIGIC(aplicaServ((8 * $cantP)));
            break;
        case 3:
            $precioFinal = aplicaIGIC(aplicaServ((15 * $cantP)));
            break;
        case 4:
            $precioFinal = aplicaIGIC(aplicaServ((25 * $cantP)));
    };

    print_r(round($precioFinal, 2));
}
?>