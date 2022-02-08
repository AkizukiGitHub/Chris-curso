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
