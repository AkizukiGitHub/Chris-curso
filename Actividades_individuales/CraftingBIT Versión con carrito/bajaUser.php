<?php
session_start();
    if (($_SESSION["usuario"]!="") and ($_SESSION["password"]<>"")){
    include("includes/encabezado.php");
    include("includes/menu_logueado.php");

    print_r($_SESSION);
?>
<!-- formulario para borrar usuario -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Baja de usuario</h3>
                    <h4 class="panel-title">Ingrese sus datos para confirmar la baja</h4>
                </div>
                <div class="panel-body">
                    <form action="includes/verificarBajaUser.php" method="post">
                        <div class="form-group">
                            <label for="usuario">Usuario</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario">
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
                        </div>
                        <button type="submit" name="baja" class="btn btn-default">Borrar usuario</button>
                    </form>
                </div>
            </div>
        </div>
    </div>






<?php
    include("includes/pie.php");
    } //cierra el if de la sesión
?>