<?php
session_start();
class Cliente
{
    protected $nombre;
    protected $apellidos;
    protected $DNI;

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
    
}
class Cuenta extends Cliente{
    protected $IBAN;

	function getIBAN() {
		return $this->IBAN;
	}
	function setIBAN($IBAN){
		$this->IBAN = $IBAN;
		return $this;
	}
}

if (isset($_GET["btn1"])) {
    if(empty($_SESSION["objetos"])){
        $_SESSION["objetos"]=[];

        array_push($_SESSION["objetos"],
        (new Cuenta())
            ->setNombre($_GET["nombre"])
            ->setApellidos($_GET["apellidos"])
            ->setDNI($_GET["DNI"])
            ->setIBAN($_GET["IBAN"]));
    }
    else {
        array_push($_SESSION["objetos"],
        (new Cuenta())
            ->setNombre($_GET["nombre"])
            ->setApellidos($_GET["apellidos"])
            ->setDNI($_GET["DNI"])
            ->setIBAN($_GET["IBAN"]));
}

if(isset($_GET["btn2"])){
    if(empty($_SESSION["objetos"])) {
        echo "No hay cientes registrados";
    }else{
        foreach ($_SESSION["objetos"] as $cuenta) {
            if(($cuenta->getDNI()==$_GET["DNI"])){

            }
        }
        echo "<table border=1>";
        foreach($_SESSION["objetos"] as $cuenta){
            echo "<tr>";
            echo "<td>".$cuenta->getNombre(). "</td>";
            echo "<td>".$cuenta->getApellidos(). "</td> ";
            echo "<td>".$cuenta->getDNI(). "</td> ";
            echo "<td>".$cuenta->getIBAN(). "</td> ";
            echo "</tr>";
        }
        echo "</table>";
    }
}
var_dump($_SESSION);
} 


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E2</title>
</head>
<body>
    <form action="" method="get" name="form1">
        <input type="text" name="nombre" placeholder="nombre">
        <input type="text" name="apellidos" placeholder="apellidos">
        <input type="text" name="DNI" placeholder="DNI">
        <input type="text" name="IBAN" placeholder="IBAN">
        <input type="submit" name="btn1" value="Registrar">
    </form>
    <br><hr><br>
    <form action="" method="get" name="form2">
        <input type="text" name="DNI" placeholder="DNI">
        <input type="submit" name="btn2" value="Buscar">
    </form>
</body>
</html>