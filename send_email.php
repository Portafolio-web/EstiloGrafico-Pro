<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $nombre = htmlspecialchars($_POST['con_name']);
    $correo = htmlspecialchars($_POST['con_email']);
    $mensaje = htmlspecialchars($_POST['con_message']);

    // Configurar el correo
    $to = 'destinatario@example.com'; // Cambia esto por tu dirección de correo
    $subject = 'Nuevo mensaje desde el formulario de contacto';
    $headers = "From: $correo\r\n";
    $headers .= "Reply-To: $correo\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Construir el contenido del correo
    $email_body = "<html><body>";
    $email_body .= "<h2>Nuevo mensaje de contacto</h2>";
    $email_body .= "<p><strong>Nombre:</strong> $nombre</p>";
    $email_body .= "<p><strong>Correo electrónico:</strong> $correo</p>";
    $email_body .= "<p><strong>Mensaje:</strong><br>$mensaje</p>";
    $email_body .= "</body></html>";

    // Enviar el correo
    if (mail($to, $subject, $email_body, $headers)) {
        echo "<script>alert('El mensaje se ha enviado correctamente.'); window.location.href = 'index.html';</script>";
    } else {
        echo "<script>alert('Ocurrió un error al enviar el mensaje.'); window.location.href = 'index.html';</script>";
    }
}
?>