<?php
session_start();
class Cliente
{
    protected $nombre;
    protected $apellidos;
    protected $DNI;
    
    function __construct($nombre, $apellidos, $DNI) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->DNI = $DNI;
    }
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

    function __construct($IBAN) {
        $this->IBAN = $IBAN;
    }
	function getIBAN() {
		return $this->IBAN;
	}
	function setIBAN($IBAN){
		$this->IBAN = $IBAN;
		return $this;
	}
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
        <input type="text" name="dni" placeholder="dni">
        <input type="text" name="IBAN" placeholder="IBAN">
        <input type="submit" name="btn1">
    </form>
</body>
</html>