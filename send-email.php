<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = "magnum@magnumseguridad.com.ar";
    $subject = "Nuevo mensaje de contacto desde el sitio web";
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    
    $body = "Nombre: $name\n";
    $body .= "Correo Electrónico: $email\n";
    $body .= "Mensaje:\n$message\n";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "Mensaje enviado correctamente.";
    } else {
        echo "Hubo un problema al enviar el mensaje.";
    }
}
?>
