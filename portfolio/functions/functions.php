<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once "../utils/phpmailer_src/Exception.php";
require_once "../utils/phpmailer_src/PHPMailer.php";
require_once "../utils/phpmailer_src/SMTP.php";
require '..\vendor\autoload.php';


$mail = new PHPMailer(TRUE);

try{
    //Server settings
    $mail->isSMTP();
    $mail->Host       = 'localhost';
    $mail->SMTPAuth   = true;
    //Charset
    $mail->CharSet = 'UTF-8';
    //Recipients
    $mail->addAddress("louisguritaperso@gmail.com", "Louis GURITA");
    $mail->setFrom("no-reply@gurita.fr");

    $mail->Subject = "Objet du mail";
    $mail->Body = "Contenu du mail";
    //Sending mail
    $mail->send();
    echo "Mail envoyé";

}catch (Exception $e){
    echo "Message non envoyé. Erreur : {$mail->ErrorInfo}";
}

header('Location: ../index.php');