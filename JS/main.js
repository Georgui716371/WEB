 
 /*

      <div class="menu-div">
        <div class="card-menu">
          <img src="/img/helado-productos.jpg" alt="" />
          <h3>CAFÉ</h3>
          <span> S/. 45 </span>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus
            sapiente voluptates maxime, obcaecati voluptatum illum quod,
            inventore sed fugiat eius quos aperiam sint doloribus quaerat?
            Fugiat doloremque impedit sit dolorum!
          </p>

          <button data-id="6" class="btn-add-cart">COMPRAR CAFÉ</button>
         </div>
     </div>

 */




const anadirButton = document.querySelector('#anadir');

 anadirButton.addEventListener('click', () =>{

    const menuCard = document.querySelector('.menu-div');
    const nuevoCard = document.createElement('div');
    let imagenNuevo = document.createElement('img');
    let textoH3= document.createElement('h3');
    let nuevoSpan = document.createElement('span');
    let parrafoCard =document.createElement('p');
    let buttonCard = document.createElement('button');
    nuevoCard.className="card-menu";
    imagenNuevo.src="/img/helado-productos.jpg";
    textoH3.textContent='Nuevo Div';
    nuevoSpan.textContent="nuevo precio";
    let text ="Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus sapiente voluptates maxime, obcaecati voluptatum illum quo    inventore sed fugiat eius quos aperiam sint doloribus quaerat?Fugiat doloremque impedit sit dolorum!";
    parrafoCard.textContent=text;
    buttonCard.className='btn-add-cart';
    buttonCard.textContent="COMPRAR HELADO";
   
    nuevoCard.appendChild(imagenNuevo);
    nuevoCard.appendChild(textoH3);
    nuevoCard.appendChild(nuevoSpan);
    nuevoCard.appendChild(parrafoCard);
    nuevoCard.appendChild(buttonCard)
    menuCard.appendChild(nuevoCard);
 });


 



