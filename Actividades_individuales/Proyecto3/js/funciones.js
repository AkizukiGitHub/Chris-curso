function diccionario() {
  var palabra = prompt("Inserte una Palabra", "Fajana");

  switch (palabra) {
    case "Guagua":
      var def =
        "Vehículo automotor que presta servicio urbano o interurbano en un itinerario fijo";
      break;
    case "Zurron":
      var def =
        "Bolsa grande de pellejo, que regularmente usan los pastores para guardar y llevar su comida u otras cosas.";
      break;
    case "Magec":
      var def =
        "Magec era el nombre en guanche que recibía el Sol por parte de las poblaciones aborígenes de las islas de Gran Canaria y Tenerife —Canarias, España—, poseyendo carácter de deidad en la mitología guanche.";
      break;
    case "Fajana":
      var def =
        "Terreno llano al pie de laderas o escarpes, formado comúnmente por materiales desprendidos de las alturas que lo dominan.";
      break;
    default:
      var def =
        "Terreno llano al pie de laderas o escarpes, formado comúnmente por materiales desprendidos de las alturas que lo dominan.";
      break;
  }

  return def;
}

function loteria() {
  var numeroIngresado = prompt(
    "Inserte el numero de laloteria. Digito en 0 y 100"
  );
  var numeroGanador = Math.trunc(Math.random() * 100);
  if (numeroGanador == numeroIngresado) {
    alert("USTED ES EL GANADOR!!!");
  } else {
    alert("Mas suerte la proxima c:");
  }

  return numeroGanador;
}

function adivinaPalabra() {
  //problema si se da la palabra correcta en la ultima vuelta del bucle no hace la ultima verificacion
  var palabraOculta = prompt("Ingresa la palabra a advinidar");
  var palabraIngresada = prompt("Adivina la palabra");
  intentos = 2;
  do {
    validacion = palabraIngresada == palabraOculta;
    validacion
      ? alert("Correcto!!")
      : prompt("Incorrecto, te quedan " + intentos + " intentos");
    intentos--;
  } while (intentos > 0);

  if (validacion != true) {
    alert("Mas suerte a la proxima! La palabra era:" + palabraOculta);
  }
}

function adivinaPalabra2() {
  var palabraOculta = prompt("Ingresa la palabra a advinidar");
  var palabraIngresada = prompt("Adivina la palabra");
  var validacion;
  var intentos = 2;

  do {
    validacion = palabraIngresada == palabraOculta;
    validacion
      ? alert("Correcto!!")
      : prompt("Incorrecto, te quedan " + intentos + " intentos");
    intentos--;
  } while (intentos > 0);

  validacion = palabraIngresada == palabraOculta;
  if (validacion != true) {
    alert("Mas suerte a la proxima! La palabra era:" + palabraOculta);
  } else {
    alert("Correcto!!");
  }
}

function encuentraCaracter() {
  var palabra = prompt("Ingrese una palabra");
  var caracter = prompt("Ingrese el caracter que desea contar de la palabra dada");
  var cortador = 0;
  var index = 0;
  var coincidencias = 0;

  while (index != palabra.length + 1) {
    let caracterCortado = palabra.slice(cortador, cortador + 1);

    if (caracter == caracterCortado) {
      coincidencias++;
    }
    
    index++;
    cortador++;
  }

  alert("Se encontraron: " +coincidencias +" coincidencias del caracter en la palabra");
}
