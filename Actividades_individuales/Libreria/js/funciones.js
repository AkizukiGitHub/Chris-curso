console.log("funciones.js cargado 5");

let carts = document.querySelectorAll(".add-to-cart");

let products = [
  {
    name: "Producto 1",
    id: "producto1",
    price: "$100",
    cantidad: 0
  },
  {
    name: "Producto 2",
    id: "producto2",
    price: "$200",
    cantidad: 0
  },
  {
    name: "Producto 3",
    id: "producto3",
    price: "$300",
    cantidad: 0
  },
  {
    name: "Producto 4",
    id: "producto4",
    price: "$400",
    cantidad: 0
  },
  {
    name: "Producto 5",
    id: "producto5",
    price: "$500",
    cantidad: 0
  },
  {
    name: "Producto 6",
    id: "producto6",
    price: "$600",
    cantidad: 0
  },
  {
    name: "Producto 7",
    id: "producto7",
    price: "$700",
    cantidad: 0
  },
  {
    name: "Producto 8",
    id: "producto8",
    price: "$800",
    cantidad: 0
  },
  {
    name: "Producto 9",
    id: "producto9",
    price: "$900",
    cantidad: 0
  },
  {
    name: "Producto 10",
    id: "producto10",
    price: "$1000",
    cantidad: 0
  },
  {
    name: "Producto 11",
    id: "producto11",
    price: "$1100",
    cantidad: 0
  },
  {
    name: "Producto 12",
    id: "producto12",
    price: "$1200",
    cantidad: 0
  }
];



for (let i = 0; i < carts.length; i++) {  //recorre todos los elementos de la clase add-to-cart
  carts[i].addEventListener("click", function () {  //agrega un evento click
    cartNumbers()
    }
  );
}

function cartNumbers() {
  let productNumbers = localStorage.getItem("cartNumbers");

  productNumbers = parseInt(productNumbers);

  if (productNumbers) { //si existe el valor en el localStorage
    localStorage.setItem("cartNumbers", productNumbers + 1);  //aumenta el valor en 1
    document.querySelector(".cart-number").textContent = productNumbers + 1;  //muestra el valor en el DOM
  }
  else {  //si no existe el valor en el localStorage
    localStorage.setItem("cartNumbers", 1);  //crea el valor en el localStorage
    document.querySelector(".cart-number").textContent = 1;  //muestra el valor en el DOM
  } //fin else
} //fin cartNumbers





function mostrar_ocultar(string) {
  var elemento = string;
  var elementos = elemento.split("_");
  var longitud = elementos.length;

  for (i = 0; i < longitud; i++) {
    var elemento = document.getElementById(elementos[i]);
    if (elemento.style.visibility == "hidden") {
      elemento.style.visibility = "visible";
      elemento.style.maxHeight = "100%";
    } else if (elemento.style.visibility == "visible") {
      elemento.style.visibility = "hidden";
      elemento.style.maxHeight = "0px";
    }
  }
}

function validar_password(password, confirm_password) {
  let igual_o_distinta = compare_password(password, confirm_password);
  if (igual_o_distinta) {
    let valio_o_invalido = validar_patron(password);
    if (valio_o_invalido) {
        return true;
        }
    else {
        // document.getElementById("errores").innerHTML = ;
        }
  } else {
    document.getElementById("errores").innerHTML = '<div class="alert alert-danger d-flex align-items-center" role="alert"><svg class="bi flex-shrink-0 me-2" width="16" height="16" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg><div><strong>Error!</strong> Las contraseñas no coinciden.</div><div>strong>Error!</strong> Las contraseñas no coinciden.</div></div>';
  }
}



function compare_password(password, confirm_password) {
  if (password === confirm_password) {
    return true;
  } else {
    return false;
  }
}

function validar_patron(password) {
  var re =
    /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,16}$/;
  return re.test(password);
}
