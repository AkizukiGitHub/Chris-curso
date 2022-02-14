// Compara 2 palabras dadas para saber si son iguales

function CoomparaPalabra(x,y)   {
    x==y?document.write("Las palabras son iguales"):document.write("Las Palabras son distintas");
}

// Dado un número determina si es múltiplo de 3

function DeterminaMultiplo3(x)  {
    var resto= x %3;

    if(resto==0){
        document.write("El numero ingresado es multiplo de 3");
    }else{
        document.write("El numero ingresado no es multiplo de 3")
    }
    console.log(resto);
}

// Rellena un array con los números del 1 al 10

function FilledArray()  {
    var secuencia = new Array(10);
    for (let index = 0; index < secuencia.length; index++) {
        secuencia[index]=index+1;
    }
    console.log(secuencia);
    return secuencia;
}

// Rellena un array de 10 elementos con la letra a

function ArrayQueGrita()  {
    var repeticion = new Array(10);
    for (let index = 0; index < repeticion.length; index++) {
        repeticion[index]="A";
    }
    console.log(repeticion);
    return repeticion;
}

// Rellena un array de 10 elementos con los códigos c01, c02, ...

function ArrayCoordenadas()  {
    var repeticion = new Array(10);
    for (let index = 0; index < repeticion.length; index++) {
        repeticion[index]="c0"+(index+1);
    }+
    console.log(repeticion);
    return repeticion;
}

// Crea una array de precios para 5 juguetes, que tenga código, descripción y precio. Ejemplo: 01 Tren 12.50 

function CreaArrayJuguetes()    {
    var ArrayJuguetes = 
    [01,"Tren",12.50,
    02,"Peluche",10.50,
    03,"Pelota",10.99,
    04,"Lego",29.99,
    05,"Avion",14.99]
    console.log(ArrayJuguetes);
    return ArrayJuguetes;
}

// Dibuja la lista de juguetes en una tabla html de forma dinámica

function MuestraListaJuguetes(x) {
    document.write("<table border=1>");
    for (let index = 0; index < x.length/3; index++) {
        document.write("<tr>");
        for(let j = index*3; j < index * 3 + 3; j++){
            document.write("<td>");
            document.write(x[j]);
            document.write("</td>");
        }
        document.write("</tr>");
    }
    document.write("</table>");
    console.log(x);
}

// Opcional: ¿Sería posible agregar una imagen a cada juguete e incluirla en la tabla? ¡cómo lo harías? ¿te animas?

function CreaArrayJuguetesIMG()    {
    var ArrayJuguetes = 
    [01,"Tren",12.50,'<img src="img/img1.jpg" alt="Tren" width="100" height="150">',
    02,"Peluche",10.50,'<img src="img/img2.jpg" alt="Peluche" width="100" height="150">',
    03,"Pelota",10.99,'<img src="img/img3.jpg" alt="Pelota" width="100" height="150">',
    04,"Lego",29.99,'<img src="img/img4.jpg" alt="Lego" width="100" height="150">',
    05,"Avion",14.99,'<img src="img/img5.jpg" alt="Avion" width="100" height="150">',]
    console.log(ArrayJuguetes);
    return ArrayJuguetes;
}

function MuestraListaJuguetesIMG(x) {
    document.write("<table border=1>");
    for (let index = 0; index < x.length/4; index++) {
        document.write("<tr>");
        for(let j = index*4; j < index * 4 + 4; j++){
            document.write("<td>");
            document.write(x[j]);
            document.write("</td>");
        }
        document.write("</tr>");
    }
    document.write("</table>");
    console.log(x);
}

// Opcional: Rellena una matriz cuadrada o array bidimensional de 3x3 con puros 0
// Opcional: Rellena una matriz cuadrada o array bidimensional de 3x3 con los números del 1 al nueve en espiral
// Opcional: Rellena una matriz cuadrada o array bidimensional de 3x3 con los números del 1 al nueve de forma aleatoria y sin que se repitan
// Opcional: Crea un sudoku relleno
// Opcional: Muestra tu sudoku en una tabla