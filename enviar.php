<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombre = htmlspecialchars($_POST['con_name']);
    $correo = htmlspecialchars($_POST['con_email']);
    $mensaje = htmlspecialchars($_POST['con_message']);

    // Dirección de correo de destino
    $destinatario = "estilograficopro@gmail.com";
    $asunto = "Nuevo mensaje de contacto";

    // Crear el cuerpo del mensaje
    $cuerpo = "Nombre: $nombre\n";
    $cuerpo .= "Correo electrónico: $correo\n";
    $cuerpo .= "Mensaje:\n$mensaje";

    // Encabezados del correo
    $headers = "From: $correo\r\n";
    $headers .= "Reply-To: $correo\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Intentar enviar el correo
    if (mail($destinatario, $asunto, $cuerpo, $headers)) {
        echo "<script>alert('Mensaje enviado con éxito.'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Error al enviar el mensaje.'); window.location.href='index.html';</script>";
    }
} else {
    echo "<script>alert('Método de envío no soportado.'); window.location.href='index.html';</script>";
}
?>