<?php
error_reporting(E_ERROR | E_PARSE);

$user = $_POST['user'] ?? "";

if($user != ""){
    session_start(); 
    $_SESSION['task_list'] = ["Pomme", "Poire", "Banane"];
    $_SESSION['user'] = $user;
    $_SESSION['edit'] = false;
    include 'body.php';
}
else{
    header('Location: home.php');
}

