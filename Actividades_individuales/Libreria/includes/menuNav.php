<body>
    <nav class="navbar-test navbar-expand d-flex justify-content-between">
        <div class="col-3 p-2">
            <a class="navbar-brand d-flex justify-content-center" href="#">LOGO</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID" aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse col-9" id="navbarID">
            <form class="form col-7">
                <div class="input-group">
                    <input class="form-control" type="search" placeholder="Buscar por autor, título, género, ISBN" aria-label="Search">
                    <button class="btn-search btn !important" type="submit" style="color:#000000;">Search</button>
                </div>
            </form>
            <div class="col-2 align-self-end">
                <button class="btn btn-sample mr-2 mt-2 mb-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <span class="material-symbols-outlined">account_circle</span><br><span>Identificate</span></button>
            </div>
        </div>
    </nav>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header pb-0 pt-1">
            <h4 id="offcanvasRightLabel">Identificate</h4>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <hr class="m-2">
            <form action="" id="logInForm" style="visibility: visible;">
                <h3>Iniciar sesion</h3>
                <div class="form-group">
                    <label for="email"><strong>Correo:</strong></label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Escribir correo" required>
                    <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su informacion con otros</small>
                </div>
                <div class="form-group">
                    <label for="password"><strong>Contraseña:</strong></label>
                    <input type="password" class="form-control" id="password" placeholder="Contraseña" required>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Recuerdame</label>
                </div>
                <button type="submit" class="btn-search btn w-100" style="color:#000000;">Iniciar sesion</button>    
            </form>
            <form action="" style="visibility: hidden; max-height: 0%;" id="signInform">
                <h3>Registrarse</h3>
                <div class="form-group">
                    <label for="email"><strong>Correo:</strong></label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Escribir correo" required>
                    <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su informacion con otros</small>
                </div>
                <div class="form-group">
                    <label for="password"><strong>Contraseña:</strong></label>
                    <input type="password" class="form-control" id="password" placeholder="Contraseña" required>
                </div>
                <div class="form-group">
                    <label for="password"><strong>Confirmar contraseña:</strong></label>
                    <input type="password" class="form-control" id="confirm_password" placeholder="Contraseña" required>
                </div>
                <br>
                <button type="submit" class="btn-search btn w-100" style="color:#000000;">Registrarse</button>
            </form>
            <hr class="m-2">
            <div class="text-center" id="signInButton" style="visibility: visible;">
                <h3>¿Eres nuevo?</h3>
                <button onclick="mostrar_ocultar('logInForm_signInform_signInButton_logInButton')" class="btn-search btn fluid" style="color:#000000;">Registrarse</button>
            </div>
            <div class="text-center" id="logInButton" style="visibility: hidden;">
                <h3>¿Ya tienes cuenta?</h3>
                <button onclick="mostrar_ocultar('logInForm_signInform_signInButton_logInButton')" class="btn-search btn fluid" style="color:#000000;">Iniciar sesion</button>
            </div>
        </div>
    </div>


    <!-- element.style {
        /* color: #FF0000; */
        border-color: #FF0000;
        box-shadow: inset 0 1px 1px rgba(00, 0, 0, 0.075),0 0 8px rgba(255, 0, 0, 0.6);
    } -->
    