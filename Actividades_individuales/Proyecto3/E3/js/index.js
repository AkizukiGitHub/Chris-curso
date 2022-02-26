// Este Js esta hecho en base al ejercico dado en clase usando objetos
var y=document.getElementsByTagName("input");  //Creo un array con todos los input en el formulario
var alumnos=[];  //Array que guarda los objetos alumno
var n=y.length;    //largo del array que guarda los input
var j=0;       
var lista;
// agregue el parametro nd que seria la nota definitiva del alumno
class alumno {
    // el constructor es llamado desde la funcion registro para crear el objeto y calcular la nota definiva del alumno porque se usa ese atributo para ordenarlos mas adelante
      constructor(a,n,id,e1,e2,e3,po,pp) {
        this.apellido= a;
        this.nombre = n;
        this.dni= id;
        this.e1=parseInt(e1);
        this.e2=parseInt(e2);
        this.e3=parseInt(e3);
        this.po=parseInt(po);
        this.pp=parseInt(pp);
        this.nd=(((this.e1+this.e2+this.e3)/3)*0.3)+(((this.po*0.2)+(this.pp*0.8))*0.7);
      }
    }
// la funcion principal de este ejercicio crea los objetos alumnos y los mete en un array para mantenerlos en orden
function registrar(){
    //Guarda los alumnos
    var alu=new alumno(y[0].value,y[1].value,y[2].value,y[3].value,y[4].value,y[5].value,y[6].value,y[7].value);
    alumnos.push(alu); 
    console.log(alu,alumnos);
}
// validar se usa en los campos de cada nota del alumno para que los valores esten desde 0 a 10 y si el valor no esta en ese rango la funcion mostrara en documento un mensaje dando el error al usuario
function validar(i){
    if(! ((y[i].value>=0)&&(y[i].value<=10)) ){
      document.getElementById("p01").innerHTML="La nota no es correcta, Debe ser desde 0 hasta 10";
    } else{
        document.getElementById("p01").innerHTML=y[i].value;
    }
}
// esta funcion no es parte del ejercio como tal pero sirve para mostrar todos los elementos de la tabla alumnos asi que resulta muy util para verficar y coomparar datos antes de unsar las funcion dibuja y alterar el como se ordena los alumnos
function MuestraListaAlumnos(alumnos) {
    lista = "<table border=1>";
    lista += "<th>Apellido</th><th>Nombre</th><th>DNI</th><th>Nota E1</th><th>Nota E2</th><th>Nota E3</th><th>Nota PO</th><th>Nota PP</th>";
    alumnos.forEach(alumno => {
        lista += "<tr>";
        for (let iterator in alumno) {
            lista += "<td>";
            lista += alumno[iterator];
            lista += "</td>";
            console.log(iterator);
        }
    });
    lista += "</tr>";
    lista += "</table>";
    document.getElementById("p02").innerHTML = lista;
}

function Dibuja() {
    var n = parseInt(document.getElementById("n").value);
    var m = parseInt(document.getElementById("m").value);
    //Solicito los dos valores, filas elemento N y Columnas elemento M
    var lista;
    // listas es un string que acumula todo el html que sera insertado en la pagina luego para mostrar la tabla
    var vueltasN = 0;
    var vueltasM = 0;
    // estos dos parametros sirven para mantenenr el control del numero de vueltas que se da dentro de los for

    // se inicia la creacion de la tabla
    lista = "<table border=1>";
    // en esta tabla uso un encabezado para mostrar que es cada campo dentro de la tabla al usuario y como la tabla es dinamica m en este switch delimita cuanto del encabezado se va mostrar
    switch (m) {
        case 1:
            lista += "<th>Apellido</th>";
            break;
        case 2:
            lista += "<th>Apellido</th><th>Nombre</th>";
            break;
        case 3:
            lista += "<th>Apellido</th><th>Nombre</th><th>DNI</th>";
            break;
        case 4:
            lista += "<th>Apellido</th><th>Nombre</th><th>DNI</th><th>Nota E1</th>";
            break;
        case 5:
            lista += "<th>Apellido</th><th>Nombre</th><th>DNI</th><th>Nota E1</th><th>Nota E2</th>";
            break;
        case 6:
            lista += "<th>Apellido</th><th>Nombre</th><th>DNI</th><th>Nota E1</th><th>Nota E2</th><th>Nota E3</th>";
            break;
        case 7:
            lista += "<th>Apellido</th><th>Nombre</th><th>DNI</th><th>Nota E1</th><th>Nota E2</th><th>Nota E3</th><th>Nota PO</th>";
            break;
        case 8:
            lista += "<th>Apellido</th><th>Nombre</th><th>DNI</th><th>Nota E1</th><th>Nota E2</th><th>Nota E3</th><th>Nota PO</th><th>Nota PP</th>";
            break;
        default:
            lista += "<th>Apellido</th><th>Nombre</th><th>DNI</th><th>Nota E1</th><th>Nota E2</th><th>Nota E3</th><th>Nota PO</th><th>Nota PP</th>";
            break;
    }

    // antes de entrar al bucle que sacara los datos a mostrar en la tabla le asigno 8 a columnas si el parametro no es un numero es decir que el usuario lo dejo en blanco
    if(isNaN(m)){
        m=8;
    }
    // aqui voy iterando los objetos alumno del array alumnos
    for (const objAlumno of alumnos ) {
        // este if detiene el for cuando alcance el numero de filas que pidio el usuario
        if (vueltasN==n) {
            break;
        }
        lista += "<tr>";
        // aqui voy iterando los campos del objeto alumno y metiendolos en la variable lista que serian las columnas que pidio el usuario
        for (let iterator in objAlumno) {
            lista += "<td>";
            lista += objAlumno[iterator];
            lista += "</td>";
            vueltasM++
            // este if detiene el for cuando alcance el numero de columnas que pidio el usuario
            if (vueltasM==m) {
                // antes de salir reinicio el vlor vueltas a 0 para que en futuras filas empiece en 0 sino se reiniciara se detendria el bucle interno despues de solo mostrar el apellido en cada fila
                vueltasM=0;
                break;
            }
        }
        lista += "</tr>";
        vueltasN++;
    }
    lista += "</table>";
    // envia la fila al parrafo numero 3 del html
    document.getElementById("p03").innerHTML = lista;
}
// esta funcion usa el metodo sort de los objetos array para desplazar los objetos alumnos dentro del array y ordenarlos por el parametro apellido 
function ordenaApellidos() {
    alumnos.sort((a,b) => {
        // se hace llamada al metodo lolowercase para evitar fallos en coomparacion por mayusculas
        let fa = a.apellido.toLowerCase(),
            fb = b.apellido.toLowerCase();
    
        if (fa < fb) {
            return -1;
        }
        if (fa > fb) {
            return 1;
        }
        return 0;
    });
}
// esta funciuon es casi igual que la anterior pero usa el parametro nd para cambiar el orden del array alumnos asi que se ordenan segun el porcetage de nota final
function ordenaNota() {
    alumnos.sort((a,b) => {
        let fa = a.nd,
            fb = b.nd;
    
        if (fa < fb) {
            return 1;
        }
        if (fa > fb) {
            return -1;
        }
        return 0;
    });
}