<?php


function rmTask():void{
    if(isset($_POST["rm-task"])){
        $file = __DIR__ . DIRECTORY_SEPARATOR . "data" . DIRECTORY_SEPARATOR . $_POST['compteur'] . '-'.$_POST["rm-task"] . ".txt";
        unlink($file);
    }
}
rmTask();
include_once "index.php";