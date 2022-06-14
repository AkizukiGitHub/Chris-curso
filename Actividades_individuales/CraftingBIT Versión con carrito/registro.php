<?php
session_start();
 //incluir la cabecera
 include("includes/encabezado.php");
 include 'includes/menu.php';
?>

<!-- Custom styles for this template -->
<link href="css/registro.css" rel="stylesheet">
     <div class="container">
       <main>
         <div class="py-5 text-center">
           <img class="d-block mx-auto mb-4" src="img/female-artist-hand-making-cartoon-faces-using-craft-equipment.jpg" alt="Candy, ¿cómo lo hago?" width="25%">
           <h2>Disfruta con nuestras manualidades para todas las edades</h2>
           <p class="lead">Registrate, para acceder a las instrucciones y realiza con nosotros tus manualidades favoritas!!!</p>
         </div>
     
         <div class="row g-5">
           <div class="col-md-7 col-lg-8">
             <h4 class="mb-3">Formulario de Registro</h4>
             <!-- Aqui empieza el formulario -->
             <form class="needs-validation" action="includes/login/registrar_usuario.php" method="POST">
               <div class="row g-3">
                 <div class="col-sm-6">
                   <label for="firstName" class="form-label">Nombre</label>
                   <input type="text" class="form-control" id="firstName" placeholder="" value="" name="nombre" required>
                   <div class="invalid-feedback">
                     Primer nombre válido es requerido.
                   </div>
                 </div>
     
                 <div class="col-sm-6">
                   <label for="lastName" class="form-label">Apellidos</label>
                   <input type="text" class="form-control" id="lastName" placeholder="" value="" name="apellidos" required>
                   <div class="invalid-feedback">
                     Apellido válido es requerido.
                   </div>
                 </div>
     
                 <div class="col-12">
                   <label for="username" class="form-label">Nombre de Usuario</label>
                   <div class="input-group has-validation">
                     <span class="input-group-text">@</span>
                     <input type="text" class="form-control" id="username" placeholder="Nombre de usuario" name="usuario" required>
                   <div class="invalid-feedback">
                       Tu nombre de usuario es requerido.
                     </div>
                   </div>
                 </div>
     
                 <div class="col-12">
                   <label for="email" class="form-label">Correo electrónico <span class="text-muted"></span></label>
                   <input type="email" class="form-control" id="email" placeholder="nick@ejemplo.com" name="email">
                   <div class="invalid-feedback">
                     Por favor ingresa una dirección de correo válida.
                   </div>
                 </div>
                     
                <div class="col-sm-6">
                   <label for="Calve" class="form-label">Contraseña</label>
                   <input type="password" class="form-control" id="clave1" placeholder="" value="" name="clave" minlength=6 maxlength=12 required>
                   <div class="invalid-feedback">
                   La contraseña debe tener de 6 a 12 caracteres.
                   </div>
                 </div>

                <div class="col-sm-6">
                   <label for="Clave2" class="form-label">Repitir la Contraseña</label>
                   <input type="password" class="form-control" id="clave2" name="clave2" placeholder="" value="" minlength=6 maxlength=12 required>
                   <div class="invalid-feedback">
                     Las contraseñas no son iguales.
                   </div>
                </div>


               <hr class="my-4">
     
               <button class="w-100 btn btn-warning btn-lg" type="submit" name="registrar" >Registrar</button>
             </form>
             <p>Al crear una cuenta, aceptas las <a href="#">Condiciones de uso </a> y el aviso de privacidad de Candy.</p>
           </div>
         </div>
       </main>
     
     </div>  <!--  fin del container -->
     
    <script src="form-validation.js"></script>

<?php
    // Inserta el pie de la página
    include 'includes/pie.php';
?>