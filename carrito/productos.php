<?php 
   session_start();
   if (!isset($_SESSION['username'])) {
    $_SESSION['username']="";
   }
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CARRITO DE COMPRAS </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <link rel="stylesheet" href="style-productos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
          * {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      text-decoration: none !important;
      /*border: 1px solid black;*/
    }

          :root {
      --color-logo: #ff8c1a;
    }
      header {

display: flex;
width: 100%;
position: fixed;
left: 0;
top: 0;
background-color: aliceblue;
box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .2);
justify-content: space-evenly;
padding: 8px;
z-index: 100;
}

header .logo {

color: var(--color-logo);
font-size: 20px;


}

header span {

color: black;

}

header .navbar a {

margin-left: 20px;
color: black;
font-size: 15px;

}

header .navbar a:hover {
color: var(--color-logo);
background-color: aliceblue;
}

header .redes {
color: black;

}

header .redes i {
color: black;
padding: 10px;

}

header .redes i:hover {
color: var(--color-logo);
}

header input {
display: none;
}

header label {
font-size: 3rem;
color: var(--verde);
cursor: pointer;
visibility: hidden;
opacity: 0;
}
/* barra dezplegable*/

.menu-horizontal{
	list-style: none;
	display: flex;
	justify-content: space-around;
}
.menu-horizontal > li > a{
	display: block;
	color: black;
	text-decoration: none;
}
.menu-horizontal > li:hover{
	background-color:var(--color-logo);
}
.menu-vertical{
	position: absolute;
	display: none;
	list-style: none;
	width: 200px;
  padding: 5px;
	background-color:var(--color-logo);
}
.menu-horizontal li:hover .menu-vertical{
	display: block;
}


.menu-vertical li a{
	display: block;
	color: black;
	text-decoration: none;
}

    </style>
  </head>

  <body>

    <header>
      <a href="" class="logo"><span>PIZZA AL</span> PASO <i class="fa-solid fa-pizza-slice"></i></a>
      <input type="checkbox" id="menu-bar" />
      <label for="menu-bar" class="fa fa-bars"></label>
      <nav class="navbar">
        <a href="../index.php">HOME</a>
        <a href="#nosostros">NOSOTROS</a>
        <a href="#historia">HISTORIA</a>
        <a href="#contactanos">CONTACTANOS</a>
        <a href="carrito/productos.php">PRODUCTOS</a>
        <a href="carrito/productos.php">COMPRAR</a>
        <a href=""> <ul class="menu-horizontal">
                              <li>
                                 <a href="#">HOLA <?php echo $_SESSION['username'] ?></a>
                                <ul class="menu-vertical">
                                  <li><a href="../login.php">LOGIN</a></li>
                                  <li><a href="../registro.php">CERRAR SESION</a></li>
                                </ul>
                              </li>
                    </ul> 
        </a>
      </nav>
      <div class="redes">
        <a href="https://www.instagram.com/pizzas_al_paso/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://www.facebook.com/profile.php?id=100063580178149&sk=about" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube" target="_blank"></i></a>
        <a href="https://www.tiktok.com/es/"><i class="fa-brands fa-tiktok" target="_blank"></i></a>
        <a href="" type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-sharp fa-solid fa-cart-shopping" target="_blank"></i></a>
      </div>
    </header>

     

    <div class="container mt-5">
      <div class="container p-3 m-2 mt-5 ">
        <h3 class="mt-5 titulo-pagina bg-warning">NUESTROS PRODUCTOS </h3>
      </div>
      <hr>
      <div class="row" id="cards"></div>
    </div>
    

    <template id="template-card">
      <div class=" card-color col-12 col-md-4 col-sm-6 col-sm-12">
        <div class=" card m-1">
          <div class="card-body d-flex flex-column">
            <img src=""  width="300px" height="300px"  alt=""  class="justify-content-center ">
            <h5 class="text-center titulo-producto">Titulo</h5>
            <div class="container d-flex align-items-center justify-content-between">
              <h6 class=" badge bg-secondary">PRECIO</h6>
              <p class="align-items-center badge bg-warning">S/.<span>precio</span></p>
            </div>
            <button class="btn btn-outline-warning">COMPRAR PRODUCTO</button>
          </div>
        </div>
      </div>
    </template>
    <template id="template-carrito">
      <tr>
        <th scope="row">id</th>
        <td>Café</td>
        <td>1</td>
        <td>
          <button class="btn btn-info btn-sm">
            +
          </button>
          <button class="btn btn-danger btn-sm">
            -
          </button>
        </td>
        <td>S/.<span>500</span></td>
      </tr>
    </template>

    <template id="template-footer">
      <th scope="row" colspan="2">Total productos</th>
      <td>10</td>
      <td>
        <button class="btn btn-danger btn-sm" id="vaciar-carrito">
          vaciar todo
        </button>
      </td>
      <td class="font-weight-bold">S/.<span>5000</span></td>
    </template>
 
    


    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">LISTA DE CARRITO DE COMPRAS</h5>
            <button type="button" class="btn btn-warning"  data-bs-dismiss="modal" aria-label="Close">CERRAR</button>
          </div>
          <div class="modal-body">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Item</th>
                  <th scope="col">Cantidad</th>
                  <th scope="col">Acción</th>
                  <th scope="col">Total</th>
                </tr>
              </thead>
              <tbody id="items"></tbody>
              <tfoot>
                <tr id="footer">
                  <th scope="row" colspan="5">Carrito vacío - comience a comprar!</th>
                </tr>
              </tfoot>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">SEGUIR COMPRANDO</button>
            <button type="button" class="btn btn-warning" id="procesarCompra">PROCESAR COMPRA</button>
          </div>
        </div>
      </div>
    </div>
    </body>
<script src="carrito/productos-main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> <script src="productos-main.js"></script>
 
</html>