function mostrar_ocultar(string) {
  var elemento = string;
  var elementos = elemento.split("_");
  var longitud = elementos.length;

  for (i = 0; i < longitud; i++) {
    var elemento = document.getElementById(elementos[i]);
    if (elemento.style.visibility == "hidden") {
      elemento.style.visibility = "visible";
      elemento.style.maxHeight = "100%";
    } else if (elemento.style.visibility == "visible") {
      elemento.style.visibility = "hidden";
      elemento.style.maxHeight = "0px";
    }
  }
}

function validar_password(password, confirm_password) {
  let igual_o_distinta = compare_password(password, confirm_password);
  if (igual_o_distinta) {
    let valio_o_invalido = validar_patron(password);
    if (valio_o_invalido) {
        return true;
        }
    else {
        document.getElementById("errores").innerHTML = ;
        }
  } else {
    document.getElementById("errores").innerHTML = '<div class="alert alert-danger d-flex align-items-center" role="alert"><svg class="bi flex-shrink-0 me-2" width="16" height="16" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg><div><strong>Error!</strong> Las contraseñas no coinciden.</div><div>strong>Error!</strong> Las contraseñas no coinciden.</div></div>';
  }
}



function compare_password(password, confirm_password) {
  if (password === confirm_password) {
    return true;
  } else {
    return false;
  }
}

function validar_patron(password) {
  var re =
    /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,16}$/;
  return re.test(password);
}
