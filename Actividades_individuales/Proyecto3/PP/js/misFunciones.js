var arrayFormulario = document.getElementsByTagName("input");
// con get elements by tag name saco todos los datos ingresados y los meto en un array para manejarme comodamente con ellos
var clientes = new Array();
// aqui creo donde se guardaran todos los clientes y es un array donde se meteran objetos de mi clase cliente
var lista;
// creo la variable lista qu luego servira para guardar todas las etiquetas que imprime la tabla clientes

// creo la clase cliente con todos los atributos dados en el formulario
class Cliente {
  constructor(nom, ape, DNI, correo) {
    this.nombre = nom;
    this.apellido = ape;
    this.DNI = DNI;
    this.correo = correo;
  }
}

// esta funcion es llamada por el boton registrar
function registrarCliente() {
    // este if revisa que se haya ingresado un valor en los campos nombre,apellido y correo por eso 3 de las condiciones es que el valor sea mayor que 0
    //ademas verifica el DNI con la funcion validarDNI que retorna true si el DNI es Valido
    //si los 4 condiciones se dan como correctas el cliente se registrara en la tabala si no mostrara un mensaje en el parrafo con id clientes del html
  if (
    arrayFormulario[0].value.length > 0 &&
    arrayFormulario[1].value.length > 0 &&
    validarDNI(arrayFormulario[2].value) == true &&
    arrayFormulario[3].value.length > 0
  ) {
      //llamo al constructor de la clase cliente y le paso los valores del formulario
    var cliente = new Cliente(
      arrayFormulario[0].value,
      arrayFormulario[1].value,
      arrayFormulario[2].value,
      arrayFormulario[3].value
    );
    //añado el nuevo cliente al array con todos los clientes
    clientes.push(cliente);
    //despues de añadir el cliente muestro la tabla con todos los clientes añadidos
    MuestraListaClientes(clientes);
  } else {
      //si alguno de los condicionales anteriores no feu valido se mostrara el siguiente mensaje en el parrafo clientes del html
    document.getElementById("clientes").innerHTML =
      "Dato Ingresado invalido, intentelo nuevamente";
  }
}

function validarDNI(valor) {
  var arreglo = [
      "T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E",
  ];
  var largo = valor.length; // calcula el largo del DNI: 9
  largo = largo - 1; // le quitamos 1 al largo, que será la letra: 8
  var numero = parseInt(valor.substring(0, largo)); // obtenemos la cadena de números: 12345678
  var letra = valor.substring(largo); // obtenemos la cadena desde la posición 8: Z
  letra = letra.toUpperCase(); // convertimos a mayúscula para buscar en el arreglo
  var resto = numero % 23; // aplicamos la fórmula para validar un DNI
  if (arreglo[resto] == letra) {
    // si la letra coincide con el arreglo es válido
    return true;
  } else {
    return false;
  }
//   retorno true o false para usarlo luego como condicional en la funcion registrar
}

function MuestraListaClientes(clientes) {
// inicio la creacion de la tabla
  lista = "<table border=1>";
//   encabezado de la tabla para poder identificar los elementos
  lista += "<th>Nombre</th><th>Apellidos</th><th>DNI</th><th>Correo</th>";
//   bucle for each que recorre cada objeto cliente en el array clientes
  clientes.forEach((cliente) => {
    lista += "<tr>";
    // abro la primera fila al encontrar el primer objeto 
    for (let iterator in cliente) {
        // por cada elemento dentro del objeto se hace una celda
      lista += "<td>";
      // concateneno el valor del atributo en la posicion actual dentro de cada celda
      lista += cliente[iterator];
      lista += "</td>";
      console.log(iterator);
    }
  });
  lista += "</tr>";
  lista += "</table>";
//   cierro la fila y la tabla
  document.getElementById("clientes").innerHTML = lista;
//   envio la variable lista a el parrafo con el id clientes dentro del html para mostrar toda la tabla
}
