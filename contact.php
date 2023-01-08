<?php
    $nom = $_POST['name'];
    $visitor_email = $_POST['email'];
    $object = $_POST['object'];
    $message = $_POST['message'];

    $email_from = 'redirectContact@shiinzprojet.com';
    $email_subject = $object;
    $email_body = "Nom d'utilisateur : $nom.\n".
                    "Email d'utilisateur : $visitor_email.\n".
                        "Message : $message.\n";

    $to = "matheobienvenu@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .="Reply-To: $visitor_email \r\n";

    mail($to,$email_subjet,$email_body,$headers);

?>