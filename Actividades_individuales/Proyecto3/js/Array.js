// Adivina el número en 3 intentos, dando pistas en cada intento fallido
function MayorOMenor() {
  var numeroAleatorio = Math.round(Math.random() * 10);
  var tam = 3;
  const intentos = new Array(tam);
  var MayorOMenor;
  var ContIntentos = 3;
  var index = 0;

  for (const iterator of intentos) {
    var numeroIngresado = parseInt(
      prompt("Ingrese un numero, Tiene " + ContIntentos + " oportunidades", 1)
    );

    if (ContIntentos == 3 && numeroIngresado == numeroAleatorio) {
      alert("Correcto! el numero era " + numeroAleatorio);
    } 
    
    
    else {

      if (numeroIngresado == numeroAleatorio) {
        intentos[index] = numeroIngresado;
        alert("Correcto! el numero era " + numeroAleatorio);
      } else {
        intentos[index] = numeroIngresado;
        MayorOMenor = numeroIngresado > numeroAleatorio;
        if (ContIntentos >= 1) {
          MayorOMenor
            ? alert(
                "El numero esta por debajo" +
                  "\n" +
                  "Ultimo numero ingresado =" +
                  intentos[index]
              )
            : alert(
                "El numero esta por encima" +
                  "\n" +
                  "Ultimo numero ingresado =" +
                  intentos[index]
              );
          index++;
          ContIntentos--;
        } else {
          alert("El numero era =" + numeroAleatorio);
          alert(
            "Tus intentos fueron=" +
              intentos[0] +
              " ," +
              intentos[1] +
              " ," +
              intentos[2]
          );
        }
      }
    }
  }
}
