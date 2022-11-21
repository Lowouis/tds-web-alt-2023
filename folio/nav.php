<div class="top">
    <nav id="navbar" class="nav-on-scroll">
        <?php for($i=0;$i<sizeof($menu);$i++) : ?>
            <a class="nava" href="#<?= strtolower($menu[$i]) ?>"><?= $menu[$i]?></a>
        <?php endfor ?>
    </nav>
<!--    <a id="resume" href="data/files/cv.pdf"  target="_blank" class="fade btn hover">.resume{}</a>-->
</div>

<span id="btn-menu-responsive" class="clickable-square material-symbols-outlined">menu</span>
<div id="menu-responsive" class="menu-container-resp hidden">
    <?php for($i=0;$i<sizeof($menu);$i++) : ?>
        <a class="nava" href="#<?= strtolower($menu[$i]) ?>"><?= $menu[$i]?></a>
    <?php endfor ?>
</div>
