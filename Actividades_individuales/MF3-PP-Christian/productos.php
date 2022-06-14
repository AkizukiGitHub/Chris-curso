<?php
session_start();
if (($_SESSION["usuario"]!="") and ($_SESSION["password"]<>"")){
    //incluir la cabecera
    include("includes/encabezado.php");
    include 'includes/menu_logueado.php';
?>    
    <!-- Header-->
        <header class="bg-dark py-1">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Crafting BIT</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Tus manualidades favoritas</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
<?php
    include("includes/BD/consultar_productos.php"); // Aqui se consulta en la base de datos para poder mostrar los productos
?>    
                    
                </div>
            </div>
        </section>

<?php 
}
    // Inserta el pie de la página
    include 'includes/pie.php';
?>
