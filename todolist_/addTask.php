<?php

function addTask(){
    $_POST['list'][date('H:i:s')] = $_POST['task'];

}
var_dump($_POST["list"]);
$_POST['task'] = "";