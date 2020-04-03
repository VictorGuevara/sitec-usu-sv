<?php 
    // VARIABLE QUE GUARDA EL CORREO DESTINO.
    $correo_destino = "sitec1.contacto@gmail.com";

    // VARIABLE DEL FORMULARIO
    $nombre = $_POST["nombre_completo"];
    $correo = $_POST["correo"];
    $asunto = $_POST["asunto"];
    $mensaj = $_POST["mensaje"];
    
    // VALIDAMOS CAMPOS VACIOS...
    if ($nombre != "" || $correo != "" || $asunto != "" || $mensaj != "") {
        // MENSAJE TODO UNIDO EN UNA VARIABLE.
        $contenido_mensaje = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nAsunto: " . $asunto . "\nMensaje: " . $mensaj;

        mail($correo_destino, $asunto, $contenido_mensaje);
        header("location: ../index.html");
    } else {
        echo "Ocurrio un error";
        header("location: ../index.html");
    }
?>