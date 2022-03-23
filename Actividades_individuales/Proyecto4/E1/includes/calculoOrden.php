<!-- Luego le da a elegir entre tres menús diferentes: 
Menú 1: 12,50 euros por persona
Menú 2: 14 euros por persona
Menú 3: 16,75 euros por persona
Además le solicita el número de comensales y proporciona un descuento del 10% por encima de 100 personas y uno del 20% para mas de 150 personas.
Por último presenta un presupuesto que incluye un coste del 15% por el servicio de camareros y un IGIC del 7% con el total del evento. -->
<?php
    if (isset($_POST["submit"])) {
        //ocurrirá cuando se haya enviado el formulario 
        $descuento=1;
        //el descuento es un multiplicador que uso por defecto en 1 para que quedé igua
        $total=0;
        //total es el precio con el descuento 
        $precioFinal=0;
        //esto es el total con los servicios e igic 

        
        $cantC = $_POST["cantC"];
        //cantC es la cantidad de comensales dada en el formulario 
        if ($cantC>100) {
            $descuento=0.1;
        }elseif ($cantC>150) {
            $descuento=0.2;
        }elseif ($cantC<=100) {
            $descuento=1;
        };
        //dependiendo de la cantidad de comensales cambio el multiplicador 
        //para descontar 10 o 20
    function aplicaDesc($total,$descuento){
        return $total-=$total*$descuento;
    };//funcion para obtener la diferencia y restarla al Total 
    function aplicaServ($total){
        return $total*=1.15;
    };//funcion para aplicar el 15% de servicios
    function aplicaIGIC($total){
        return $total*=1.07;
    };//función para aplicar el igic 

    switch ($_POST["menu"]) {
        case 1:
            $precioFinal=aplicaIGIC(aplicaServ(aplicaDesc((12.50*$cantC),$descuento)));
            break;
            case 2:
            $precioFinal=aplicaIGIC(aplicaServ(aplicaDesc((14*$cantC),$descuento)));
            break;
            case 3:
            $precioFinal=aplicaIGIC(aplicaServ(aplicaDesc((16.75*$cantC),$descuento)));
            break;        
            };

            print_r(round($precioFinal,2));
    }
?>
