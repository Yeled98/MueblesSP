<?php
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$trabajo = $_POST['trabajo'];
if ($trabajo = 1) {
  $trabajo = "Sala";
}
elseif ($trabajo = 2) {
  $trabajo = "Comedor";
}
elseif ($trabajo = 3) {
  $trabajo = "Cocina Integral";
}
elseif ($trabajo = 4) {
  $trabajo = "Puertas";
}
elseif ($trabajo = 5) {
  $trabajo = "Otros";
}
}
$mensaje = $_POST['mensaje'];
$destinatario = "correo@gmail.com";
$asunto = "Contacto desde la web";
$carta = "De: $nombre \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Correo: $email \n";
$carta .= "trabajo: $trabajo \n";
$carta .= "Mensaje: $mensaje";
mail($destinatario, $asunto, $carta);
header('Location:contacto.php');
?>