// Pensemos en una biblioteca, crea un objeto libro que tenga los atributos o propiedades necesarios para rellenar un ficha bibliográfica, incluye un atributo con el número de ejemplares que hay.

const libro ={seccion : undefined,numEstanteria : undefined ,numDisponibles : undefined ,ISBN : new Array()};
// console.log(libro);

const libro01 ={seccion : "Fantasia",numEstanteria : "01-A" ,numDisponibles : "5" ,ISBN :[978,1250850553]};

// En una taller mecánico trabajan varias personas, crea un objeto para los empleados que incluya los atributos que consideres 

const empleado={DNI : undefined,nombre : undefined, apellido : undefined,cargo : undefined};
// console.log(empleado)

const empleado01 ={DNI : "12345678A",nombre : "Chris", apellido : "Gomez",cargo : "Soldador"}

// Crea un objeto coche con los atributos que consideres oportunos para llenar posteriormente un parte de reparación

const cliente={NomPropietario : undefined,ApellidoPropietario : undefined,DniPropietario : undefined,
    constCliente:function (x,y,z) {
    this.NomPropietario=x;
    this.ApellidoPropietario=y;
    this.DniPropietario=z;
}}

cliente.constCliente("chris","gom","111")
// console.log(cliente)

const coche={Marca : undefined,Modelo : undefined,Matricula : undefined,Color : undefined,cliente};

// console.log(coche);

// En una sucursal bancaria que quiere desarrollar un software para consultar la situación financiera de un cliente, crea un objeto cliente que incluya un atributo cuenta para guardar todas las cuentas del cliente y el saldo de las mismas. Incluye un método que dibuje una tabla con las cuentas del cliente indicando como mínimo el nº, tipo y saldo

// const clienteBanco ={cuenta: new Array(),DNI : undefined,Nombre : undefined,Apellido : undefined, Edad : undefined,MuestraListaCuentas: function (cuenta) {
//     x=cuenta;
//     document.write("<table border=1>");
//     for (let index = 0; index < x.length/3; index++) {
//         document.write("<tr>");
//         for(let j = index*3; j < index * 3 + 3; j++){
//             document.write("<td>");
//             document.write(x[j]);
//             document.write("</td>");
//         }
//         document.write("</tr>");
//     }
//     document.write("</table>");
//     console.log(x);}}

// const clienteBanco01 ={cuenta:[0001,"Ahorro","2000€"],DNI : "12345678A",Nombre : "Chris",Apellido : "Gomez", Edad : "21",MuestraListaCuentas: function (this.cuenta[]) {
//     x=cuenta;
//     document.write("<table border=1>");
//     for (let index = 0; index < x.length/3; index++) {
//         document.write("<tr>");
//         for(let j = index*3; j < index * 3 + 3; j++){
//             document.write("<td>");
//             document.write(x[j]);
//             document.write("</td>");
//         }
//         document.write("</tr>");
//     }
//     document.write("</table>");
//     console.log(x);}}

//usar return en vez de document write

// Piensa en una ferretería, crea un objeto producto con las propiedades o atributos que consideres necesarios para poder realizar en el futuro un software de inventario. Incluye un método para dibujar una tabla dinámica  capaz de incluir una lista de precios. 


