<?php
ob_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require "./includes/PHPMailer-master/src/Exception.php";
require "./includes/PHPMailer-master/src/PHPMailer.php";
require "./includes/PHPMailer-master/src/SMTP.php";

$error = "";

if (isset($_POST["submit"])) {
    if (empty($_POST["name"]) || empty($_POST["company"]) || empty($_POST["email"]) || empty($_POST["subject"]) || empty($_POST["message"])) {
        $error = "You have to complete the form!";
        header("Location: index.php?error=${error}");
    } else {
        $name = $_POST["name"];
        $company = $_POST["company"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];


        $mailTo = "douaa.larif@outlook.fr";
        $headers = "From: " . $email;
        $txt = "You have received an e-mail from " . $name . ".\n" . $message;


        $mail = new PHPMailer(true);

        try {
            // Set the mail server settings
            $mail->isSMTP();
            $mail->SMTPDebug = 2;
            $mail->SMTPAuth = true;
            $mail->Host = "tls://smtp.gmail.com";
            $mail->SMTPKeepAlive = true;
            $mail->Mailer = "smtp";
            $mail->SMTPAuth = true;
            $mail->Username = "originart.contact@gmail.com";
            $mail->Password = "eczbokmtkuswkglq";
            $mail->SMTPSecure = "tls";
            $mail->Port = "587";
            $mail->CharSet = "UTF-8";

            // Set the recipients for the mail
            $mail->setFrom($email, $name);
            $mail->addAddress("originart.contact@gmail.com", "Originart");

            // Set the content of the mail
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->msgHTML($txt);

            // Sending the mail
            $mail->send();
            header("Location: back.php?mailsend");
        } catch (Exception $e) {
            echo "Message could not be send: {$mail->ErrorInfo}";
        }
    }
}
ob_end_flush();
?>