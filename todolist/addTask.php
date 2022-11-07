<?php

if( isset($_POST["task"]) and  $_POST["task"] != ""){
    $json_data[] = [ date('U') => $_POST["task"]];
    var_dump($json_data);
    $json = json_encode($json_data);
    file_put_contents('data.json', $json);
}

$_POST["task"] = "";
include_once "index.php";