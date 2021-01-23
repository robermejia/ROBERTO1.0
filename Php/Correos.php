<?php
    $destinatario = 'appyouversion@gmail.com';
    //aqui se enviará el correo
    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $email = $_POST['email'];

    $header = "Enviado desde página web: www.robertiño.com ";
    $mensajeCompleto =  $mensaje . "\nAtentamente: " . $nombre . "\nE-mail del destinatario: " . $email;
 
    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script>alert('correo enviado exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='../contacto.html'\",1000)</script>";
?>
