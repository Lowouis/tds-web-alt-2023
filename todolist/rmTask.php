<?php

session_start();



unset($_SESSION["task_list"][intval($_POST['rm-task'])]);
var_dump($_SESSION["task_list"]);


header('Location: body.php');


?>