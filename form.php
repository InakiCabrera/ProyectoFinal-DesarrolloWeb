<?php

    $nombre = $_post['nombre'];
    $email = $_post['email'];
    $telefono = $_post['number'];
    $pedido = $_post['send'];

    $para = 'inakibrera@yahoo.com.ar';
    $asunto = 'Este mail fue enviado desde la web';

    mail($para, $asunto, utf8_decode($nombre,$email,$telefono,$pedido));

    header('Location:exito.html')




?>