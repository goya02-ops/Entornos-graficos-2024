<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $to = "santigoya@gmail.com";
    $subject = "Consulta de $nombre";
    $body = "Nombre: $nombre\nEmail: $email\n\nMensaje:\n$mensaje";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Mensaje enviado. Gracias por contactarnos.";
    } else {
        echo "Error al enviar el mensaje. Por favor, intenta nuevamente.";
    }
}
?>
