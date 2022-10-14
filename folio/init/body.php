<?php
$menu = ["ABOUT", "WORKS","PERKS","CONTACT"];
?>
<body>
<div id="barbara-wrap" class="wrapper">
    <div class="barbara-container">
        <div class="menu-container">
            <div class="hi">
                <p data-tilt>Hi there, i'm <u>Louis</u></p>
                <p id="desc-top">.{French developer}</p>
            </div>
            <div class="menu">
                <?php for($i=0;$i<sizeof($menu);$i++) : ?>
                <a data-tilt data-tilt-scale="1.1" href=<?= "../home/ " . strtolower($menu[$i]) . ".php"?> ><?= $menu[$i]?></a>
                <div id="<?= $menu[$i] . '-div' ?>" class="subsection">

                </div>
                <?php endfor ?>
            </div>
        </div>
    </div>
</div>
<div class="add-about">
    <img src="../data/img/pp.png" id="pp" alt="profil picture">
</div>

<div class="cursor-inner"></div>




</body>