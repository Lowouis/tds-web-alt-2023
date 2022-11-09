<?php
error_reporting(E_ERROR | E_PARSE);
session_start();

if(!session_start()){
    $_SESSION['task_list'] = ["Pomme", "Poire", "Banane"];
}

include_once 'body.php';
