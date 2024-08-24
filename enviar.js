function sendEmail(event) {
    event.preventDefault();

    const nombre = document.getElementById('nombre').value;
    const correo = document.getElementById('correo').value;
    const mensaje = document.getElementById('mensaje').value;

    emailjs.send("service_6qto897", "template_coqdv4d", {
        to_email: "estilograficopro@gmail.com",
        from_name: nombre,
        from_email: correo,
        message: mensaje
    }).then(function(response) {
        alert("El mensaje se ha enviado correctamente.");
    }, function(error) {
        alert("Ocurrió un error al enviar el mensaje.", error);
    });
}