<?php
session_start();

$_SESSION['edit'] = !$_SESSION['edit'];

$_SESSION['edit-index'] = $_POST['edit-index'];

echo $_POST['edit-index'];


header('Location: body.php');

