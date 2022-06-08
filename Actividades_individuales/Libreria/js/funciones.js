function relocate_logIN(){
    location.href(logIN.php);
}

function mostrar_ocultar(ids){
    var elemento = document.getElementById(ids);
    var elementos = elemento.split("_");

    for(i=0;i<elementos.length;i++){
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
