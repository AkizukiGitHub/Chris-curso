console.log("funciones.js cargado 5");

let carts = document.querySelectorAll(".add-to-cart");

// create book as product object
  let products = [
    {
      name: "The Great Gatsby",
      price: "20",
      description: "A novel about a writer who is a millionaire",
      image: "https://images-na.ssl-images-amazon.com/images/I/41NssxNlPlS._SX331_BO1,204,203,200_.jpg",
      id: "1",
      inCart: 0
    },
    {
      name: "The Hobbit",
      price: "10",
      description: "A children's book about a hobbit",
      image: "https://images-na.ssl-images-amazon.com/images/I/517d67O44mL._SY264_BO1,204,203,200_QL40_ML2_.jpg",
      id: "2",
      inCart: 0
    },
    {
      name: "The Catcher in the Rye",
      price: "15",
      description: "A children's book about a catcher",
      image: "https://images-na.ssl-images-amazon.com/images/I/51lprH3LF4L._SY264_BO1,204,203,200_QL40_ML2_.jpg",
      id: "3",
      inCart: 0
    },
    {
      name: "La biblia",
      price: "25",
      description: "A book about God",
      image: "https://images-na.ssl-images-amazon.com/images/I/310mnV-ysaL._SX333_BO1,204,203,200_.jpg",
      id: "4",
      inCart: 0
    },
    {
      name: "Blade Runner",
      price: "30",
      description: "A book about a blade runner",
      image: "https://m.media-amazon.com/images/I/81UgZWk-+dL._AC_UL320_.jpg",
      id: "5",
      inCart: 0
    },
    {
      name: "Todas Esas Cosas Que Te Diré Mañana",
      price: "40",
      description: "A book about a book",
      image: "https://images-na.ssl-images-amazon.com/images/I/51VcXi8MUZL._SY264_BO1,204,203,200_QL40_ML2_.jpg",
      id: "6",
      inCart: 0
    },
    {
      name: "Harry Potter y la piedra filosofal",
      price: "50",
      description: "A book about a wizard",
      image: "https://m.media-amazon.com/images/I/51uxZ1EkT4L._SY346_.jpg",
      id: "7",
      inCart: 0
    },
    {
      name: "Nacidos de la bruma : El imperio final",
      price: "60",
      description: "A book about world covered by ashes",
      image: "https://images-na.ssl-images-amazon.com/images/I/51144EP2vZL._SX324_BO1,204,203,200_.jpg",
      id: "8",
      inCart: 0
    },
    {
      name: "Red Rising: Red Rising",
      price: "70",
      description: "A book about a space communism",
      image: "https://m.media-amazon.com/images/I/41TNRP15z1L._SY346_.jpg",
      id: "9",
      inCart: 0
    },
    {
      name: "Red Rising: Golden Son",
      price: "80",
      description: "Spoiler",
      image: "https://images-na.ssl-images-amazon.com/images/I/51O9Zv9y-sL._SX324_BO1,204,203,200_.jpg",
      id: "10"
    },
    {
      name: "El nombre del viento",
      price: "90",
      description: "A book about Kvothe",
      image: "https://images-na.ssl-images-amazon.com/images/I/51ccvVWI+eL._SY344_BO1,204,203,200_.jpg",
      id: "11",
      inCart: 0
    },
    {
      name: "Morning Star: Red Rising",
      price: "100",
      description: "Spoiler",
      image: "https://images-na.ssl-images-amazon.com/images/I/41xpzxUlJuL._SX326_BO1,204,203,200_.jpg",
      id: "12",
      inCart: 0
    }
  ];

for (let i = 0; i < carts.length; i++) {  //recorre todos los elementos de la clase add-to-cart
  carts[i].addEventListener("click", () => {  //agrega un evento click
    cartNumbers(products[i]);  //llama a la funcion cartNumbers
    totalCost(products[i]);  //llama a la funcion totalCost
    }
  );
}

function onloadCartNumbers() {
  let productNumbers = localStorage.getItem("cartNumbers");
  if (productNumbers) {
    document.querySelector("btn-cart strong").textContent = productNumbers;
  }
}


function cartNumbers(products) {
  let productNumbers = localStorage.getItem("cartNumbers");

  productNumbers = parseInt(productNumbers);

  if (productNumbers) { //si existe el valor en el localStorage
    localStorage.setItem("cartNumbers", productNumbers + 1);  //aumenta el valor en 1
    document.querySelector(".btn-cart").textContent = productNumbers + 1;  //muestra el valor en el DOM
  }
  else {  //si no existe el valor en el localStorage
    localStorage.setItem("cartNumbers", 1);  //crea el valor en el localStorage
    document.querySelector(".btn-cart").textContent = 1;  //muestra el valor en el DOM
  } //fin else
  setItems(products);  //llama a la funcion setItems
} //fin cartNumbers

function setItems(products) { //funcion que guarda los productos en el localStorage
  let cartItems = localStorage.getItem("productsInCart"); //obtiene el valor del localStorage
  cartItems = JSON.parse(cartItems);  //convierte el valor del localStorage a un objeto JSON
  
  if (cartItems != null) { //si existe el valor en el localStorage
    if (cartItems[products.id] == undefined) {  //si el producto no existe en el localStorage
      cartItems = { //crea un objeto
        ...cartItems, //agrega el objeto anterior al nuevo objeto
        [products.id]: products //agrega el producto al objeto
      }
    }
    cartItems[products.id].inCart += 1; //aumenta el valor del producto en el localStorage
  }
  else { //si no existe el valor en el localStorage
    products.inCart = 1; //crea el valor en el localStorage
    cartItems = { //crea un objeto
      [products.id]: products //agrega el producto al objeto
    }
  }
  localStorage.setItem("productsInCart", JSON.stringify(cartItems));  //convierte el objeto a un string
}

function totalCost(products) {
  let cartCost = localStorage.getItem("totalCost");

  console.log("my cartCost is ",cartCost);
  console.log(typeof cartCost);

  if (cartCost != null) {
    cartCost = parseInt(cartCost);
    localStorage.setItem("totalCost", cartCost + parseInt(products.price));
  }
  else {
    localStorage.setItem("totalCost", products.price);
  }
}


function displayCart() {
  let cartItems = localStorage.getItem("productsInCart");
  cartItems = JSON.parse(cartItems);
  let productContainer = document.querySelector(".products-container");

  console.log(cartItems);
  if (cartItems && productContainer) {
    productContainer.innerHTML = "";
    Object.values(cartItems).map(item => {
      productContainer.innerHTML += `
        <div class="product">
          <ion-icon name="close-circle" class="close-icon" onclick="removeItem('${item.tag}')"></ion-icon>
          <img src="${item.image}" alt="${item.name}">
          <span>${item.name}</span>
        </div>
          `
    });
  } 
} 






// onloadCartNumbers(); //llama a la funcion onloadCartNumbers
displayCart();  //llama a la funcion displayCart




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
