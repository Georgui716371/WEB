//se captura todo el dom de los cards para heredar los eventos
var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')
const cards = document.getElementById("cards");
const items = document.getElementById("items");
const footer = document.getElementById("footer");
const templateCard = document.getElementById("template-card").content;
const templateCarrito = document.getElementById("template-carrito").content;
const templateFooter = document.getElementById("template-footer").content;
const fragment = document.createDocumentFragment();
const boton_procesarCompra=document.getElementById('procesarCompra');

let carrito = {};
document.addEventListener("DOMContentLoaded", () => {
  fetchData();
  if(localStorage.getItem('carrito')){
    carrito = JSON.parse(localStorage.getItem('carrito'));
    pintarCarrito();
  }
});
if (typeof window !== 'undefined') {
    console.log('Estamos ejecutando en el cliente')
} else {
    console.log('Estamos ejecutando en el server');
}
cards.addEventListener("click", (e) => {
  addCarrito(e);
});
items.addEventListener("click", (e) => {
  btnAccion(e);
});

const fetchData = async () => {
  try {
    const res = await fetch("api.json");
    const data = await res.json();
    pintarCards(data);
  } catch (error) {
    console.console.log(error);
  }
};
const pintarCards = (data) => {
  data.forEach((producto) => {
    templateCard.querySelector("h5").textContent = producto.title;
    templateCard.querySelector("span").textContent =producto.precio;
    templateCard.querySelector('img').setAttribute("src",producto.thumbnailUrl);
    templateCard.querySelector(".btn-outline-warning").dataset.id = producto.id;
    const clone = templateCard.cloneNode(true);
    fragment.appendChild(clone);
  });
  cards.appendChild(fragment);
};
const addCarrito = (e) => {
  //capturando los elementos del div
  // console.log(e.target);
  //capturanado con la clase del boton
  //console.log(e.target.classList.contains("btn-outline-warning"));
  if (e.target.classList.contains("btn-outline-warning")) {
    // agregar la informacion al carrito
    setCarrito(e.target.parentElement);
  }
  e.stopPropagation();
  localStorage.setItem('carrito',JSON.stringify(carrito));
};
const setCarrito = (objeto) => {
  const producto = {
    id: objeto.querySelector(".btn-outline-warning").dataset.id,
    title: objeto.querySelector("h5").textContent,
    precio: objeto.querySelector("span").textContent,
    cantidad: 1,
  };

  if (carrito.hasOwnProperty(producto.id)) {
    producto.cantidad = carrito[producto.id].cantidad + 1;
  }
  carrito[producto.id] = { ...producto };
  pintarCarrito();

};
const pintarCarrito = () => {
  console.log('---- carro'+carrito);
  items.innerHTML = "";
  Object.values(carrito).forEach((producto) => {
    templateCarrito.querySelector("th").textContent = producto.id;
    templateCarrito.querySelectorAll("td")[0].textContent = producto.title;
    templateCarrito.querySelectorAll("td")[1].textContent = producto.cantidad;
    templateCarrito.querySelector(".btn-info").dataset.id = producto.id;
    templateCarrito.querySelector(".btn-danger").dataset.id =producto.id;
    templateCarrito.querySelector("span").textContent = producto.cantidad * producto.precio;
    const clone = templateCarrito.cloneNode(true);
    fragment.appendChild(clone);
  });
  items.appendChild(fragment);
  pintarFooter();
};

const pintarFooter = () => {
  footer.innerHTML = "";
  if (Object.keys(carrito).length === 0) {
    footer.innerHTML = `<th scope="row" colspan="5">Carrito vacío - comience a comprar!</th>`;
    return;
  }

  const ncantidad = Object.values(carrito).reduce((acc, { cantidad }) => acc + cantidad,0);

  const nPrecio = Object.values(carrito).reduce((acc, { cantidad, precio }) => acc + cantidad * precio, 0);

  templateFooter.querySelectorAll("td")[0].textContent = ncantidad;
  templateFooter.querySelector("span").textContent =nPrecio;

  const clone = templateFooter.cloneNode(true);

  fragment.appendChild(clone);
  footer.appendChild(fragment);
  const btnVaciar = document.getElementById("vaciar-carrito");
  btnVaciar.addEventListener("click", () => {
    carrito = {};
    pintarCarrito();
  });
  e.stopPropagation();
};


const btnAccion = e => {
    if (e.target.classList.contains('btn-info')) {
      const producto = carrito[e.target.dataset.id];
      //producto.cantidad=carrito[e.target.dataset.id].cantidad+1;
      producto.cantidad++;
      carrito[e.target.dataset.id] = { ...producto };
      pintarCarrito();
    }
    if (e.target.classList.contains('btn-danger')) {
      const producto = carrito[e.target.dataset.id];
      //producto.cantidad=carrito[e.target.dataset.id].cantidad+1;
      producto.cantidad--;
  
      if(producto.cantidad===0){
          delete carrito[e.target.dataset.id];
      }
      pintarCarrito();
    }
    e.stopPropagation();
  };

  boton_procesarCompra.addEventListener('click',()=>{

        alert("Se envio su compra ");


  });

  