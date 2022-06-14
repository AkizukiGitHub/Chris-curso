<?php
session_start();
    if (($_SESSION["usuario"]!="") and ($_SESSION["password"]<>"")){
    include("includes/encabezado.php");
    include("includes/menu_logueado.php");

    echo "<span style='color:red;'><strong>dejo un print de la sesion para tenerlo a mano. esto no estaria en la version final de la pagina <br></strong></span>";
    print_r($_SESSION);

?>
<!-- formulario para cambiar clave de usuario-->
<!-- en esta parte se hace a operacion de modificar la base de datos -->
<div class="container">
<span style="color:red;"><strong>Aqui ocurre la operacion de modificar en la base de datos para poder cambiar la clave</strong></span>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Cambio de clave</h3>
                    <h4 class="panel-title">Ingrese sus datos para confirmar el cambio</h4>
                </div>
                <div class="panel-body">
                    <form action="includes/verificarCambiarClave.php" method="post"> <!-- Inicio del formulario -->
                        <div class="form-group">
                            <label for="usuario">Usuario</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario"> <!-- aqui se coloca el usuario -->
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña"> <!-- aqui se coloca la contraseña -->
                        </div>
                        <div class="form-group">
                            <label for="password">Nueva contraseña</label>
                            <input type="password" class="form-control" id="password" name="password2" placeholder="Contraseña"> <!-- aqui se coloca la nueva contraseña -->
                        </div>
                        <button type="submit" name="cambiar" class="btn btn-default">Cambiar clave</button> <!-- aqui el boton de cambiar clave te enviara al include que verificara antes de cambiarla-->
                    </form>
                </div>
            </div>
        </div>
    </div>




<?php
    include("includes/pie.php");
    } //cierra el if de la sesión
?>