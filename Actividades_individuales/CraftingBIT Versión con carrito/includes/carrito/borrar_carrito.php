<?php
session_start();
include '../BD/conexion.php'; 
$id=$_POST["id"];
$sql = "DELETE FROM detalle_pedido WHERE id_pedido=". $_SESSION["pedido"] ." AND id_producto=".$id.";";
if (mysqli_query($conexion, $sql)) {
    echo "Usuario borrado con éxtito";
    array_splice($_SESSION["carrito"],$id,$id);
    header('Location: ../../carrito.php');
} else {
    echo "Error borrando producto: " . mysqli_error($conexion);
}
 
?>
