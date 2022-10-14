<?php
$menu = ["about", "works","perks","contact"];
$logo = ["Javascript", "HTML","CSS","C","Python", "Php", "Twig","Java"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Louis'dev</title>
    <link rel="stylesheet" type="text/css" href="styles/index.css">
    <script src="https://kit.fontawesome.com/6d9cc71036.js" crossorigin="anonymous"></script>

</head>
<body>
<!-- nav -->
<?= include_once 'nav.php' ?>


<!-- fixed components -->
<?= include_once 'components.php' ?>


<!-- home page -->
<?= include_once 'home.php' ?>

<!-- content  -->
<?= include_once 'about.php' ?>
<?= include_once 'works.php' ?>
<?= include_once 'perks.php' ?>
<?= include_once 'contact.php' ?>


</body>
<footer>
<p>Designed & Built by Louis Gurita</p>
</footer>

<script type="text/javascript" src="scripts/vanilla-tilt.js"></script>
<script type="text/javascript" src="scripts/init.js"></script>
</html>