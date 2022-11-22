<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$nombre = $_POST['nombre'];
                        $email = $_POST['email'];
                        $numero = $_POST['numero'];
                        $fecha = $_POST['fecha'];
                        $direccion = $_POST['direccion'];
                        $mensaje = $_POST['mensaje'];

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'zeusmens123@gmail.com';                     //SMTP username
    $mail->Password   = 'uqgvbzhghhkgskmp';                               //SMTP password
    $mail->SMTPSecure = 'PHPMailer::ENCRYPTION_STARTTLS';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('zeusmens123@gmail.com', 'PizzaPaso');
    $mail->addAddress('zeusmens123@gmail.com', 'Atención al Cliente');     //Add a recipient


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Consulta';
    $mail->Body    ="Nombre del Cliente: ". $nombre.
    "\nNúmero del Cliente: \n".  $numero.
    "\nCorreo del Cliente: \n". $email.
    "\nNúmero del Cliente: \n". $numero.
    "\nFecha Mencionada: \n". $fecha.
    "\nDirección: ". $direccion.
    "\nMensaje: ". $mensaje;

    $mail->AltBody = 

    'Mensaje: ' . $mensaje;'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo '<script>
          alert("Mensaje fue enviado exitosamente");
          </script>';
} catch (Exception $e) {
    echo "El mensaje no se pudo enviar: {$mail->ErrorInfo}";
    echo "<script> setTimeout(\"location.href='index.php'\",1000)</script>";
}

?>
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

$resul= mysqli_query($con,$consulta);

}
}

?>