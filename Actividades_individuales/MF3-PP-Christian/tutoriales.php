<?php
session_start();
    if (($_SESSION["usuario"]!="") and ($_SESSION["password"]<>"")){
    include("includes/encabezado.php");
    include("includes/menu_logueado.php");
?>
<body>
<div class="container">
    <div class="row">
         
    </div>
    <span style="color:red;"><strong>Aqui agregue dos nuevas opciones una para darse de baja y otra para cambiar la clave</strong></span>
    <div class="row">
        <div class="col p-3">
            <div class="card" style="width: 18rem;">
                <img src="img/tutoriales/crochet_cesta.png" class="card-img-top" alt="Cesta de hecha a crochet con hilos de colores">
                <div class="card-body">
                    <h5 class="card-title">Crochet</h5>
                    <p class="card-text">Aprende desde los puntos básicos hasta las prendas más complejas y luce tu trabajo este verano!</p>
                    <a href="productos.php" class="btn btn-success">Patrones</a>
                </div> <!-- Cierra el cuerpo de la tarjeta -->
            </div><!-- Cierra  la tarjeta-->
        </div> <!-- Cierra la columna -->

        <div class="col p-3">
            <div class="card" style="width: 18rem;">
                <img src="img/tutoriales/dos-agujas.png" class="card-img-top" alt="Manos tejiendo a dos ajujas con hilo verde">
                <div class="card-body">
                    <h5 class="card-title">Tricot</h5>
                    <p class="card-text">Sueters, faldas y prendas para bebés, el regalo perfecto hecho a mano!</p>
                    <a href="productos.php" class="btn btn-success">Patrones</a>
                </div> <!-- Cierra el cuerpo de la tarjeta -->
            </div><!-- Cierra  la tarjeta-->
        </div> <!-- Cierra la columna -->

        <div class="col p-3">
            <div class="card" style="width: 18rem;">
                <img src="img/tutoriales/making-greeting-cards.jpg" class="card-img-top" alt="Muejr haciendo una tarjeta">
                <div class="card-body">
                    <h5 class="card-title">Crochet</h5>
                    <p class="card-text">Aprende desde los puntos básicos hasta las prendas más complejas y luce tu trabajo este verano!</p>
                    <a href="productos.php" class="btn btn-success">Patrones</a>
                </div> <!-- Cierra el cuerpo de la tarjeta -->
            </div><!-- Cierra  la tarjeta-->
        </div> <!-- Cierra la columna -->
        
    </div><!-- Cierra la fila -->

</div><!-- Cierra el conteendor -->
    


</body>
<?php
    include("includes/pie.php");
    } //cierra el if de la sesión
?>
