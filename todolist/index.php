<?php
error_reporting(E_ERROR | E_PARSE);

$user = $_POST['user'] ?? false;

if(!$user){
    session_start(); 
    $_SESSION['task_list'] = ["Pomme", "Poire", "Banane"];  
    include 'body.php';
}
else{
    header('Location: home.php');
}


?>

