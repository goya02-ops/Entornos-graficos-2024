<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tu_nombre = $_POST['tu_nombre'];
    $tu_email = $_POST['tu_email'];
    $amigo_nombre = $_POST['amigo_nombre'];
    $amigo_email = $_POST['amigo_email'];

    $subject = "Recomendación de $tu_nombre";
    $message = "Hola $amigo_nombre,\n\n$tu_nombre te ha recomendado visitar este sitio web. https://www.google.com.ar/\n\nSaludos,\n$tu_nombre";
    $headers = "From: $tu_email";

    if (mail($amigo_email, $subject, $message, $headers)) {
        echo "Recomendación enviada. Gracias por compartir nuestro sitio.";
    } else {
        echo "Error al enviar la recomendación. Por favor, intenta nuevamente.";
    }
}
?>
