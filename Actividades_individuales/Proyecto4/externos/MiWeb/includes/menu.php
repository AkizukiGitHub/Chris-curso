<header class="p-3 bg-dark text-white">
   <div class="container">
     <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
       <a href="#" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none"></a>
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="inicio.php" class="nav-link px-2 text-secondary">Inicio</a></li>
              <li><a href="#" class="nav-link px-2 text-white">Calculadora</a></li>
              <li><a href="#" class="nav-link px-2 text-white">Servicios</a></li>
              <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
              <li><a href="#" class="nav-link px-2 text-white">Contacto</a></li>
            </ul>
    
            <!-- <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
              <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
            </form> -->
    
            <div class="text-end">
              <!-- <button type="button" class="btn btn-outline-light me-2">Login</button> -->
              <a href="#" class="nav-link px-2 text-white"><?php echo $nombrelogged;?></a>
              <img src="<?php echo $imagenlogged ?>" alt="">
              <button type="button" class="btn btn-warning" onclick="window.location.href='login.php'">Login</button>
              <button type="button" class="btn btn-warning" onclick="window.location.href='registro.php'">Registro</button>
            </div> 
          </div>
        </div>
      </header>
      <br>
      <main class="container-fluid">  