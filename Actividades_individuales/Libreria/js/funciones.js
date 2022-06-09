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
    validar_patron(password);
  } else {
    ("Las contraseñas no coinciden");
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
