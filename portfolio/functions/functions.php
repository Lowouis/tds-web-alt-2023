<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once '../vendor/autoload.php';


$phpmailer = new PHPMailer();
$phpmailer->isSMTP();
$phpmailer->Host = 'smtp.mailtrap.io';
$phpmailer->SMTPAuth = true;
$phpmailer->Port = 2525;
$phpmailer->Username = '66818f79fbd127';
$phpmailer->Password = '6c3bc57f8f3cbb';
$phpmailer->Subject = $_POST['objet'];
$phpmailer->Body = $_POST['message'];
try {
    $phpmailer->setFrom("louisguritapro@gmail.com","Louis GURITA");
    $phpmailer->addAddress($_POST['email'], $_POST['firstname']);
    $phpmailer->send();
} catch (\PHPMailer\PHPMailer\Exception $e) {
    echo $e->errorMessage();
} catch (Exception $e) {
    echo $e->getMessage();
}

header('Location: ../index.php');