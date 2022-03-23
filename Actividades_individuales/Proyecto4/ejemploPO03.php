<?php
session_start();
class Persona {
    public $nombre; 
    public $apellidos;
    public $dni;  
    public $movil; 
    public $email; 
    public $edad;
    public $vivo;
    
    function __construct($nombre,$apellidos,$dni,$movil,$email,$edad,$vivo) { 
        $this->nombre=$nombre;
        $this->apellidos=$apellidos;
        $this->dni=$dni;
        $this->movil=$movil;
        $this->email=$email;
        $this->edad=$edad;
        $this->vivo=$vivo; 

     }

     function get_nombre() { 
        return $this->nombre;
    }

    function set_vivo() { 
        $this->vivo=false;
        return $this->vivo;
    }

 }

//  class Coche extends Persona {
//      #código
//      public $marca;
//      function get_marca() { 
//         return $this->marca;
//     }
//     function set_marca($x) { 
//         $this->marca=$x;
//         return $this->marca;
//     }
//  } 

//  $objeto1=new Coche($_GET["nombre"],$_GET["apellidos"],$_GET["dni"],$_GET["movil"],$_GET["email"],$_GET["edad"],$_GET["vivo"]);

//     echo $objeto1->set_marca("Volvo");



// aqui viene lo bueno
//Opción 1
//  $nombre=$_GET["nombre"];
// $apellidos=$_GET["apellidos"];
// $dni=$_GET["dni"];
// $movil=$_GET["movil"];
// $email=$_GET["email"];
// $edad=$_GET["edad"];
// $vivo=$_GET["vivo"];

// $objeto1 = new Persona($nombre,$apellidos,$dni, $movil,$email,$edad,$vivo);

//Opción 2
if(isset($_GET["btn1"])){
if(empty($_SESSION["objetos"])){
    $_SESSION["objetos"]=[];
    array_push($_SESSION["objetos"], new Persona($_GET["nombre"],$_GET["apellidos"],$_GET["dni"],$_GET["movil"],$_GET["email"],$_GET["edad"],$_GET["vivo"])); 
}else{
     
        array_push($_SESSION["objetos"], new Persona($_GET["nombre"],$_GET["apellidos"],$_GET["dni"],$_GET["movil"],$_GET["email"],$_GET["edad"],$_GET["vivo"]));        
           
     }
    echo "<table border=1>";
    foreach($_SESSION["objetos"] as $cajita){
        echo "<tr>";
        echo "<td>".$cajita->get_nombre(). "</td>";
        echo "<td>".$cajita->apellidos . "</td> ";
        echo "</tr>";
    } // cierra el foreach
 echo "</table>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Probado cosas</title>
</head>
<body>
    <form action="" method="get" name="form1">
        <input type="text" name="nombre" placeholder="nombre">
        <input type="text" name="apellidos">
        <input type="text" name="dni" placeholder="dni">
        <input type="text" name="movil" placeholder="movil">
        <input type="email" name="email">
        <input type="number" name="edad" placeholder="edad">
        vivo:<input type="radio" value="true" name="vivo">
        muerto<input type="radio" value="false" name="vivo" checked>
        <input type="submit" name="btn1">
    </form>
</body>
</html>