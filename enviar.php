<?php 
 $destino = "estilograficopro@gmail.com";
 $nombre = ($_POST["nombre"]);
 $correo = ($_POST["correo"]);
 $mensaje = ($_POST["mensaje"]);
 $contenido = "\nnombre: " . $nombre . "\ncorreo: " . $correo . "\nmensaje: " . $mensaje;
 mail($destino, "Buen dia, este mensaje viene desde la página Mayaks | Multimedia.", $contenido); 
  header("location:index.html");
  ?>

