class cliente{
    constructor(nom,ape,id,dir,tlf,mp,imp){
        this.nombres = nom;
        this.apellidos = ape;
        this.DNI = id;
        this.Direccion = dir;
        this.Movil = tlf;
        this.MetodoPago = mp;
        this.DatosMetodoPago = imp;
    }
}
class pintura{
    constructor(cod,desc,pre){
        this.Codigo =cod ;
        this.Descripccion = desc;
        this.Precio = pre;
    }
}
function calcularIGIC(x) {
  return x * 0,07;
}
function MuestraDatosTarjeta() {
    document.getElementById("Datos Tarjeta").style.display="block";
}
function OcultaDatosTarjeta() {
    document.getElementById("Datos Tarjeta").style.display="none";
}
