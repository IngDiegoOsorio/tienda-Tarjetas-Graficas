<?php
    if(!empty($_POST)){
    $email_to = "diegopruebapi@gmail.com";
    $email_subject = "Contacto de Venta! Nuevo Cliente!";
    $email_message = "Detalles del formulario de contacto:\n\n";
    $email_message .= "Nombre: " . $_POST['nombre'] . "\n";
    $email_message .= "Apellido: " . $_POST['apellido'] . "\n";
    $email_message .= "E-mail: " . $_POST['email'] . "\n";
    $email_message .= "Comentarios: " . $_POST['mensaje'] . "\n\n";


     $mail = $_POST['email'];
    $header = 'From: ' . $mail . " \r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";

    if(mail($email_to, $email_subject, $email_message,$header)){
        echo 'si bueno';
    }else{
        echo 'No se pudo enviar el correo';
    }
}