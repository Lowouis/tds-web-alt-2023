<span id="btn-menu" class="clickable-square material-symbols-outlined">menu</span>
<div id="menu" class="menu-container hidden">
    <?php
    $data = yaml_parse_file("./public/data/content/data.yaml");
    foreach ($data['menu'] as $key => $value){
        echo '<a id="'.$value[1].'">'.$value[0].'</a>';
    }
?>
</div>