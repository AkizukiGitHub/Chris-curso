<body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
    </svg>

    <nav class="navbar-test navbar-expand d-flex justify-content-between">
        <div class="col-3 p-2">
            <a class="navbar-brand d-flex justify-content-center" href="#">LOGO</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID"
            aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse col-9" id="navbarID">
            <form class="form col-7">
                <div class="input-group">
                    <input class="form-control" type="search" placeholder="Buscar por autor, título, género, ISBN"
                        aria-label="Search">
                    <button class="btn-search btn !important" type="submit" style="color:#000000;">Search</button>
                </div>
            </form>
            <div class="col-1 align-self-end">
                <button class="btn btn-sample mr-2 mt-2 mb-2" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <span class="material-symbols-outlined">account_circle</span><br><span>Identificate</span></button>
            </div>
            <div class="col-1 align-self-end">
                <button class="btn btn-cart mr-2 mt-2 mb-2" type="button">
                    <span class="material-symbols-outlined">shopping_cart</span><div class="cart-number">0</div></button>
            </div>
        </div>
    </nav>
    
    <!-- off canvas for shoppin cart -->
  


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
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                        placeholder="Escribir correo" required>
                    <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su informacion con
                        otros</small>
                </div>
                <div class="form-group">
                    <label for="password"><strong>Contraseña:</strong></label>
                    <input type="password" class="form-control" id="password" placeholder="Contraseña" required>
                    <small class="form-text text-muted">La contraseña debe tener entre 8 y 16 caracteres
                        <br>al menos una letra mayuscula y una misculas
                        <br>al menos un numero
                        <br>al menos un caracter especial
                        <br>no puede contener espacios
                    </small>
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
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                        placeholder="Escribir correo" required>
                    <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su informacion con
                        otros</small>
                </div>
                <div class="form-group">
                    <label for="password"><strong>Contraseña:</strong></label>
                    <input type="password" class="form-control" id="password" placeholder="Contraseña" required>
                </div>
                <div class="form-group">
                    <label for="password"><strong>Confirmar contraseña:</strong></label>
                    <input onchange="" type="password" class="form-control" id="confirm_password"
                        placeholder="Repetir contraseña" required>
                </div>
                <div id="errores">
                </div>
                <small id="reglas_password" class="form-text text-muted">
                    <br>La contraseña debe tener entre 8 y 16 caracteres
                    <br>Deben tener el mismo tamaño
                    <br>Al menos una letra mayuscula y una minuscula
                    <br>Al menos un numero
                    <br>Al menos un caracter especial
                    <br>No puede contener espacios
                </small>

                <br>
                <button type="submit" class="btn-search btn w-100" style="color:#000000;">Registrarse</button>
            </form>
            <hr class="m-2">
            <div class="text-center" id="signInButton" style="visibility: visible;">
                <h3>¿Eres nuevo?</h3>
                <button onclick="mostrar_ocultar('logInForm_signInform_signInButton_logInButton')"
                    class="btn-search btn fluid" style="color:#000000;">Registrarse</button>
            </div>
            <div class="text-center" id="logInButton" style="visibility: hidden;">
                <h3>¿Ya tienes cuenta?</h3>
                <button onclick="mostrar_ocultar('logInForm_signInform_signInButton_logInButton')"
                    class="btn-search btn fluid" style="color:#000000;">Iniciar sesion</button>
            </div>
        </div>
    </div>


    <!-- element.style {
        /* color: #FF0000; */
        border-color: #FF0000;
        box-shadow: inset 0 1px 1px rgba(00, 0, 0, 0.075),0 0 8px rgba(255, 0, 0, 0.6);
    } -->