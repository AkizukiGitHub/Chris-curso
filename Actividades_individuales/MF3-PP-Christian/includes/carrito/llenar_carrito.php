<?php
session_start();
if(isset($_POST["btn"])){     
    if(empty($_SESSION["carrito"])){
        $_SESSION["carrito"]=[$_POST["id"]];
    }else{
        array_push($_SESSION["carrito"],$_POST["id"]);
    }
    if(empty($_SESSION["pedido"])){
        $_SESSION["pedido"]=insertar_pedido();
    }
    insertar_detalle();
}


function insertar_pedido(){
    include '../BD/conexion.php';
    $sql = "INSERT INTO pedido VALUES (NULL, NOW(),'".$_SESSION["id"]."');";   
    if (mysqli_query($conexion, $sql)) {
        // Obtener el último id de inserción
        $id_pedido = mysqli_insert_id($conexion); 
        return $id_pedido;
    }       
}

function insertar_detalle(){
    include '../BD/conexion.php';
    $sql = "INSERT INTO detalle_pedido VALUES (NULL, 1,".$_SESSION["pedido"].", ".$_POST["id"].");";
    echo $sql;
    if (mysqli_query($conexion, $sql)) {
        header('Location:../../carrito.php');
    }      
}


?>
   


    