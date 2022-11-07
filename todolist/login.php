<?php

session_start();

if(isset($_POST['login'])){
    $_SESSION['user'] = $user = $_POST['login'];
    echo 'Bienvenue ' . $user . " !";
}
else{
    echo "Mauvais login/password";
}
