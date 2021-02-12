<?php
if (isset($_POST['button'])) {
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['mesagge'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $msg = "Hola! Este correo lo has recibido porque te has suscrito al newsletter de Matias La Mota. Si deseas desuscribirte de mi newsletter, puedes hablarme a mi email matiaslamota18@gmail.com. ¡Te veo pronto!";
        $header .= "From: no-reply@matiasportfolio.ml" . "\r\n";
        $header .= "Reply-to: no-reply@matiasportfolio.ml" . "\r\n";
        $header .= "X-mailer_ PHP/" . phpversion();
        $mail = @mail($email, $header, $msg);
        if (mail) {
            echo"¡Has ingresado exitosamente!";
        }
    }
}
