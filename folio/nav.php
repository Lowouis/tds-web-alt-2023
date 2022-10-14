<div class="top">
    <nav id="navbar">
        <?php for($i=0;$i<sizeof($menu);$i++) : ?>
            <a class="nava" href="#<?= strtolower($menu[$i]) ?>"><?= $menu[$i]?></a>
        <?php endfor ?>
    </nav>
    <a id="resume" href="data/files/cv.pdf"  target="_blank" class="fade btn hover">.resume{}</a>
</div>