function mostrar_ocultar(string){
    var elemento = string;
    var elementos = elemento.split("_");
    var longitud = elementos.length;
    

    for(i=0;i<longitud;i++){
        var elemento = document.getElementById(elementos[i]);
        if(elemento.style.visibility == "hidden"){
            elemento.style.visibility = "visible";
            elemento.style.maxHeight = "100%";
        }
        else if(elemento.style.visibility == "visible"){
            elemento.style.visibility = "hidden";
            elemento.style.maxHeight = "0px";
        }
    }
}

