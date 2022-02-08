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
  var palabraOculta = prompt("ingresa la palabra a advinidar");
  var palabraIngresada = prompt("Adivina la palabra");
  intentos = 2;
  do {
    validacion = palabraIngresada == palabraOculta;
    validacion
      ? alert("Correcto!!")
      : prompt("Incorrecto, te quedan " + intentos + " intentos");
    intentos--;
  } while (intentos > 0);

  if (intentos == 0) {
    alert("Mas suerte a la proxima! La palabra era:" + palabraOculta);
  }
}
