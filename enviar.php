<?php

if(isset($_POST['enviar'])) {
    if(!empty($_POST['name']) && !empty($_POST['asunto']) && !empty($_POST['msg']) && !empty($_POST['email'])) {
        $name = $_POST['name'];
        $asunto = $_POST['asunto'];
        $msg = $_POST['msg'];
        $email = $_POST['email'];
        $header = "From: " . $_POST['email'] . "\r\n";
        $header .= "Reply-To: " . $_POST['email'] . "\r\n";
        $header .= "X-Mailer: PHP/" . phpversion();
        $mail = @mail("jose.onepiece@hotmail.com",$asunto,$msg,$header);
        if($mail){
            echo "<h4> ¡Mail enviado exitosamente!</h4>";
        } else {
            echo "<h4> ¡Error al enviar el correo electrónico!</h4>";
        }
    } else {
        echo "<h4> ¡Por favor complete todos los campos!</h4>";
    }
}
