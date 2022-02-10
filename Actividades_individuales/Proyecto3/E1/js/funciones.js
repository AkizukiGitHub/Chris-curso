function PedirNumeroValido() {
    var x;
    parseInt(x = prompt("Ingrese un numero: ",0)); 
    /*se pide el valor y se usa el metodo parseInt para 
    asegurar que el resultado de la variable sea NaN o un numero*/
    if(isNaN(x)){
        do{
            alert("Valor ingresado no valido, debe ser un numero")
            var x = prompt("Ingrese un numero: ",0); 
        }while(!isNaN(x))
        /* El bucle insiste en que se ingrese un valor 
        que sea numero y seguira pidiendo atravez 
        del prompt mientras no lo sea*/
    }
        
    return x;
}

// Dados dos números a y b hallar el mayor. 
function CoomparaPar() {
    var x = PedirNumeroValido();
    var y = PedirNumeroValido();

    if(x==y){
        alert("los numeros tienen el mismo valor");
    }else if(x>y){
        alert(x+" Es mayor que "+y);
    }else{
        alert(y+" Es mayor que "+z)
    }
}

// Dados 3 números a, b, c  determinar el mayor de los tres

function CoomparaTrio() {
    var x = PedirNumeroValido();
    var y = PedirNumeroValido();
    var z = PedirNumeroValido();
    
    var TodosIguales= x == y && y == z;// se evalua si todos los valores son iguales

    var PrimerParMayor = x==y && x > y;
    var SegundoParMayor = y==z && y > x;
    var TercerParMayor = x==z && x > y;//Se evaluan de a par para ver si hay dos valores mayores iguales

    var XMayor= x > y && x > z;
    var YMayor= y > x && y > z;
    var ZMayor= z > x && z > y;//Se evalua si hay un valor mayor absoluto

    if (TodosIguales) {
        alert("Todos los valores son iguales");
    }else if(PrimerParMayor){
        alert(x + " y " + y + " Son Iguales y mayores que " + z);
    }else if(SegundoParMayor){
        alert(y + " y " + z + " Son Iguales y mayores que " + x);
    }else if(TercerParMayor){
        alert(z + " y " + x + " Son Iguales y mayores que " + y);
    }else if(XMayor){
        alert(x + " Es la variables mayor");
    }else if(YMayor){
        alert(y + " Es la variables mayor");
    }else if(ZMayor){
        alert(z + " Es la variables mayor");
    }else{
        alert("Felicidades encontraste una posibilidad que no tome encuenta");
        /*en ningun momento deberia llegar hasta aqui con las comprobaciones que hice 
        pero si lo hace felicidades*/
    }
    

}

// Determinar si un número dado es negativo, cero o positivo

function DeterminaValor() {
    x = PedirNumeroValido();

    if(x==0){//se evalua si es igual a 0
        alert("El numero es 0");
    }else if(x>0){//se evalua si es mayor que 0
        alert("El numero es positivo");
    }else{//si no es cero ni tampoco mayor que cero solo quedan negativos
        alert("El numero es negativo")
    }
}

// Pedir el nombre y la edad de un usuario. Determinar si puede votar

function DeterminaMayorEdad() {
    var nombre = prompt("Ingrese su nombre");
    var Edad = PedirNumeroValido();

    AptoNoApto = Edad>=18;//Se evalua si es mayor o igual de 18 para ser apto
    AptoNoApto?alert("Puedes Votar"):alert("Aun no puedes Votar");
    //si es true o false el Apto o No apto muestra el mensaje correcto
}

// Imprimir los números del 1 a 200

function ImprimeNumeros() {
    var acumulador=1;
    var texto= 0 ;
    var index = 0;
    for (let index = 0; index <200; index++) {
        texto = texto +acumulador+",";
        acumulador++;
    }
    document.open();
    document.writeln(texto);
    document.close();
}

/* Dada la edad de un pasajero, saber si es bebé, niño o adulto para pagar un boleto aéreo, teniendo en cuenta que:
El billete cuesta 200⋲
Los bebés de menos de 2 años pagan el 50%
Los niños de menos de 12 años pagan el 75%
Los mayores de 12 años pagan el 100%*/

function DeterminaValorVuelo() {
    
}

// Obtener el factorial de un número: n!, teniendo en cuenta que el factorial se calcula n!=n*(n-1)*(n-2)….*1 y el factorial de 0! es 1

function ObtenerFactorial() {
    
}

// Dado un número del 1 al 12, determinar el mes correspondiente y mostrar el nombre en letras del mismo

function DeterminarMes() {
    
}

// Obtener la nota definitiva de 1 alumno, sabiendo que cada alumno tiene tres evaluaciones de proceso (E1,E2,E3) que representan el 30% de la nota final y que además el otro 70% está compuesto por una prueba objetiva del 20% y una prueba práctica del 80%.

function ObtenerNota() {
    
}