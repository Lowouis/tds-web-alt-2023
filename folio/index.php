<?php
$menu = ["A propos", "Projets","Experience","Formation","Compétences","Contact"];
$logo = ["Javascript", "HTML","CSS","C","Python", "Php", "Twig","Java"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Louis'dev</title>
    <link rel="stylesheet" type="text/css" href="styles/index.css">
    <script src="https://kit.fontawesome.com/6d9cc71036.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="./data/img/icon.ico" type="image/x-icon">

</head>
<body>
<!-- nav -->
<?= include_once 'nav.php' ?>
<img id="gradient1" class="fixed-bg" src="./data/files/gradient.png">
<img id="gradient2" class="fixed-bg" src="./data/files/gradient.png">

<!-- fixed components -->
<?= include_once 'components.php' ?>


<!-- home page -->
<?= include_once 'home.php' ?>

<!-- content  -->
<?= include_once 'about.php' ?>
<?= include_once 'works.php' ?>
<?= include_once 'experience.php'?>
<?= include_once 'formation.php'?>
<?= include_once 'perks.php' ?>
<?= include_once 'contact.php' ?>


</body>
<footer>
<p>Designed & Built by Louis Gurita</p>
</footer>

<script type="text/javascript" src="scripts/vanilla-tilt.js"></script>
<script type="text/javascript" src="scripts/init.js"></script>
</html>