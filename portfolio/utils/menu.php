<span id="btn-menu" class="clickable-square material-symbols-outlined">menu</span>
<div id="menu" class="menu-container hidden">
    <?php
    $data = yaml_parse_file("./public/data/content/data.yaml");
    foreach ($data['menu'] as $key => $value): ?>
        <a id="<?php echo $value[1] ?>"  <?php echo $value[2] ? 'target="_blank" href="'.$value[2].'"':''?>><?php echo $value[0]?></a>
    <?php endforeach; ?>
</div>