<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="CSS/style-registro.css" type="text/css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <title>LOGIN</title>
  
</head>

<body>
  <!-- #region in-->
     <?php include("PHP/header.php") ?>
  <div class="container-fluid">
    <br>
    <br>
  </div>

  <div class="container-fluid">
    <main class="form-signin w-100 m-auto p-5">
      <form role="form" name="registro" action="PHP/registrar.php" method="post"  >
        <img class="mb-4" src="img/pizza-logo.jpg" alt="" width="70%" height="70%" >
        <h1 class="h3 mb-3 fw-normal">REGISTRARSE </h1>
        <div class="form-floating">
		    <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
        <label for="username">Nombre de usuario</label>  
        </div>
        <div class="form-floating">
		    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nombre Completo">
        <label for="fullname">Apellidos Completo</label>  
      </div>
        <div class="form-floating">
		    <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electronico">
        <label for="email">Correo Electronico</label> 
      </div>
        <div class="form-floating">
		    <input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a">
        <label for="password">Contrase&ntilde;a</label>  
      </div> 

        <div class="form-floating">     
		    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmar Contrase&ntilde;a">
        <label for="confirm_password">Confirmar Contrase&ntilde;a</label>  
      </div>
        <div class="form-floating">
          <button class="w-100 btn btn-lg btn-warning m-1" type="submit">INICIAR SESION</button>
        </div>
      </form>
 
    </main>
  </div>

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

  <script src="JS/valida_registro.js"></script>

</body>

</html>