function Dibuja() {
  var n = parseInt(document.getElementById("n").value);
  var m = parseInt(document.getElementById("m").value);
  //Solicito los dos valores, filas elemento N y Columnas elemento M 
  var lista;

  //Columnas tiene un requisito minimo de 3 asi que si se ingresa un numero menor que 3 se reemplaza por 3
  if(m<3){
      m=3;
  }
  //se inicia la tablasa colocando los encabezados que siempre esta ahi por prerequisito con sus 3 columnas
  lista = "<table border=1>";
  lista += "<th>Nº</th><th>Apellidos</th><th>Nombre</th>";
  for (let index = 0; index < n; index++) {
      //el bucle va ingresando filas segun el numero N ingresado
    lista += "<tr>";
    for (let j = 0; j < m; j++) {
        //el bucle va ingresando columas segun el numero M ingresado
      lista += "<td>";
      lista += "</td>";
    }
    lista += "</tr>";
  }
  lista += "</table>";
  //se cierra y envia al elemento p01 el string con toda los tags que conforman la tabla anidados
  document.getElementById("p01").innerHTML = lista;
}

function parMultiplo() {
    //Solicito el numero a evaluar desde el elemento num
  let n = parseInt(document.getElementById("num").value);
  //saco el resto del numero dado para coomprobrar si es un numero par
  let resto = n % 2;
  //si el resto es 0 es par
  var resultado;
// creo una variable resultado para luego regresar un mensaje en base al resultado  

//si resto en este momento es 0 el numero es a primeras un par
  if (resto == 0) {
    resultado = "El numero ingresado es Par";
    //si es distinto de 0 significa que no es par entonces lo evaluo para multiplo de 3
  } else if (resto != 0) {
    resto = n % 3;
    // si ahora despues de usar el modulo el resultado es 0 es un multiplo de 3 
    if (resto == 0) {
      resultado = "El numero ingresado es Multiplo de 3";
    } else {
        // si ninguno de los anteriores condiciones dan true es que no es ni par ni multiplo de 3 
      resultado = "El numero no es ni Par ni Multiplo de 3";
    }
  }
  //regreso la variable resultado con el mensaje acorde al resultado final
  document.getElementById("p02").innerHTML = resultado;
}

function esCapicua() {
    let numCapicua = document.getElementById("numCapicua").value;
//solicito el numero desde el elemento numCapicua

    //no existe un metodo para darle la vuelta a un string pero si para un array asi que el numero ingresado lo usaremos como un string y lo pasaremos a un array y despues le daremos la vuelta
    
    //el metodo split("") divide el string en sub strings ahora el elemento es un array
    numCapicuaSplit = numCapicua.split("");
    // ahora que es un array si se puede darle la vuelta facilmente con el metedo reverse()
    numCapicuaReverse = numCapicuaSplit.reverse();
    //El metodo join() nos vuelve a unir el array que ahora esta reverso y colocando ("") en la llamada del metodo hace que no lo separa por comas ya que si se coloca la llamada del metodo vacio el metodo join los uniria pero separados por comas por defecto
    numCapicuaJoin = numCapicuaReverse.join("");

    //se hace una coomparacion total entre ahora el numero ingresado y el numero dado la vuelta y como solo hay dos posibilidades se coloca en un operador ternario regresando un texto al html diciendo si es o no Capicua
    numCapicua===numCapicuaJoin?
    document.getElementById("p03").innerHTML = "Es numero ingresado es Capicua":
    document.getElementById("p03").innerHTML = "Es numero ingresado no es Capicua";
}