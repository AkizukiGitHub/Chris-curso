<?php
session_start();

// inicio la sesion que se usara como base de datos
class Cliente
{
    protected $nombre;
    protected $apellidos;
    protected $DNI;
    // creo la clase Cliente y le doy 3 atributos
	function getNombre() {
        return $this->nombre;
	}
	function setNombre($nombre){
        $this->nombre = $nombre;
		return $this;
	}
	function getApellidos() {
        return $this->apellidos;
	}
	function setApellidos($apellidos){
        $this->apellidos = $apellidos;
		return $this;
	}
	function getDNI() {
        return $this->DNI;
	}
	function setDNI($DNI){
        $this->DNI = $DNI;
		return $this;
	}
    // creo todos los getter y los setters
}
class Cuenta extends Cliente
{
    protected $IBAN;
    // creo la clase cuenta que hereda de la clase cliente y le agrego el IBAN
	function getIBAN() {
		return $this->IBAN;
	}
	function setIBAN($IBAN){
		$this->IBAN = $IBAN;
		return $this;
	}
    // getters y setters de la clase cuenta
}
$mensaje;
$listaCuentas = "<table border=1>";
// lista cuentas es una variable que concatena toda las etiquetas y elementos de la tabla
$cuentaEncontrada = 0;
// cuenta encontrada se usa para verificar que se encontro una cuenta con el DNI indicado incrementando su valor

if (isset($_GET["btn1"])) {
    // este if esta relacionado con el primer formulario el del registro
    if(empty($_SESSION["objetos"])){
        // doble condicional que ocurre si se activo el boton y no hay nada en la tapa objetos de la session
        // al entrar en el if creo el array dentro de objetos y meto los elementos del formulario en la sesion
        $_SESSION["objetos"]=[];
        
        array_push($_SESSION["objetos"],
        (new Cuenta())
            ->setNombre($_GET["nombre"])
            ->setApellidos($_GET["apellidos"])
            ->setDNI($_GET["DNI"])
            ->setIBAN($_GET["IBAN"]));
    }
    else {
        // al llegar al else es que se activo el boton y objetos no esta vacio se hace un push al array para meter nuevos clientes
        array_push($_SESSION["objetos"],
        (new Cuenta())
            ->setNombre($_GET["nombre"])
            ->setApellidos($_GET["apellidos"])
            ->setDNI($_GET["DNI"])
            ->setIBAN($_GET["IBAN"]));
}
}
if(isset($_GET["btn2"])){
    // este if esta relacionado con el segundo formulario el de la busqueda
    if(empty($_SESSION["objetos"])) {
        // si se activa el boton y esta vacio ese envia este mensaje
        echo "No hay cientes registrados".PHP_EOL."\n";
    }else{
        // si hay elementos dentro de objetos empieza la busqueda
        foreach ($_SESSION["objetos"] as $index=>$cuenta) {
            if(($cuenta->getDNI()==$_GET["DNI"])){
                // verifica que el DNI ingresado por el formulario sea igual que el DNI del objeto sacado por el foreach
                // si lo encuentra añade una nueva fila y la rellena con todos los elementos
                               
                if ($cuentaEncontrada>0) {
                $listaCuentas .= "<tr>";
                $listaCuentas .= "<td>".$_SESSION["objetos"][$index]->getIBAN(). "</td>";
                $listaCuentas .= "</tr>";
                // incremento cuenta encontrada que es el verificador
                $cuentaEncontrada++;
                }
                while ($cuentaEncontrada==0){
                $listaCuentas .= "<tr>"; 
                $listaCuentas .= "<td rowspan='0'>".$_SESSION["objetos"][$index]->getNombre(). "</td>";
                $listaCuentas .= "<td rowspan='0'>".$_SESSION["objetos"][$index]->getApellidos(). "</td>";
                $listaCuentas .= "<td rowspan='0'>".$_SESSION["objetos"][$index]->getDNI(). "</td>";
                    $mensaje = "El DNI ingresado pertecene a "
                    .$_SESSION["objetos"][$index]->getApellidos()." "
                    .$_SESSION["objetos"][$index]->getNombre()." y el numero de cuentras encontradas es: ";
                    $listaCuentas .= "<td>".$_SESSION["objetos"][$index]->getIBAN(). "</td>";
                    $listaCuentas .= "</tr>";
                    $cuentaEncontrada++;
                };

                
            }
        }
        // este if decide si se imprime la lista o no segun el verificador cuentaEncontrada
        if ($cuentaEncontrada>0) {
            $mensaje .=$cuentaEncontrada."<br>";
            // echo $listaCuentas, $mensaje, "Test";
            echo $listaCuentas;
            // echo "<div>$mensaje</div>";
            // echo "<p>".$mensaje."</p>";
        }else {
            echo "No se encontraron cuentas del DNI indicado";
        }
    }
}

echo "<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>E2</title>
</head>
<body>
    <form action='' method='get' name='form1'>
        <input type='text' name='nombre' placeholder='nombre'>
        <input type='text' name='apellidos' placeholder='apellidos'>
        <input type='text' name='DNI' placeholder='DNI'>
        <input type='text' name='IBAN' placeholder='IBAN'>
        <input type='submit' name='btn1' value='Registrar'>
    </form>
    <br><hr><br>
    <form action='' method='get' name='form2'>
        <input type='text' name='DNI' placeholder='DNI'>
        <input type='submit' name='btn2' value='Buscar'>
    </form>
    <hr>
</body>
</html>";
?>
