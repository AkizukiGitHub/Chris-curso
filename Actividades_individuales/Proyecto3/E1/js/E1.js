function DeterminaMayor2Numeros(x,y) {
    x>y?document.getElementById("p01").innerHTML=x+" Es mayor que "+y:document.getElementById("p01").innerHTML=y+" Es mayor que "+x;
}

function DeterminaMayor3Numeros(x,y,z) {
    if (x===y && x===z) {
        document.getElementById("p02").innerHTML="Todos los numeros ingresados son iguales";
    }else if (x>y && x>z){
        document.getElementById("p02").innerHTML=x+" Es el valor mayor";
    }else if(y>x && y>z){
        document.getElementById("p02").innerHTML=y+" Es el valor mayor";
    }else if(z>x && z>y){
        document.getElementById("p02").innerHTML=z+" Es el valor mayor";
    }
}

function DeterminaValor(x) {
    if (x==0) {
        document.getElementById("p03").innerHTML="el numero ingresado es igual a cero";
    }else{
        x>0?document.getElementById("p03").innerHTML="el numero ingresado es Positivo":document.getElementById("p03").innerHTML="el numero ingresado es Negativo";
    }
}

function DeterminaMayoriaEdad() {
    
}