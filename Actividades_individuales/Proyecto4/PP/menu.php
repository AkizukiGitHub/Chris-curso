<?php
include("includes/encabezado.php");
include("includes/menu.php");
?>
<center>
    <div id="demo" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/smiling-male-waiter-welcoming-guests-to-country-restaurant-KYY866.jpg" class="d-block w-50">
            </div>
            <div class="carousel-item">
                <img src="img/restaurant.jpg" class="d-block w-50">
            </div>
            <div class="carousel-item">
                <img src="img/Photo_Jan_12__5_35_53_PM_(1).jpg" class="d-block w-50">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</center>
<?php
include("includes/pie.php");
?>