<div class="top">
    <a id="btnnav" class="scroll-nav-btn gh-btn btn hover fade btn_on_right"><span class="material-symbols-outlined">
menu
</span></a>
    <nav id="navbar" class="nav-on-scroll">
        <?php for($i=0;$i<sizeof($menu);$i++) : ?>
            <a class="nava" href="#<?= strtolower($menu[$i]) ?>"><?= $menu[$i]?></a>
        <?php endfor ?>
    </nav>
<!--    <a id="resume" href="data/files/cv.pdf"  target="_blank" class="fade btn hover">.resume{}</a>-->
</div>