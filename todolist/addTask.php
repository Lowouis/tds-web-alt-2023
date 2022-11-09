<?php

session_start();

if(isset($_SESSION['task_list']) && $_POST['add-task'] != ""){
    array_push($_SESSION['task_list'], $_POST['add-task']);

}



header('Location: body.php');

?>