<?php
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$trabajo = $_POST['trabajo'];
if ($trabajo = 1) {
  $trabajo = "Clóset";
}
elseif ($trabajo = 2) {
  $trabajo = "Cocina Integral";
}
elseif ($trabajo = 3) {
  $trabajo = "Comedor";
}
elseif ($trabajo = 4) {
  $trabajo = "Mueble de Baño";
}
elseif ($trabajo = 5) {
  $trabajo = "Otros";
}
$mensaje = $_POST['mensaje'];
$destinatario = "santiagoportillo006@gmail.com";
$asunto = "Contacto desde la web";
$carta = "De: $nombre \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Correo: $email \n";
$carta .= "trabajo: $trabajo \n";
$carta .= "Mensaje: $mensaje";
mail($destinatario, $asunto, $carta);
header('Location:contacto.php');
?>
