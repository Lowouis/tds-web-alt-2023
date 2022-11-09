<?php
session_start();


if($_SESSION['edit']){
    $_SESSION['task_list'][$_SESSION['edit-index']] = $_POST['end_editing'];
}
var_dump($_SESSION['edit']);
$_SESSION['edit'] = !$_SESSION['edit'];
header('Location: body.php');
