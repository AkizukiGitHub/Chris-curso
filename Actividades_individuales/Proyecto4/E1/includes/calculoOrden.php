<!-- Luego le da a elegir entre tres menús diferentes: 
Menú 1: 12,50 euros por persona
Menú 2: 14 euros por persona
Menú 3: 16,75 euros por persona
Además le solicita el número de comensales y proporciona un descuento del 10% por encima de 100 personas y uno del 20% para mas de 150 personas.
Por último presenta un presupuesto que incluye un coste del 15% por el servicio de camareros y un IGIC del 7% con el total del evento. -->
<?php
    if (isset($_POST["submit"])) {
        $descuento=1;
        $total=0;
        $precioFinal=0;
        
        $cantC = $_POST["cantC"];
        if ($cantC>100) {
            $descuento=0.1;
        }elseif ($cantC>150) {
            $descuento=0.2;
        }elseif ($cantC<=100) {
            $descuento=1;
        };

    function aplicaDesc($total,$descuento){
        return $total-=$total*$descuento;
    };
    function aplicaServ($total){
        return $total*=1.15;
    };
    function aplicaIGIC($total){
        return $total*=1.07;
    };

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
