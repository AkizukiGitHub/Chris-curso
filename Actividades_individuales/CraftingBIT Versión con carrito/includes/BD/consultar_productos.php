<?php
  // 1. Conecta con la BD
  include 'conexion.php';
  // 2. Crear consulta
  $sql = "SELECT * FROM producto";
  //3. Hacemos la consulta
  $resultado = mysqli_query($conexion, $sql);  
  // 4. Preguntamos si hay resultados
  if (mysqli_num_rows($resultado) > 0) {
  // 5. Recorremos los resultado
    while($row = mysqli_fetch_assoc($resultado)) {
        if($row["tipo"]==1){
?>
    <div class="col mb-5">
        <div class="card h-100">
            <!-- Product image-->
            <img class="card-img-top" src="<?php echo $row["foto"]?>" alt="..." />
            <!-- Product details-->
            <div class="card-body p-4">
                <div class="text-center">
                    <!-- Product name-->
                    <h5 class="fw-bolder"><?php echo $row["nombre"]?></h5>
                    <!-- Product price-->
                    <?php echo $row["precio"]. "€"?>
                </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="text-center">
                <form action="includes/carrito/llenar_carrito.php" method="POST">
                    <input type="hidden" value="<?php echo $row["id"]?>" name="id">
                    <input type="hidden" value="<?php echo $row["nombre"]?>" name="nombre">
                    <input type="hidden" value="<?php echo $row["precio"]?>" name="precio">
                    <input type="hidden" value="<?php echo $row["foto"]?>" name="foto">
                    <input type="submit" class="btn btn-outline-dark mt-auto" name="btn" value="Comprar"> 
                </form>
                </div>
            </div>
        </div>
    </div>

<?php 
    } else {
?> 
<div class="col mb-5">
    <div class="card h-100">
    <!-- Venta badge-->
        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Patrón</div>
        <!-- Product image-->
        <img class="card-img-top" src="<?php echo $row["foto"]?>" alt="..." />
        <!-- Product details-->
        <div class="card-body p-4">
            <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder"><?php echo $row["nombre"]?></h5>
                <!-- Product reviews-->
                <div class="d-flex justify-content-center small text-warning mb-2">
                    <div class="bi-star-fill"></div>
                    <div class="bi-star-fill"></div>
                    <div class="bi-star-fill"></div>
                    <div class="bi-star-fill"></div>
                    <div class="bi-star-fill"></div>
                </div>
                 <!-- Product price-->
                <span class="text-muted text-decoration-line-through">20.00€</span>
                <?php echo $row["precio"]?>
            </div>
        </div>
        <!-- Product actions-->
        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
             <div class="text-center">
            <form action="includes/carrito/llenar_carrito.php" method="POST">
                <input type="hidden" value="<?php echo $row["id"]?>" name="id">
                <input type="hidden" value="<?php echo $row["nombre"]?>" name="nombre">
                <input type="hidden" value="<?php echo $row["precio"]?>" name="precio">
                <input type="hidden" value="<?php echo $row["foto"]?>" name="foto">
                <input type="submit" class="btn btn-outline-dark mt-auto" name="btn" value="Comprar"> 
            </form>
            </div>
        </div>
    </div>
</div>

<?php
    }   //cierra el si
    } //cierra el while
  } else {
    echo "No hay productos";
  }

?>


