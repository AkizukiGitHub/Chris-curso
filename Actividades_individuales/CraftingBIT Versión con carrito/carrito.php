<?php
session_start();
include("includes/encabezado.php");
?>
<header class="bg-dark">
    <div class="container-fluid">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Carrito</h1>
            <p class="lead fw-normal text-white-50 mb-0">Crafting BIT</p>
        </div>
    </div>
</header>
<div class="container p-5">
<?php
    // print_r($_SESSION);
    echo consultar_prod();
    echo "</div>";

function consultar_prod(){
    $t='<table class="table table-hover"><thead><td>Producto</td><td>Descripción</td><td>Precio</td><td>cantidad</td><td>Eliminar</td></thead>';
    include 'includes/BD/conexion.php';
    $sql = "SELECT id, nombre, precio, foto FROM producto WHERE id IN(SELECT id_producto FROM detalle_pedido WHERE id_pedido=". $_SESSION["pedido"] .");";
    // Hacemos la consulta
    $resultado = mysqli_query($conexion, $sql);  
    // Preguntamos si hay resultados
    if (mysqli_num_rows($resultado) > 0) {
        while($row = mysqli_fetch_assoc($resultado)) {
            //mostramos los resultados
            $t.='<tr>';
            $t.='<td><img src="'. $row["foto"] . '"  class="img-thumbnail"></td>'. '<td>'. $row["nombre"] . '</td>'. '<td>'. $row["precio"] . '</td>'.'<td>1</td>'. '<td>'. '
            <div class="text-center">
            <form action="includes/carrito/borrar_carrito.php" method="POST">
            <button class="btn btn-danger" name="id" type="submit" value="'.$row["id"].'">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"></path>
            </svg>
            </button>
            </form> 
            </div>
            </td> ';
            $t.='</tr>';
        }
        $t.='</table>';
        return $t;
    }else{
        return "Sin resultados";
    }
}
?>
<form action="pagar.php" method="POST">
    <input type="submit" value="Pagar">
</form>
<a href="productos.php">Seguir compando</a>