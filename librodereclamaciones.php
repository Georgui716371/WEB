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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/caja-de-pizza.png" type="icon">
    <link rel="stylesheet" href="CSS/style-libroReclamaciones.css" type="text/css" >

 
   <title>Libro de Reclamaciones </title>
</head>
<body>
    <div class="cabecera">
        <div class="center-div">
            <div>
                <h2>PIZZA AL PASO</h2>
                <div class="caja-pizza">
                    <img src="img/logo-pizza.png" class="imagen-pizza">
                </div>
            </div>
            <div>
                <h4>FORMULARIO LIBRO DE RECLAMACIONES</h4>
            </div>
            <div class="texto1">
                <p>Conforme a lo establecido en código de la Protección y Defensa del consumidor contamos con un Libro
                    de Reclamaciones a tu disposición para que puedas registrar tu queja o reclamo acerca de algún
                    pedido o transacción realizada a través de nuestras páginas.</p>
            </div>
        </div>
    </div>
    <div class="container" style="border-radius:10px; border:1px solid #ff9900;" >
        <form action="PHP/libro-reclamaciones.php" method="post" class="needs-validation" novalidate>
            <h6 class="form-title">1.IDENTIFICACIÓN DEL CONSUMIDOR RECLAMANTE(*) :</h6>
            <br>
            <div class="main-user-info user-input-box">
                <div class="form-floating user-input-box">
                    <input type="date" class="form-control" id="floatingTextarea2" name="fechaIncidente"
                        required></input>
                    <label><i>Fecha del Incidente:</i></label>
                    <div class="invalid-feedback">
                        Introduzca la fecha del incidente
                    </div>
                </div>
                <br>
                <div class="form-floating mb-3 user-input-box">
                <input type="text" aria-label="First name" id="apellido" name="apellido" class="form-control" required>
                    <label><i>Apellidos:</i></label>
                    <div class="invalid-feedback">
                        Introduzca sus apellidos
                    </div>
                </div>
                <div class="form-floating mb-3 user-input-box">
                    <input type="text" class="form-control" id="floatingInput" name="nombre" required>
                    <label><i>Nombres:</i></label>
                    <div class="invalid-feedback">
                        Introduzca sus nombres
                    </div>
                </div>
                <div class="form-floating user-input-box">
                <input type="email" class="form-control" id="basic-url" name="correo" aria-describedby="basic-addon3" required>
                    <label><i>Correo:</i></label>
                    <div class="invalid-feedback">
                        Introduzca su email
                    </div>
                </div>
                <br>
                <div class="form-floating user-input-box">
                <input type="number" pattern="^\d{9}$" class="form-control" id="basic-url" name="telefono" aria-describedby="basic-addon3" required>
                    <label><i>Teléfono:</i></label>
                    <div class="invalid-feedback">
                        Introduzca su teléfono
                    </div>
                </div>
                <br>
                <div class="form-floating user-input-box">
                     
                    <select class="form-select" id="floatingSelectGrid" seleccion="selectFormSelection"  name="dniSection">
                        <option value="" disabled selected>seleccione</option>
                        <option value="dni">DNI</option>
                        <option value="dniElectronico">DNI electrónico</option>
                        <option value="Carnet">Carnet de Extranjeria</option>
                    </select>
                    <label><i>Seleccione el Tipo de Documento:</i></label>
                </div>
                <br>
                <div class="form-floating user-input-box">
                <input type="number"   class="form-control" id="basic-url" name="numDocumento" aria-describedby="basic-addon3" required>
                    <label><i>Número de documento:</i></label>
                    <div class="invalid-feedback">
                        Introduzca el número de documento
                    </div>
                </div>
                <br>
                <div class="form-floating user-input-box">
                <input type="text"   id="direccion" name="direccion" class="form-control" required>
                    <label><i>Dirección:</i></label>
                    <div class="invalid-feedback">
                        Introduzca la dirección
                    </div>
                </div>
            </div>
            <br>
            <div class="main-user-info user-input-box">
                <h6 class="form-title">2.IDENTIFICACIÓN DEL BIEN CONTRATADO (*):</h6>
                <br>

                <fieldset style="border:1px solid rgb(198, 192, 192)">
                    <legend>Tipo:</legend>
                    <div class="form-check user-input-box">
                        <input class="form-check-input" type="radio" name="radioButtonTipo" id="flexRadioDefault1"
                            required value="producto">
                        <label class="form-check-label">
                            <i>Producto</i>
                        </label>
                    </div>

                    <div class="form-check user-input-box">
                        <input class="form-check-input" type="radio" name="radioButtonTipo" id="flexRadioDefault2"
                            value="servicio">
                        <label class="form-check-label">
                            <i>Servicio</i>
                        </label>
                    </div>
                </fieldset>
                <br>
                <div class="form-floating user-input-box">
                    <input type="number" class="form-control" id="MontoReclamado" name="MontoReclamado" required>
                    <label><i>Monto Reclamado:</i></label>
                    <div class="invalid-feedback">
                        Introduzca el monto reclamado
                    </div>
                </div>
                <br>
                <div class="form-floating user-input-box">
                    <textarea class="form-control" id="floatingTextarea" name="ComentarioMonto" required></textarea>
                    <label><i>Descripción para monto reclamado:</i></label>
                    <div class="invalid-feedback">
                        Introduzca la descripcción del monto
                    </div>
                </div>
            </div>
            <br>
            <div class="main-user-info user-input-box">
                <h6 class="form-title">3.DETALLE DE LA RECLAMACION Y PEDIDO DEL CONSUMIDOR (*):</h6>
                <br>
                <fieldset>
                    <legend>Reclamación:</legend>
                    <div class="form-check user-input-box">
                        <input class="form-check-input" type="radio" name="radioButtonReclamo" id="flexRadioDefault1"
                            required value="queja">
                        <label class="form-check-label">
                            <i>Queja</i>
                        </label>
                    </div>

                    <div class="form-check user-input-box">
                        <input class="form-check-input" type="radio" name="radioButtonReclamo" id="flexRadioDefault2"
                             value="reclamo">
                        <label class="form-check-label">
                            <i> Reclamo</i>

                        </label>
                    </div>
                </fieldset>
                <br>
                <div class="form-floating user-input-box">
                    <input type="number" class="form-control" id="floatingInputGrid" name="numeroDeBoleta" required>
                    <label><i>Número de Boleta:</i></label>
                    <div class="invalid-feedback">
                        Introduzca el número de boleta
                    </div>
                </div>
                <br>
            </div>
            <br>

            <div class="form-floating user-input-box">
                <input type="date" class="form-control" id="floatingTextarea2" name="fechaPedido" required></input>
                <label><i>Fecha de Pedido:</i></label>
                <div class="invalid-feedback">
                    Introduzca la fecha del pedido
                </div>
            </div>
            <br>
            <div class="form-floating">
                <textarea class="form-control" id="floatingTextarea" name="ComentarioDetalleReclamo"
                    required></textarea>
                <label><i>Detalle:</i></label>

            </div>
            <br>
            <div class="form-floating">
                <textarea class="form-control" id="floatingTextarea" name="ComentarioPedidoConcreto"
                    required></textarea>
                <label><i>Pedido en Concreto:</i></label>
            </div>
            <div class="envio-botton">
                <div class="g-recaptcha" data-sitekey="6LcPn4IiAAAAADr9Kd5WocDAmo3eMkxzA1Lobxwl"
                    data-callback="recaptcha_callback"></div>
            </div>
            <br>
            <div class="envio-botton">
                <button class="btn" type="submit" name="enviarLibroReclamaciones">ENVIAR<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M307 34.8c-11.5 5.1-19 16.6-19 29.2v64H176C78.8 128 0 206.8 0 304C0 417.3 81.5 467.9 100.2 478.1c2.5 1.4 5.3 1.9 8.1 1.9c10.9 0 19.7-8.9 19.7-19.7c0-7.5-4.3-14.4-9.8-19.5C108.8 431.9 96 414.4 96 384c0-53 43-96 96-96h96v64c0 12.6 7.4 24.1 19 29.2s25 3 34.4-5.4l160-144c6.7-6.1 10.6-14.7 10.6-23.8s-3.8-17.7-10.6-23.8l-160-144c-9.4-8.5-22.9-10.6-34.4-5.4z"/></svg> </button>
            </div>
        </form>
    </div>
    <script>
        function recaptchaFuntion() {
            var response = grecaptcha.getResponse();
            if (response.length == 0) {
                alert("Captcha no verificado")
            }
        }
    </script>

    </script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
    <script src="https://www.google.com/recaptcha/api.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>