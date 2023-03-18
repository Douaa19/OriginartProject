<?php

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $company = $_POST["company"];
    $email = $_POST["email"];
    $message = $_POST["message"];


    $mailTo = "douaa.larif@outlook.fr";
    $headers = "From: " . $email;
    $txt = "You have to received an e-mail from " . $name . ".\n\n" . $message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: back.php?mailsend");
}


?>