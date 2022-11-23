<?php

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>LOUIS GURITA</title>
    <!--styles-->
    <link rel="stylesheet" type="text/css" href="public/styles/cursor_gradient.css">
    <link rel="stylesheet/less" type="text/css" href="public/styles/menu.scss">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!--captcha-->
</head>
<body>
    <!--utils-->
    <?php include_once "utils/load_components.php" ?>
    <?php include_once "utils/menu.php" ?>
    <!--vues-->
    <?php include_once "vues/home.php"?>
    <?php include_once "vues/propos.php"?>
    <?php include_once "vues/projets.php" ?>
    <?php include_once "vues/experience.php" ?>
    <?php include_once "vues/formation.php" ?>
    <?php include_once "vues/contact.php" ?>
    <?php include_once "vues/competence.php" ?>

</body>
<!--scripts-->
<script src="public/scripts/hue.js"></script>
<script src="public/scripts/cursor_gradient.js"></script>
<script src="public/scripts/menu.js"></script>
<script src="public/scripts/index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/less"></script>
</html>