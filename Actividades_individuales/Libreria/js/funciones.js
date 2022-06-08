function relocate_logIN(){
    location.href(logIN.php);
}

function mostrar_ocultar(id){
    var elemento = document.getElementById(id);
    if(elemento.style.display == "hidden"){
        elemento.style.display = "visible";
    }
    else if(elemento.style.display == "visible"){
        elemento.style.display = "hidden";  
    }
}
