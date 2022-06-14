<?php
session_start();
//incluir la cabecera y el menu
include("includes/encabezado.php");
include 'includes/menu.php';
?>

<!-- Estilo personalizado -->
<link href="css/login.css" rel="stylesheet">
    
<main class="form-signin">
  <form action="includes/login/verificar_usuario.php" method="POST">
    <img class="mb-4" src="img/logo.png" alt="Candy, ¿cómo lo hago?" width="309" height="128">
    <h1 class="h3 mb-3 fw-normal">Bienvenido</h1>

    <div class="form-floating">
      <input type="text" name="usuario" class="form-control" id="floatingInput" placeholder="">
      <label for="floatingInput">Usuario</label>
    </div>

    <div class="form-floating">
      <input type="password" name="clave" class="form-control" id="floatingPassword" placeholder="">
      <label for="floatingPassword">Contraseña</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Recuerdame
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-warning" type="submit" name="login">Entrar</button>
    
  </form>
</main>

<?php
  // Inserta el pie de la página
  include 'includes/pie.php';
?>   