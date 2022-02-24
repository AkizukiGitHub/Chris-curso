var y=document.getElementsByTagName("input");  //Creo un array con todos los input en el formulario
var alumnos=[];  //Array que guarda los objetos alumno
var n=y.length;    //largo del array que guarda los input
var j=0;       
var lista;

class alumno {
      constructor(a,n,id,e1,e2,e3,po,pp) {
        this.apellido= a;
        this.nombre = n;
        this.dni= id;
        this.e1=e1;
        this.e2=e2;
        this.e3=e3;
        this.po=po;
        this.pp=pp;
        this.nd=(((e1+e2+e3)/3)*0.3)+(((po*0.2)+(pp*0.8))*0.7);
      }
    }

function registrar(){
    //Guarda los alumnos
    var alu=new alumno(y[0].value,y[1].value,y[2].value,y[3].value,y[4].value,y[5].value,y[6].value,y[7].value);
    alumnos.push(alu); 
    console.log(alu,alumnos);
}
function validar(i){
    if(! ((y[i].value>=0)&&(y[i].value<=10)) ){
      document.getElementById("p01").innerHTML="La nota no es correcta, Debe ser desde 0 hasta 10";
    } else{
        document.getElementById("p01").innerHTML=y[i].value;
    }
}
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
    var vueltasN = 0;
    var vueltasM = 0;

    lista = "<table border=1>";
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
    console.log(m)
    console.log(n)
    if(isNaN(m)){
        m=8;
    }
    for (const objAlumno of alumnos ) {
        if (vueltasN==n) {
            break;
        }
        lista += "<tr>";
        for (let iterator in objAlumno) {
            lista += "<td>";
            lista += objAlumno[iterator];
            lista += "</td>";
            vueltasM++
            if (vueltasM==m) {
                vueltasM=0;
                break;
            }
        }
        lista += "</tr>";
        vueltasN++;
    }
    lista += "</table>";
    document.getElementById("p03").innerHTML = lista;
}
function ordenaApellidos() {
    alumnos.sort((a,b) => {
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
function ordenaNota() {
    alumnos.sort((a,b) => {
        let fa = a.nd,
            fb = b.nd;
    
        if (fa < fb) {
            return -1;
        }
        if (fa > fb) {
            return 1;
        }
        return 0;
    });
}