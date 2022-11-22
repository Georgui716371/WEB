<?php

include("PHP/con_db.php");
if(isset($_POST['bottonEnviar'])) {

if(strlen($_POST['nombre']) >= 1 &&
strlen($_POST['email']) >= 1) {

$nombre =trim($_POST['nombre']);
$email =trim($_POST['email']);
$numero =trim($_POST['numero']);
$fecha =trim($_POST['fecha']);
$direccion =trim($_POST['direccion']);
$mensaje =trim($_POST['mensaje']);

$consulta="INSERT INTO contactanos(nombre, email, numero, fecha, direccion, mensaje) 
VALUES ('$nombre', '$email', '$numero', '$fecha', '$direccion', '$mensaje')";
$resul= mysqli_query($conexion,$consulta);

}
}

?>