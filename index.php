<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="CSS/style-home.css" type="text/css">
  <link rel="stylesheet" href="CSS/ruleta.css">
  <link rel="stylesheet" href="CSS/cuerpito.css">
  <link rel="stylesheet" href="CSS/ondular.css">
  <link rel="shortcut icon" href="img/dental.png" type="image/x-icon" />
  <link rel="shortcut icon" href="img/pizza-logo.jpg" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <title>Pizza al Paso</title>
 <style>
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
      <a href="#nosostros">NOSOTROS</a>
      <a href="#historia">HISTORIA</a>
      <a href="#contactanos">CONTACTANOS</a>
      <a href="carrito/productos.php">PRODUCTOS</a>
      <a href=""> <ul class="menu-horizontal">
                  <li>
                                <a href="#">HOLA</a>
                                <ul class="menu-vertical">
                                  <li><a href="login.php">LOGIN</a></li>
                                  <li><a href="registro.php">REGISTRARSE</a></li>
                                  <li><a href="PHP/logout.php">CERRAR SESION</a></li>
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
      <a href="carrito/productos.php"><i class="fa-sharp fa-solid fa-cart-shopping" target="_blank"></i></a>
    </div>
  </header>
  <span><section class="inicio" id="home" data-aos="flip-up">
    <div>
    <h2 class="border">PIZZA AL PASO</h2>
    <h2 class="wave">PIZZA AL PASO</h2>
</div></span>
    </div>

    <!-- <img src="img/home-imagen.jpg" alt="" />-->

  </section>

  

  <div class="nosotros-div" id="ubicanos">
    <div class="titulo-nosotros" data-aos="flip-left">
      <h3>UBICANOS</h3>
    </div>
    <div class="menu-nosotros-map" data-aos="zoom-in">

      <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d967.5532250466398!2d-75.72988697076946!3d-14.064601798482467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9110e2bdbc7ebad7%3A0x81749014a5ad69de!2sLa%20Libertad%20206%2C%20Ica%2011001!5e0!3m2!1ses-419!2spe!4v1665553205928!5m2!1ses-419!2spe"></iframe>
    </div>
  </div>


  <div class="nosotros-div" id="nosostros">
    <div class="titulo-nosotros" data-aos="fade-up-right">
      <h3>NOSOTROS</h3>
    </div>

    <div class="menu-nosotros">

      <div class="columna-nosotros" data-aos="zoom-in-right">
        <h3>MISIÓN</h3>
        <p class="port">Se reconoce a nivel regional la calidad de los productos
           y atención, aquello permite sostenibilidad y rentabilidad
            en la empresa. Se busca un mayor reconocimiento y aumento 
            en la demanda con buenas recomendaciones que se consiguen en 
            las reseñas de la página oficial.</p>
            <center><img class="img1" src="img/mision.png" alt="mano" width="100" weight="100 "></center>

      </div>

      <div class="columna-nosotros" data-aos="zoom-in-left">
        <h3>VISIÓN</h3>
        <p class="port">Ser reconocida como una empresa de pizzería muy bien integrada 
          trabajando para satisfacer las necesidades y estándares de los 
          clientes, basándose en la capacidad innovadora, vocación por el 
          servicio y con variedad de productos. Los trabajadores están muy 
          capacitados para cumplir con el desarrollo de esta competencia.</p>
          <center><img class="img1" src="img/vision.png" alt="mano" width="100" weight="100 "></center>

      </div>
    </div>


    <div class="content-all" data-aos="fade-up"
     data-aos-duration="3000">
        <div class="content-carrousel">
            <figure><img src="img/img1.jpg"></figure>
            <figure><img src="img/img1.jpg"></figure>
            <figure><img src="img/img2.jpg"></figure>
            <figure><img src="img/img3.jpg"></figure>
            <figure><img src="img/img4.jpg"></figure>
            <figure><img src="img/img5.jpg"></figure>
            <figure><img src="img/img6.jpg"></figure>
            <figure><img src="img/img7.jpg"></figure>
            <figure><img src="img/img8.jpg"></figure>
            <figure><img src="img/img9.jpg"></figure>
        </div><br><br><br><br><br><br>
    </div>


  </div>
  <div class="nosotros-div" id="historia">
    <div class="titulo-nosotros" data-aos="flip-down">
      <h3>HISTORIA</h3>
    </div>

    <div class="menu-nosotros">

      <div class="columna-historia" data-aos="zoom-in-down">
      <p class="port">La empresa fue creada el 10 de diciembre del 2002, 
          en la ciudad de Ica, comenzó sus actividades el mismo mes, 
          su objetivo principal era establecer un local agradable que
           brinde servicios alimentarios a todo público en general, 
           desde esa fecha ha ido implementando mejoras y cambios que 
           aporten a la calidad de servicio para toda la comunidad 
           iqueña.</p>
      </div>
    </div>
    </div>
  <div class="contact-form-content" id="contactanos">
    <div class="title d-flex justify-content-center" data-aos="zoom-in">
      <h2 id="Contactanos " class="title">CONTACTO</h2>
    </div>
    <form action="email.php" method="post" class="contact-form needs-validation" novalidate name="formularioContactanos">
      <input type="text" name="nombre" class="form-control" placeholder="Nombres" required>
      <div class="invalid-feedback">
        Introduzca el nombre
      </div>
      <input type="email" name="email" class="form-control" placeholder="Correo" required>
      <div class="invalid-feedback">
        Introduzca el email
      </div>
      <input type="number" name="numero" class="form-control" placeholder="Celular" value="" required>
      <div class="invalid-feedback">
        Introduzca el número de celular
      </div>
      <input type="date" name="fecha" class="form-control" placeholder="Fecha" required>
      <div class="invalid-feedback">
        Introduzca la fecha
      </div>
      <input type="text" name="direccion" class="form-control" placeholder="Dirección" required>
      <div class="invalid-feedback">
        Introduzca la dirección
      </div>
      <textarea name="mensaje" class="form-control" placeholder="Dejanos un Mensaje describiendo la situación" > </textarea>
      <div class="invalid-feedback">
        Introduzca el mensaje
      </div>
      <div class="container">
        <button type="submit" class="btn btn-outline-warning" id="buttonEnviarCorreo" name="bottonEnviar">Enviar</button>
        <button type="reset" class="btn btn-outline-warning">Limpiar</button>
      </div>
    </form>
    <?php
    include("contactanos-envio.php")
    ?>
  </div>
  <div class="contact-form-content-reserva" id="reserva">
    <div class="title d-flex justify-content-center" data-aos="zoom-in-up">
      <h2>RESERVA</h2>
    </div>
    <form action="reserva.php" method="post" class="contact-form needs-validation" novalidate>
      <input type="text" class="form-control" name="nombre" placeholder="Nombres" required>
      <div class="invalid-feedback">
        Introduzca el nombre de la reserva
      </div>
      <input type="number" class="form-control" name="comensales" placeholder="N° Comensales" required>
      <div class="invalid-feedback">
        Introduzca el número de comensales
      </div>
      <input type="number" class="form-control" name="numero" placeholder="Celular" required>
      <div class="invalid-feedback">
        Introduzca el número de celular
      </div>
      <input type="date" class="form-control" name="fecha" placeholder="Fecha" required>
      <div class="single-contact-info">
        <h4>HORARIOS</h4>
        <p>De Lunes a Domingo, de 9:00 am a 23:30 pm</p>
      </div>

      <div class="single-contact-info">
        <button type="submit" class="btn btn-outline-warning" name="bottonEnviarReserva">Reservar</button>
      </div>
    </form>
  </div>


  <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
    <symbol id="bootstrap" viewBox="0 0 118 94">
      <title>Bootstrap</title>
      <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
    </symbol>
    <symbol id="facebook" viewBox="0 0 16 16">
      <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
    </symbol>
    <symbol id="instagram" viewBox="0 0 16 16">
      <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
    </symbol>
    <symbol id="twitter" viewBox="0 0 16 16">
      <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
    </symbol>
  </svg>

  <div class="container-fluid">
    <footer class="py-5 p-4 mt-5">
      <div class="row">
        <div class="col-6 col-md-2 mb-3">
          <h5>PIZZA AL PASO</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2">
              <a href="#nosostros " class="nav-link p-0 text-muted">NOSOTROS</a>
            </li>
            <li class="nav-item mb-2">
              <a href="#historia" class="nav-link p-0 text-muted">HISTORIA</a>
            </li>
            <li class="nav-item mb-2">
              <a href="#contactanos" class="nav-link p-0 text-muted">CONTACTANOS</a>
            </li>
            <li class="nav-item mb-2">
              <a href="#productos" class="nav-link p-0 text-muted">PRODUCTOS</a>
            </li>
            <li class="nav-item mb-2">
              <a href="#productos" class="nav-link p-0 text-muted">COMPRAR</a>
            </li>
          </ul>
        </div>
        <div class="col-6 col-md-2 mb-3">
          <h5>OFERTAS</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2">
              <a href="librodereclamaciones.php" class="nav-link p-0 text-muted">LIBRO DE RECLAMACIONES</a>
            </li>
            <li class="nav-item mb-2">
              <a href="#" class="nav-link p-0 text-muted">OFERTAS</a>
            </li>
            <li class="nav-item mb-2">
              <a href="#" class="nav-link p-0 text-muted">COMBOs</a>
            </li>
          </ul>
        </div>

        <div class="col-md-5 offset-md-1 mb-3">
          <form>
            <h5>Envianos un correo 📨</h5>
            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
              <label for="newsletter1" class="visually-hidden"></label>
              <input id="newsletter1" type="text" class="form-control" placeholder="Correo electronico " />
              <button class="btn btn-warning" type="button">Enviar 📤</button>
            </div>
          </form>
          <div class="col-5 ">
          <hr>
          <ul class="nav flex-column">
            <li class="nav-item mb-2">
             <span class="text-warning font-weight-bold"> RUC:</span> 10215555688   
            </li>
            <li class="nav-item mb-2">
             <span class="text-warning font-weight-bold">Dirección:</span>La Libertad 141, Ica 11001  <i class="fa-solid fa-map" ></i>
            </li>
            <li class="nav-item mb-2">
            <span class="text-warning font-weight-bold"> E-Mail:</span> societa4@hotmail.com  <i class="fa-solid fa-envelope"></i>
            </li>
          </ul>
        </div>
        </div>
      </div>

      <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
        <p>&copy; 2022, Inc.Todos los derechos reservados.</p>
        <ul class="list-unstyled d-flex">
          <li class="ms-3">
            <a class="link-dark" href="https://twitter.com/"><svg class="bi" width="24" height="24">
                <use xlink:href="#twitter" />
              </svg></a>
          </li>
          <li class="ms-3">
            <a class="link-dark" href="https://www.instagram.com/pizzas_al_paso/"><svg class="bi" width="24" height="24">
                <use xlink:href="#instagram" />
              </svg></a>
          </li>
          <li class="ms-3">
            <a class="link-dark" href="https://www.facebook.com/profile.php?id=100063580178149&sk=about"><svg class="bi" width="24" height="24">
                <use xlink:href="#facebook" />
              </svg></a>
          </li>
        </ul>
      </div>
    </footer>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict'

      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.querySelectorAll('.needs-validation')

      // Loop over them and prevent submission
      Array.prototype.slice.call(forms)
        .forEach(function(form) {
          form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }

            form.classList.add('was-validated')
          }, false)
        })
    })()
  </script>
  <script src="/JS/main.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
  AOS.init();
</script>
</body>

</html>