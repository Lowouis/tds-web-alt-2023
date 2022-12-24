<?php
session_start();

$_SESSION['view'] = $_POST['view'] ?? 'home';
$_SESSION['rgpd'] = $_POST['rgpd'] ?? false;

$data = yaml_parse_file("./public/data/content/data.yaml"); ?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Louis GURITA - Portfolio</title>
        <!--styles-->
        <link rel="stylesheet" type="text/css" href="public/styles/global.css">
        <link rel="stylesheet" type="text/css" href="public/styles/cursor_gradient.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <!--captcha-->
    </head>
    <body>
        <?php
        //utils
        include_once "utils/load_components.php";
        include_once "utils/menu.php";
        //vues
        include_once "vues/home.php";
        include_once "vues/propos.php";
        include_once "vues/projets.php";
        include_once "vues/experience.php";
        include_once "vues/formation.php";
        include_once "vues/contact.php";
        include_once "vues/competence.php";
        ?>
    </body>
    <!--scripts-->
    <script src="public/scripts/hue.js"></script>
    <script src="public/scripts/gradient_crs.js"></script>
    <script src="public/scripts/menu.js"></script>
    <script src="public/scripts/core.js"></script>
</html>